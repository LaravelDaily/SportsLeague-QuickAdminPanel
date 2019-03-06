<?php
namespace App\Http\Requests\Admin;

class UpdateDartleaguesRequest extends AdminRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }
}
