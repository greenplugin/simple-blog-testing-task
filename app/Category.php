<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @property int $id
 * @property string slug
 */
class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug'
    ];
}
