<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Prodotto extends Model {

    protected $table = 'prodotto';
    protected $primaryKey = 'codice';

    public function getPrice($scontato = false) {
        $prezzo = $this->prezzo;
        if (true == ($this->discounted) && true == $scontato) {
            $sconto = ($prezzo * $this->percSconto) / 100;
            $prezzo = round($prezzo - $sconto, 2);
        }
        return $prezzo;
    }

    // Relazione One-To-One tra sottocategoria e prdotto
    public function prodCat() {
        return $this->hasOne(Sottocategoria::class, 'sottocategoria', 'id'); //vincoli di foreignKey 
    }
    
}
