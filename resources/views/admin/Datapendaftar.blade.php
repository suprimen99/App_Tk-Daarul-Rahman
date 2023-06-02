@extends('templates.mainadmin')
@section('title', 'Data Pendaftar')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Pendaftar</h4>
<!-- Basic Bootstrap Table -->
<div class="mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#simpanModal"><i class='bx bx-layer-plus'></i>Tambah</button>
</div>
@if (Session('status'))
<div class="alert alert-success">
{{Session('message')}}
</div>
@endif

<div class="card">
    <h5 class="card-header">Data Pendaftar</h5>
    <div class="nav-item d-flex align-items-center m-3">
        <i class="bx bx-search fs-4 lh-0"></i>
        <form action="{{ route('searchSiswa') }}" method="GET" class="d-flex">
            <input
                type="text"
                class="form-control border-0 shadow-none"
                placeholder="Search..."
                aria-label="Search..."
                name="search"
            />
            <button type="submit" class="btn btn-primary ms-2">Search</button>
        </form>
    </div>

    <div class="table-responsive text-nowrap">
        <table id="table" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Usia</th>
                    <th>No Akte</th>
                    <th>Nik</th>
                    <th>Jenis Kelamin</th>
                    <th>Foto</th>
                    <th>Nama Orang Tua</th>
                    <th>Nomer Telpon</th>
                    <th>Kelas</th>
                    <th>Status</th>
                    <th>create_at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($siswa as $item)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_siswa }}</td>
                    <td>{{ $item->usia }}</td>
                    <td>{{ $item->akte }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->jeniskelamin }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $item->foto) }}"
                                            alt="foto siswa"
                                            class="d-block rounded"
                                            name="foto"
                                            height="50px"
                                            width="50px"

                                        /></td>
                    <td>{{ $item->nama_orangtua }}</td>
                    <td>{{ $item->notelpon }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <div class="mb-3">
                                    <button class="dropdown-item" type="button" id="edit-pendaftar" data-id="{{$item->id}}">
                                        <i class="bx bx-edit-alt me-1"></i>
                                        Edit
                                      </button>
                                </div>
                                <a class="dropdown-item" href="{{ route('hapuspendaftar', $item->id ) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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
            {!! $siswa->links() !!}
        </div>
        @include('admin.editpendaftar')
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
                <h5 class="modal-title" id="exampleModalLabel1">Form Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="formAccountSettings" action="{{ route('simpanpendaftar') }}" method="post" enctype="multipart/form-data">
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
                                <label for="lastName" class="form-label">Nama Siswa</label>
                                <input class="form-control" type="text" name="nama_siswa" id="nama_siswa" placeholder="Masukkan Nama Siswa"  />
                                @error('nama_siswa')
                                <div class="text-danger"><span>{{ $message }}</span></div>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Usia</label>
                                <input class="form-control" type="text" id="usia" name="usia" placeholder="Masukkan Usia"  />
                                @error('usia')
                                <div class="text-danger"><span>{{ $message }}</span></div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="orangtua" class="form-label">Nama Orang Tua</label>
                                <input class="form-control" type="text" id="nama_orangtua" name="nama_orangtua" placeholder="Masukkan Nama Orangtua"  />
                                @error('nama_orangtua')
                                <div class="text-danger"><span>{{ $message }}</span></div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="jeniskelamin">Jenis Kelamin</label>
                                <select id="jeniskelamin" name="jeniskelamin" class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('jeniskelamin')
                                <div class="text-danger"><span>{{ $message }}</span></div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="notelpon">No Telpon</label>
                                <input type="text" id="notelpon" name="notelpon" class="form-control" placeholder="Masukkan Nomer Telpon"  />
                                @error('nama_siswa')
                                <div class="text-danger"><span>{{ $message }}</span></div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" />
                                @error('alamat')
                                <div class="text-danger"><span>{{ $message }}</span></div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="no_akte" class="form-label">No Akte</label>
                                <input class="form-control" type="text" id="akte" name="akte" placeholder="Masukkan Nomer Akte"  />
                                @error('akte')
                                <div class="text-danger"><span>{{ $message }}</span></div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="nik" class="form-label">Nik</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan Nik"  />
                                @error('nik')
                                 <div class="text-danger"><span>{{ $message }}</span></div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="kelas">Kelas</label>
                                <select id="kelas" name="kelas" class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="Kelas A">Kelas A</option>
                                    <option value="Kelas B">Kelas B</option>
                                </select>
                                @error('kelas')
                                <div class="text-danger"><span>{{ $message }}</span></div>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" name="status" class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="Lulus">LULUS</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                                @error('status')
                                <div class="text-danger"><span>{{ $message }}</span></div>
                                @enderror
                            </div>
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
     $.ajax({
        url: '{{ route('simpanpendaftar.insert', ':id') }}'.replace(':id', id),
      type: 'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: formData,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function (response) {
        console.log(response);
        if (response.status == 400) {
          let errors = response.errors;
          for (let key in errors) {
            let errorMessage = errors[key].join(', ');
            $('#' + key + '-errors').text(errorMessage);
          }
        } else if (response.status == 200) {
          Swal.fire({
            customClass: {
              container: 'my-swal',
            },
            title: 'Updated!',
            text: `${response.message}`,
            icon: 'success'
          });

          // Close the edit modal and reset the form
          $('#editPendaftar').modal('hide');
          $('#editform')[0].reset();

          // Reload the page
          setTimeout(function () {
            location.reload();
          }, 600);
        }
      },
    });
  });
});
</script> --}}
