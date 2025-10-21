<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';

    protected $fillable = [
        'project_id',
        'created_by',
        'title',
        'description',
        'activity_type',
        'date_start',
        'date_end',
        'status',
        'validated'
    ];

    public function project() {
        return $this->belongsTo(Project::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function locations() {
        return $this->hasMany(Location::class);
    }

    public function indicators() {
        return $this->hasMany(Indicator::class);
    }
}
