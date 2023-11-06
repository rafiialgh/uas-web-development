@extends('adminlte::page')

@section('title', 'New Transaksi')
@section('content_header')
@section('plugins.TempusDominusBs4', true)
<h1>Create a New Transaksi</h1>
@stop

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('transaksi.store') }}" method="post">
            @csrf

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">No. Transaksi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="no_transaksi" id="no_transaksi">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Customer</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_customer" id="nama_customer">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Diskon</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="diskon" id="diskon">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
              @php
              $config = ['format' => 'YYYY-MM-DD'];
              @endphp
              <x-adminlte-input-date name="tgl_transaksi" :config="$config" placeholder="Choose a date..." id="tgl_transaksi">
                <x-slot name="appendSlot">
                  <div class="input-group-text bg-gradient-danger">
                    <i class="fas fa-calendar-alt"></i>
                  </div>
                </x-slot>
              </x-adminlte-input-date>
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