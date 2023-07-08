	
	=>Laravel localization
	=> jyare multi language site banavta hoy tyare ek language na male male to biji language print kari de
	=> RESOURCES =>LANG
	=> LANG ma EN(english) ane 2nd GU(gujarati) name na 2 file create karvani ext .php rakhvi
	=> EN ma ek key and MSG defind karva
		<?php

		return [
    		'welcome_slider_head_h2_msg' => 'Join the world\'s biggest Q&amp;A network!',
    		'welcome_slider_head_p_msg' =>  'Go from question to understanding',
		];
	=>GU ma pan ek key and MSG defind karvo
		<?php
		return [
   	 	'welcome_slider_head_h2_msg' => '????? ?????? ?? ???? ???? Q&A ??????? ??',
   		 'welcome_slider_head_p_msg' =>  '??????????? ???? ??? ???',
		];

	=> config ma APP.PHP ma 
	
		'locale' => 'gu',
		'fallback_locale' => 'en',
		(je language main hoy tene locale ma rakhvi )
	=> how to print key
		
		{!!__("site.welcome_slider_head_h2_msg") !!}
	=> have jyare print karel gujrati ma nahi male to te anglish no msg print kari dese

	=> refence by site

	https://lokalise.com/blog/laravel-localization-step-by-step/#:~:text=Therefore%2C%20create%20a%20new%20middleware,running%20artisan%20make%3Amiddleware%20Localization%20.&text=*%20Handle%20an%20incoming%20request.&text=This%20middleware%20will%20instruct%20Laravel,is%20present%20in%20the%20session.

 