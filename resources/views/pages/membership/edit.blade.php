@extends('adminlte::page')

@section('title', 'Edit Membership')
@section('content_header')
<h1>Update Membership</h1>
@stop

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('membership.update',$membership->membership_id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Membership</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama"
                  value="{{ $membership->nama}}">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Diskon</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="diskon" id="diskon"
                  value="{{ $membership->diskon }}%">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Minimum Profit</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="minimum_profit" id="minimum_profit"
                  value="{{ $membership->minimum_profit }}">
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