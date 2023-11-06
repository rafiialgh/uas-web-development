@extends('adminlte::page')

@section('title', 'Edit Valas')
@section('content_header')
@section('plugins.TempusDominusBs4', true)
<h1>Update Valas</h1>
@stop

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('valas.update',$valas->valas_id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Valas</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_valas" id="nama_valas"
                  value="{{ $valas->nama_valas}}">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nilai Jual</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="nilai_jual" id="nilai_jual"
                  value="{{ $valas->nilai_jual }}">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Nilai Beli</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="nilai_beli" id="nilai_beli"
                  value="{{ $valas->nilai_beli }}">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Rate</label>
              @php
              $config = ['format' => 'YYYY-MM-DD'];
              @endphp
              <x-adminlte-input-date name="tanggal_rate" :config="$config" placeholder="Choose a date..." id="tanggal_rate" value="{{ $valas->tanggal_rate }}">
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