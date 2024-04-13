<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'author',
        'publisher',
        'publication',
        'rack_id',
        'category_id'
    ];

    // Relation
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function rack()
    {
        return $this->belongsTo(Rack::class);
    }

    public function borroweds()
    {
        return $this->hasMany(Borrowed::class);
    }

    public function collections()
    {
        return $this->hasMany(MyCollection::class);
    }
}
