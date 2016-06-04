<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Shot
 *
 * @package App
 */
class Shot extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shots';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The rules for an Shot .
     *
     * @var array
     */
    protected $rules = [
        'name' => 'required',
    ];

    /**
     * Make sure to case variables accordingly
     *
     * @var array
     */
    protected $casts = [
        'id'    => 'integer',
    ];

    /**
     * Defines relationship between Rosters and Athletes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
//    public function videoLogs()
//    {
//        return $this->belongsToMany('App\VideoLog');
//    }
}
