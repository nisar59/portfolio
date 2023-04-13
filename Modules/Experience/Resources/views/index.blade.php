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
<div class="row">
  <div class="col-12">
    <div class="card card-primary">
      <div class="card-header bg-white">
        <div class="row">
          <h4 class="col-md-6">Experience</h4>
          <div class="col-md-6 text-end">
            <a href="{{url('experience/create')}}" class="btn btn-success">+</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-sm table-hover table-bordered" id="experience" style="width:100%;">
            <thead class="text-center bg-primary text-white">
              <tr>
                <th>Position Title</th>
                <th>Start Month Year</th>
                <th>Organization Name</th>
                <th>Description</th>
                <th>End Month Year</th>
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
  var roles_table = $('#experience').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{url('experience')}}",
              buttons:[],
              columns: [
                {data: 'position_title', name: 'position_title',class:'text-center'},
                {data: 'start_month_year', name: 'start_month_year',class:'text-center'},
                {data: 'organization_name', name: 'organization_name',class:'text-center'},
                {data: 'end_month_year', name: 'end_month_year',class:'text-center'},
                {data: 'description', name: 'description',class:'text-center'},
                {data: 'status', name: 'status', orderable: false, searchable: false ,class:'text-center'},
                {data: 'action', name: 'action', orderable: false, searchable: false ,class:'text-center'},
            ]
          });
      });
</script>
@endsection
