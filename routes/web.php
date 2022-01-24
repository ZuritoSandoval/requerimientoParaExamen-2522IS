<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mangas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $anime = new Mangas();
    $anime->titulo = "Binvenido a nuestra pagina";
    $anime->subtitulo = "Sobre nuestra pagina";
    $anime->descripcion = "En esta pagina podras ver los mangas de animes mas populares en estos tiempos, como por ejemplo: Dragon ball super, One pice, Shumatsu no valkyrie entre otros.";
    return view('blog.index',['anime' => $anime]);
}) ->name('index');

Route::get('/db', function () {
    $anime = new Mangas();
    $anime->titulo = "Dragon ball super";
    $anime->publicacion = "5 de julio de 2015";
    $anime->genero = "Acción, aventura, comedia, artes marciales, fantasía";
    $anime->tomos = "80";
    $anime->subtitulo = "Descripcion";
    $anime->descripcion = "Dragon Ball Super (ドラゴンボール超, Doragon Bōru Sūpā) posee un manga promocional dibujado de manos del artista Toyotaro, adaptando la historia base de Akira Toriyama, quien revisa este cómic, de la misma forma en la que Toei Animation Company lo hace para el anime. Actualmente, el manga posee al menos 80 capítulos distribuidos.";
    return view('blog.db',['anime' => $anime]);
}) ->name('db'); 

Route::get('/kny', function () {
    $anime = new Mangas();
    $anime->titulo = "Kimetsu no Yaiba";
    $anime->publicacion = "15 de febrero de 2016";
    $anime->genero = "Ficción de aventuras, Fantasía oscura, Artes marciales";
    $anime->tomos = "205";
    $anime->subtitulo = "Descripcion";
    $anime->descripcion = "Demon Slayer: Kimetsu no Yaiba nos presenta a Kamado Tanjiro, un chico joven, bastante inteligente y con un corazón que no le abe en el pecho. Este vive son su familia y gana dinero vendiendo carbón. Pero todo cambia cuando su familia es atacada y asesinada.
    Kamado descubre que ha sido culpa de Oni, un demonio bastante sobrenatural y sanguinario. Este, junto a su hermana Nezuko son los únicos supervivientes al ataque, pero su hermana fue convertida por el malvado demonio en una de su especie.
    Tanjiro pasa de ser ese chico bueno que vendía carbón a un asesino de demonios para así poder ayudar a su hermana a volver a su forma humana nuevamente y vengar, por otro lado, la muerte de su familia y de sus seres queridos.";
    return view('blog.kny',['anime' => $anime]);
}) ->name('kny');

Route::get('/snv', function () {
    $anime = new Mangas();
    $anime->titulo = "Shumatsu no valkyrie";
    $anime->publicacion = "25 de noviembre de 2017";
    $anime->genero = "Acción, drama, sobrenatural";
    $anime->tomos = "57";
    $anime->subtitulo = "Descripcion";
    $anime->descripcion = "Los dioses hacen una reunión para decidir si dejan a la humanidad vivir o morir, arreglarlos o destruirlos. Pero, una solitaria Valkyrie les da una propuesta de dejar a los dioses y a la humanidad pelear una última batalla como esperanza para los humanos de seguir sobreviviendo. 13 dioses y 13 humanos campeones en 1 a 1 para decidir la supervivencia de los humanos.";
    return view('blog.snv',['anime' => $anime]);
}) ->name('snv');