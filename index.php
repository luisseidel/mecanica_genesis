<?php get_header(); ?><main>
    <section class="banners">
        <div class="banner-container">
            <div class="slider-banner mobile"> <?php global $post;
                                                $args = array('numberposts' => 5, 'category_name' => 'banner-mobile');
                                                $posts = get_posts($args);
                                                foreach ($posts as $post) : setup_postdata($post);                 ?> <div class="swiper-slide"> <?php the_post_thumbnail(); ?> </div> <?php endforeach; ?> </div>
            <div class="slider-banner desktop"> <?php global $post;
                                                $args = array('numberposts' => 5, 'category_name' => 'banner-desk');
                                                $posts = get_posts($args);
                                                foreach ($posts as $post) : setup_postdata($post);                 ?> <div class="swiper-slide"> <?php the_post_thumbnail(); ?> </div> <?php endforeach; ?> </div>
        </div>
    </section>

    <hr class="mt-0 mb-0">

    <section class="pneus" id="pneus">
        <div class="container">
            <h1 class="color-black">Pneus</h1>
            <div class="pneus-flex mt-40"> 
                <?php global $post;
                        $args = array('numberposts' => 15, 'category_name' => 'pneus');
                        $posts = get_posts($args);
                        foreach ($posts as $post) : 
                            setup_postdata($post);
                        ?> 
                            <div class="single-pneu"> <?php the_post_thumbnail(); ?> </div> 
                <?php   endforeach; ?> 
            </div>

            <div class="whatsapp-container">
                <div class="whatsapp-wide-btn">
                    <a  href="https://api.whatsapp.com/send?phone=5551981842396&text=Ol%C3%A1%2C%20poderia%20me%20ajudar%3F" 
                        target="_blank">
                        <p>
                            <span>Solicite seu Orçamento!</span>
                            <i class="fa-brands fa-whatsapp fa-lg"></i>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <hr class="mt-0">

    <section class="quem-somos container" id="quem-somos">
        <h1>Quem Somos</h1> 
            <?php global $post;
                    $args = array('numberposts' => 1, 'category_name' => 'quem-somos');
                    $posts = get_posts($args);

                    foreach ($posts as $post) : 
                        setup_postdata($post);
                    ?> 
                        <div class="post-content mt-20">
                            <div class="post-text"> <?php the_content(); ?> </div>
                            <div class="post-image"> <?php the_post_thumbnail(); ?> </div>
                        </div> 
            <?php   endforeach; ?>
    </section>

    <hr>

    <section class="servicos container mt-40" id="servicos">
        <h1>Serviços</h1> <?php global $post;
                            $args = array('numberposts' => 5, 'category_name' => 'servicos');
                            $posts = get_posts($args);
                            foreach ($posts as $post) : setup_postdata($post);         ?> <div class="single-servico mt-40">
                <div class="post-title">
                    <h2> <?php the_title(); ?> </h2>
                </div>
                <div class="post-content">
                    <div class="post-text"> <?php the_content(); ?> </div>
                    <div class="post-image"> <?php the_post_thumbnail(); ?> </div>
                </div>
            </div> <?php endforeach; ?>
    </section>
    
    <hr class="mb-0">

    <section class="container" id="contato">
        <h1>Contato</h1>
        <div class="contato-mapa mt-40">
            <div class="contato w-100">
                <form action="" method="post" class="contato-form" target="_blank"> <input type="text" name="nome" id="nome" placeholder="Nome" autocomplete="off" required> <textarea name="mensagem" id="mensagem" placeholder="Mensagem" autocomplete="off" required></textarea> <button type="submit" class="btn-enviar">
                        <p>Enviar</p> <i class="fa-brands fa-whatsapp fa-lg"></i>
                    </button> </form>
            </div>
            <div class="mapa w-100"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3474.4631227484933!2d-51.96722608489887!3d-29.44448398210456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951c616caa6f4f51%3A0x78d3f428c715f313!2sPira%C3%AD%20Pneus!5e0!3m2!1spt-BR!2sbr!4v1645300738988!5m2!1spt-BR!2sbr" allowfullscreen="false" loading="lazy"></iframe> </div>
        </div>
    </section>
</main><?php get_footer(); ?>