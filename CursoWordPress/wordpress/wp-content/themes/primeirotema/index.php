<?php get_header(); ?>

<section>

    <div class="container">
        <!-- Verifica se tem posts, se tiver ele busca -->
        <?php if(have_posts()) { ?>
            <?php while(have_posts()) { ?>
                <?php the_post(); ?>

                <article>
                    <!-- Verifica se tem thumbnail, se tiver ele busca -->
                    <?php if(has_post_thumbnail()) {?>
                        <a href="<?php the_permalink(); ?>" class="post_thumbnail">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'post_miniatura')); ?>
                        </a>
                    <?php } ?>
                        <!-- Busca o titulo dos posts' -->
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <!-- Busca o autor -->
                    <p>
                        <?php echo get_the_date(); ?> |
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author(); ?></a> |
                        <!-- Busca as categorias separadas por um caractere que desejar, nesse caso foi a vírgula -->
                        <?php the_category(', '); ?>
                    </p>
                        <!-- Busca o conteúdo dos posts -->
                    <p>
                        <?php the_excerpt(); ?>
                    </p>

                    <p>
                        <!-- Quantidade de comentários -->
                        <?php comments_number('0 comentários', '1 comentário', '% comentários'); ?> |
                        <a href="<?php the_permalink()?>">LEIA MAIS</a>
                    </p>

                </article>

            <?php } ?>
        <?php } ?>

        <div class="paginacao">
            <div class="pagina_anterior"><?php previous_posts_link('Página Anterior'); ?></div>
            <div class="pagina_proxima"><?php next_posts_link('Próxima página'); ?></div>
        </div>
    </div>

    <?php get_sidebar(); ?>

    <div style="clear:both"></div>

</section>

<?php get_footer(); ?>