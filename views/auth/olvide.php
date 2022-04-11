<div class="contenedor olvide">
    <?php include_once __DIR__ .'/../templates/nombre-sitio.php'; ?>
   <div class="contenedor-sm">
       <p class="descripcion-pagina">Recuperar cuenta</p>
       <form action="/olvide" method="POST" class="formulario">
           <div class="campo">
               <label for="email">Email</label>
               <input 
                    type="email"
                    id="email"
                    placeholder="Tu email"
                    name="email"
               />
           </div>

           <input type="submit" class="boton centrado" value="Enviar instrucciones">
       </form>
       <div class="acciones">
           <a href="/">Iniciar sesión</a>
       </div>
   </div>
</div>