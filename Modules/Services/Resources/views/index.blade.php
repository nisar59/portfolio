@extends('layouts.template')
@section('title')
Services 
@endsection
@section('content')
<div class="page-title-box">
  <div class="row align-items-center">
    <div class="col-md-8">
      <h6 class="page-title">Services</h6>
      <ol class="breadcrumb m-0">
        <li class="breadcrumb-item">{{Settings()->portal_name}}</li>
        <li class="breadcrumb-item">Services</li>
        <li class="breadcrumb-item active">Services</li>
      </ol>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card card-primary">
      <div class="card-header bg-white">
        <div class="row">
          <h4 class="col-md-6">Services</h4>
          <div class="col-md-6 text-end">
            <a href="{{url('services/create')}}" class="btn btn-success">+</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-sm table-hover table-bordered" id="services" style="width:100%;">
            <thead class="text-center bg-primary text-white">
              <tr>
                <th>Services Title</th>
                <th>Icone</th>
                <th>Description</th>
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
  var roles_table = $('#services').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{url('services')}}",
              buttons:[],
              columns: [
                {data: 'service_title', name: 'service_title',class:'text-center'},
                {data: 'icone', name: 'icone',class:'text-center'},
                {data: 'description', name: 'description',class:'text-center'},
                {data: 'status', name: 'status', orderable: false, searchable: false ,class:'text-center'},
                {data: 'action', name: 'action', orderable: false, searchable: false ,class:'text-center'},
            ]
          });
      });
</script>
@endsection
