
@extends('backend.layouts.app')


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Employees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Edit</a></li>
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
                             Edit Employees
                        </h3>
                    </div>
                        <form class="form-horizontal" method="post" action="{{url('admin/employees/edit/'.$getRecord->id )}}" enctype="multipart/form-data">

                     {{csrf_field()}}       
                            <div class="card-body">
                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
    First Name <span style="color: red;">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $getRecord->name}}" name="name" class="form-control" required placeholder="enter first Name">
                                    </div>
                                </div>



                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
    Last Name <span style="color: red;"> </span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="last_name" value="{{ $getRecord->last_name}}" class="form-control"  placeholder="enter last Name">
                                    </div>
                                </div>

                                

                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
    Email <span style="color: red;"> *</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="email" value="{{ $getRecord->email}}" name="email" class="form-control" required placeholder="enter email ">
        <span style="color:red">{{$errors->first('email')}}</span>                                
                                    </div>
                                </div>


                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
 Phone Number <span style="color: red;"> </span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $getRecord->Phone_number}}" name="Phone_number" class="form-control" required placeholder="enter phone number">
                                    </div>
                                </div>



                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
    Hire Date <span style="color: red;"> *</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="date" value="{{ $getRecord->hire_date}}"name="hire_date" class="form-control" required placeholder="enter Hire Date">
                                    </div>
                                </div>



                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
    Job Title <span style="color: red;"> *</span>
                                    </label>
                                    <div class="col-sm-10">
<select class="form-control" name="job_id" required>
   
       
    @foreach($getJobs as $value_jobs )
         <option {{($value_jobs->id == $getRecord->job_id) ? 'seleceted' : ''}} value="{{$value_jobs->id}}">{{$value_jobs->job_title}}</option>
    @endforeach
</select>         
  </div>
</div>


<div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
    Salary <span style="color: red;"> *</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="number" value="{{ $getRecord->salary}}" name="salary" class="form-control" required placeholder="enter salary">
                                        <span style="color:red">{{$errors->first('salary')}}</span>                                
                     
                                    </div>
                                </div>

                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
    Commission PCT <span style="color: red;"> *</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="number" value="{{  $getRecord->comssion_pct}}" name="comssion_pct" class="form-control" required placeholder="enter Commission Pct ">
                                        <span style="color:red">{{$errors->first('comssion_pct')}} </span>                                
                     
                                    </div>
                                </div>



                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
   Manager ID<span style="color: red;"> *</span>
                                    </label>
                                    <div class="col-sm-10">
<select class="form-control" name="manager_id" required>
    <option value="">
        select manager name
    </option>
    <option {{($getRecord->manager_id==1)?'selected': ''}} value="1">
        Ayana
    </option>
    <option {{($getRecord->manager_id==2)?'selected': ''}} value="2">
        naty
    </option>
    <option value="3">
        Jo
    </option>
</select>         
  </div>
</div>


<div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
   Department Name<span style="color: red;"> *</span>
                                    </label>
                                    <div class="col-sm-10">
<select class="form-control" name="departmnent_id" required>
    <option value="">
        select Department name
    </option>
    <option 
    {{($getRecord->departmnet_id ==1)?'selected': ''}} value="1">
        web Development
    </option>
    <option     {{($getRecord->departmnet_id ==2)?'selected': ''}} 
value="2">
        mobile developmet 
    </option>
    <option      {{($getRecord->departmnet_id ==3)?'selected': ''}}
 value="3">
        Graphics Designing
    </option>
</select>         
  </div>
</div>



</div>
  <div class="card-footer">
  <a href="{{url('admin/employees')}}" class="btn btn-default ">Back</a>
    <button type="submit" class="btn btn-primary float-right">
     Update
    </button>
    
  </div>

  

                            </div>

                        </form>

                        

                    </div>
                </div>
            </div>
        </div>
    </section>






       <!-- content -->
       </div>
<!-- content-wrapper -->


</section> 