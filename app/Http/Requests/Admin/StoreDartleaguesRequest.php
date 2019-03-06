<?php
namespace App\Http\Requests\Admin;

class StoreDartleaguesRequest extends AdminRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }
}
