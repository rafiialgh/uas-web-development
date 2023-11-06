@extends('adminlte::page')

@section('title', 'Edit Customer')
@section('content_header')
<h1>Update Customer</h1>
@stop

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('customer.update',$customer->customer_id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Customer</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama"
                  value="{{ $customer->nama}}">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" id="alamat"
                  value="{{ $customer->alamat }}">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Tipe Membership</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tipe_member" id="tipe_member"
                  value="{{ $customer->tipe_member }}">
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