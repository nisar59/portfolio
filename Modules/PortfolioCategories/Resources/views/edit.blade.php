@extends('layouts.template')
@section('title')
Portfolio Categories
@endsection
@section('content')
<div class="page-title-box">
  <div class="row align-items-center">
    <div class="col-md-8">
      <h6 class="page-title">Portfolio Categories</h6>
      <ol class="breadcrumb m-0">
        <li class="breadcrumb-item">{{Settings()->portal_name}}</li>
        <li class="breadcrumb-item">Portfolio Categories</li>
        <li class="breadcrumb-item active">Portfolio Categories</li>
      </ol>
    </div>
  </div>
</div>
<form action="{{url('portfolio-categories/update/'.$port->id)}}" method="post">
  @csrf
  <div class="row">
    <div class="col-12 col-md-12">
      <div class="card card-primary">
        <div class="card-header bg-white">
          <h4>Portfolio Categories</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Name</label>
                <input type="" class="form-control" name="name" value="{{$port->name}}" placeholder="Enter Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Icone</label>
                <input type="" name="icone" class="form-control" value="{{$port->icone}}" placeholder="Enter Icone">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group ">
                <label>Description</label>
                <textarea class="form-control" name="description">{{$port->description}}</textarea>
              </div>
            </div>
          </div>
          
        </div>
        <div class="card-footer text-end">
          <button class="btn btn-primary mr-1" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection