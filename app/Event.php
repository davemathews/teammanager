<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Event
 *
 * @package App
 */
class Event extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'roster_id',
        'event_date_start',
        'event_date_end',
        'name',
        'description',
    ];

    /**
     * The rules for an Event .
     *
     * @var array
     */
    protected $rules = [
        'name'             => 'required',
        'roster_id'        => 'required',
        'event_date_start' => 'required',
        'event_date_end'   => 'required',
    ];

    /**
     * Make sure to case variables accordingly
     *
     * @var array
     */
    protected $casts = [
        'id'                          => 'integer',
        'roster_id'                   => 'integer',
    ];

    /**
     * Defines relationship between Events and Rosters
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roster()
    {
        return $this->belongsTo('App\Roster');
    }
}
