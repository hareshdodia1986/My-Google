* data delete using MODEL

->  je page ma apne delete button banavyu hoy tema route ni link banavi ane ek id pass karvi
->  <a> anker tag ma button levu
-> <a> maurl route mate pass karvu
    *URL
	<a href="{{url('admin/coupan/delete/')}}/{{$list->id}}">
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </a>
-> upar mujab url ma is pass kari devi 
-> url ma sathe id pass na thay atle alag thi pass kari chhe
     *ROUTE
	Route::get('admin/coupan/delete/{id}',[CoupanController::class,'coupan_delete']);
-> avi rite route ma pan id pass kari devi

     *CONTROLLER

	       public function coupan_delete(Request $request,$id)
    	{
     		 $model = Coupan::find($id);
      		$model->delete();

     		 $request->session()->flash('message','Coupan deleted');
       		 return redirect('admin/coupan');
    	}
->  $model name nu variable banavi ane model use kari ane find() method thi $id search kari levi and model thi delete kari levu
->  session thi mgs flash kari devano