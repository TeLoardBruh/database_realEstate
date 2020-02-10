<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    protected $table = 'revenue';
    protected $primaryKey = 'agent_id';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['amount'];
}
