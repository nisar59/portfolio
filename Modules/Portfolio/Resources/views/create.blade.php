@extends('layouts.template')
@section('title')
Portfolio
@endsection
@section('content')
<div class="page-title-box">
  <div class="row align-items-center">
    <div class="col-md-8">
      <h6 class="page-title">Portfolio </h6>
      <ol class="breadcrumb m-0">
        <li class="breadcrumb-item">{{Settings()->portal_name}}</li>
        <li class="breadcrumb-item">Portfolio </li>
        <li class="breadcrumb-item active">Portfolio </li>
      </ol>
    </div>
  </div>
</div>
<form action="{{url('portfolio/store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-12 col-md-12">
      <div class="card card-primary">
        <div class="card-header bg-white">
          <h4>Portfolio </h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Category</label>
                <input type="" class="form-control" name="category" placeholder="Enter Category">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Title</label>
                <input type="" name="title" class="form-control" placeholder="Enter Title">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Client Name</label>
                <input type="" class="form-control" name="client_name" placeholder="Enter Client Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Project Date</label>
                <input type="date" class="form-control" name="project_date" placeholder="Enter Project Date">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Project URL/GitHub URL</label>
                <input type="url" class="form-control" name="project_url" placeholder="Enter Project URL/GitHub URL">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group ">
                <label>Description</label>
                <textarea class="form-control" name="description" placeholder="Enter Description"></textarea>
              </div>
            </div>
            <div class="col-md-12 text-end mt-1">
              <button class="btn btn-success" type="button" id="add-img-ele">+</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
               <div id="img-container">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="">Image</label>
                  <input type="file" name="image[]" class="form-control">
                </div>
              </div>
            </div>
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
@section('js')
<script type="text/javascript">
$(document).ready(function () {
  $(document).on('click', '#add-img-ele', function(){
    var img_ele_html=`            
            <div class="row img-ele">
              <div class="col-11">
                <div class="form-group">
                  <label for="">Image</label>
                  <input type="file" name="image[]" class="form-control">
                </div>
              </div>
              <div class="col-1 mt-4 text-end">
                <div class="form-group">
                  <button class="btn btn-danger remove-img-ele" type="button">x</button>
                </div>
              </div>
            </div>`;
    $("#img-container").append(img_ele_html);

  });

  $(document).on('click', '.remove-img-ele', function(){
    $(this).parent().parent().parent().remove();
  });

});
</script>
@endsection