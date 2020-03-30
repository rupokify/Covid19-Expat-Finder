<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expat extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function reporter()
    {
        return $this->belongsTo(User::class);
    }

    public function getQuarantineStatusTextAttribute()
    {
        return $this->quarantine_status ? 'Quarantined' : 'Not Quarantined';
    }

    public function getQuarantineLabelAttribute()
    {
        return $this->quarantine_status ? 'success' : 'danger';
    }
}
