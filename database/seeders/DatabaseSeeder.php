<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Categorie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            
        Categorie::factory()->create([
            'nom_categorie' => 'Evrything About Benay',
            'info_categorie' => ' Street The Garden City Of Miraflores, 
                                Lima - Perú Av. Sol #9876',
            'image_url' => 'popular1.jpg',
        ]);
        Categorie::factory()->create([
            'nom_categorie' => 'Sebagh',
            'info_categorie' => ' Street The Garden City Of Miraflores, 
                                Lima - Perú Av. Sol #9876',
            'image_url' => 'popular2.jpg',
        ]);
        Categorie::factory()->create([
            'nom_categorie' => 'Gabas',
            'info_categorie' => ' Street The Garden City Of Miraflores, 
                                Lima - Perú Av. Sol #9876',
            'image_url' => 'popular3.jpg',
        ]);
        Categorie::factory()->create([
            'nom_categorie' => 'Zlayji',
            'info_categorie' => ' Street The Garden City Of Miraflores, 
                                Lima - Perú Av. Sol #9876',
            'image_url' => 'popular4.jpg',
        ]);
        Categorie::factory()->create([
            'nom_categorie' => 'Hawfar',
            'info_categorie' => ' Street The Garden City Of Miraflores, 
                                Lima - Perú Av. Sol #9876',
            'image_url' => 'popular5.jpg',
        ]);
        \App\Models\Ouvrier::factory(5)->create();
    }

}
