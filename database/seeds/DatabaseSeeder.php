<?php

use App\User;
use App\Product;
use App\Category;
use App\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
=======
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
>>>>>>> 406525d5d34894746240cbfa876d1ccd4eb5df21
        User::truncate();
        Category::truncate();
        Product::truncate();
        Transaction::truncate();
        DB::table('category_product')->truncate();
<<<<<<< HEAD
        $cantidadUsuarios = 1000;
=======
        $cantidadUsuarios = 200;
>>>>>>> 406525d5d34894746240cbfa876d1ccd4eb5df21
        $cantidadCategorias = 30;
        $cantidadProductos = 1000;
        $cantidadTransacciones = 1000;
        factory(User::class, $cantidadUsuarios)->create();
        factory(Category::class, $cantidadCategorias)->create();
		factory(Product::class, $cantidadTransacciones)->create()->each(
			function ($producto) {
				$categorias = Category::all()->random(mt_rand(1, 5))->pluck('id');
				$producto->categories()->attach($categorias);
			}
		);        
        factory(Transaction::class, $cantidadTransacciones)->create();
    }
}
