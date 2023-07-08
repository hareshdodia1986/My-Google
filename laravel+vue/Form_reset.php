
// form reset karva mate niche mujab karvu
// ahiya name only ek field chhe jo vadhare field hoy to ahiya lakhvi

const formReset =() =>{
        form.name = '';
      }

// formReset() function niche mujab jya request jati ho y form ni tya pest kari devu atle fari reset thay jaay


        try{

            await axios.post('/api/categories_add',form)
            getCategory()  
            formReset()  // function pest hire

            $("#categoryModal").modal('hide');
        }catch(e){
         
         /*console.log(e.response.data.error.name)*/
          if(e.response.status == 422){
            var data = [];
              for(const key in e.response.data.error){
                data.push(e.response.data.error[key][0]);
              }

              errors.value = data;
          }else{
            console.log(e.response)
          }
        }   