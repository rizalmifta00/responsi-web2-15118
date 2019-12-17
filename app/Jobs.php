<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table = 'jobs';
    protected $primaryKey='id_jobs';
    protected $fillable=['name'];
    
}
