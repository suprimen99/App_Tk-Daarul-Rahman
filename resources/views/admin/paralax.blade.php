@extends('templates.mainadmin')
@section('title', 'Tambah Paralax')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Paralax</h4>
<!-- Basic Bootstrap Table -->
<div class="mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#simpanModal"><i class='bx bx-layer-plus'></i>Tambah</button>
</div>
<div class="card">
    <h5 class="card-header">PARALAX</h5>
    @if (Session('status'))
    <div class="alert alert-success">
        {{Session('message')}}
    </div>
    @endif
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Foto</th>
                    <th>Title Paralax</th>
                    <th>Caption Paralax</th>
                    <th>create_at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($paralax as $item)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('storage/' . $item->foto) }}"
                        alt="foto siswa"
                        class="d-block rounded"
                        name="foto"
                        height="50px"
                        width="50px"
                        id=""
                        /></td>
                        <td>{{ $item->titleparalax }}</td>
                        <td>{{ $item->captionparalax }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('hapusparalax', $item->id ) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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
                {!! $paralax->links() !!}
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')

@include('templates.footer')


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
                    <form id="formAccountSettings" action="{{ route('simpanparalax') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card mb-4">
                            <!-- Account -->
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img
                                    src=""
                                    alt="paralax"
                                    class="d-block rounded"
                                    height="100"
                                    width="100"
                                    id="uploadedAvatar"
                                />
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input
                                            type="file"
                                            id="upload"
                                            name="foto"
                                            class="account-file-input"
                                            hidden
                                            accept="image/png, image/jpeg"
                                            onchange="previewImage(this)"
                                        />
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="Title Galeri" class="form-label">Title Paralax</label>
                                <textarea name="titleparalax" class="form-control" id="titleparalax"></textarea>
                                @error('titleparalax')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="Caption Galeri" class="form-label">Caption Paralax</label>
                                <textarea name="captionparalax" class="form-control" id="captionparalax"></textarea>
                                @error('captionparalax')
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
</div>

<script>
function previewImage(input) {
    var avatar = document.getElementById('uploadedAvatar');

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            avatar.src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>

{{-- <script>
        function previewImage(input) {
            var avatar = document.getElementById('uploadedAvatar');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    avatar.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

    </script> --}}

<!--/ Basic Bootstrap Table -->
@endsection
