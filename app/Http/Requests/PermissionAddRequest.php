<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Permission;
class PermissionAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $permission=new Permission;
        return [

                'name'=>[
                    'required',
                    'unique:permissions,name,'.$permission->id
                    ]

        ];
    }
    public function errors(): array
    {
        $permission=new Permission;
        return [

                'name.required'=>'please inssert permission name',
                'name.unique'=>'This Name has be taken'


        ];
    }
}
