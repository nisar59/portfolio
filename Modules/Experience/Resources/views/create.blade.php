@extends('layouts.template')
@section('title')
Experience
@endsection
@section('content')
<div class="page-title-box">
  <div class="row align-items-center">
    <div class="col-md-8">
      <h6 class="page-title">Experience</h6>
      <ol class="breadcrumb m-0">
        <li class="breadcrumb-item">{{Settings()->portal_name}}</li>
        <li class="breadcrumb-item">Experience</li>
        <li class="breadcrumb-item active">Experience</li>
      </ol>
    </div>
  </div>
</div>
<form action="{{url('experience/store')}}" method="post">
  @csrf
  <div class="row">
    <div class="col-12 col-md-12">
      <div class="card card-primary">
        <div class="card-header bg-white">
          <h4>Experience</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Position Title</label>
                <input type="" class="form-control" name="position_title" placeholder="Enter Degree Title">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Start Month Year</label>
                <input type="month" min="1900" name="start_month_year" class="form-control" max="2099" step="1" value="2016" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Organization  Name</label>
                <input type="" class="form-control" name="organization_name" placeholder="Enter University Name/Institut Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>End Month Year</label>
                <input type="month" min="0" class="form-control" name="end_month_year" placeholder="Enter Total Marks/CGPA">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group ">
                <label>Description</label>
                <textarea class="form-control editor" name="description"></textarea>
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