<?php
namespace App\Http\Middleware;
use CLosure;
use Auth;
class AdminMiddleware{

    public function handle($request, CLosure $next ){
if(Auth::check()){



          if(Auth::user()->is_role ==1){
               return $next($request);


           }else{
                Auth::logout();
              return redirect(url('/ '));

           }
     

}
else{
    Auth::logout();
    return  redirect(url('/')); 
}

    }
}



    ?>