<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AthleteRoster
 *
 * @package App
 */
class AthleteRoster extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'athlete_roster';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'athlete_id',
        'roster_id',
        'amount',
    ];

    /**
     * The rules for an Athlete .
     *
     * @var array
     */
    protected $rules = [
        'athlete_id' => 'required',
        'roster_id' => 'required',
    ];

    /**
     * Make sure to case variables accordingly
     *
     * @var array
     */
    protected $casts = [
        'athlete_id' => 'integer',
        'roster_id'  => 'integer',
    ];

    /**
     * Defines relationship between Rosters and Athletes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function athlete()
    {
        return $this->belongsTo('App\Athlete');
    }

    /**
     * Defines relationship between Rosters and Athletes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roster()
    {
        return $this->belongsTo('App\Roster');
    }
}
