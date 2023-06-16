<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MobilModel;
use App\Models\StatusModel;
use App\Http\Requests\StoreMobilRequest;
use App\Http\Requests\UpdateMobilRequest;
use PDF;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = MobilModel::with('status')->get();
        return view('mobil.mobil', ['mobil'=>$mobil]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobil.create',['status'=> StatusModel::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMobilRequest $request)
    {
        // $validateData = $request->validate([
        //     'plat_nomor' => 'required|max:10',
        //     'jenis_mobil' => 'required',
        //     'merk' => 'required',
        //     'kapasitas' => 'required',
        //     'tahun' => 'required',
        //     'tarif' => 'required',
        //     'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        //     'status_id' => 'required'
        $data=$request->all();

        $file = $request->file('foto');

        $nama_file = time().'_'.$file->getClientOriginalName();
        $tujuan_upload = 'storage';
        $file->move($tujuan_upload,$nama_file);
        $data['foto'] = $nama_file;

        //add data 
        MobilModel::create($data); 
 
        // if true, redirect to index 
        return redirect('/tables_mobil') ->with('success', 'Add data success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MobilModel $tables_mobil)
    {
        return view('mobil.detail', compact('tables_mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MobilModel $tables_mobil)
    {
        $status = StatusModel::get();
        return view('mobil.edit', compact(['status', 'tables_mobil']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMobilRequest $request, MobilModel $tables_mobil)
    {
        // $data=$request->only([
        //     'plat_nomor',
        //     'jenis_mobil',
        //     'merk',
        //     'kapasitas',
        //     'tahun',
        //     'tarif',
        //     'foto',
        //     'status_id' 
        // ]);
        $data=$request->all();
        $file = $request->file('foto');

        $nama_file = time().'_'.$file->getClientOriginalName();
        $tujuan_upload = 'storage';
        $file->move($tujuan_upload,$nama_file);
        $data['foto'] = $nama_file;
        $tables_mobil->update($data);
        return redirect()->route('tables_mobil.index')->with('success', 'data berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MobilModel $tables_mobil)
    {
        $tables_mobil->delete($tables_mobil->id);
        return redirect()->route('tables_mobil.index')->with('success', 'data berhasil dihapus!');
    }

    public function createPDF(){
        $mobil = MobilModel::all();
        $pdf = PDF::loadView('mobil.templatePDF', compact('mobil'));
        return $pdf->download('Data_Mobil.pdf');

    }
}
