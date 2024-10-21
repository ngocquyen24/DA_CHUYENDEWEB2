<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

<<<<<<< HEAD
=======

>>>>>>> danhmuc_list
class CreateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
<<<<<<< HEAD
     *
     * @return bool
     */
    public function authorize()
=======
     */
    public function authorize(): bool
>>>>>>> danhmuc_list
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
<<<<<<< HEAD
     * @return array
=======
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
>>>>>>> danhmuc_list
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            'name' => 'required'
        ];
    }

    public function messages() : array
    {
        return [
            'name.required' => 'Vui lòng nhập tên Danh Mục'
=======
            'name'=>'required'
        ];
    }
    public function messages() : array
    {
        return [
            'name.required' =>'vui lòng nhập tên danh mục'
>>>>>>> danhmuc_list
        ];
    }
}
