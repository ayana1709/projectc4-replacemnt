<?php


namespace App\Http\Controllers\backend;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\JobsModel ; 




// use Elementor\App\Http\Controllers\Controller;
class EmployeesController extends Controller{



// employee list
    public function index(Request $request){
        $data['getRecord'] = User ::getRecord();
        return view('backend.employees.list', $data); 
    } 


   // redirecting to  add page 
    public function  add(Request $request){
        $data['getJobs']= JobsModel::get();
     return view('backend.employees.add',$data);
    }



    //adding  employe data from the form
    public function add_post(Request $request){
        //   dd($request->all());
        $user = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
             'hire_date'=> 'required', 
             'job_id'=> 'required',
              'salary'=> 'required',
              'comssion_pct'=> 'required',
              'manager_id'=>'required',
              'departmnent_id'=>'required',
        ]);
        $user = new User;
        $user->name= trim($request->name);
        $user->last_name =trim($request->last_name);
        $user->email  = trim($request->email);
        $user->Phone_number = trim($request->Phone_number);
        $user->hire_date  = trim($request->hire_date);
        $user->job_id  = trim($request->job_id);
        $user->salary  = trim($request->salary);
        $user->comssion_pct  = trim($request->comssion_pct);
        $user->manager_id  = trim($request->manager_id);
        $user->departmnet_id = trim($request->departmnent_id); 
        $user->is_role = 0; 
$user->save();
        return redirect('admin/employees')->with('success', 'Employee successfulley register. ');
    }



    //view
    public function view($id){
        $data['getRecord']=User::find($id);
        return view('backend.employees.view', $data);
    }



//fetching the data 
public function edit($id){
    $data['getRecord']=User::find($id);
    $data['getJobs']= JobsModel::get();
     
    return view('backend.employees.edit',$data);
}



//--> edit the fetched data and update  
public function edit_update($id, Request $request){
$user = request()->validate([
    'email' => 'required', $id]);

    $user =  User::find($id);
    $user->name= trim($request->name);
    $user->last_name =trim($request->last_name);
    $user->email  = trim($request->email);
    $user->Phone_number = trim($request->Phone_number);
    $user->hire_date  = trim($request->hire_date);
    $user->job_id  = trim($request->job_id);
    $user->salary  = trim($request->salary);
    $user->comssion_pct  = trim($request->comssion_pct);
    $user->manager_id  = trim($request->manager_id);
    $user->departmnet_id = trim($request->departmnent_id); 
    $user->is_role = 0; 
$user->save();
    return redirect('admin/employees')->with('success', 'Employee successfulley updated. ');
}





  //--> delete Employe
public function delete($id){
    $recordDelete = User::find($id);
    $recordDelete->delete();
    return redirect()->back()->with('error','record Successfulley deleted');    

}


}

 

?>