<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nikolas Admin',
            'nick' => 'Azalea',
            'bio' => 'EU SOU UM DEUS CRIATURA RIDICULA!!!!!!',
            'email' => 'nikmap@hotmail.com',
            'profile_photo_path' => 'nikolas-admin.png',
            'password' => bcrypt('12345678'),
            'is_admin' => '1'
        ]);
        DB::table('categorias')->insert([
            'titulo' => 'Testes'
        ]);
        DB::table('tweets')->insert([
            'user_id' => '1',
            'titulo' => 'Ola Mundo',
            'content' => 'Primeiro tópico criado',
            'categoria' => 'Testes'
        ]);
        DB::table('respostas')->insert([
            'user_id' => '1',
            'tweet_id' => '1',
            'content' => 'Primeira resposta criada'
        ]);
    }
}
