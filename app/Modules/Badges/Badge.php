<?php

namespace GiveBlood\Modules\Badges;

use Illuminate\Database\Eloquent\Model;
use GiveBlood\Traits\UuidTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Badge extends Model
{

    use SoftDeletes, UuidTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'badges';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $filliable = [ 'name', 'icon', 'slug' ];

    protected $hidden = [ 'created_at', 'updated_at', 'deleted_at' ];

    protected $dates = [
      'created_at', 'updated_at', 'deleted_at'
    ];
}
