
 //validator ne use karvu
 // niche mijab validation na code karva

 use Illuminate\Support\Facades\Validator;
 public function add(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
            'name' => 'required'
        ]);

        if($validator->fails())
        {
            
             return response()->json(['error' => $validator->errors()], 422);
        }else{

        Category::Create([
            'name' =>$request->get('name'),
            'status' =>1
            
        ]);
            return response()->json(['status' =>true, 'message' =>'Category Saved successfully']);
        }

    }

 // validation error ne add.vue ma aa mujab handle karvi

 const storeCategory = async() => {
       
        try{

            await axios.post('/api/categories_add',form)
            getCategory()

            $("#categoryModal").modal('hide');
        }catch(e){
         
         /*console.log(e.response.data.error.name)*/
          if(e.response.status == 422){
            var data = [];
              for(const key in e.response.data.error){
                data.push(e.response.data.error[key][0]);
              }

              errors.value = data;
               
          }
        }
       
      }

    // return karvu variable jema apne error msg store karavya ho y te
    


      return{
        categories,
        form,
        storeCategory,
        errors
      }  

      // setup ma pan add karvu

      setup(){
      const categories = ref([]);
      const errors = ref([]);
      const form = reactive({
        name : ''

      });

      // form ma aa mujab add karva

		<div class=" text-danger" if='errors != " "'>
			<p v-for='error in errors' :key='error'><small>{{error}}</small> </p>
		</div>