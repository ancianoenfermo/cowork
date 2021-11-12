@component('mail::message')
# Hola Chelo
<br>
<p>Has recibido un nuevo mensaje desde el formulario de contacto de {{config('app.name')}}</p>
<p>
Enviado por {{$name}}
Correo electrónico {{$correo}}
Telefóno = {{$telefono}}
</p>
<br><br>
{{$mensaje}}
@endcomponent
