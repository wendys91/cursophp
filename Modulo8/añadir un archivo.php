<? php 
if (isset ($ _ [ 'texto']) POST) { 
  $ nombre = $ _POST [ 'texto']; 
  $ handle = fopen ( 'nombres.txt', 'a'); 
  fwrite ($ gestor, $ nombre "\ n".); 
  fclose ($ gestor); 
} 
?> 
<Form method = "post"> 
  Nombre: <input type = "text" name = "text" /> 
  <input type = "submit" name = "submit" /> 
</ form>
