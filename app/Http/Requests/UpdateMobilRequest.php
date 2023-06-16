<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMobilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'plat_nomor' => 'required|max:10',
                'jenis_mobil' => 'required',
                'merk' => 'required',
                'kapasitas' => 'required',
                'tahun' => 'required',
                'tarif' => 'required',
                'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
                'status_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'plat_nomor.required' => 'Plat nomor harus diisi',
            'jenis_mobil.required' => 'Jenis Mobil harus diisi',
            'merk.required' => 'Merk harus diisi',
            'kapasitas.required' => 'Kapasitas harus diisi',
            'tahun.required' => 'Tahun harus diisi',
            'tarif.required' => 'Tarif harus diisi',
            'foto.required' => 'Foto harus diisi',
            'status_id.required' => 'Status harus diisi'
        ];
    }
}
