<?php get_header(); ?>

    <section class="formations">
    <?php
            $args = array(
                'post_type' => 'post',
                'category_name' => 'formations',
                'posts_per_page' => -1, // Pour afficher tous les articles de la catégorie
            );
            
            $query = new WP_Query( $args ); ?>

    <?php
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
            ?>    

    <h1><?php the_title(); ?></h1>   

                            <p class="post__meta">
                                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                                par <?php the_author(); ?> • <?php comments_number(); ?>
                            </p>

                            <?php the_content(); ?>

                            
            <?php endwhile; endif; ?>
             
    </section> 
    <h1>Page formations</h1>    
<?php get_footer(); ?>