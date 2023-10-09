<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'post.images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048,max_num:10',
            'post.body' => 'required|string|max:4000',
        ];
    }
}