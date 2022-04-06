<footer>
    <section class="container footer-content">

        <div class="footer-info">

            <div>
                <h2>Contato</h2>
                <a href="https://api.whatsapp.com/send?phone=5554999192389&amp;text=Ol%C3%A1%2C+vim+pelo+site+de+voc%C3%AAs%2C+poderia+me+ajudar%3F" target="_blank">
                    <p>
                        <i class="fa-brands fa-whatsapp fa-lg"></i>
                        <span>54 9 9919-2389</span>
                    </p>
                </a>

                <a href="mailto:mecanicapassofundo@hotmail.com" target="_blank">
                    <p>
                        <i class="fa-solid fa-envelope fa-lg"></i>
                        <span>
                            mecanicapassofundo@hotmail.com
                        </span>
                    </p>
                </a>
            </div>

            <div>
                <h2>Endereço</h2>
                <a href="https://goo.gl/maps/eiAMxxrdDRvEKAfH7" target="_blank" rel="noopener noreferrer">
                    <p>
                        <i class="fa-solid fa-location-dot fa-lg"></i>
                        <span>R. Paissandú, 2953 - Boqueirão, Passo Fundo - RS</span>
                    </p>
                </a>
            </div>

            <div>
                <h2>Horário de Atendimento</h2>
                <a href="#">
                    <p>
                        <i class="fa-solid fa-clock fa-lg"></i>
                        <span>Segunda a Sexta-feira, das 8h às 18h.</span>
                    </p>
                </a>
            </div>

        </div>

        <div class="footer-social-link">
            <a href="https://api.whatsapp.com/send?phone=5554999192389&amp;text=Ol%C3%A1%2C+vim+pelo+site+de+voc%C3%AAs%2C+poderia+me+ajudar%3F" class="whats-btn" target="_blank">
                <i class="fa-brands fa-whatsapp fa-xl"></i>
            </a>
        </div>
    </section>

    <div id="cookieNotice" class="cookie-consent d-flex flex-column flex-lg-row justify-content-center align-items-center w-100">
        <div class="cookie-content">
            <p>Este site utiliza cookies para melhorar sua experiência!</p>
        </div>
        <div class="cookie-accept">
            <button onclick="acceptCookieConsent()" class="secundario">
                Continuar
            </button>
        </div>
    </div>

    <div class="bar">
        <p>Copyright &copy; <?= date("Y"); ?></p>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>