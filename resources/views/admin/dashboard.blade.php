@extends('templates.mainadmin')
@section('title', 'Dahsboard')
@section('content')
     <!-- Content wrapper -->
     <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                  <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img src="{{ asset('template/assets/img/icons/unicons/working.png') }}" alt="Credit Card" class="rounded" />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Jumlah User</span>
                          <h3 class="card-title mb-2">{{ $user }}</h3>
                        </div>
                      </div>
                  </div>
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="{{ asset('template/assets/img/icons/unicons/students.png') }}" alt="Credit Card" class="rounded" />
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Jumlah Siswa</span>
                        <h3 class="card-title mb-2">{{ $siswa }}</h3>
                      </div>
                    </div>
                  </div>
                  </div>
              </div>
          <div class="row">
            <div class="col-lg-8 mb-4 order-0">
              <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="card-body">
                              <h5 class="card-title text-primary">Selamat Datang {{ Auth::user()->username }} 🎉</h5>
                              <p class="mb-1">
                               <span class="fw-bold"> Semoga Harimu Menyenangkan!!!</span>
                              </p>

                            </div>
                          </div>
                          <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                              <img
                                src="{{ asset('template/assets/img/illustrations/man-with-laptop-light.png') }}"
                                height="140"
                                alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                              />
                            </div>
                          </div>
                    </div>

                </div>
              </div>
            </div>


          </div>
        </div>
        <!-- / Content -->
      </div>
      <!-- Content wrapper -->

      @include('templates.footer')
@endsection
