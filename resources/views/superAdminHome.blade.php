@extends('adminlte::page')

@section('title','Dashboard')
@section('content_header')
{{-- <h1>Dashboard</h1> --}}
@stop

@section('content')
{{-- <p>Welcome to this beautiful
  {{ Auth::user()->level }} panel</p> --}}
<div id="layoutSidenav">
  <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">

      <div class="sb-sidenav-footer">
        <div class="small"></div>
        {{-- Start Bootstrap --}}
      </div>
    </nav>
  </div>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>

        <div class="row">
          <div class="col-xl-3 col-md-6">

            <div class="card bg-primary text-white mb-4">
              <div class="card-body">Valas
                <span class="badge bg-danger">{{ $totalValas }}</span>
              </div>

              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/super-admin/valas">View Details</a>
                <div class="small text-white">
                  <i class="fas fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
              <div class="card-body">Customer
                <span class="badge bg-danger">{{ $totalCustomer }}</span>

              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/super-admin/customer">View Details</a>
                <div class="small text-white">
                  <i class="fas fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
              <div class="card-body">Membership
                <span class="badge bg-danger">{{ $totalMembership }}</span>

              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/super-admin/membership">View Details</a>
                <div class="small text-white">
                  <i class="fas fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
              <div class="card-body">Transaksi
                <span class="badge bg-danger">{{ $totalTransaksi }}</span>

              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/super-admin/transaksi">View Details</a>
                <div class="small text-white">
                  <i class="fas fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-md-6 ms-3" style="width: 60rem">
            <div class="card">
              {!! $transaksiChart->container() !!}
            </div>
          </div>
          
          <div class="col-xl-6 col-md-6 ms-3 " style="width: 60rem">
            <div class="card">
              {!! $customerChart->container() !!}
            </div>
          </div>

        </div>

      </div>
    </main>

  </div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@endsection
@section('js')
<script>
  console.log('Hi!'); 
</script>
<script src="{{ $transaksiChart->cdn() }}"></script>
<script src="{{ $customerChart->cdn() }}"></script>

{{ $transaksiChart->script() }}
{{ $customerChart->script() }}
@stop