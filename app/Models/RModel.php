<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RModel extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    public $timespatams = true; //created_at e aupdate_at
    public $incremeting = true;
    protected $fillable = [];
    
}
