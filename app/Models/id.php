<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class id extends Model
{
    use HasFactory;

protected $table = 'ids'; // Specify the table name if different from the model name

    protected $fillable = [
        
         'id_given',    
         
    ];

    public function pwdmember()
    {
        return $this->belongsTo(Pwdmember::class);
    }
    
}
