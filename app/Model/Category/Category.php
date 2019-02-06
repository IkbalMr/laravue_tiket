<?php

namespace App\Model\Category;

use Illuminate\Database\Eloquent\Model;
use App\Model\Tiket\Tiket;

class Category extends Model
{
    protected $guarded = [];

    public function tiket()
    {
        return $this->hasMany(Tiket::class, 'category_id', 'id');
    }
}
