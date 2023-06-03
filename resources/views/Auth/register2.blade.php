@extends('templates.mainadmin')
@section('title', 'Register')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> User</h4>
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#simpanModal">
            <i class='bx bx-layer-plus'></i> Tambah
        </button>
    </div>
    {{-- @if (Session('status'))
    <div class="alert alert-success">
        {{ Session('message') }}
    </div>
    @endif --}}
    <div class="card">
        <h5 class="card-header">Data User</h5>
        <div class="nav-item d-flex align-items-center m-3">
            <i class="bx bx-search fs-4 lh-0"></i>
            <form action="{{ route('searchUser') }}" method="GET" class="d-flex">
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..."
                    name="search" />
                <button type="submit" class="btn btn-primary ms-2">Search</button>
            </form>
        </div>
        <div class="table-responsive text-nowrap">
            <table id="table" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($user as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->username }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('hapusauth', $item->id ) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="bx bx-trash me-1"></i> Delete
                                    </a>

                                </div>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="m-4">
                {!! $user->links() !!}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="simpanModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Form Data User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="formAccountSettings" action="{{ route('registrasi') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="lastName" class="form-label">Username</label>
                                <input class="form-control" type="text" name="username" id="usename"
                                    placeholder="Masukkan Nama Siswa" />
                                @error('username')
                                <div class="text-danger"><span>{{ $message }}</span></div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="lastName" class="form-label">Password</label>
                                <input class="form-control" type="password" name="password" id="password"
                                    placeholder="Masukkan Password" />
                                @error('password')
                                <div class="text-danger"><span>{{ $message }}</span></div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close
                            </button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('templates.footer')
@include('sweetalert::alert')
@endsection
