<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    // const DESCPROD = '<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. </p><p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>';

    public function run() {

        DB::table('categoria')->insert([
            ['nome' => 'Computer'],
            ['nome' => 'Display'],
            ['nome' => 'Dispositivi Mobile'],
            ['nome' => 'Foto e Video'],
        ]);
        DB::table('sottocategoria')->insert([
            ['nome' => 'Fotocamere', 'categoria' => 'Foto e Video'],
            ['nome' => 'Videocamere', 'categoria' => 'Foto e Video'],
            ['nome' => 'Action cam', 'categoria' => 'Foto e Video'],
            ['nome' => 'Treppiedi', 'categoria' => 'Foto e Video'],
            ['nome' => 'Tablet', 'categoria' => 'Dispositivi Mobile'],
            ['nome' => 'Smartphone', 'categoria' => 'Dispositivi Mobile'],
            ['nome' => 'Laptop', 'categoria' => 'Computer'],
            ['nome' => 'Desktop', 'categoria' => 'Computer'],
            ['nome' => 'TV', 'categoria' => 'Display'],
            ['nome' => 'Monitor', 'categoria' => 'Display'],    
        ]);
        /*
          DB::table('product')->insert([
          ['name' => 'NetBook Modello2', 'catId' => 5,
          'descShort' => 'Caratteristiche NetBook2', 'descLong' => self::DESCPROD,
          'price' => 219.34, 'discountPerc' => 12, 'discounted' => 0, 'image' => ''],
          ['name' => 'HardDisk Modello2', 'catId' => 6,
          'descShort' => 'Caratteristiche HardDisk2', 'descLong' => self::DESCPROD,
          'price' => 86.37, 'discountPerc' => 15, 'discounted' => 1, 'image' => 'Italy.gif'],
          ['name' => 'Desktop Modello1', 'catId' => 3,
          'descShort' => 'Caratteristiche Desktop1', 'descLong' => self::DESCPROD,
          'price' => 1230.49, 'discountPerc' => 25, 'discounted' => 1, 'image' => 'Brazil.gif'],
          ['name' => 'Laptop Modello1', 'catId' => 4,
          'descShort' => 'Caratteristiche Laptop1', 'descLong' => self::DESCPROD,
          'price' => 455.37, 'discountPerc' => 17, 'discounted' => 1, 'image' => ''],
          ['name' => 'Laptop Modello2', 'catId' => 4,
          'descShort' => 'Caratteristiche Laptop1', 'descLong' => self::DESCPROD,
          'price' => 1889.67, 'discountPerc' => 15, 'discounted' => 1, 'image' => 'Argentina.gif'],
          ['name' => 'Netbook Modello3', 'catId' => 5,
          'descShort' => 'Caratteristiche NetBook3', 'descLong' => self::DESCPROD,
          'price' => 259.99, 'discountPerc' => 17, 'discounted' => 0, 'image' => 'Red Apple.gif'],
          ['name' => 'Laptop Modello3', 'catId' => 4,
          'descShort' => 'Caratteristiche Laptop3', 'descLong' => self::DESCPROD,
          'price' => 998.99, 'discountPerc' => 23, 'discounted' => 1, 'image' => 'UK.gif'],
          ['name' => 'HardDisk Modello1', 'catId' => 6,
          'descShort' => 'Caratteristiche HardDisk1', 'descLong' => self::DESCPROD,
          'price' => 88.93, 'discountPerc' => 5, 'discounted' => 0, 'image' => 'USA.gif'],
          ['name' => 'HardDisk Modello4', 'catId' => 6,
          'descShort' => 'Caratteristiche HardDisk4', 'descLong' => self::DESCPROD,
          'price' => 78.66, 'discountPerc' => 7, 'discounted' => 01, 'image' => 'Ukraine.gif']
          ]);
         * */
    }

}
