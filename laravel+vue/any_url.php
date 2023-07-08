
* jyare vue ma work karta hoyye tyare apne URl par hit kariye to 404 ni error ave chhe
* mate niche mujab no code kari devo 



Route::get('/{any}', function () {
    return view('home');
})->where('any','.*');