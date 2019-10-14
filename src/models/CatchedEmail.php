<?php

namespace Realtebo\Blackhole\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CatchedEmail extends Model
{
    protected $table = 'smtp_blackhole_catched_email';
}