<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{

    use HasFactory;

    protected $table = 'name';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];

    public function website()
    {
        return $this->belongsToMany(Website::class, 'website_category', 'category_id', 'website_id');
    }
}
