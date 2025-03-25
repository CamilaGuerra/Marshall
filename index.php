<?php get_header(); ?> 
<!---------------------- INICIO DE LOOP INICIO---------------------->
<div class="container-fluid arriba">
    <div class="row bg-header" style="margin-top:-18px;">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=inicio"); ?>
            <?php while (have_posts()) : the_post(); ?> 
            <div class="col-md-6 primertxt">
                <h1> <?php the_title(); ?> </h1>
                <h3> <?php the_content(); ?> </h3> <!-- PARRAFO DE TEXTO -->
            </div>
            <?php endwhile; ?> 
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
    </div>
</div>
<!---------------------- INICIO DE PRESENTACIÓN---------------------->

<div class="container-fluid fondogris" data-darkreader-inline-bgimage="" data-darkreader-inline-bgcolor=""> 
    <div class="container colores">
        <div class="row">
                <!---------------------- INICIO DE PRIMER SLIDER (slider hecho con plugin)---------------------->

                <div class="col-md-6 fotos">
                    <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=slider"); ?>
                    <?php while (have_posts()) : the_post(); ?> 
                       
                        <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                        
                    <?php endwhile; ?> 
                    <?php else : ?>  
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>

                <!---------------------- INICIO DE EMBERTON---------------------->
                <div class="col-md-6 texto" data-darkreader-inline-color="">

                    <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=presentacion"); ?>
                    <?php while (have_posts()) : the_post(); ?> 
                    <h2> <?php the_title(); ?> </h2>
                    <div class="iconos">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>
                    </div>
                    <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                    <div class="container-fluid">
                        <div class="row elrow">
                            <div class="col-md-2">
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <div class="col-md-6 carro">
                                <a href="<?php the_permalink(); ?>">AÑADIR AL CARRITO</a>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?> 
                    <?php else : ?>  
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>   
                
        </div>
    </div>            
</div>

<!---------------------- INICIO DE LOOP CARACTERÍSTICAS---------------------->


<div class="fondon">

    
    <div class="container-fluid negro text-light">
        <div class="row">

            <!---------------------- INICIO DE LOOP i1 (fondo foto negra)---------------------->
            <div class="col-md-6">
                <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=i1"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                    <i class="fa-solid fa-wave-square fa-7x"></i>
                    <h2> <?php the_title(); ?> </h2>
                    <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                    
                <?php endwhile; ?> 
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>

            <!---------------------- INICIO DE LOOP i2 ---------------------->

            <div class="col-md-6">
                <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=i2"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                    <i class="fa-solid fa-clock-rotate-left fa-7x"></i>
                    <h2> <?php the_title(); ?> </h2>
                    <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                    
                <?php endwhile; ?> 
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>

    <!---------------------- INICIO DE LOOP AGUA (fondo en agua)---------------------->

    <div class="container-fluid agua">
        <div class="row">
            <div class="col-md-6 nothing">
    
            </div>
            <div class="col-md-6">
                <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=agua"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                   
                    <h2> <?php the_title(); ?> </h2>
                    <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                    
                <?php endwhile; ?> 
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>

    <!---------------------- INICIO DE LOOP BOTONES (foto de emberton botones superiores)---------------------->

    <div class="container-fluid botones">
        <div class="row">
            <div class="col-md-12 relleno">
                    
            </div>
            <div class="col-md-12 control">
                <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=botones"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                     <h2> <?php the_title(); ?> </h2>
                    <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->      
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                </div>   
                <?php endwhile; ?> 
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
    
        </div>
    </div>

    <!---------------------- INICIO DE LOOP PORTABILIDAD (mano con tatuajes)---------------------->

    <div class="container-fluid mano">
        <div class="row">
            <div class="col-md-6">
                <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=portabilidad"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                   
                    <h2> <?php the_title(); ?> </h2>
                    <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                    
                <?php endwhile; ?> 
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="col-md-6 manito">
    
            </div>
        </div>
    </div>

    <!---------------------- INICIO DE LOOP BLUETOOTH (segunda mano con tatuajes)---------------------->
    <div class="container-fluid bluetooth">
        <div class="row">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6">
                <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=bluetooth"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                   
                    <h2> <?php the_title(); ?> </h2>
                    <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                    
                <?php endwhile; ?> 
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
                
        </div>
    </div>

    <!---------------------- INICIO DE LOOP DISEÑOS (los 4 colores en una foto)---------------------->

    <div class="container-fluid disenios">
            <div class="row">
                
                    <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=diseno"); ?>
                    <?php while (have_posts()) : the_post(); ?> 
                    <div class="col-md-12">
                        <h2> <?php the_title(); ?> </h2>
                        <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                    </div>    
                    <?php endwhile; ?> 
                    <?php else : ?>  
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                
                <div class="col-md-12">
    
                </div>
            </div>
    </div>
                        



    <!---------------------- INICIO DE LOOP SLIDER DE LOS MODELOS (slider hecho con plugin)---------------------->
    
    <?php if (have_posts()) : ?>
            <?php query_posts("category_name=caracteristicas"); ?>
        <?php while (have_posts()) : the_post(); ?> 
            
            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
            
        <?php endwhile; ?> 
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?>
                

</div>

       
<!---------------------- INICIO DE LOOP CUALIDADES (especificaciones técnicas)---------------------->



<div class="container-fluid fondonegro">
    <div class="container cualidades">
        <div class="arribaa">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=especificaciones"); ?>
            <?php while (have_posts()) : the_post(); ?> 

                <h2> <?php the_title(); ?> </h2>
                <h4> <?php the_content(); ?> </h4> <!-- PARRAFO DE TEXTO -->
                
            <?php endwhile; ?> 
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="row">
            <div class="col-md-4 cuno">
                <div class="row">
                    <div class="col-md-2">
                        <i class="fa-solid fa-volume-high fa-2x"></i>
                    </div>
                    <div class="col-md-10">
                        <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=sonido"); ?>
                        <?php while (have_posts()) : the_post(); ?> 
                            <h3> <?php the_title(); ?> </h3>
                            <hr>
                            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                            
                        <?php endwhile; ?> 
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 cdos">
                <div class="row one">
                    <div class="col-md-2">
                        <i class="fa-solid fa-battery-full fa-2x"></i>
                    </div>
                    <div class="col-md-10">
                        <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=bateria"); ?>
                        <?php while (have_posts()) : the_post(); ?> 
                            <h3> <?php the_title(); ?> </h3>
                            <hr>
                            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                            
                        <?php endwhile; ?> 
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
                <div class="row two">
                    <div class="col-md-2">
                        <i class="fa-solid fa-box-open fa-2x"></i>
                    </div>
                    <div class="col-md-10">
                        <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=caja"); ?>
                        <?php while (have_posts()) : the_post(); ?> 
                            <h3> <?php the_title(); ?> </h3>
                            <hr>
                            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                            
                        <?php endwhile; ?> 
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
                <div class="row three">
                    <div class="col-md-2">
                        <i class="fa-solid fa-radio fa-2x"></i>
                    </div>
                    <div class="col-md-10">
                        <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=fisica"); ?>
                        <?php while (have_posts()) : the_post(); ?> 
                            <h3> <?php the_title(); ?> </h3>
                            <hr>
                            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                            
                        <?php endwhile; ?> 
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
                
            </div>
            <div class="col-md-4 ctres">
                <div class="row">
                    <div class="col-md-2">
                        <i class="fa-solid fa-tower-broadcast fa-2x"></i>
                    </div>
                    <div class="col-md-10">
                        <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=controles"); ?>
                        <?php while (have_posts()) : the_post(); ?> 
                            <h3> <?php the_title(); ?> </h3>
                            <hr>
                            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                            
                        <?php endwhile; ?> 
                        <?php else : ?>  
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
    


<!---------------------- INICIO DE LOOP RESEÑA ---------------------->

<div class="container-fluid opiniones">
    <div class="container">
       <div class="row">
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=opiniones"); ?>
            <?php while (have_posts()) : the_post(); ?> 
                <h2> <?php the_title(); ?> </h2>
                          
            <?php endwhile; ?> 
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>

           <div class="col-2">

           </div>
           <div class="col-8">
               <?php if (have_posts()) : ?>
                <?php query_posts("category_name=sobre-nosotros"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                    
                    <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                    
                <?php endwhile; ?> 
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
           </div>
           <div class="col-2">
               
           </div>
        </div> 
    </div>    
</div>



<!---------------------- INICIO DE LOOP VIDEO ---------------------->


<div class="container-fluid blk">
    <div class="container video">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=video"); ?>
        <?php while (have_posts()) : the_post(); ?> 
            <h2> <?php the_title(); ?> </h2>
            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
            
        <?php endwhile; ?> 
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>


<!---------------------- INICIO COMPRA ---------------------->
<div class="container-fluid formm">
    <div class="row">
            <div class="col-md-6 letrass">
                <?php if (have_posts()) : ?>
                <?php query_posts("category_name=tuyo"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                    <h2> <?php the_title(); ?> </h2>
                    <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                    
                <?php endwhile; ?> 
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="col-md-6 mmm">
                <div class="container formulario">
                    <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=comprar"); ?>
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



<?php get_footer(); ?>