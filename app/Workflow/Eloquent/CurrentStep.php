<?php

namespace App\Workflow\Eloquent;

use Jenssegers\Mongodb\Eloquent\Model;

class CurrentStep extends Model
{
    protected $table = 'oswf_currentstep'; 

    protected $fillable = array(
        'entry_id',
        'step_id',
        'previous_id',
        'start_time',
        'finish_time',
        'action_id',
        'owner',
        'status',
        'caller'
    );
}
