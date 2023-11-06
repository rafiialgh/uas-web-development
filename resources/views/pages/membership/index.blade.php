@extends('adminlte::page')

@section('title','Membership List')
@section('content_header')
<h1>Membership List</h1>
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
            <a href="{{ route('membership.create')}}" class="btn btn-success">
              <i class="fas fa-plus"></i>
              Create</a>

          </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Membership</th>
                <th scope="col">Diskon</th>
                <th scope="col">Minimum Profit </th>
                <th scope="col" width="350px">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($membership as $m)
              <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->diskon }}</td>
                <td>{{ $m->minimum_profit }}</td>
                <td>
                  <div class="d-flex justify-content-around">
                    <a href="{{ route('membership.edit',$m->membership_id)}}" class="btn btn-primary">
                      <i class="fas fa-edit"></i>
                      Edit</a>
                    <form action="{{ route('membership.destroy',$m->membership_id)}}" method="POST">
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

          {{ $membership->links()}}
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