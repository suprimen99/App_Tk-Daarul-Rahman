<div class="modal fade" id="editPendaftar" tabindex="-1" role="dialog" aria-labelledby="modalEditPendaftar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title me-2" id="modalCenterTitle">Edit pendaftar</h5>
          <button type="button" class="btn-close close-edit-kategori" data-bs-dismiss="modal" aria-label="Close" ></button>
        </div>
        {{-- <div id="loading-spinner" class="d-flex justify-content-center mt-3 mb-5">
          @include('layouts.admin.loading')
        </div> --}}
        <div id="data-container">
            <form id="editform" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="id" id="id">
                <div class="card-body">
                        {{-- @csrf --}}
                        {{-- @method('PUT') --}}
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
                                <label for="nama_siswa" class="form-label" value>Nama Siswa</label>
                                <input class="form-control" type="text" name="nama_siswa" id="nama_siswa" placeholder="Masukkan Nama Siswa"/>
                                <small class="text-danger mt-2 error-message" id="nama_siswa-errors"></small>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="usia" class="form-label">Usia</label>
                                <input class="form-control" type="text" id="usia" name="usia" placeholder="Masukkan Usia" />
                                <small class="text-danger mt-2 error-message" id="usia-errors"></small>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="nama_orangtua" class="form-label">Nama Orang Tua</label>
                                <input class="form-control" type="text" id="nama_orangtua" name="nama_orangtua" placeholder="Masukkan Nama Orangtua" required />
                                <small class="text-danger mt-2 error-message" id="nama_orangtua-errors"></small>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="jeniskelamin">Jenis Kelamin</label>
                                <select id="jeniskelamin" name="jeniskelamin" class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <small class="text-danger mt-2 error-message" id="jeniskelamin-errors"></small>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="notelpon">No Telpon</label>
                                <input type="text" id="notelpon" name="notelpon" class="form-control" placeholder="Masukkan Nomer Telpon"/>
                                <small class="text-danger mt-2 error-message" id="notelpon-errors"></small>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" />
                                <small class="text-danger mt-2 error-message" id="alamat-errors"></small>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="akte" class="form-label">No Akte</label>
                                <input class="form-control" type="text" id="akte" name="akte" placeholder="Masukkan Nomer Akte"/>
                                <small class="text-danger mt-2 error-message" id="akte-errors"></small>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="nik" class="form-label">Nik</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan Nik" />
                                <small class="text-danger mt-2 error-message" id="nik-errors"></small>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="kelas">Kelas</label>
                                <select id="kelas" name="kelas" class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="Kelas A">Kelas A</option>
                                    <option value="Kelas B">Kelas B</option>
                                </select>
                                <small class="text-danger mt-2 errors-message" id="kelas-errors"></small>
                            </div>
                            {{-- <div class="mb-3 col-md-6">
                                <label for="user id" class="form-label">User Id</label>
                                <input class="form-control" type="text" id="user_id" name="user_id" placeholder="Sesuaikan user id" />
                            </div> --}}
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="status">Status</label>
                                <select id="status" name="status" class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="Lulus">LULUS</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                                <small class="text-danger mt-2 errors-message" id="status-errors"></small>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script>

$('body').on('click', '#edit-pendaftar', function () {
  const id = $(this).data('id'); // capture the ID from the data attribute 'data-id'
  console.log(id);
  // reset the form
  $('#editform')[0].reset();

  // show spinner
  $('#editPendaftar #loading-spinner').removeClass('d-none');

  $.ajax({
    url: `pendaftaran-siswa/${id}/edit `,
    method: 'GET',
    dataType: 'json',
    success: function (response) {
      console.log(response);
      if (response.status == 200) {
        let data = response.data;

        // hide spinner
        $('#editPendaftar #loading-spinner').hide();
        $('#editPendaftar #loading-spinner').addClass('d-none');

        // show data in the form
        $('#editPendaftar #data-container').show();

        $('#editPendaftar').find('input[name="id"]').val(data.id);
        $('#editPendaftar').find('input[name="nama_siswa"]').val(data.nama_siswa);
        $('#editPendaftar').find('input[name="usia"]').val(data.usia);
        $('#editPendaftar').find('input[name="nama_orangtua"]').val(data.nama_orangtua);
        $('#editPendaftar').find('select[name="jeniskelamin"]').val(data.jeniskelamin);
        $('#editPendaftar').find('input[name="notelpon"]').val(data.notelpon);
        $('#editPendaftar').find('input[name="alamat"]').val(data.alamat);
        $('#editPendaftar').find('input[name="akte"]').val(data.akte);
        $('#editPendaftar').find('input[name="nik"]').val(data.nik);
        $('#editPendaftar').find('select[name="kelas"]').val(data.kelas);
        $('#editPendaftar').find('select[name="status"]').val(data.status);
        // $('#editPendaftar').find('select[name="user_id"]').val(data.user_id);
      }
    }
  });

  $('#editPendaftar').modal('show');
});

$(document).ready(function () {
  // Update data
  $('#editform').on('submit', function (e) {
    e.preventDefault();
    const id = $('#editPendaftar').find('input[name="id"]').val();
    const foto = $('#editPendaftar').find('input[name="foto"]')[0].files[0];
    const nama_siswa = $('#editPendaftar').find('input[name="nama_siswa"]').val();
    const usia = $('#editPendaftar').find('input[name="usia"]').val();
    const nama_orangtua = $('#editPendaftar').find('input[name="nama_orangtua"]').val();
    const jeniskelamin = $('#editPendaftar').find('select[name="jeniskelamin"]').val();
    const notelpon = $('#editPendaftar').find('input[name="notelpon"]').val();
    const alamat = $('#editPendaftar').find('input[name="alamat"]').val();
    const akte = $('#editPendaftar').find('input[name="akte"]').val();
    const nik = $('#editPendaftar').find('input[name="nik"]').val();
    const kelas = $('#editPendaftar').find('select[name="kelas"]').val();
    const status = $('#editPendaftar').find('select[name="status"]').val();
    // const user_id = $('#editPendaftar').find('select[name="user_id"]').val();

    const formData = new FormData();

    formData.append('_method', 'PUT');
    if(foto !== undefined)
    {
        formData.append('foto', foto);
    }
    formData.append('nama_siswa', nama_siswa);
    formData.append('usia', usia);
    formData.append('nama_orangtua', nama_orangtua);
    formData.append('jeniskelamin', jeniskelamin);
    formData.append('notelpon', notelpon);
    formData.append('alamat', alamat);
    formData.append('akte', akte);
    formData.append('nik', nik);
    formData.append('kelas', kelas);
    formData.append('status', status);
    // formData.append('user_id', status);


    for (let data of formData.entries()) {
        console.log(data[0] + ': ' + data[1]);
      }

    $.ajax({
        url: '{{ route('pendaftaran-siswa.update', ':id') }}'.replace(':id', id),
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
    // untuk menghapus pesan error ketika mmodal tertutup
    // $(document).ready(function () {
    //   // Menambahkan event listener pada tombol close
    //   $('.close-edit-kategori').on('click', function (e) {
    //     $('.error-messages').text('');
    //   });

    //   // Menambahkan event listener pada modal
    //   $('#editPendaftar').on('hidden.bs.modal', function (e) {
    //     $('.error-messages').text('');
    //   });
    // });
  </script>
