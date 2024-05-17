
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
              <li class="breadcrumb-item"><a href="#">Add</a></li>
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
                            Add Employees
                        </h3>
                    </div>
                        <form class="form-horizontal" method="post" accept="" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
    First Name <span style="color: red;">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" required placeholder="enter first Name">
                                    </div>
                                </div>



                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
    Last Name <span style="color: red;"> </span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="last_name" class="form-control"  placeholder="enter last Name">
                                    </div>
                                </div>

                                

                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
    Email <span style="color: red;"> *</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" required placeholder="enter email ">
                                    </div>
                                </div>


                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
 Phone Number <span style="color: red;"> </span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="Phone_number" class="form-control" required placeholder="enter phone number">
                                    </div>
                                </div>



                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
    Hire Date <span style="color: red;"> *</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="date" name="hire_date" class="form-control" required placeholder="enter Hire Date">
                                    </div>
                                </div>



                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
    Job Title <span style="color: red;"> *</span>
                                    </label>
                                    <div class="col-sm-10">
<select class="form-control" name="job_id" required>
    <option value="">
        select job Title
    </option>
    <option value="1">
        Frontend Developer
    </option>
    <option value="2">
        Backend Developer
    </option>
    <option value="3">
        Full-stack Developer 
    </option>
</select>         
  </div>
</div>


<div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
    Salary <span style="color: red;"> *</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="salary" class="form-control" required placeholder="enter salary">
                                    </div>
                                </div>

                                <div class="form-group row">
 <label  class="col-sm-2 col-form-lable">
    Commission PCT <span style="color: red;"> *</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="comssion_pct" class="form-control" required placeholder="enter Commission Pct ">
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
    <option value="1">
        Ayana
    </option>
    <option value="2">
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
    <option value="1">
        web Development
    </option>
    <option value="2">
        mobile developmet 
    </option>
    <option value="3">
        Graphics Designing
    </option>
</select>         
  </div>
</div>



</div>
  <div class="card-footer">
  <a href="{{url('admin/employees')}}" class="btn btn-default ">Back</a>
    <button type="submit" class="btn btn-primary float-right">
        Add
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