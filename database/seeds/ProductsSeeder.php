<?php

use App\Product;
use App\StatusCar;
use App\TypeProduct;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $type_product_pozole = TypeProduct::where('type', 'Pozole')->value('id');
        $type_product_tacos = TypeProduct::where('type', 'Tacos')->value('id');
        $type_product_postre = TypeProduct::where('type', 'Postre')->value('id');
        $type_product_bebida = TypeProduct::where('type', 'Bebida')->value('id');
        $type_product_pizza = TypeProduct::where('type', 'Pizza')->value('id');
        

        Product::create([
            'name' => 'Familiar de Queso',
            'price' => 150,
            'description' => 'Sólo queso en esta pizza para compartir con muchas personas.',
            'type_products_id' => $type_product_pizza,
        ]);

        Product::create([
            'name' => 'Vegetariana',
            'price' => 140,
            'description' => 'Una combinación de ricos ingredientes que harán que tu estómago agradezca.',
            'type_products_id' => $type_product_pizza,
        ]);

        Product::create([
            'name' => 'Individual Peperoni',
            'price' => 150,
            'description' => 'No te preocupes si estás solo y quieres comer algo. Esta pizza es ideal para ti.',
            'type_products_id' => $type_product_pizza,
        ]);

        Product::create([
            'name' => 'Individual de Queso',
            'price' => 160,
            'description' => 'No te preocupes si estás solo y quieres comer algo. Esta pizza con un solo ingrediente de queso es ideal para ti.',
            'type_products_id' => $type_product_pizza,
        ]);

        Product::create([
            'name' => 'Familiar de Peperoni con orillas rellenas de Queso',
            'price' => 150,
            'description' => 'La perfecta Pizza Familiar para compartir con las orillas relleneas de queso ideales para satisfacer hasta el hambre de un elefante.',
            'type_products_id' => $type_product_pizza,
        ]);

        Product::create([
            'name' => 'Familiar Hawaiana',
            'price' => 199,
            'description' => 'Una receta muy peculiar para esta pizza pero perfecta para compartir con todos',
            'type_products_id' => $type_product_pizza,
        ]);
/* ------------------------------------ POSTRES -------------------------------------------- */
        Product::create([
            'name' => 'Pastel de Fresa y Chocolate',
            'price' => 50,
            'description' => 'El perfecto pastel para el cumpleaños ideal, disfruta desu delicioso sabor a chocolate.',
            'type_products_id' => $type_product_postre,
        ]);
        Product::create([
            'name' => 'Pack de 4 Muffins Combinados',
            'price' => 80,
            'description' => 'Ordénalos a tu gusto de acuerdoa a su sabor, increible para compartir o estando solo si así lo prefieres.',
            'type_products_id' => $type_product_postre,
        ]);
        Product::create([
            'name' => 'Rebanada de pastel de Fresa y Moras',
            'price' => 75,
            'description' => 'Dos ingredientes que hacen a una rebanada de pastel irresistible de comer.',
            'type_products_id' => $type_product_postre,
        ]);
        Product::create([
            'name' => 'Pack de Encanelados',
            'price' => 30,
            'description' => 'Ideal para después de la comida unos encanelados con receta dulce especial.',
            'type_products_id' => $type_product_postre,
        ]);
        Product::create([
            'name' => 'Pack de donas al gusto',
            'price' => 22,
            'description' => 'Tu escoges las donas a tu gusto y nosotros las llevamos. Muchos sabores una sola orden.',
            'type_products_id' => $type_product_postre,
        ]);
        Product::create([
            'name' => 'Pay de limón',
            'price' => 160,
            'description' => 'El mejor postre que haya existido jamás y que mejor probarlo desde Food2Go.',
            'type_products_id' => $type_product_postre,
        ]);
    }
}
