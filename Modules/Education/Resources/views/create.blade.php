@extends('layouts.template')
@section('title')
Education
@endsection
@section('content')
<div class="page-title-box">
  <div class="row align-items-center">
    <div class="col-md-8">
      <h6 class="page-title">Education</h6>
      <ol class="breadcrumb m-0">
        <li class="breadcrumb-item">{{Settings()->portal_name}}</li>
        <li class="breadcrumb-item">Education</li>
        <li class="breadcrumb-item active">Education</li>
      </ol>
    </div>
  </div>
</div>
<form action="{{url('education/store')}}" method="post">
  @csrf
  <div class="row">
    <div class="col-12 col-md-12">
      <div class="card card-primary">
        <div class="card-header bg-white">
          <h4>Education</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Degree Title</label>
                <input type="" class="form-control" name="degree_title" placeholder="Enter Degree Title">
              </div>
            </div>
           <div class="col-md-6">
              <div class="form-group">
                <label>Start Year</label>
                <input type="number" min="1900" max="2099" name="start_year"  class="form-control" step="1" value="2000" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Passing Year</label>
                <input type="number" min="1900" name="passing_year" class="form-control" max="2099" step="1" value="2016" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>University Name/Institut Name</label>
                <input type="" class="form-control" name="uni_name" placeholder="Enter University Name/Institut Name">
              </div>
            </div>
              
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Obtained Marks/CGPA</label>
                <input type="number" class="form-control" name="obtain_mark" placeholder="Enter Obtained Marks/CGPA">
              </div>
            </div>
           <div class="col-md-6">
              <div class="form-group">
                <label>Total Marks/CGPA</label>
                <input type="number" min="0" class="form-control" name="total_marks" placeholder="Enter Total Marks/CGPA">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group ">
            <label>Description</label>
            <textarea class="form-control " name="description"></textarea>
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