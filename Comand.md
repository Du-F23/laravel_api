## Crear Modelos en Laravel

php artisan make:model Producto --all

## Creamos las tablas

php artisan migrate:fresh

## Creamos los seeders
php artisan migrate:fresh --seed

#### DatabaseSeeder 
$this->call(ProductoSeeder::class);

#### Producto datos

                'producto' => 'Refresco Coca Cola 600 ml'
                ,'existencias' => 15 
                ,'precio'=> 15
                ,'fotografia' => 'Refresco_Coca_Cola.jpg'
                ,'descripcion' => 'Refresco Coca Cola'
                ,'estatus' => 'Activo'
                ,'iva' => 16
                ,'created_at' => '2021-11-18 18:25'
                ,'updated_at' =>  '2021-11-18 18:25'

## Model Producto

    protected $table = 'productos';

    protected $fillable = [
                'producto'
                ,'existencias'
                ,'precio'=> 15
                ,'fotografia'
                ,'descripcion'
                ,'estatus'
                ,'iva'
                ,'created_at' => '2021-11-18 18:25'
                ,'updated_at' => '2021-11-18 18:25'
    ];