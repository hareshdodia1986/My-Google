
* how to create middleware via cmd

-> php artisan make:middleware AdminAuth

* how to impliment

-> go to app and open middleware and kernal file
   -> kernal ni file open kari and tema apne je name thi middleware file banavi hoy tene update karvani 
   -> ahi apne groupmiddleware no upyog kari rahya chhe
   -> kernal ni file ma group middleware ma avi rite update kari devi
   -> admin_auth = kernal ni file ma group middleware nu name rakhyu chhe 
   -> ane niche path ma apne je middleware ni banavi chhe tenu naam rakhyu chhe

        'admin_auth' => [
             \App\Http\Middleware\AdminAuth::class,
        ],
-> go to Route 
   -> ahi middleware nu name jeapne kernalni file ma apyu hoy te apvu

       Route::group(['middleware'=>'admin_auth'],function(){
	-> vachche je route ma middleware use karvi te lakhva
       });
-> go to Middleware file

    -> ahi je sassion put ma variable banavyu hoy tene session has ma chek karavi levanu
    -> ADMIN_LOGIN variable admin controller ma login ma banavyu hatu



        public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('ADMIN_LOGIN')){
            
        }else{
            $request->session()->flash('error','Access Denied');
            return redirect('admin');
        }
        return $next($request);
    }