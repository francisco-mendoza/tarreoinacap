@extends('layouts.principal')

@section('content')

<!-- Banner -->
<section class="youplay-banner banner-top youplay-banner-parallax">
    <div class="image" style="background-image: url('images/banner-bg.jpg')">
    </div>

    <div class="info">
        <div>
            <div class="container">
                <h1>Tarreo Inacap</h1>
                <em>"Juegos en LAN, consolas y mucho más..."</em>
                <br>
                <br>
                <br>
                <a class="btn btn-lg" href="/registro">Inscríbete ahora !</a>
                <a class="btn btn-lg" href="#reglas">Revisa las reglas y preguntas frecuentes !</a>
            </div>
        </div>
    </div>
</section>
<!-- /Banner -->

{{--<!-- Images With Text -->--}}
{{--<div class="youplay-carousel" data-autoplay="5000">--}}
    {{--<a class="angled-img" href="store-product-1.html">--}}
        {{--<div class="img">--}}
            {{--<img src="images/game-bloodborne-500x375.jpg" alt="">--}}
        {{--</div>--}}
        {{--<div class="over-info">--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--<h4>Bloodborne</h4>--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img">--}}
            {{--<img src="images/game-dark-souls-ii-500x375.jpg" alt="">--}}
        {{--</div>--}}
        {{--<div class="over-info">--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--<h4>Dark Souls II</h4>--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img">--}}
            {{--<img src="images/game-lords-of-the-fallen-500x375.jpg" alt="">--}}
        {{--</div>--}}
        {{--<div class="over-info">--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--<h4>Lords of the Fallen</h4>--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img">--}}
            {{--<img src="images/game-middle-eart-shadow-of-mordor-500x375.jpg" alt="">--}}
        {{--</div>--}}
        {{--<div class="over-info">--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--<h4>Middle-earth: Shadow of Mordor</h4>--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img">--}}
            {{--<img src="images/game-soul-sacrifice-500x375.jpg" alt="">--}}
        {{--</div>--}}
        {{--<div class="over-info">--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--<h4>Soul Sacrifice</h4>--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img">--}}
            {{--<img src="images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">--}}
        {{--</div>--}}
        {{--<div class="over-info">--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--<h4>Kingdoms of Amalur: Reckoning</h4>--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img">--}}
            {{--<img src="images/game-the-witcher-500x375.jpg" alt="">--}}
        {{--</div>--}}
        {{--<div class="over-info">--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--<h4>The Witcher: Rise of the White Wolf</h4>--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img">--}}
            {{--<img src="images/game-diablo-iii-500x375.jpg" alt="">--}}
        {{--</div>--}}
        {{--<div class="over-info">--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--<h4>Diablo III: Reaper of Souls</h4>--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img">--}}
            {{--<img src="images/game-dragons-dogma-500x375.jpg" alt="">--}}
        {{--</div>--}}
        {{--<div class="over-info">--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--<h4>Dragons Dogma</h4>--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
{{--</div>--}}
{{--<!-- /Images With Text -->--}}



<!-- Popular -->
<h2 class="container h1" id="reglas">Reglas y Preguntas Frecuentes </h2>
<section class="youplay-news container">
    <ul>
        <li>Día del tarreo: Viernes 26 de Mayo</li>
        <li>Hora de llegada: Desde las 21:00hrs hasta las 23:00, luego de esa hora no se podrá ingresar</li>
        <li>El tarreo dura hasta el Sábado 27 a las 8:00hrs</li>
        <li>Que se jugará: El tarreo está enfocado a juegos en LAN (red local) , con esta red que no se podrá jugar online, ya que Inacap tiene los puertos bloqueados. <br>
            Alguno de los típicos a jugar son Counter Strike 1.6, Call of Duty 4, Age of Empires II, entre otros. <br>
            Pueden proponer nuevos juegos si lo desean.<br>
            También habrá consolas como Nintendo Wii, PS4, Xbox. Si deseas traer la tuya no ha problema, solo tener en cuenta que no se prestarán monitores. Si quieres proponer tu consola para que todos juguemos se puede ver disponibilidad de
            algún proyector o pantallas que estarán destinadas para que todos las usen.
            Si tienen su propio modem o celular para proveerse de internet, ningún problema que lo usen.</li>
        <li>Que llevar?: Tu PC, ya sea de escritorio o notebook, monitor, teclado, mouse, audífonos, etc. Inacap no prestará ningún periférico. <br>Se recomienda traer un alargador tipo zapatilla.</li>
        <li>Estará <b>PROHIBIDO</b> el consumo de <b>Alcohol</b> y/o <b>Drogas</b></li>
        <li>Todos deben traer su credencial de Inacap</li>
        <li>Inacap nos dará una colación por alumno, pero no está demás que lleven lo suyo.</li>
        <li>Cualquier consulta nos puedes escribir en nuestra página de Facebook o dejar tu comentario directamente aquí.</li>
    </ul>

    <h2>Comentanos</h2>
    <div id="disqus_thread"></div>
    <script>

        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
         var disqus_config = function () {
         this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
         this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
         };
         */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://tarreoinacap.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</section>
<div class="youplay-carousel">





    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img">--}}
            {{--<img src="images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">--}}
        {{--</div>--}}
        {{--<div class="over-info">--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--<h4>Kingdoms of Amalur: Reckoning</h4>--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img">--}}
            {{--<img src="images/game-the-witcher-500x375.jpg" alt="">--}}
        {{--</div>--}}
        {{--<div class="over-info">--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--<h4>The Witcher: Rise of the White Wolf</h4>--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img">--}}
            {{--<img src="images/game-diablo-iii-500x375.jpg" alt="">--}}
        {{--</div>--}}
        {{--<div class="over-info">--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--<h4>Diablo III: Reaper of Souls</h4>--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img">--}}
            {{--<img src="images/game-dragons-dogma-500x375.jpg" alt="">--}}
        {{--</div>--}}
        {{--<div class="over-info">--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--<h4>Dragons Dogma</h4>--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
</div>
<!-- /Popular -->


{{--<!-- Specials -->--}}
{{--<h2 class="container h1">Specials <a href="#!" class="btn pull-right">See More</a></h2>--}}
{{--<div class="youplay-carousel">--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img img-offset">--}}
            {{--<img src="images/game-dark-souls-ii-500x375.jpg" alt="">--}}
            {{--<div class="badge bg-default">--}}
                {{---20%--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="bottom-info">--}}
            {{--<h4>Dark Souls II</h4>--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-6">--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xs-6">--}}
                    {{--<div class="price">$39.99 <sup><del>$49.99</del></sup>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img img-offset">--}}
            {{--<img src="images/game-lords-of-the-fallen-500x375.jpg" alt="">--}}
            {{--<div class="badge bg-default">--}}
                {{---25%--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="bottom-info">--}}
            {{--<h4>Lords of the Fallen</h4>--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-6">--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                        {{--<i class="fa fa-star-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xs-6">--}}
                    {{--<div class="price">$26.25 <sup><del>$35.00</del></sup>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img img-offset">--}}
            {{--<img src="images/game-dragons-dogma-500x375.jpg" alt="">--}}
            {{--<div class="badge bg-default">--}}
                {{---30%--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="bottom-info">--}}
            {{--<h4>Dragons Dogma</h4>--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-6">--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xs-6">--}}
                    {{--<div class="price">$34.99 <sup><del>$49.99</del></sup>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
    {{--<a class="angled-img" href="#!">--}}
        {{--<div class="img img-offset">--}}
            {{--<img src="images/game-soul-sacrifice-500x375.jpg" alt="">--}}
            {{--<div class="badge bg-success">--}}
                {{---100%--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="bottom-info">--}}
            {{--<h4>Soul Sacrifice</h4>--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-6">--}}
                    {{--<div class="rating">--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star"></i>--}}
                        {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xs-6">--}}
                    {{--<div class="price"><span class="text-success">FREE!</span>  <sup><del>$29.99</del></sup>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</a>--}}
{{--</div>--}}
{{--<!-- /Specials -->--}}


{{--<!-- Preorder -->--}}
{{--<div class="h2"></div>--}}
{{--<section class="youplay-banner youplay-banner-parallax small">--}}
    {{--<div class="image" style="background-image: url('images/banner-witcher-3.jpg');">--}}
    {{--</div>--}}

    {{--<div class="info container align-center">--}}
        {{--<div>--}}
            {{--<h2>The Witcher 3:<br> Wild Hunt</h2>--}}

            {{--<!-- See countdown init in bottom of the page -->--}}
            {{--<div class="countdown h2" data-end="2017/01/01"></div>--}}

            {{--<br>--}}
            {{--<br>--}}
            {{--<a class="btn btn-lg" href="#!">Pre-Order</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
{{--<!-- /Preorder -->--}}


{{--<!-- Latest News -->--}}
{{--<h2 class="container h1">Latest News</h2>--}}
{{--<section class="youplay-news container">--}}
    {{--<!-- Single News Block -->--}}
    {{--<div class="news-one">--}}
        {{--<div class="row vertical-gutter">--}}
            {{--<div class="col-md-4">--}}
                {{--<a href="blog-post-1.html" class="angled-img">--}}
                    {{--<div class="img">--}}
                        {{--<img src="images/game-bloodborne-500x375.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="9.1 out of 10"><span>9.1</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-md-8">--}}
                {{--<div class="clearfix">--}}
                    {{--<h3 class="h2 pull-left m-0"><a href="blog-post-1.html">Bloodborne - First Try!</a></h3>--}}
                    {{--<span class="date pull-right"><i class="fa fa-calendar"></i> Today</span>--}}
                {{--</div>--}}
                {{--<div class="tags">--}}
                    {{--<i class="fa fa-tags"></i>  <a href="#">Bloodborne</a>, <a href="#">first try</a>, <a href="#">first boss problem</a>, <a href="#">newbie game</a>--}}
                {{--</div>--}}
                {{--<div class="description">--}}
                    {{--<p>--}}
                        {{--Gus sit amet suum motum. Nescio quando, aut quomodo, nescio quo. Illud scio, amet tortor. Suarum impotens prohibere eum.--}}
                    {{--</p>--}}
                    {{--<p>--}}
                        {{--Sum expectantes. Ego hodie expectantes. Expectantes, et misit unum de pueris Gus interficere. Et suus vos. Nescio quis, qui est bonus usus liberi ad Isai? Qui nosti ... Quis dimisit filios ad necem ... hmm? Gus!--}}
                    {{--</p>--}}
                {{--</div>--}}
                {{--<a href="blog-post-1.html" class="btn read-more pull-left">Read More</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- /Single News Block -->--}}

    {{--<!-- Single News Block -->--}}
    {{--<div class="news-one">--}}
        {{--<div class="row vertical-gutter">--}}
            {{--<div class="col-md-4">--}}
                {{--<a href="blog-post-2.html" class="angled-img">--}}
                    {{--<div class="img">--}}
                        {{--<img src="images/game-dark-souls-ii-500x375.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="9 out of 10"><span>9</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-md-8">--}}
                {{--<div class="clearfix">--}}
                    {{--<h3 class="h2 pull-left m-0"><a href="blog-post-2.html">Coming to Youplay - Dark Souls II</a></h3>--}}
                    {{--<span class="date pull-right"><i class="fa fa-calendar"></i> March 9, 2015</span>--}}
                {{--</div>--}}
                {{--<div class="tags">--}}
                    {{--<i class="fa fa-tags"></i>  <a href="#">Dark Souls II</a>, <a href="#">coming soon</a>, <a href="#">first review</a>, <a href="#">sale date</a>--}}
                {{--</div>--}}
                {{--<div class="description">--}}
                    {{--Ille vivere. Ut ad te quaerebam ... purgare caeli. Sunt uh ... nonnullus propter errorem qui de rebus inter nos et iacere puto suus in causa, id est in mensa. Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium.--}}
                {{--</div>--}}
                {{--<a href="blog-post-2.html" class="btn read-more pull-left">Read More</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- /Single News Block -->--}}

    {{--<!-- Single News Block -->--}}
    {{--<div class="news-one">--}}
        {{--<div class="row vertical-gutter">--}}
            {{--<div class="col-md-4">--}}
                {{--<a href="blog-post-3.html" class="angled-img">--}}
                    {{--<div class="img">--}}
                        {{--<img src="images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">--}}
                    {{--</div>--}}
                    {{--<div class="youplay-hexagon-rating youplay-hexagon-rating-small" data-max="10" data-size="50" title="3.8 out of 10"><span>3.8</span>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-md-8">--}}
                {{--<div class="clearfix">--}}
                    {{--<h3 class="h2 pull-left m-0"><a href="blog-post-3.html">Review Kingdoms of Amalur</a></h3>--}}
                    {{--<span class="date pull-right"><i class="fa fa-calendar"></i> March 1, 2015</span>--}}
                {{--</div>--}}
                {{--<div class="tags">--}}
                    {{--<i class="fa fa-tags"></i>  <a href="#">Kingdoms of Amalur</a>, <a href="#">game</a>, <a href="#">review</a>--}}
                {{--</div>--}}
                {{--<div class="description">--}}
                    {{--Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum--}}
                    {{--duo te mihi videtur.--}}
                {{--</div>--}}
                {{--<a href="blog-post-3.html" class="btn read-more">Read More</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- /Single News Block -->--}}
{{--</section>--}}
{{--<!-- /Latest News -->--}}


<!-- Partners -->
{{--<section class="youplay-banner youplay-banner-parallax small mt-80">--}}
    {{--<div class="image" style="background-image: url('images/banner-bg.jpg');">--}}
    {{--</div>--}}

    {{--<div class="info align-center">--}}
        {{--<div>--}}
            {{--<h2 class="mb-40">Partners</h2>--}}

            {{--<div class="row">--}}
                {{--<div class="col-md-10 col-md-offset-1">--}}
                    {{--<div class="owl-carousel" data-autoplay="6000">--}}
                        {{--<div class="item">--}}
                            {{--<a href="#">--}}
                                {{--<img src="images/partner-logo-1.png" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<a href="#">--}}
                                {{--<img src="images/partner-logo-2.png" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<a href="#">--}}
                                {{--<img src="images/partner-logo-3.png" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<a href="#">--}}
                                {{--<img src="images/partner-logo-4.png" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<a href="#">--}}
                                {{--<img src="images/partner-logo-5.png" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<a href="#">--}}
                                {{--<img src="images/partner-logo-6.png" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<a href="#">--}}
                                {{--<img src="images/partner-logo-7.png" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<a href="#">--}}
                                {{--<img src="images/partner-logo-8.png" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!-- /Partners -->

@endsection
