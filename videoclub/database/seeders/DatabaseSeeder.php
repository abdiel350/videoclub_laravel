<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
/*
use App\Models\Movie; //Asegúrando la importacion del modelo movie*/

class DatabaseSeeder extends Seeder
{
   /*  private $arrayPeliculas = [
        [
            'title' => 'La chaqueta metálica',
            'year' => '1987',
            'director' => 'Stanley Kubrick',
            'poster' => 'https://upload.wikimedia.org/wikipedia/en/9/99/Full_Metal_Jacket_poster.jpg',
            'rented' => false,
            'synopsis' => 'Un grupo de reclutas se prepara en un centro de entrenamiento militar...'
        ],
        [
            'title' => 'El Padrino',
            'year' => '1972',
            'director' => 'Francis Ford Coppola',
            'poster' => 'https://upload.wikimedia.org/wikipedia/en/1/1c/Godfather_ver1.jpg',
            'rented' => false,
            'synopsis' => 'La historia de la familia Corleone, una de las más poderosas de la mafia italoamericana...'
        ]
        // Agrega más películas aquí si lo deseas
    ];*/

    public function run()
    {
      //self::seedCatalog();
        self::seedUsers();

        $this->command->info('Tabla películas inicializada con datos!');
        $this->command->info('Tabla usuarios inicializada con datos!');
    }

   /*rivate function seedCatalog()
    {
        // Eliminar el contenido de la tabla
        DB::table('movies')->delete();

        // Insertar las películas en la base de datos
        foreach ($this->arrayPeliculas as $pelicula) {
            $p = new Movie();
            $p->title = $pelicula['title'];
            $p->year = $pelicula['year'];
            $p->director = $pelicula['director'];
            $p->poster = $pelicula['poster'];
            $p->rented = $pelicula['rented'];
            $p->synopsis = $pelicula['synopsis'];
            $p->save();
        }
    }*/
    private function seedUsers()
    {
        // Borra el contenido de la tabla users
        DB::table('users')->delete();

        // Crear usuarios de prueba
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'), // Encriptado
        ]);

        User::create([
            'name' => 'Usuario1',
            'email' => 'user@example.com',
            'password' => Hash::make('password123'), // Encriptado
        ]);
    }


}
