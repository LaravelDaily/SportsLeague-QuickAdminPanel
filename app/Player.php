<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Player
 *
 * @package App
 * @property string $team
 * @property string $name
 * @property string $surname
 * @property string $birth_date
*/
class Player extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'surname', 'birth_date', 'team_id'];
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setTeamIdAttribute($input)
    {
        $this->attributes['team_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setBirthDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['birth_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['birth_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getBirthDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }
    
    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id')->withTrashed();
    }
    
}
