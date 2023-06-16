@extends('layout.main')

@section('judul')
Tables
@endsection

@section('title')
Table Member
@endsection

@section('highlight4')
active
@endsection

@section('navbar')
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card border shadow-xs mb-4">
            <div class="card-header border-bottom pb-0">
              <div class="d-sm-flex align-items-center">
                <div>
                  <h6 class="font-weight-semibold text-lg mb-0">Members list</h6>
                  <p class="text-sm">See information about all members</p>
                </div>
                <div class="ms-auto d-flex">
                  <button type="button" class="btn btn-sm btn-white me-2">
                    View all
                  </button>
                  <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                    <span class="btn-inner--icon">
                      <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                        <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z" />
                      </svg>
                    </span>
                    <span>
                      <a href="/tables_member/create" class="btn-inner--text">Add member></a>
                    </span>
                  </button>
                  {{-- tombol Ekspor PDF --}}
                  <form action="{{route('create-pdf1')}}"class="d-inline">
                    <button class="btn btn-success btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-download"></i>
                      </span>
                      <span class="text">Ekspor Data (PDF)</span>
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <div class="card-body px-0 py-0">
              <div class="border-bottom py-3 px-3 d-sm-flex align-items-center">
                <div class="input-group w-sm-25 ms-auto">
                  <span class="input-group-text text-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                    </svg>
                  </span>
                  <input type="text" class="form-control" placeholder="Search">
                </div>
              </div>
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead class="bg-gray-100">
                    <tr>
                     <th class="text-secondary text-xs font-weight-semibold opacity-7">Id Member</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Nama Member</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Alamat</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">No Telepon</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Tanggal Lahir</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($members as $s)
                    <tr>
                    <td class="align-middle text-center text-sm">
                    <div class="d-flex px-4 py-1">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $s->id_member }}</p>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex align-items-center">
                            <img src="../assets/img/profil.png" class="avatar avatar-sm rounded-circle me-2" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center ms-1">
                            <h6 class="mb-0 text-sm font-weight-semibold">{{ $s->nama_member }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                      <div class="d-flex align-items-center">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $s->alamat }}</p>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-sm text-dark font-weight-semibold mb-0">{{ $s->no_telepon }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-dark text-sm font-weight-normal">{{ $s->tgl_lahir }}</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Edit user">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                      </svg>
                        </a>
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Edit produk">
                          <svg width="14" height="14" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z" fill="#64748B" />
                          </svg>
                        </a>
                        @csrf
                        @method('DELETE')
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Hapus produk">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                      </svg>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="border-top py-3 px-3 d-flex align-items-center">
                <button class="btn btn-sm btn-white d-sm-block d-none mb-0">Previous</button>
                <nav aria-label="..." class="ms-auto">
                  <ul class="pagination pagination-light mb-0">
                    <li class="page-item active" aria-current="page">
                      <span class="page-link font-weight-bold">1</span>
                    </li>
                  </ul>
                </nav>
                <button class="btn btn-sm btn-white d-sm-block d-none mb-0 ms-auto">Next</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection