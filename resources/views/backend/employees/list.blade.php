
@extends('backend.layouts.app')


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 >Employees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6" style="text-align: right;">
          <a href="{{url('admin/employees/add')}}" class="btn btn-primary">Add Employees </a>
             
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
                         <h3 class="card-title">Search Employees</h3>
                         <div>

                         <form method="get" action="">
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-3">
                                <label>
                                  First Name
                                </label>
                                <input type="text" name="" class="form-control" placeholder="first name">
                              </div>

                              <div class="form-group col-md-3">
                                <label>
                                  Last Name
                                </label>
                                <input type="text" name="" class="form-control" placeholder="Last Name">
                              </div>

                              <div class="form-group col-md-3">
                                <button class="btn btn-primary" type="submit" style="margin-top:30px;">search</button> 
                                <a href="{{ url('admin/employees')}}" class="btn btn-success" style="margin-top:30px;">Reset</a>
                               
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
      <h3  class="card-title">Employees list</h3>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            

            
          </tr>
        </thead>
        <tbody>
          @foreach($getRecord as $value)
                 <tr>
                 <td>{{$value->id}}</td>
                  <td>{{$value->name}}</td>
                 <td>{{$value->last_name}}</td>
                  </tr>
         @endforeach
        </tbody>
      </table>
      <div style="padding:10px; float:right;">
      pagination

      </div>
    </div>
   </div>

                </section>
        </div>


        <!-- content -->
    </div>
<!-- content-wrapper -->


</section>



















  </div>
  @endsection 