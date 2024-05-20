<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\model; 
use Request;
class JobsModel extends Model{
    use HasFactory;
    protected $table ='jobs'; 
    static public function getRecord(){
        //    $return = self::select('jobs.*')
        //           ->orderBy('id','desc')
        //           ->paginate(5);
        //           return $return;
    
           $return = self::select('jobs.*');
    
    
           // search box start;
           if(!empty(Request::get('id')))
            {
      $return = $return->where('id', '=', Request::get('id'));
            }
            if(!empty(Request::get('job_title'))){
                $return = $return->where('job_title', 'like','%'.Request::get('job_title').'%') ;
    
            }
            if(!empty(Request::get('min_salary'))){
                $return = $return->where('min_salary', 'like','%' .Request::get('min_salary').'%');
    
            }
            if(!empty(Request::get('max_salary'))){
                $return = $return->where('max_salary', 'like','%' .Request::get('max_salary').'%');
    
            }
    
    
    
    
           //search box end
             $return =  $return->orderBy('id', 'desc')
                          ->paginate(20);
                          return $return;
        }
    }
    
