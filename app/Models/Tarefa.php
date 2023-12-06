<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nm_tarefa',
        'conteudo_tarefa',
        'cor',
        'n_Checklists',
        'checklists'
    ];

    protected $casts = [
        'checklists' => 'array'
    ];

}
