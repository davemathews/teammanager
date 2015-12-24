<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Match
 *
 * @package App
 */
class Match extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'matches';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id',
        'roster_id',
        'athlete_id',
        'weight',
        'result',
        'tech',
        'pin',
        'pin_time',
        'team_points',
        'score_for',
        'score_against'
    ];

    /**
     * The rules for an Match .
     *
     * @var array
     */
    protected $rules = [
        'event_id'      => 'required',
        'roster_id'     => 'required',
        'athlete_id'    => 'required',
        'weight'        => 'required',
        'result'        => 'required',
        'team_points'   => 'required',
        'score_for'     => 'required',
        'score_against' => 'required',
    ];

    /**
     * Make sure to case variables accordingly
     *
     * @var array
     */
    protected $casts = [
        'id'            => 'integer',
        'event_id'      => 'integer',
        'roster_id'     => 'integer',
        'athlete_id'    => 'integer',
        'weight'        => 'integer',
        'result'        => 'integer',
        'team_points'   => 'integer',
        'tech'          => 'integer',
        'pin'           => 'integer',
        'score_for'     => 'integer',
        'score_against' => 'integer',
    ];

    /**
     * Defines relationship between Events and Rosters
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    /**
     * Defines relationship between Matchs and Rosters
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roster()
    {
        return $this->belongsTo('App\Roster');
    }

    /**
     * Defines relationship between Athletes and Rosters
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function athlete()
    {
        return $this->belongsTo('App\Athlete');
    }
}
