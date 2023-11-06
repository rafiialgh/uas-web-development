@extends('adminlte::page')

@section('title','Transaksi List')
@section('content_header')
<h1>Transaksi List</h1>
@stop

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <div class="card-body">
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
            <strong>{{ session('success') }}</strong>

          </div>
          @endif

          @if(session('error'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('error')}} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <div class="float-right">
            <a href="{{ route('transaksi.create')}}" class="btn btn-success">
              <i class="fas fa-plus"></i>
              Create</a>

          </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">No. Transaksi</th>
                <th scope="col">Nama Customer</th>
                <th scope="col">Tanggal Transaksi</th>
                <th scope="col">Diskon</th>
                <th scope="col" width="350px">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($transaksi as $t)
              <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $t->no_transaksi }}</td>
                <td>{{ $t->nama_customer }}</td>
                <td>{{ $t->tgl_transaksi }}</td>
                <td>{{ $t->diskon }}</td>
                <td>
                  <div class="d-flex justify-content-around">
                    <a href="{{ route('transaksi.edit',$t->transaksi_id)}}" class="btn btn-primary">
                      <i class="fas fa-edit"></i>
                      Edit</a>
                    <form action="{{ route('transaksi.destroy',$t->transaksi_id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                        Delete</button>
                    </form>
                  </div>

                </td>
              </tr>
              @endforeach


            </tbody>
          </table>

          {{ $transaksi->links()}}
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('js')
<script>
  //fungsi dibawah untuk menghilangkan alert dengan efek fadeout   
        $("#success-alert").fadeTo(2000, 500).fadeOut(500, function(){
        $("#success-alert").fadeOut(500);
        });
</script>
@stop