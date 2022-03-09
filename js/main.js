function show() {
	const sidebar = document.querySelector(".sidebar");
	sidebar.classList.add("visible");
	document.body.style.overflow = "hidden";
}
function hide() {
	const sidebar = document.querySelector(".sidebar");
	sidebar.classList.remove("visible");
	document.body.style.overflow = "";
}
function toggle() {
	const sidebar = document.querySelector(".sidebar");
	sidebar.querySelector(".blocker").onclick = hide;
	sidebar.classList.contains("visible") ? hide() : show();
}

document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector('.contato-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            var phone = "5551981842396";
            var nome = document.querySelector('#nome').value.trim();
            var text = document.querySelector('#mensagem').value.trim();

            if (nome == "" || text == "") {
                window.alert("Preencha corretamente os campos!");
                form.reset();
                return;
            }

            var mensagem = `Nome: ${nome} Mensagem: ${text}`;
            mensagem = encodeURIComponent(mensagem);
            var link = `https://api.whatsapp.com/send?phone=${phone}&text=${mensagem}`;

            window.open(link);
            form.reset();
        });
    }

    if (document.querySelector('.slider-banner.mobile')) {
        var slider = tns({
            container: '.slider-banner.mobile',
            items: 1,
            slideBy: 'page',
            autoplay: true,
            controls: false,
            mouseDrag: true,
            nav: false,
            autoplayButton: false,
            autoplayButtonOutput: false,
          });
    }

    if (document.querySelector('.slider-banner.desktop')) {
        var slider = tns({
            container: '.slider-banner.desktop',
            items: 1,
            slideBy: 'page',
            autoplay: true,
            controls: false,
            mouseDrag: true,
            nav: false,
            autoplayButton: false,
            autoplayButtonOutput: false,
          });
    }

    // if (document.querySelector('.slider-pneus')) {
    //     var slider = tns({
    //         container: '.slider-pneus',
    //         items: 1,
    //         slideBy: 1,
    //         autoplay: true,
    //         controls: false,
    //         mouseDrag: true,
    //         nav: true,
    //         navPosition: "bottom",
    //         autoplayButton: false,
    //         autoplayButtonOutput: false,
    //         responsive: {
    //             600: {
    //                 edgePadding: 20,
    //                 gutter: 20,
    //                 items: 2,
    //                 slideBy: 2,
    //             },
    //             700: {
    //                 gutter: 30
    //             },
    //             900: {
    //                 items: 3,
    //                 slideBy: 3
    //             },
    //         }
    //     });
    //}

});