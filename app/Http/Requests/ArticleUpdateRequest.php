<?php

namespace App\Http\Requests;

use App\Article;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class ArticleUpdateRequest
 * @property Article $article
 */
class ArticleUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:128',
            'slug' => [
                'required',
                'max:64',
                'regex:/^[a-zA-Z0-9_-]+$/',
                Rule::unique('articles')->ignore($this->article)
            ],
            'content' => 'required'
        ];
    }
}
