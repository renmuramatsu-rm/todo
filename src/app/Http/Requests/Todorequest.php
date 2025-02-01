<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Todorequest extends FormRequest
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
            'content' => 'required|string|max:20'

        ];
        // バリデーションのルール
    }
    public function messages()
    {
        return [
            'content_required' => 'Todoを入力してください',
            'content_string' => 'Todoを文字列で入力してください',
            'content_max:20' => 'Todoを20文字以下で入力してください ',
        ];
    }
    // エラーメッセージの表示

}
