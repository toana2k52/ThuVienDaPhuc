<?php

namespace App\Http\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Http\Models\Category;
use App\Http\Models\Brand;
use App\Http\Models\Product_detail;
use App\Http\Models\Product_image;
class Product extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'product';
    protected $fillable = [
       'category_id','name','slug','brand_id','image','price','price_sale','view','status'
    ];
    public function prod_cat()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
    public function prod_brand()
    {
        return $this->hasOne(Brand::class,'id','brand_id');
    }
    public function prod_image()
    {
        return $this->hasMany(Product_image::class,'product_id','id');
    }
    public function prod_detail()
    {
        return $this->hasMany(Product_detail::class,'product_id','id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
