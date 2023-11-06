@extends('adminlte::page')

@section('title', 'Edit Transaksi')
@section('content_header')
@section('plugins.TempusDominusBs4', true)
<h1>Update Transaksi</h1>
@stop

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('transaksi.update',$transaksi->transaksi_id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">No. Transaksi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="no_transaksi" id="no_transaksi"
                  value="{{ $transaksi->no_transaksi}}">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Customer</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_customer" id="nama_customer"
                  value="{{ $transaksi->nama_customer }}">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Diskon</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="diskon" id="diskon"
                  value="{{ $transaksi->diskon }}">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
              @php
              $config = ['format' => 'YYYY-MM-DD'];
              @endphp
              <x-adminlte-input-date name="tgl_transaksi" :config="$config" placeholder="Choose a date..." id="tgl_transaksi" value="{{ $transaksi->tgl_transaksi }}">
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