
<div class="container-fluid fut">
    <div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=ayuda"); ?>
            <?php while (have_posts()) : the_post(); ?> 

                <h3> <?php the_title(); ?> </h3>           
                <a href="<?php the_permalink(); ?>"><h4>CONTACTA CON NOSOTROS</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>ACERCA DE ZOUND INDUSTRIES</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>CLIENTES COMERCIALES</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>MINORISTAS AUTORIZADOS</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>ENTREGA Y GASTOS DE EVIVO</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>CAMBIOS Y DEVOLUCIONES</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>MANUALES DE USUARIO</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>QUEJAS Y RECLAMACIONES</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>CENTRO DE ASISTENCIA</h4></a>
                            
            <?php endwhile; ?> 
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>


            <div class="row prensa">

                <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=editoriales"); ?>
                <?php while (have_posts()) : the_post(); ?> 

                    <h3> <?php the_title(); ?> </h3>
                    <a href="<?php the_permalink(); ?>"><h4>BACKSTAGE</h4></a>
                    <a href="<?php the_permalink(); ?>"><h4>SALA DE PRENSA</h4></a>
                        
                    
                <?php endwhile; ?> 
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>

        </div>
        <div class="col-md-3">

            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=politicas"); ?>
            <?php while (have_posts()) : the_post(); ?> 
                    
                <h3> <?php the_title(); ?> </h3>
                <a href="<?php the_permalink(); ?>"><h4>SEGURIDAD</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>TÉRMINOS DE USO</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>TÉRMINOS DE COMPRA</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>PAGOS</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>DECLARACIÓN DE CONFORMIDAD</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>GARANTÍA GLOBAL</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>POLÍTICA DE PRIVACIDAD</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>RGPD</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>COOKIES</h4></a>
                <a href="<?php the_permalink(); ?>"><h4>COMPROMETIDOS CON LA ACCESIBILIDAD</h4></a>
                    
                    
            <?php endwhile; ?> 
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

        </div>
        <div class="col-md-2">
            
        </div>
        <div class="col-md-4 entrar">
            <div class="row"> 

                <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=cuenta"); ?>
                <?php while (have_posts()) : the_post(); ?> 

                    <h3> <?php the_title(); ?> </h3>
                    <p> <?php the_content(); ?> </p>
                    <a class="hola" href="<?php the_permalink(); ?>">INICIAR SESIÓN</a>
                    <a class="hola" href="<?php the_permalink(); ?>">CREAR CUENTA</a>
                        
                    
                <?php endwhile; ?> 
                <?php else : ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
        </div>
           
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=socialmedia"); ?>
        <?php while (have_posts()) : the_post(); ?> 
                        
            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                        
        <?php endwhile; ?> 
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?>
            
        </div>
    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<?php wp_footer(); ?>
</body>
</html>