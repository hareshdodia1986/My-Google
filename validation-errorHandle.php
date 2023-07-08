*Validation
=>  validation mate niche mujab code karvo
=>   'category_slug'=>'required|unique:categories',     ( unique ane categories na table mathi)
=>  vadhare validation mate laravel na documetation jovu
	
	public function category_insert(Request $request)
    {
        $request->validate([
            'category_name'=>'required',
            'category_slug'=>'required|unique:categories',
        ]);

        $model = new Category();
        $model->category_name=$request->post('category_name');
        $model->category_slug=$request->post('category_slug');
        $model->save();
        $request->session()->flash('message','Category Inserted');
        return redirect('admin/category');
    }

=> jyare koi validation ni error ave tyare tene form ma niche mujab handle kari sakay
   	*HANDLE ERROR (error print)

         @error('category_name')
              <div class="alert alert-danger" role="alert">
                   {{$message}}
               </div>
           @enderror

=> () ma je filed na name hoy te add karavi deva
=> div bootstrap no class chhe
=> {{$message}} a flash ma banavel variable nathi error direct  {{$message}} variable banave chhe

    //validation ma unique hoy to particulet id par thi forgot karvi pade (update data)
    #'title' => "required|unique:coupans,title,$id",
        'code'  => "required|unique:coupans,code,$id",