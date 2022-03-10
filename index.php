<?php get_header(); ?><main>
    <section class="banners" id="home">
        <div class="banner-container">
            <div class="slider-banner mobile">
                <?php global $post;
                $args = array('numberposts' => 5, 'category_name' => 'banner-mobile');
                $posts = get_posts($args);
                foreach ($posts as $post) : setup_postdata($post); ?>
                    <div class="swiper-slide"> <?php the_post_thumbnail(); ?> </div>
                <?php endforeach; ?>
            </div>
            <div class="slider-banner desktop">
                <?php global $post;
                $args = array('numberposts' => 5, 'category_name' => 'banner-desk');
                $posts = get_posts($args);
                foreach ($posts as $post) : setup_postdata($post); ?>
                    <div class="swiper-slide"> 
                        <?php the_post_thumbnail(); ?> 
                        <div class="slider-text"><?php the_content(); ?></div>
                    </div> 
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <section class="quem-somos container" id="sobre-nos">
        <h1>Sobre Nós</h1>
        <?php global $post;
        $args = array('numberposts' => 1, 'category_name' => 'sobre-nos');
        $posts = get_posts($args);

        foreach ($posts as $post) :
            setup_postdata($post);
        ?>
            <div class="post-content mt-20">
                <div class="post-title mb-20"><h3><?php the_title(); ?></h3></div>
                <div class="post-text"> <?php the_content(); ?> </div>
                <div class="post-image"> <?php the_post_thumbnail(); ?> </div>
            </div>
        <?php endforeach; ?>

    </section>

    <section class="missao-container container">

        <div class="card-group">
            <?php global $post;
            $args = array(
                    'numberposts' => 3, 
                    'category_name' => 'missao-valor-visao',
                    'order_by' => 'date',
                    'order' => 'asc'
                );
            $posts = get_posts($args);

            foreach ($posts as $post) :
                setup_postdata($post);
            ?>
                <div class="card">
                    <div class="card-title">
                        <?php the_title(); ?>
                    </div>

                    <div class="post-content mt-20">
                        <div class="post-text"> <?php the_content(); ?> </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="servicos container mt-40" id="servicos">
        <h1>Serviços</h1> 

        <div class="card-group mt-40">
        <?php global $post;
            $args = array(
                'numberposts' => 10, 
                'category_name' => 'servicos',
                'order_by' => 'date',
                'order' => 'asc'
            );
            $posts = get_posts($args);
            foreach ($posts as $post) : setup_postdata($post); ?> 
                <div class="card">
                    <div class="card-content">
                        <div class="post-image"> 
                            <?php the_post_thumbnail(); ?> 
                        </div>
                        <div class="card-title">
                            <h2> <?php the_title(); ?> </h2>
                        </div>
                        <div class="card-text"> 
                            <?php the_content(); ?> 
                        </div>
                    </div>
                </div> 
            <?php endforeach; ?>
        </div>
    </section>

    <section class="container" id="contato">
        <h1>Contato</h1>
        <div class="contato-mapa mt-40">
            <?php 
                $url_whats = wp_get_upload_dir();
                $url_whats = $url_whats['url'] . "/whats.png";
            ?>
            <a href="https://api.whatsapp.com/send?phone=5554999192389&text=Ol%C3%A1%2C%20poderia%20me%20ajudar%3F" target="_blank">
                <img src="<?=$url_whats?>" alt="whats">
            </a>

            <?php 
                $url_insta = wp_get_upload_dir();
                $url_insta = $url_insta['url'] . "/instagram-icon.png";
            ?>
            <a href="https://www.instagram.com/mecanicagenesis" target="_blank" rel="noopener noreferrer">
                <img src="<?=$url_insta?>" alt="mapa">
            </a>

            <?php 
                $url_face = wp_get_upload_dir();
                $url_face = $url_face['url'] . "/facebook-icon.png";
            ?>
            <a href="https://www.facebook.com/mecanicagenesis" target="_blank" rel="noopener noreferrer">
                <img src="<?=$url_face?>" alt="mapa">
            </a>

            <?php 
                $url_map = wp_get_upload_dir();
                $url_map = $url_map['url'] . "/map.png";
            ?>
            <a href="https://goo.gl/maps/eiAMxxrdDRvEKAfH7" target="_blank" rel="noopener noreferrer">
                <img src="<?=$url_map?>" alt="mapa">
            </a>

            <?php 
                $url_mail = wp_get_upload_dir();
                $url_mail = $url_mail['url'] . "/mail.png";
            ?>
            <a href="mailto:mecanicapassofundo@hotmail.com" target="_blank">
                <img src="<?=$url_mail?>" alt="mail">
            </a>

        </div>
    </section>
</main><?php get_footer(); ?>