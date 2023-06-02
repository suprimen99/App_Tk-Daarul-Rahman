@extends('templates.main2')
@section('title', 'Berhasil Mendaftar')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-sm-center mt-5 align-self-center">
            <div class="card text-center p-5">

                <div class="card-body">
                    @foreach ($logo as $item)
                    <img src="{{ asset('storage/' . $item->foto) }}"  class="img-fluid" alt="">
                    @endforeach
                  <h5 class="card-title"><b>TERIMAKASIH SUDAH MENDAFTAR</b> </h5>
                  <p class="card-text">Mohon konfirmasi ke Kontak sekolah</p>
                  <a href="/" class="btn btn-primary">Selesai Daftar</a>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
