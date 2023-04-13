@extends('layouts.template')
@section('title')
Portfolio 
@endsection
@section('content')
<div class="page-title-box">
  <div class="row align-items-center">
    <div class="col-md-8">
      <h6 class="page-title">Portfolio</h6>
      <ol class="breadcrumb m-0">
        <li class="breadcrumb-item">{{Settings()->portal_name}}</li>
        <li class="breadcrumb-item">Portfolio</li>
        <li class="breadcrumb-item active">Portfolio</li>
      </ol>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card card-primary">
      <div class="card-header bg-white">
        <div class="row">
          <h4 class="col-md-6">Portfolio</h4>
          <div class="col-md-6 text-end">
            <a href="{{url('portfolio/create')}}" class="btn btn-success">+</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-sm table-hover table-bordered" id="portfoli" style="width:100%;">
            <thead class="text-center bg-primary text-white">
              <tr>
                <th>Categories</th>
                <th>Title</th>
                <th>Client Name</th>
                <th>Project Date</th>
                <th>Project URL/GitHub URL</th>
                <th>Description</th>
<!--                 <th>Images</th>
 -->                <th>Status</th>
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
  var roles_table = $('#portfoli').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{url('portfolio')}}",
              buttons:[],
              columns: [
                {data: 'category', name: 'category',class:'text-center'},
                {data: 'title', name: 'title',class:'text-center'},
                {data: 'client_name', name: 'client_name',class:'text-center'},
                {data: 'project_date', name: 'project_date',class:'text-center'},
                {data: 'project_url', name: 'project_url',class:'text-center'},
                {data: 'description', name: 'description',class:'text-center'},
                {data: 'status', name: 'status', orderable: false, searchable: false ,class:'text-center'},
                {data: 'action', name: 'action', orderable: false, searchable: false ,class:'text-center'},
            ]
          });
      });
</script>
@endsection
