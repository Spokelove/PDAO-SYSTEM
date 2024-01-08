<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterlist extends Model
{
    use HasFactory;

    protected $table = '_masterlist'; // Specify the table name if different from the model name

    protected $fillable = [
        'Types_id',
        'Program_id',
        'Amount',
        'Unit',
        'Particular',
        'Assistance_Name',
        'Description',
        // Add other fillable attributes here
    ];

    // public function typesOfAssistance()
    // {
    //     return $this->belongsTo(TypesofAssistance::class, 'Types_id');
    // }


    // Masterlist.php
public function typesOfAssistance()
{
    return $this->belongsTo(TypesOfAssistance::class, 'Types_id', 'id');
}


    public function typesOfProgram()
    {
        return $this->belongsTo(ProgramAssistance::class, 'Program_id');
    }

  
    // Masterlist.php
public function _masterlists()
{
    return $this->belongsTo(Masterlist::class, '_masterlist_id', 'id');
}


public function masterledger()
{
    return $this->belongsTo(Masterledger::class);
}
}