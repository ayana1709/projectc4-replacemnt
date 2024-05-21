<?php


namespace App\Http\Controllers\backend;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\JobsModel; 


// use Elementor\App\Http\Controllers\Controller;
class JobsController extends Controller{

    //--> Job Listing 
    public function index(Request $request){
        $data['getRecord'] = JobsModel ::getRecord();
        return view('backend.jobs.list',$data); 
    }
    // -->redirect  to add jobs page
    public function add(){
        return view('backend.jobs.add');  
    }


    //-->registering data from the form 
    public function add_post(Request $request){
        // dd($request->all());

        //validation
        $user = request()->validate([
            'job_title' => 'required',
            'min_salary' => 'required',
            'max_salary'=> 'required',    
        ]);
  //registering to the table
        $user = new JobsModel;
        $user->job_title= trim($request->job_title);
        $user->min_salary =trim($request->min_salary);
        $user->max_salary  = trim($request->max_salary);
         
$user->save();
        return redirect('admin/jobs')->with('success', 'jobs successfully register. ');

    }




    //--->view  recorded data 
    public function view($id, Request $request){
        $data['getRecord'] = JobsModel::find($id);
        return view('backend.jobs.view', $data);  

    }

    //fetching data for edit
    public function edit($id){
        $data['getRecord'] = JobsModel::find($id);

       return view('backend.jobs.edit', $data); 
    }
//update the fetched data
    public function edit_update($id, Request $request){
        $user = request()->validate([
            'job_title' => 'required',
            'min_salary' => 'required',
            'max_salary'=> 'required', 
             
        ]);
        $user =JobsModel::find($id);
         
        $user->job_title= trim($request->job_title);
        $user->min_salary =trim($request->min_salary);
        $user->max_salary  = trim($request->max_salary);
         
$user->save();
        return redirect('admin/jobs')->with('success', 'jobs successfully updated. ');
    }


    // delete  job
    public function delete($id){
    $recordDelete = JobsModel ::find($id);
    $recordDelete->delete();
    return redirect()->back()->with('error','record Successfulley deleted'); 
    }
}
