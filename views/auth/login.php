<div class="contenedor login">
    <?php include_once __DIR__ .'/../templates/nombre-sitio.php'; ?>
   <div class="contenedor-sm">
       <p class="descripcion-pagina">Iniciar sesión</p>
       <form action="/" method="POST" class="formulario">
           <div class="campo">
               <label for="email">Email</label>
               <input 
                    type="email"
                    id="email"
                    placeholder="Tu email"
                    name="email"
               />
           </div>

           <div class="campo">
               <label for="password">Password</label>
               <input 
                    type="password"
                    id="password"
                    placeholder="Tu contraseña"
                    name="password"
               />
           </div>
           <input type="submit" class="boton centrado" value="Iniciar sesion">
       </form>
       <div class="acciones">
           <a href="/olvide">Olvidé mi contraseña</a>
       </div>
   </div>
</div>