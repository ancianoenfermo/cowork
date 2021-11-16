<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Exception;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOMeta::setRobots('noindex');
        return view('contactanos.index');
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
