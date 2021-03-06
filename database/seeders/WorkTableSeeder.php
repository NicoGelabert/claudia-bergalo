<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Work;

use Illuminate\Support\Facades\DB;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            'name' => 'Sodimac Sueño',
            'type' => 'audio',
            'category' => 'Acting Publicidad',
            'length' => '00:36',
            'location' => 'imperdibles',
            'url' => '/storage/audios/imperdibles/sodimac-02.mp3',
            'image' => '/storage/images/imperdibles/sodimac.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Poett Primavera',
            'type' => 'video',
            'category' => 'Publicidad',
            'length' => '00:06',
            'location' => 'imperdibles',
            'url' => 'https://www.youtube.com/watch?v=oTNoFHR69h8',
            'image' => '/storage/images/imperdibles/poett.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Palmas del Pilar y Plaza Oeste',
            'type' => 'audio',
            'category' => 'Publicidad',
            'length' => '00:26',
            'location' => 'imperdibles',
            'url' => '/storage/audios/imperdibles/palmas-del-pilar-y-plaza-oeste.mp3',
            'image' => '/storage/images/imperdibles/plaza-oeste.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Hitachi',
            'type' => 'video',
            'category' => 'Presentación de marca',
            'length' => '02:49',
            'location' => 'imperdibles',
            'url' => 'https://www.youtube.com/watch?v=STj89hWtjbM',
            'image' => '/storage/images/imperdibles/hitachi.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Matarazzo Integral',
            'type' => 'video',
            'category' => 'Publicidad',
            'length' => '00:16',
            'location' => 'imperdibles',
            'url' => 'https://www.youtube.com/watch?v=qtYKVoXLEHA',
            'image' => '/storage/images/imperdibles/matarazzo_integral.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Mc Donald´s',
            'type' => 'audio',
            'category' => 'E-learning Neutro',
            'length' => '00:42',
            'location' => 'imperdibles',
            'url' => '/storage/audios/imperdibles/mcdonalds.mp3',
            'image' => '/storage/images/imperdibles/mcdonalds.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Campo Limpio',
            'type' => 'video',
            'category' => 'Tutorial',
            'length' => '01:05',
            'location' => 'ultimos',
            'url' => 'https://www.youtube.com/watch?v=ePo4oQ2rUPo',
            'image' => '/storage/images/ultimos/campolimpio.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'AMIA',
            'type' => 'video',
            'category' => 'Institucional',
            'length' => '00:47',
            'location' => 'ultimos',
            'url' => 'https://www.youtube.com/watch?v=sNoO6H5F4QI',
            'image' => '/storage/images/ultimos/amia.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Planta Agencia Creativa',
            'type' => 'video',
            'category' => 'Publicidad',
            'length' => '03:40',
            'location' => 'ultimos',
            'url' => 'https://www.youtube.com/watch?v=IjBDvL7SS5A',
            'image' => '/storage/images/ultimos/planta.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Skyteam',
            'type' => 'audio',
            'category' => 'Publicidad Neutro',
            'length' => '00:26',
            'location' => 'ultimos',
            'url' => '/storage/audios/ultimo/skyteam.mp3',
            'image' => '/storage/images/ultimos/skyteam.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Telecom',
            'type' => 'audio',
            'category' => 'E-learning',
            'length' => '00:59',
            'location' => 'ultimos',
            'url' => '/storage/audios/ultimo/telecom.mp3',
            'image' => '/storage/images/ultimos/telecom.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Chat Robot',
            'type' => 'video',
            'category' => 'Tutorial',
            'length' => '01:49',
            'location' => 'ultimos',
            'url' => 'https://www.youtube.com/watch?v=2XCkNqskw7M',
            'image' => '/storage/images/ultimos/chat-robot.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Cuentos por contar',
            'type' => 'audio',
            'category' => 'Narración',
            'length' => '04:04',
            'location' => 'mezcladito',
            'url' => '/storage/audios/mezcladito/cuentos-x-contar.mp3',
            'image' => '/storage/images/mezcladito/cuentosxcontar.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'AMIA',
            'type' => 'video',
            'category' => 'Institucional',
            'length' => '00:56',
            'location' => 'mezcladito',
            'url' => 'https://www.youtube.com/watch?v=wIfXqlRGtRI',
            'image' => '/storage/images/mezcladito/amia.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Baggio de la Huerta',
            'type' => 'video',
            'category' => 'Publicidad',
            'length' => '00:12',
            'location' => 'mezcladito',
            'url' => 'https://www.youtube.com/watch?v=9vGwVqZBzh8',
            'image' => '/storage/images/mezcladito/baggio-de-la-huerta.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Azistia',
            'type' => 'audio',
            'category' => 'Contestador teléfonico',
            'length' => '00:42',
            'location' => 'mezcladito',
            'url' => '/storage/audios/mezcladito/azistia.mp3',
            'image' => '/storage/images/mezcladito/azistia.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Sodimac Promo',
            'type' => 'audio',
            'category' => 'Publicidad',
            'length' => '00:24',
            'location' => 'mezcladito',
            'url' => '/storage/audios/mezcladito/sodimac-05.mp3',
            'image' => '/storage/images/mezcladito/sodimac-04.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'La Segunda Seguros',
            'type' => 'audio',
            'category' => 'E-learning',
            'length' => '00:51',
            'location' => 'mezcladito',
            'url' => '/storage/audios/mezcladito/la-segunda-seguros.mp3',
            'image' => '/storage/images/mezcladito/la-segunda-seguros.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Demo publicidad',
            'type' => 'audio',
            'category' => 'publicidad',
            'length' => '00:57',
            'location' => 'demo',
            'url' => '/storage/audios/democlau/demopublicidad.mp3',
            'image' => '/storage/images/democlau/demopublicidad.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Demo Acting',
            'type' => 'audio',
            'category' => 'acting',
            'length' => '00:54',
            'location' => 'demo',
            'url' => '/storage/audios/democlau/demoacting.mp3',
            'image' => '/storage/images/democlau/demoacting.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Demo Niñ@s',
            'type' => 'audio',
            'category' => 'Voces de niñ@s',
            'length' => '00:53',
            'location' => 'demo',
            'url' => '/storage/audios/democlau/demoninios.mp3',
            'image' => '/storage/images/democlau/demoninios.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Guía de adiestramiento de cachorros para niñ@s',
            'type' => 'audio',
            'category' => 'Lucy Williams',
            'length' => '00:57',
            'location' => 'audiolibros',
            'url' => '/storage/audios/audiolibros/guia-de-adiestramiento-de-cachorros-para-ninxs.mp3',
            'image' => '/storage/images/audiolibros/guia-de-adiestramiento-de-cachorros-para-ninxs.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Los peces de octubre',
            'type' => 'audio',
            'category' => 'Alvaro Morales Aguilar',
            'length' => '01:22',
            'location' => 'audiolibros',
            'url' => '/storage/audios/audiolibros/los-peces-de-octubre.mp3',
            'image' => '/storage/images/audiolibros/los-peces-de-octubre.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Coro',
            'type' => 'audio',
            'category' => 'Angélica Gorodischer',
            'length' => '01:00',
            'location' => 'audiolibros',
            'url' => '/storage/audios/audiolibros/coro.mp3',
            'image' => '/storage/images/audiolibros/coro.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'El deseo prohibido de Doug',
            'type' => 'audio',
            'category' => 'Darlis Stefany',
            'length' => '03:19',
            'location' => 'audiolibros',
            'url' => '/storage/audios/audiolibros/el-deseo-prohibido-de-doug.mp3',
            'image' => '/storage/images/audiolibros/el-deseo-prohibido-de-doug.jpg',
        ]);
        DB::table('works')->insert([
            'name' => 'Los miedos de Ethan',
            'type' => 'audio',
            'category' => 'Darlis Stefany',
            'length' => '01:06',
            'location' => 'audiolibros',
            'url' => '/storage/audios/audiolibros/los-miedos-de-ethan.mp3',
            'image' => '/storage/images/audiolibros/los-miedos-de-ethan.jpg',
        ]);
    }
}
