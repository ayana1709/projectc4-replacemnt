@extends('backend.layouts.app')


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> View Employees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">View</a></li>
              <li class="breadcrumb-item active">Employees </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            view Employees
                        </h3>
                    </div>
                        <form class="form-horizontal" method="post"  enctype="multipart/form-data">

                           
                            <div class="card-body"> 
                            <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
  ID<span style="color: red;">*</span>
                                    </label>
                                    <div class="col-sm-10">{{$getRecord->id}}
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
  First Name<span style="color: red;"></span>
                                    </label>
                                    <div class="col-sm-10">{{$getRecord->name}}
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
  Last Name<span style="color: red;"></span>
                                    </label>
                                    <div class="col-sm-10">{{$getRecord->last_name}}
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
  Email ID<span style="color: red;"></span>
                                    </label>
                                    <div class="col-sm-10">{{$getRecord->email}}
                                        
                                    </div>
                                </div>

                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
  Phone Number<span style="color: red;"></span>
                                    </label>
                                    <div class="col-sm-10">{{$getRecord->Phone_number}}
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
  Hire Date<span style="color: red;"></span>
                                    </label>
                                    <div class="col-sm-10">{{$getRecord->hire_date}}
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
  Job ID<span style="color: red;"></span>
                                    </label>
                                    <div class="col-sm-10">{{ !empty($getRecord->get_job_single->job_title)? $getRecord->get_job_single->job_title : ' '}}
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
  Salary<span style="color: red;"></span>
                                    </label>
                                    <div class="col-sm-10">{{$getRecord->salary}}
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
  Commission Pct<span style="color: red;"></span>
                                    </label>
                                    <div class="col-sm-10">{{$getRecord->comssion_pct}}
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
  Manager ID<span style="color: red;"></span>
                                    </label>
                                    <div class="col-sm-10">{{$getRecord->manager_id}}
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
  Department Id<span style="color: red;"></span>
                                    </label>
                                    <div class="col-sm-10">{{$getRecord->departmnet_id}}
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
  IS Role<span style="color: red;"></span>
                                    </label>
                                    <div class="col-sm-10">{{!empty($getRecord->is_role)? 'HR': 'Employees'}}
                                         
                                    </div>
                                </div>
                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
  Created At<span style="color: red;"></span>
                                    </label>
                                    <div class="col-sm-10">{{date('d-m-Y H:i A', strtotime($getRecord->created_at)) }}
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
 Updated_At<span style="color: red;"></span>
                                    </label>
                                    <div class="col-sm-10">{{$getRecord->updated_at}}
                                        
                                    </div>
                                </div>


                                 <div class="card-footer">
  <a href="{{url('admin/employees')}}" class="btn btn-default ">Back</a>
     
        
    
    
  </div>

 

                            </div>

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>






  </div>

  @endsection