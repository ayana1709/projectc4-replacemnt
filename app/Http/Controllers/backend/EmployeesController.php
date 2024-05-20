<?php


namespace App\Http\Controllers\backend;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 



// use Elementor\App\Http\Controllers\Controller;
class EmployeesController extends Controller{

    public function index(Request $request){
        $data['getRecord'] = User::getRecord();
        return view('backend.employees.list', $data); 


    } 

    public function  add(Request $request){
     return view('backend.employees.add');


    }
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
    public function view($id){
        $data['getRecord']=User::find($id);
        return view('backend.employees.view', $data);
    }




public function edit($id){
    $data['getRecord']=User::find($id);
 
    return view('backend.employees.edit',$data);
}
public function edit_update($id, Request $request){
$user = request()->validate([
    'email' => 'required|unique:users,email', $id]);

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
  
}

 

?>