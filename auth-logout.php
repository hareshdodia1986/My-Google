* logout

-> direct route mathi logout karva mate je session login na page ma banavya hoy tene forget kari nakhva
-> session banavva ma mate session put no upyog thay che
-> ane session bandh karva mate session forget no upyog thay chhe 
-> session ma koi error msg batavva mate session flash no upyog thay chhe
-> logout na botton ma url pass kari devu je route ma hoy te

-> 
       Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('error','Logout successfuly');
        return redirect('admin');
        });
-> jo koi alag page thi logout karavvu hoy to agad request lagavvu 

	    Route::get('admin/logout', function () {
            $request->session()->forget('ADMIN_LOGIN');
            $request->session()->forget('ADMIN_ID');
            $request->session()->flash('error',>forget);
            return redirect('admin');
	 });