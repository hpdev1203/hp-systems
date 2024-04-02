<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenerateEnityId extends Model
{
    use HasFactory;
    
    public static function generateEntityId(){
        $entityId = strtoupper(md5(uniqid(rand(), true)));
        return $entityId;
    }
}
