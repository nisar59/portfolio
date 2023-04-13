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
<div class="row">
  <div class="col-12">
    <div class="card card-primary">
      <div class="card-header bg-white">
        <div class="row">
          <h4 class="col-md-6">Education</h4>
          <div class="col-md-6 text-end">
            <a href="{{url('education/create')}}" class="btn btn-success">+</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-sm table-hover table-bordered" id="education" style="width:100%;">
            <thead class="text-center bg-primary text-white">
              <tr>
                <th>Degree Title</th>
                <th>Passing Year</th>
                <th>University Name/Institut Name</th>
                <th>Total Marks/CGPA</th>
                <th>Obtained Marks/CGPA</th>
                <th>Description</th>
                <th>Start Year</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    //Roles table
    $(document).ready( function(){
  var roles_table = $('#education').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{url('education')}}",
              buttons:[],
              columns: [
                {data: 'degree_title', name: 'degree_title',class:'text-center'},
                {data: 'start_year', name: 'start_year',class:'text-center'},
                {data: 'passing_year', name: 'passing_year',class:'text-center'},
                {data: 'uni_name', name: 'uni_name',class:'text-center'},
                {data: 'obtain_mark', name: 'obtain_mark',class:'text-center'},
                {data: 'total_marks', name: 'total_marks',class:'text-center'},
                {data: 'description', name: 'description',class:'text-center'},
                {data: 'status', name: 'status', orderable: false, searchable: false ,class:'text-center'},
                {data: 'action', name: 'action', orderable: false, searchable: false ,class:'text-center'},
            ]
          });
      });
</script>
@endsection
