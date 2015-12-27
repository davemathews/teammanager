<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Roster
 *
 * @package App
 */
class Roster extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rosters';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'year',
    ];

    /**
     * The rules for an Athlete .
     *
     * @var array
     */
    protected $rules = [
        'name' => 'required',
        'year' => 'required',
    ];

    /**
     * Make sure to case variables accordingly
     *
     * @var array
     */
    protected $casts = [
        'id'    => 'integer',
        'year'  => 'integer',
    ];

    /**
     * Defines relationship between Rosters and Athletes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function athletes()
    {
        return $this->belongsToMany('App\Athlete');
    }

    /**
     * Defines relationship between Rosters and Events
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany('App\Events');
    }

    /**
     * Defines relationship between Rosters and Matches
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function matches()
    {
        return $this->hasMany('App\Match');
    }
}
