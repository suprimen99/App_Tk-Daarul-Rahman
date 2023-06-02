@extends('templates.main2')
@section('title', 'Welcome')
@section('content')

<nav class="navbar navbar-expand-lg  bg-primary navbar-dark sticky-top">
    <div class="container">
        @foreach ($logo as $item )
        <a class="navbar-brand" href="#home"><img src="{{ asset('storage/' . $item->foto) }}" class=" img-fluid" width="50px" height="50px"></a>
        <div class="justify-content-center align-content-center text-white">
           <b><h4>Tk Da'arul Rahman</h4></b>
        </div>
        @endforeach
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#About">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Galery">Galery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-warning" href="/login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<section id="Home">
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
          @foreach ($paralax as $item )
          <div class="carousel-item active" data-bs-interval="10000">
              <img src="{{ asset('storage/' . $item->foto) }}"  class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block text-light">
                  <h5>{{ $item->titleparalax }}</h5>
                  <p>{{ $item->captionparalax }}</p>
              </div>
          </div>
      @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</section>

  {{-- <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    @foreach ($paralax as  $item)
    <div class="carousel-inner" id="Home">
        <div class="carousel-item active">
          <img src="{{ asset('storage/' . $item->foto) }}" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5>{{ $item->titleparalax }}</h5>
            <p>{{ $item->captionparalax }}</p>
          </div>
        </div>
      </div>
    @endforeach
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> --}}

  <!-- section visi misi-->
  <section id="About" class="About-section-padding bg-body-secondary p-5">
      <div class="container p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="about-header text-center pb-5" >
                    <h2>About</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($logo as $item)
            <div class="col-lg-4 col-md-12 col-12">
                <div class="About-img img-fluid" >
                    <img src="{{ asset('storage/' . $item->foto) }}" width="80%"  alt="">
                </div>
            </div>
            @endforeach
            <div class="col-lg-8 col-md-12 col-12">
                <div class="About-caption">
                    <h5><b>Visi & Misi</b></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque deserunt et ullam sit non a laboriosam nam ratione officia sequi sed, vitae quisquam unde? Dolorum illum doloremque dolores voluptatibus quos.</p>
                    <a href="{{ route('pendaftar') }}" class="btn btn-warning border-opacity-10"> Daftar</a>
                </div>
            </div>
        </div>
    </div>
  </section>


  <!-- galeri -->
  <Section class="galery p-5" id="Galery">
    <div class="container p-5">
        <div class="row" >
            <div class="col-md-12">
                <div class="section-header text-center ">
                    <h2>Galery</h2>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-content-center">

            <div class="row">
                @foreach ($galeri as $item )
                <div class=" col-lg-3 col-sm-12 m-5">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('storage/' . $item->foto) }}" class="card-img-top " width="400" height="400" alt="...">
                        <div class="card-body text-center">
                          <h4 class="card-title"><b>{{ $item->titlegalery }}</b></h5>
                          <p class="card-text">{{ $item->captiongalery }}</p>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>


    </div>
  </Section>

  <!-- kontak -->
  <section id="kontak" class="kontak bg-body-secondary">
    <div class="text-center py-3">
        <h1>Kontak</h1>
    </div>
    <div class="row p-4">
        <div class="col-lg-6 d-flex justify-content-center align-items-center pb-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.327522623177!2d106.7631909!3d-6.2418032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f0e718625e79%3A0x69d0694d4215e4d!2sJl.%20Ulujami%20Raya%20No.41%2C%20RT.11%2FRW.5%2C%20Ulujami%2C%20Kec.%20Pesanggrahan%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012250!5e0!3m2!1sen!2sid!4v1622753085769!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

        <div class="col-lg-6 col-md-6">
            <div class="card p-3  bg-light">
                <div class="card-body">
                  <h4 class="card-title"><b></b></h5>
                  <p class="card-text"></p>
                </div>
              </div>
        </div>
    </div>
</section>

<style>
    .maps {
        width: 80%;
        height: 200px;
    }
</style>



  <footer class="bg-primary text-center text-white">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>

@endsection
