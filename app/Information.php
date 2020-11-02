<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Information extends Model
{
    protected $table = 'informations';

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d\TH:i:s.uP', $date)->format('Y/m/d');
    }
}
