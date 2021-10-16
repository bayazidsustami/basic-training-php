<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    //mass assignment
    //allows you to fill field one time exec using ::create()
    // protected $fillable = [
    //     'title',
    //     'slug',
    //     'excerpt',
    //     'body',
    // ];

    //restrict to filled field
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
