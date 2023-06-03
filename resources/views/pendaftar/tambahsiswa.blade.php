@extends('templates.main2')
@section('title', 'Lengkapi Data Pendaftar')
@section('content')

            {{-- <div class="modal-body"> --}}
                {{-- <div class="card-body">
                    <form id="formAccountSettings" action="{{ route('/simpan') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-5">
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
                                <label for="lastName" class="form-label">Nama Siswa</label>
                                <input class="form-control" type="text" name="nama_siswa" id="nama_siswa" placeholder="Masukkan Nama Siswa" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Usia</label>
                                <input class="form-control" type="text" id="usia" name="usia" placeholder="Masukkan Usia" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="orangtua" class="form-label">Nama Orang Tua</label>
                                <input class="form-control" type="text" id="nama_orangtua" name="nama_orangtua" placeholder="Masukkan Nama Orangtua" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="jeniskelamin">Jenis Kelamin</label>
                                <select id="jeniskelamin" name="jeniskelamin" class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="notelpon">No Telpon</label>
                                <input type="text" id="notelpon" name="notelpon" class="form-control" placeholder="Masukkan Nomer Telpon" required />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="no_akte" class="form-label">No Akte</label>
                                <input class="form-control" type="text" id="akte" name="akte" placeholder="Masukkan Nomer Akte" required />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="nik" class="form-label">Nik</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan Nik" required />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="kelas">Kelas</label>
                                <select id="kelas" name="kelas" class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="Kelas A">Kelas A</option>
                                    <option value="Kelas B">Kelas B</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" name="status" class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="Lulus">LULUS</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div> --}}
<div class="row m-5 d-flex justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-title">
                <div class="text-center mt-5">
                    <h1>Lengkapi data Pendaftar</h1>
                </div>
                <div class="card-body">
                        <form id="formAccountSettings"action="{{ route('/simpan') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-5">
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
                                    <label for="lastName" class="form-label">Nama Siswa</label>
                                    <input class="form-control" type="text" name="nama_siswa" id="nama_siswa" placeholder="Masukkan Nama Siswa" />
                                    @if ($errors->has('nama_siswa'))
                                    <span class="error">{{ $errors->first('nama_siswa') }}</span>
                                    @endif
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Usia</label>
                                    <input class="form-control" type="text" id="usia" name="usia" placeholder="Masukkan Usia" />
                                    @if ($errors->has('usia'))
                                    <span class="error">{{ $errors->first('usia') }}</span>
                                @endif
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="orangtua" class="form-label">Nama Orang Tua</label>
                                    <input class="form-control" type="text" id="nama_orangtua" name="nama_orangtua" placeholder="Masukkan Nama Orangtua" />
                                    @if ($errors->has('nama_orangtua'))
                                    <span class="error">{{ $errors->first('nama_orangtua') }}</span>
                                @endif
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="jeniskelamin">Jenis Kelamin</label>
                                    <select id="jeniskelamin" name="jeniskelamin" class="select2 form-select">
                                        <option value="">Select</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                        @if ($errors->has('jeniskelamin'))
                                        <span class="error">{{ $errors->first('jeniskelamin') }}</span>
                                        @endif
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="notelpon">No Telpon</label>
                                    <input type="text" id="notelpon" name="notelpon" class="form-control" placeholder="Masukkan Nomer Telpon" />
                                    @if ($errors->has('notelpon'))
                                    <span class="error">{{ $errors->first('notelpon') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" />
                                    @if ($errors->has('alamat'))
                                    <span class="error">{{ $errors->first('alamat') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="no_akte" class="form-label">No Akte</label>
                                    <input class="form-control" type="text" id="akte" name="akte" placeholder="Masukkan Nomer Akte" />
                                    @if ($errors->has('akte'))
                                    <span class="error">{{ $errors->first('akte') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="nik" class="form-label">Nik</label>
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan Nik" />
                                    @if ($errors->has('nik'))
                                    <span class="error">{{ $errors->first('nik') }}</span>
                                    @endif
                                </div>

                                <div class="modal-footer">
                                    <div class="m-2">
                                        <a href="/" class="btn btn-danger">Close</a>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                    </form>
            </div>
            </div>
        </div>
</div>
@endsection

