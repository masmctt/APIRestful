Hola {{$user->name}}

Has cambiado tu correo electrónico. Por favor verifica la nueva dirección usando el siguiente botón:

{{route('verify', $user->verification_token)}}
