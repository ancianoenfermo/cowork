<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

use Exception;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;

use Illuminate\Support\Facades\Redirect;



class HomeController extends Controller
{
    public function index()
    {
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
            return back()->with("error","El mensaje NO se ha podido enviar".$e);

        }


    }

}


