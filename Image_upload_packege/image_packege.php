

 *laravel image upload packege

// search on google

//laravel image intervention (search on google)

open this website  https://image.intervention.io/v2


//read the document

 *for Installation
 
 //Easy installation via Composer
 
 composer require intervention/image
 
 // after installation packege decler in proveder
 
 //Intervention\Image\ImageServiceProvider::class,
 
 go to config/app.php and pest above path in providers in packege service provider area
 
 just like this
 
 'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        

        /*
         * Package Service Providers...
         */
        Intervention\Image\ImageServiceProvider::class, 
        /*
 ];
 
 // after this scroll down and find aliases

// below path pest in last row
'Image' => Intervention\Image\Facades\Image::class 

just like this


    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
			(vachhe bija ghana path hase)
        'Image' => Intervention\Image\Facades\Image::class,

    ],
	
	
after this publicing the packege just below path run in cmd 

php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"


// in controller

use Image;

//coding for image upload
// multi images using for loop

$product_img = $request->file('product_images');
        foreach($product_img as $product_imgs){
            $name_gen = hexdec(uniqid()).'.'.$product_imgs->getClientOriginalExtension();
            Image::make($product_imgs)->resize(300,300)->save('image/product-M-images/'.$name_gen);
            $last_img = 'image/product-M-images/'.$name_gen;
            //$pid = $product->id;
            Product_image::create([
                'product_id '=> $pid,
                'product_images'=> $last_img,
            ]);

        }//forloop end   

and now ready to completely useble