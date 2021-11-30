<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Artesaos\SEOTools\Facades\SEOTools;
use Exception;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;

use Illuminate\Support\Facades\Redirect;



class HomeController extends Controller
{
    public function index()
    {
        $title = "COWORKING en Santiago de Compostela - Quelqum";
        $descripcion = "COWORKING en Santiago de Compostela. Puestos individuales, despachos privados y aulas de formación. 🐕 ¡¡ven con tu perro!!";
        $image = asset('storage/img/social/Facebook.jpg');
        SEOTools::setTitle($title);
        SEOTools::setDescription($descripcion);
        SEOTools::setCanonical(URL::current());
        SEOMeta::setRobots('index');

        SEOTools::opengraph()->setUrl(URL::current());
        SEOTools::opengraph()->addImage($image);
        SEOTools::opengraph()->addProperty('type','website');

        SEOTools::twitter()->setSite('site','@quelqum');
        SEOTools::twitter()->setImage($image);
        SEOTools::twitter()->setType('type','summary_large_image');




        return view('home');
    }

    public function store(Request $request)
    {

            $request->validate([
                'name' => 'required|string|min:5|max:50',
                'correo' => 'required|email',
                'mensaje' => 'required|string|min:5|max:1500',
            ]);

        try{
            mail::to('carlos.marti.mallen@gmail.com')->send(
                new ContactanosMailable(
                    $request->input("name"),
                    $request->input("correo"),
                    $request->input("telefono"),
                    $request->input("mensaje")
                )
            );
            return back()->with("succes","El mensaje se ha enviado");
        } catch (Exception $e) {
            return back()->with("error","El mensaje NO se ha podido enviar");

        }


    }

}

/*
try{
            mail::to('carlos.marti.mallen@gmail.com')->send(
                new ContactanosMailable(
                    $request->input("name"),
                    $request->input("correo"),
                    $request->input("telefono"),
                    $request->input("mensaje")
                )
            );
            return back()->with("succes","El mensaje se ha enviado");
        } catch (Exception $e) {
            return back()->with("error","El mensaje NO se ha podido enviar".$e);
        }


*/
