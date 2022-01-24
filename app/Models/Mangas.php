<?php

namespace App\Models;

class Mangas
{
   public $titulo;
   public $subtitulo;
   public $genero;
   public $tomos;
   public $descripcion;
   public $publicaion;

   public function mostrarTituloHome(){
   $titulo = "Binvenido a nuestra pagina";
   }

   public function mostrarSubtituloHome(){
   $subtitulo = "Sobre nuestra pagina";
   }

   public function mostrarDescripcionHome(){
   $descripcion = "En esta pagina podras ver los mangas de animes mas populares en estos tiempos, como por ejemplo: Dragon ball super, One pice, Shumatsu no valkyrie entre otros.";
   }
}
