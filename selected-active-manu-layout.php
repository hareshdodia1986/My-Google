* layout side navigation ma jyare koi page open hoy ane tene dynamic selected rakhva mate

=> lauout ma page na <li> ma ek class yield thi pass kari devano 

	<li class="@yield('dashboard_select')">
=> ('dashboard_select') variable banavyu 
=> have dashboard na page ma section ma 

	@section('dashboard_select','active')
     upar mujab variable pass kari devu 
=> active tene selected rakhe chhe