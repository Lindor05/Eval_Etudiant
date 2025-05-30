<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }

    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }
}
