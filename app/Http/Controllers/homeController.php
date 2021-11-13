<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Artesaos\SEOTools\Facades\SEOTools;



class HomeController extends Controller
{
    public function __invoke()
    {
        $title = "Coworking en Santiago de Compostela al lado del Corte Ingles";
        $descripcion = "Despachos y puestos nómadas y fijos cerca del Corte Ingles";
        $image = asset('storage/img/social/Facebook.jpg');
        SEOTools::setTitle($title);
        SEOTools::setDescription($descripcion);
        SEOTools::setCanonical(URL::current());

        SEOTools::opengraph()->setUrl(URL::current());
        SEOTools::opengraph()->addImage($image);
        SEOTools::opengraph()->addProperty('type','website');

        SEOTools::twitter()->setSite('site','@quelqum');
        SEOTools::twitter()->setImage($image);
        SEOTools::twitter()->setType('type','summary_large_image');




        return view('home');
    }
}

