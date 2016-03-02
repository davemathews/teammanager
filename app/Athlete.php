<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DateTime;

/**
 * Class Athlete
 *
 * @package App
 */
class Athlete extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'athletes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'city',
        'state',
        'weight',
        'age',
        'dob',
        'college_graduation_year',
        'roster_id'
    ];

    /**
     * The rules for an Athlete .
     *
     * @var array
     */
    protected $rules = [
        'first_name' => 'required',
        'last_name'  => 'required',
        'email'      => 'email',
    ];

    /**
     * Make sure to case variables accordingly
     *
     * @var array
     */
    protected $casts = [
        'id'                          => 'integer',
        'roster_id'                   => 'integer',
        'weight'                      => 'integer',
        'age'                         => 'integer',
        'college_graduation_year'     => 'integer',
    ];

    protected $appends = ['all_rosters'];

    public function getAllRostersAttribute() {
        if (! is_object($this->rosters)) {
            return '';
        }
        $allRosters = [];
        $rosters = $this->rosters->toArray();
        foreach ($rosters as $roster) {
            $allRosters[] = $roster['year'];
        }
        return implode(", ", $allRosters);
    }

    public function setAgeAttribute($value) {
        if(empty($this->dob)) {
            return;
        }
        $date = new DateTime($this->dob);
        $now = new DateTime();
        $interval = $now->diff($date);
        return $interval->y;
    }

    /**
     * Defines relationship between Athletes and Rosters
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rosters()
    {
        return $this->belongsToMany('App\Roster');
    }
}
