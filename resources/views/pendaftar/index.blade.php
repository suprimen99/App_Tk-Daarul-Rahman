@extends('templates.mainpendaftar')
@section('title', 'Dahsboard')
@section('content')
     <!-- Content wrapper -->
     <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Welcome {{ Auth::user()->username }}🎉</h5>
                                <div class="row">
                                    {{-- <img src="{{ asset($siswa->foto) }}" alt="">
                                    <p>{{ $siswa->nama_siswa }}</p>
                                    <p>{{ $siswa->nik }}</p>
                                    <p>{{ $siswa->akte }}</p>
                                    <p>{{ $siswa->alamat }}</p> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>
      <!-- Content wrapper -->

      @include('templates.footer')
@endsection
