<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @method Category|null where(array $fields) static
 * @method Category|null firstOrFail() static
 * @method Category|null create(array $fields) static
 * @method Category|null delete() static
 * @method Category|null orderBy(string $field, string $direction) static
 * @method Category|null paginate(int $perPage)
 * @method Category|null findOrFail(int $id)
 * @property int $id
 * @property string slug
 * @property string title
 * @property Article[] articles
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany('App\Article');
    }
}
