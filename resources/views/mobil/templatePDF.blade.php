<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table align-items-center mb-0" id="myTable">
                  <thead class="bg-gray-100">
                    <tr>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">No</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Plat Nomor</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Jenis Mobil</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Merk</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Kapasitas</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Tahun Beli</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Tarif/hari</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Foto</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Status</th>
                      <th class="text-secondary opacity-7 ps-2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($mobil as $mobils)
                    <tr>
                    <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $mobils->id }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $mobils->plat_nomor }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $mobils->jenis_mobil }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $mobils->merk }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal">{{ $mobils->kapasitas }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal">{{ $mobils->tahun }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal">{{ $mobils->tarif }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal"><img src ="{{ public_path('storage/'.$mobils->foto) }}" alt ="" style="width: 150px;"></span>
                      </td>
                      <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-normal">{{ $mobils->status->status_mobil }}</span>
                      </td>
                      <td class="align-middle text-center">
                      </td>
                        <td class="align-middle">
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
</body>
</html>