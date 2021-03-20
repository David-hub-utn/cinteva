Vue.component('formulario',{
    template:
 `
 <div id="formulario">
 <form action="pregh.php" method="post">
   <input type="text" placeholder="&#9000; Usuario" name="usuario">
   <input type="password" placeholder="&#128272; Contraseña" name="clave">
   <input type="submit" value="Ingresar">
 </form>
 </div>
 
 `
 
})