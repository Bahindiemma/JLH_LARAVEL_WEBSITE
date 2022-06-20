@extends('admin.layout.app')

@section('content')

<div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">settings</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <!-- General Form Elements -->
            <form class="mt-4">
              <div class="row mb-3">
                <div class="col-sm-10">
                  <input type="email" placeholder="Site Name" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                  <input type="email" placeholder="Organization Email" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                  <input type="number" placeholder="Mobile Number" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                  <input type="number" placeholder="WhatsApp number" class="form-control">
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-sm-10">
                  <input type="text" placeholder="Location on Map" class="form-control">
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <!-- General Form Elements -->
            <form class="mt-4">
              <div class="row mb-3">
                <div class="col-sm-10">
                  <input type="email" placeholder="Facebook link" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                  <input type="email" placeholder="YouTube Channel link" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                  <input type="number" placeholder="Twitter link" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                  <input type="number" placeholder="Instagram link" class="form-control">
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>
      </div>
    </div>
    <div class="d-flex w-25 mx-auto align-center justify-content-center">
        <button class="btn btn-warning py-2 px-5 text-center mx-auto">Publish</button>
    </div>
  </section>
@endsection