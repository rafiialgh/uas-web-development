@extends('adminlte::page')

@section('title', 'New Detail Transaksi')
@section('content_header')
<h1>Create a New Detail Transaksi</h1>
@stop

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('detailTransaksi.store') }}" method="post">
            @csrf

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Transaksi Id</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="transaksi_id" id="transaksi_id">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Valas</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_valas" id="nama_valas">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Rate</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="rate" id="rate">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Qty</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="qty" id="qty">
              </div>
            </div>

            <div class="col-md-12 text-right">
              <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i>
                Save</button>

            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>
@stop