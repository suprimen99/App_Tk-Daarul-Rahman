@extends('templates.mainadmin')
@section('title', 'Tambah galery')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Galery</h4>
<!-- Basic Bootstrap Table -->
<div class="mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#simpanModal"><i class='bx bx-layer-plus'></i>Tambah</button>
</div>
<div class="card">
    <h5 class="card-header">GALERI</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>

                <tr>
                    <th>Id</th>
                    <th>foto</th>
                    <th>Title Galery</th>
                    <th>Caption Galery</th>
                    <th>create_at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($Galery as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('storage/' . $item->foto) }}"
                        alt="foto siswa"
                        class="d-block rounded"
                        name="foto"
                        height="50px"
                        width="50px"
                        id="uploadedAvatar"
                    /></td>
                    <td>{{ $item->titlegalery }}</td>
                    <td>{{ $item->captiongalery }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('hapusgalery', $item->id ) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="bx bx-trash me-1"></i> Delete
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $Galery->links() !!}
    </div>
</div>
</div>
@include('templates.footer')
@include('sweetalert::alert')




<!-- Modal -->
<div class="modal fade" id="simpanModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Form Tambah galery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    @if (Session('status'))
                    <div class="alert alert-success">
                        {{Session('message')}}
                    </div>
                    @endif
                    <form id="formAccountSettings" action="{{ route('simpangalery') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class=" mb-5">
                            <label for="foto" class="form-label">Upload Foto</label>
                            <div class="input-group">
                                <input
                                  type="file"
                                  class="form-control"
                                  id="foto"
                                  name="foto"
                                  aria-describedby="inputGroupFileAddon04"
                                  aria-label="Upload"
                                />
                            </div>


                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="Title Galeri" class="form-label">Title Galery</label>
                                <textarea name="titlegalery" class="form-control" id="captiongalery"></textarea>
                                @error('titlegalery')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="Caption Galeri" class="form-label">Caption Galery</label>
                                <textarea name="captiongalery" class="form-control" id="captiongalery"></textarea>
                                @error('captiongalery')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
<!--/ Basic Bootstrap Table -->
@endsection
