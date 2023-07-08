-> koi ek table migrate karva mate table name apvu

    php artisan migrate --path=/database/migrations/2021_10_03_054540_create_categories_table.php

-> badha teble ne ek sathe migrate karva mate 
   
   php artisan migrate


    use HasFactory;
    protected $fillable=['category_name','category_slug','status'];
    protected $primaryKey = "category_id";




      use HasFactory;
    protected $fillable=['category_id','name','image','slug','brand','model','short_desc','desc','keyword','tech_specification','uses','warranty','status'];
    protected $primaryKey = "category_id";

    public function category()
    {
        return $this->hasMany('App\Models\Category','category_id','category_id');
    }