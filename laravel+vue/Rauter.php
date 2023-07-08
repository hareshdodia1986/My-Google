	//rautes crearte//

	// Rauter.js//
* npm install vue-router@4
-> rauter install karya baad 

* resources/js na foleder ma rauter name ni file banavvi  file koi pan name ni banavi sakay pan pachad extension js rakhvu jarruri chhe , file ma niche mujab code karvo



import {createWebHistory,createRouter} from 'vue-router';
import userindex from './components/user/userindex.vue';
import usercreate from './components/user/usercreate.vue';
import userupdate from './components/user/userupdate.vue';

(upar import karelo code imp chhe , ane apne je file ma layout banavanu hoy tene ahiya import karva import baad je file na name che te actualy component na name che)

const routes =[
	{
		path : '/',
		name : 'userindex',
		component : userindex
	},

	{
		path : '/usercreate',
		name : 'usercreate',
		component : usercreate
	},

	{
		path : '/userupdate',
		name : 'userupdate',
		component : userupdate
	}


];

(upar mujab je routes bannavana hoy tene ek array ma pass kari ane tena alag alag object banavi leva jema, path:  name je apne url ma dispaly karava mangta hoy te lakhva , 
name : kai pan rakhi sakay jene layout ni file ma te raute ne name thi pan call karavi sakay
component : component upar je naam apyu hoy tej rakhvu )



const router = createRouter({
	history : createWebHistory(),
	routes

});

(upar mujab code karvati apna rautes create thay jase)

export default router;

(upar mujab apne tene return karavana rahse)


		// app.js //


import './bootstrap'
import { createApp } from 'vue'
import router from './router.js'
import App from './components/layout/App.vue'

createApp(App)
	.use(router)
	.mount("#app")

(upar mujab import karva app.js vadi file ma)


  	//app.vue//

  	(/components/layout/App.vue)
  	(je apni layout mate main file hoy te, component ni andar banavvi je file ne app.js file ma pan import karavel chhe)

<template>	
	<div>
		<div>
			<router-link to="/">Home</router-link> | 
			<router-link to="/usercreate">Create</router-link>|
			<router-link to="/userupdate">Update</router-link>|

			(ahiya rautes ne name parthi pan call kari sakay tena mate niche mujab karvu
				<router-link :to="{name:'usercreate'}">Create</router-link>
					to ni agad : khas lakhvu
			)
		</div>

			<router-view>
			</router-view>
	</div>
</template>

(upar mujab code app.vue vadi file ma karvo, 
<router-link></router-link>
teni andar to='/' ane file no path apvo je apne rauter create kartya tyare apyo hato te
tag ni vachche je manu nu name hoy te apvu, tyar baad 
<router-view>
	(ahiya je apne site no bhag batavva mangta hoy te avse)
</router-view>

)