@extends('adminlte::page')

@section('title', 'New Membership')
@section('content_header')
<h1>Create a New Membership</h1>
@stop

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('membership.store') }}" method="post">
            @csrf

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Membership</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Diskon</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="diskon" id="diskon">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Minimum Profit</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="minimum_profit" id="minimum_profit">
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