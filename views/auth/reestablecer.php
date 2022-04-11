<div class="contenedor reestablecer">
    <?php include_once __DIR__ .'/../templates/nombre-sitio.php'; ?>
   <div class="contenedor-sm">
       <p class="descripcion-pagina">Ingresa nueva contraseña</p>
       <form action="/" method="POST" class="formulario">
           

           <div class="campo">
               <label for="password">Password</label>
               <input 
                    type="password"
                    id="password"
                    placeholder="Tu contraseña"
                    name="password"
               />
           </div>
           <input type="submit" class="boton centrado" value="Guardar contraseña">
       </form>
       <div class="acciones">
           <a href="/">Iniciar sesión</a>
       </div>
   </div>
</div>