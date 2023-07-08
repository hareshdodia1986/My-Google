
dulpicate data add karva mate faker no use thay chhe

php artisan make:factory StudentFactory --model=Student

// factory nu name rakhvu ane kya model ma data add karva chhe tanu name upar mujab apvu


//open database tya factory create thay gay hase tema fake data mate niche mujab code karvo

 
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->email,
            'phone'=>$this->faker->phoneNumber,
            'city'=>$this->faker->randomElement(array('Rajkot','Ahemdabad','Surat','Junagadh','Baroda','Somnath'))
        ];
    } 


    // cmd ma niche mujab command hit karva

    // tema table name and count ma jetla data add karva hoy te lakhvu

    php artisan tinker 

    >>>  Student::factory()->count(50)->create()


    