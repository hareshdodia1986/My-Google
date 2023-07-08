* data show MODEL

-> data show model thi karva mate
-> cotroller ma jyathi listing nu page view thatu hoy tya niche mujab karvu

->  	public function index()
    {
        $result['data'] = Category::all();
        return view('admin.category',$result);
    }

-> $result['data'] $result variable ma data name nu key pass kari devi ane tema model na badha data add kari deva
-> Category::all(); category model name chhe ane all() method thi badha data get kari lidha
-> $result variable view ma pass kari devu 

-> category na page ma jya table hoy tya

	<table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Category Name</th>
                                                <th>Category Slug</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $list)
                                            <tr>
                                                <td>{{$list->id}}</td>
                                                <td>{{$list->category_name}}</td>
                                                <td>{{$list->category_slug}}</td>
                                                <td></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

->  data ne foreach loop thi fervi devanu 