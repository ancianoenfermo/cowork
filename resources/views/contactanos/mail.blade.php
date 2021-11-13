@component('mail::message')
# Hola Chelo
<br>
<p>Has recibido un nuevo mensaje desde el formulario de contacto de {{config('app.name')}}</p>
<p>Enviado por: {{$name}}</p>
<p>Correo: {{$correo}}</p>
<p>Telefóno: {{$telefono}}</p>
<br><br>
<p>{{$mensaje}}</p>
@endcomponent
