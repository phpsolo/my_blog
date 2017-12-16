<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckTypeRequest extends FormRequest
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
        $unique = 'type,name';
        if ($id) $unique = 'type,name,'.$id;
        return [
            'name' => [
                'required',
                'min:2',
                'max:255',
                $unique,
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
            'name.required' => '分类名必须填写',
            'name.min'  => '分类名最少2个字符',
            'name.max'  => '分类名最多255个字符',
            'name.unique'  => '分类名不能重复',
        ];
    }
}
