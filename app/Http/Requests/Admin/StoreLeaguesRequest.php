<?php
namespace App\Http\Requests\Admin;

class StoreLeaguesRequest extends AdminRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }
}
