<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Category
 * @method Article|null where(array $fields) static
 * @method Article|null firstOrFail() static
 * @method Article|null create(array $fields) static
 * @method Article|null delete() static
 * @method Article|null orderBy(string $field, string $direction) static
 * @method Article|null paginate(int $perPage) static
 * @method Article|null findOrFail(int $id)
 * @property int $id
 * @property string slug
 * @property string title
 * @property string content
 */
class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'category_id', 'content'
    ];

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @param int $length
     * @return bool|string
     */
    public function getTruncatedContent(int $length = 30)
    {
        return Str::words($this->content, $length, '...');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
