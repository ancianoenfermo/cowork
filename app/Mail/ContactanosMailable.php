<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $name;
    public $correo;
    public $telefono;
    public $mensaje;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $correo, $telefono, $mensaje)
    {
        $this->name = $name;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject("Formulario de contacto - ". config("app.name"))
        ->markdown('contactanos.mail');
    }
}
