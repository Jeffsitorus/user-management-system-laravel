@extends('layouts.app')

@section('title','Menu')

@section('content')
<div class="container-fluid">

  <!-- Page Heading --> 
  <div class="row">
    <div class="col-lg-8 offset-lg-2">
      <h1 class="h3 mb-0 text-gray-800">Menu</h1>
      <div class="text-right">
        <a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#createRole">Tambah</a>
      </div>
      {{-- alert --}}
      <x-alert></x-alert>

    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-lg-8 mb-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Menu</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Slug</th>
                  <th>Menu</th>
                  <th>Opsi</th>
                </tr>
              </thead>
                <tbody>
                  @foreach ($menu as $item)  
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->menu }}</td>
                    <td width="24%">
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editMenu-{{ $item->slug }}">Edit</a>
                      <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteMenu-{{ $item->slug }}">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

  {{-- include form modal --}}
  @include('menu.partials.modal')

@endsection
