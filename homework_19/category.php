<?php
get_header(); ?>
    <div class="container-fluid">
    <div class="list">
        <?php if (have_posts()) : while (have_posts()) : the_post(); // Цикл записей ?>
            <div class="list-tv">
                <h3><?php the_title(); ?></h3><!-- Заголовок поста -->
                <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            } // Проверяем наличие миниатюры, если есть показываем ?>
            <?php the_content(''); ?>
            </div>
        <?php endwhile;
        else: echo '<h2>Извините, ничего не найдено...</h2>'; endif; // Если записей нет - извиняемся ?>
        <?php // Пагинация
        global $wp_query;
        $big = 999999999;
        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'type' => 'list',
            'prev_text' => __('« Сюда'),
            'next_text' => __('Туда »'),
            'total' => $wp_query->max_num_pages
        ));
        ?>
    </div>
    </div>
<?php get_footer(); ?>