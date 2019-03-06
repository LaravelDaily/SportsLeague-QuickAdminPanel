<?php
namespace App\Http\Requests\Admin;

use App\League;

class StoreDartleaguesLeagueRequest extends AdminRequest
{
    public function rules()
    {
        return [
            'league_id' => [
                'required',
                'integer',
                'in:'.League::pluck('id')->implode(','),
            ],
        ];
    }
}
