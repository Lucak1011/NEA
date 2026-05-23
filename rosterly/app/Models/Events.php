<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
#[Fillable(['name', 'date', 'start_time','end_time',])]
class Events extends Model
{
    //
}
