<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckArticleRequest extends FormRequest
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
        $id = $this->route('id');
        $unique = 'unique:article,title';
        if ($id) $unique = 'unique:article,title,'.$id;
        return [
            'title' => [
                'required',
                'min:2',
                'max:50',
                'alpha_dash',
                $unique,
            ],
            'content' => [
                'required',
                'min:2',
            ],
            'type_id' => [
                'required',
                'nullable',
            ],
        ];
    }

    /**
    * 获取已定义的验证规则的错误消息。
    *
    * @return array
    */
    public function messages()
    {
        return [
            'title.required' => '标题必须填写',
            'title.min'  => '标题最少2个字符',
            'title.max'  => '标题最多50个字符',
            'title.alpha_dash'  => '标题必须为数字字母下划线或汉字',
            'content.required'  => '内容必须写',
            'content.min'  => '内容长度最少2个字符',
            'type_id.required' => '分类id必须选择',
            'type_id.nullable' => '请不要捣乱',
        ];
    }
}
