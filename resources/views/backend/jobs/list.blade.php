 
@extends('backend.layouts.app')


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 >Jobs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6" style="text-align: right;">
          <a href="{{url('admin/jobs/add')}}" class="btn btn-primary">Add Jobs </a>
             
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
    
 
        <div class="row">
                <section class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                         <h3 class="card-title">Search Jobs</h3>
                    </div>

                         <form method="get" action="">
                          <div class="card-body">
                            <div class="row">
                            <div class="form-group col-md-3">
                                <label>
                                Job Title
                                </label>
                                <input type="text" name="job_title" class="form-control" value="{{Request()->job_title}}" placeholder="ID">
</div>
<div class="form-group col-md-3">
                                <label>
                              Min Salary
                                </label>
                                <input type="number" name="min_salary" class="form-control" value="{{Request()->min_salary}}" placeholder="min salary">
</div>
<div class="form-group col-md-3">
                                <label>
                              Max Salary
                                </label>
                                <input type="number" name="max_salary" class="form-control" value="{{Request()->max_salary}}" placeholder="max salary">
</div>

                             

                              <div class="form-group col-md-3">
                                <button class="btn btn-primary" type="submit" style="margin-top:30px;">search</button> 
                                <a href="{{ url('admin/jobs')}}" class="btn btn-success" style="margin-top:30px;">Reset</a>
                               
                              </div>

                            </div>
                          </div>

                         </form>
                       </div>
                        
                            

                        </div>

                    </div>
    @include('message')
   <div class="card">
    <div class="card-header">
      <h3  class="card-title">Jobs list</h3>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Job Title</th> 
            <th>Min Salary</th> 
            <th>Max Salary</th> 
            <th>Created At</th>
            <th>Action</th>

          </tr>
        </thead>
        <tbody>
     
            <tr>
                  <td>1</td>
                  <td>title</td>
                  <td>200</td>
                  <td>300</td>
                  <td>100</td>
                  <td>10-12-2023 </td>
                  <td>
                  <a href="" class="btn btn-info">View</a>
                  <a href="" class="btn btn-primary">Edit</a>
                  <a href="" 
                  onclick="return confirm('Are you sure u want to delete?')" class="btn btn-danger">Delete</a> 
                   </td>
              </tr>
              <tr>
                 <td colspan="100%"> No Record Found</td>
              </tr>
         
        </tbody>
      </table>
      <div style="padding:10px; float:right;">
      </div>
    </div>
   </div>
</section>
</div>


        <!-- content -->
</div>
<!-- content-wrapper -->
</section>
@endsection



















  </div>
 