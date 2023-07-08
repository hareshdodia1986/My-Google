

//file upload karva mate form ma enctype="multipart/form-data" khas chek karvu

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = rand('11111','99999').'.'.$ext;
            $image->storeAs('/public/media/product-image',$image_name);
        }

        // data base ma only name save karvanu hoy mate tya create data no code hoy tya 
            $image_name -> pest kari devu

        //cmd thi php artisan link kari devu mate image link thay jay