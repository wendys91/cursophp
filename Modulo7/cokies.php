setcookie (nombre, valor, expirar, ruta, dominio seguro, httponly); 
<? Php? 
$ Value = "John"; 
setcookie ( "usuario", el valor de $, el tiempo () + (86400 * 30), '/'); 

if (isset ($ _ [ 'usuario'] COOKIE)) { 
  echo "El valor es:". $ _COOKIE [ 'usuario']; 
} 
// Salidas "El valor es: John" 
>? 