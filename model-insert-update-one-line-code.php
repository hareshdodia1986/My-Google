
	=> sidha model thi data fench larva mate ane update karva mate niche mujab karvu

	=> sauthi pahela model ma fild na name $fileble karva 
	=>model logic

		class contact extends Model
		{
			use HasFactory;
			protected $fillable = ['fname', 'lname', 'city','tnom','email','msg',];
		}
	=> controller insert data logic

	 public function insert(Request $request)
    {
	      $request->validate([
	        'fname' =>'required',
			'lname' =>'required',
			'city' =>'required',
			'tnom' =>'required|unique:contacts',
			'email' =>'required|unique:contacts',
			'msg' =>'required',
 		]);
	      
		$model = new contact();
		$model->fill($request->all());
		$model->save();
		$request->session()->flash('message','Data Inserted');
		return redirect('/home');

    }

	//data update karva mate pan same logic no use thay chhe
	// $model = Conrtact::find($id);
	//update mate avi rite lakhvu 
	//validation ma unique hoy to particulet id par thi forgot karvi pade (update data)

		'title' => "required|unique:coupans,title,$id",
        'code'  => "required|unique:coupans,code,$id",
		

// other way to create data 
	//file uplaod
	if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = rand('11111','99999').'.'.$ext;
            $image->storeAs('/public/media/product-image',$image_name);
        }

        //data save
        Product::Create([
            'name' =>$request->get('name','undifended product'),
            'category_id' =>$request->get('category_id'),
            "image" => $image_name,
            'slug' =>$request->get('slug','undifended slug'),
            'brand' =>$request->get('brand','unkhnown brand'),
            'model' =>$request->get('model','unkhnown model'),
            'short_desc' =>$request->get('short_desc','unkhnown short_desc'),
            'desc' =>$request->get('desc','undifended desc'),
            'keyword' =>$request->get('name','undifended keyword'),
            'tech_specification' =>$request->get('tech_specification','undifended specification'),
            'uses' =>$request->get('uses'),
            'warranty' =>$request->get('warranty','No warranty'),
        ]);
                $request->session()->flash('msg','data inserted');
                    return redirect('admin/product');










