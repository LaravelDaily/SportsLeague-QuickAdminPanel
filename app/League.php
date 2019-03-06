<?php
namespace App;

use App\Game;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class League extends Model
{
    protected $fillable = ['name'];
}
