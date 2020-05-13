<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Sottocategoria extends Model {

    protected $table = 'sottocategoria';
    protected $primaryKey = 'id';
    public $timestamps = false; /*meccanismo che fa si che ogni varaizione nella caratteristica di una tupla (con un update
    venga registrata anche in termini di momento in cui la variazione stessa è stata operata, attraverso l'introduzione di attributi
    in maniera automatica all'interno di tabelle */

    // Relazione One-To-One con Category
    public function catSottocat() {
        return $this->hasOne(Categoria::class, 'categoria', 'nome');
    }

}
