	*session flash 
->  session flash no use msg battavva thay chhe
->  sauthi pahela controller ma session flash create karvu
	*CONTROLLER
	request->session()->flash('message','Coupan deleted');
        	  return redirect('admin/coupan');
-> function ma request avti hoy tema thi session create karvu
->  $request ma session() chhe tene flash method active thay ane msg create kare
->  flash('message','Coupan deleted'); jema 'message' as a variable chhe ane 'coupan deleted' te msg chhe

	*MSG PRINT
->  je page ma msg print karavvo hoy tya nichemujab karvu

		<div class="session_category_msg">
   	 	      {{session('message')}}
		</div> 
-> div styling mate use kari chhe