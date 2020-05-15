<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'prodotto';
    protected $primaryKey = 'codice';
    protected $guarded = ['codice'];
    /* consente di specificare quale degli attributi del nostro model di prodotto, non può essere 
      assegnato per assegnazione tramite valore proveniente da una tabella html, cioè per aggiungere una tupla dalla tabella dei prodotti
      possiamo direttamente utilizzare dati che provengono da una form, salvo per quegli elementi della tupla di prodotti
      che definisco all'interno dell'array $guarded , cioè evito che questi campi vengano assegnati in maniera malevola
      dall'acquisizione dei dati della form */
    public $timestamps = false;

    public function getPrice($withDiscount = false) {
        $price = $this->prezzo;
        if ($withDiscount == true && $this->sconto > 0) {
            $discount = ($price * $this->sconto) / 100;
            $price = round($price - $discount, 2);
        }
        return $price;
    }

    // Realazione One-To-One con SubCategory
    public function prodCat() {
        return $this->hasOne(SubCategory::class, 'id', 'sottocategoria');
    }

}
