<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Game
 *
 * @package App
 * @property string $team1
 * @property string $team2
 * @property string $start_time
 * @property integer $result1
 * @property integer $result2
*/
class Game extends Model
{
    use SoftDeletes;

    protected $fillable = ['start_time', 'result1', 'result2', 'team1_id', 'team2_id'];
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setTeam1IdAttribute($input)
    {
        $this->attributes['team1_id'] = $input ? $input : null;
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setTeam2IdAttribute($input)
    {
        $this->attributes['team2_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setStartTimeAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['start_time'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
        } else {
            $this->attributes['start_time'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getStartTimeAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format') . ' H:i:s');

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('app.date_format') . ' H:i:s');
        } else {
            return '';
        }
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setResult1Attribute($input)
    {
        $this->attributes['result1'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setResult2Attribute($input)
    {
        $this->attributes['result2'] = $input ? $input : null;
    }
    
    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id')->withTrashed();
    }
    
    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id')->withTrashed();
    }
    
}
