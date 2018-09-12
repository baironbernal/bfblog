<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create(['name' => 'Portada']);
		Category::create(['name' => 'Internacional']);
		Category::create(['name' => 'Nacional']);
		Category::create(['name' => 'Local']);
		Category::create(['name' => 'Sociedad']);
		Category::create(['name' => 'Cultura']);
		Category::create(['name' => 'Cartelera']);
		Category::create(['name' => 'Anuncios']);
		Category::create(['name' => 'Deportes']);
		Category::create(['name' => 'Economía']);
		Category::create(['name' => 'Bolsa']);
		Category::create(['name' => 'Agenda']);
		Category::create(['name' => 'Pasatiempos']);
		Category::create(['name' => 'Radio y televisión']);
    }
}
