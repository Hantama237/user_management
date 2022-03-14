<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id'
    ];
    protected $hidden = [
        'profileable_id',
        'profileable_type'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function profileable(){
        return $this->morphTo();
    }
}
