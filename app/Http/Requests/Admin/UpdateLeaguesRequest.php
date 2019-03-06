<?php
namespace App\Http\Requests\Admin;

class UpdateLeaguesRequest extends AdminRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }
}
