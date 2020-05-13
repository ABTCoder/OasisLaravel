<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

    protected $table = 'categoria';
    protected $primaryKey = 'nome';
    public $timestamps = false; //Disabilita i timestamp delle colonne di creazione e update della tabella aggiunte da Eloquent

}
