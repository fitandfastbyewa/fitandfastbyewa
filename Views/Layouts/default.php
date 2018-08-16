<!DOCTYPE html>
<html>
<head lang="pl-PL">
  <meta charset="UTF-8">
  <title>Fit&FastByEwa | Zdrowe odżywianie | Przepisy kulinarne | Fit blog</title>
  <meta name="description" content="Blog kulinarny o zdrowym odżywianiu. Fit dietetyczne przepisy na śniadanie, obiad, czy kolację. Dania wegetariańskie, mięsne, rybne, zupy i przekąski.">
  <meta name="keywords" content="fit&fastbyewa, filtandfastbyewa, blog kulinarny, blog dietetyczny, fit blog kulinarny, fit przepisy, dietetyczne przepisy, blog o zdrowym odżywianiu, dietetyczne śniadanie, dietetyczny obiad, dietetyczna kolacja">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Fit&FastByEwa">

  <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/public/css/images.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="/public/css/font.css" />

  <script type="text/javascript" src="/public/js/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

</head>

<body>
<header>
  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/index/index">Fit&FastByEwa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/index/index">Strona Główna<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/sniadanie">Śniadanie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/obiad">Obiad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/kolacja">Kolacja</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/zupa">Zupy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/deser">Desery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/koktajl">Koktajle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/wegetarianskie">Wegetariańskie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/mieso">Mięsne</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/ryba">Rybne</a>
        </li>
      </ul>
    </div>
  </nav>
  <div>
  </div>
  <!-- NavBar End -->
  </header>

  <main role="main">

    <div class="starter-template">

        <?php
        echo $content_for_layout;
        ?>

    </div>

    <!-- Kategorie -->
    <div class="mb-2" style="background-color:#343a40;color:#FFFFFF;">
      <div class="container categories-tag">
        <?php foreach($categories as $category) {
          echo '<a href="/category/' . $category['normalize_name'] . '">#' . $category['name'] . '</a> <span class="badge badge-pill badge-success">' . $category['ilosc'] . '</span>';
        }
        ?>
      </div>
  </div>
    <!-- Kategorie End -->

    <!-- Polecane kategorie -->
    <div class="album py-5 bg-light categories">
            <div class="container">
              <h3 class="text-center category-title">Polecane kategorię</h3>
              <div class="row">
                <div class="col-md-4">
                  <div class="card p-1 m-2 text-center">
                    <img class="card-img-top"
                    alt="dania wegetariańskie - jajecznica z bobem"
                    src="/public/images/category/jajecznica-z-bobem.JPG">
                    <div class="card-body">
                      <h4 class="card-title border-bottom p-2"><a href="/category/wegetarianskie">Dania wegetariańskie</a></h4>
                      <p class="card-text">Nie jadasz mięsa i nie masz pomysłu na pyszne, zdrowe danie? Wypróbuj moje wegetariańskie przepisy, pełne smaku i witamin.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card p-1 m-2 text-center">
                    <img class="card-img-top"
                    alt="dania mięsne - pierś z kurczaka w pomidorach"
                    src="/public/images/category/piers-z-kurczaka-w-pomidorach.JPG">
                    <div class="card-body">
                      <h4 class="card-title border-bottom p-2"><a href="/category/mieso">Dania mięsne</a></h4>
                      <p class="card-text">Mięsne dania też mogą być fit. Dobrej jakości mięso zapewnia nam niezbędnych wartości odżywczych. Wypróbuj moje mięsne przepisy, proste i dla każdego.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card p-1 m-2 text-center">
                    <img class="card-img-top"
                    alt="dania rybne - pstrąg nadziewany pomidorami"
                    src="/public/images/category/pstrag-nadziewany-pomidorami.JPG">
                    <div class="card-body">
                      <h4 class="card-title border-bottom p-2"><a href="/category/ryba">Dania rybne</a></h4>
                      <p class="card-text">Nie wszyscy lubią ich smak, ale warto od czasu do czasu wprowadzić je do swojej diety. Wypróbuj przepisy na dania rybne.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card p-1 m-2 text-center">
                    <img class="card-img-top"
                    alt="zupy - zupa pomidorowa po toskańsku"
                    src="/public/images/category/zupa-pomidorowa-po-toskansku.JPG">
                    <div class="card-body">
                      <h4 class="card-title border-bottom p-2"><a href="/category/zupa">Zupy</a></h4>
                      <p class="card-text">Zupy to lekkie dania, które pasują zarówno na obiad jak i kolację. Oparte na warzywach stanowią doskonałe źródło wartości odżywczych i są doskonałym przykładem dania fit.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card p-1 m-2 text-center">
                    <img class="card-img-top"
                    alt="desery - fit trufle"
                    src="/public/images/category/fit-trufle.JPG">
                    <div class="card-body">
                      <h4 class="card-title border-bottom p-2"><a href="/category/deser">Desery</a></h4>
                      <p class="card-text">Słodki deser też może być zdrowy. Wystarczy przygotować go z odpowiednich składników. Wypróbuj moje propozycje.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card p-1 m-2 text-center">
                    <img class="card-img-top"
                    alt="koktajle - koktajl ze szpinaku"
                    src="/public/images/category/koktajl-ze-szpinaku.JPG">
                    <div class="card-body">
                      <h4 class="card-title border-bottom p-2"><a href="/category/koktajle">Koktajle</a></h4>
                      <p class="card-text">To co pijemy jest równie ważne dla naszego zdrowia jak to co jemy. Dlatego też wśród dietetycznych przepisów
                      nie może zabraknąć pomysło na koktajle i napoje.</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
      <!-- Polecane kategorie End -->
      <!-- About me -->
      <div class="about-me">
        <div class="row">
          <div class="col-md-4 text-center">

          </div>
          <div class="col-md-4 text-center">
            <img class="rounded-circle" src="/public/images/about-me.jpg" data-src="holder.js/150px150?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"/>
            <h3 class="p-4">Fit&FastByEwa</h3>
            <p class="">Cześć, Nazywam się Ewa. Odżywianie i zdrowa dieta to moja pasja i hobby. Dziele się więc z Wami przepisami, które pomogą nam utrzymać dobrą formę. Sprawdźcie sami, to proste, szybkie i smaczne. Cieszmy się z bycia fit!</p>
            <div class="mb-4 text-center">
              <img src="/public/images/social-media/facebook-fitandfastbyewa.png"/>
              <img src="/public/images/social-media/google-plus-fitandfastbyewa.png"/>
              <img src="/public/images/social-media/pinterest-fitandfastbyewa.png"/>
              <img src="/public/images/social-media/instagram-fitandfastbyewa.png"/>
            </div>
          </div>


        </div>
    </div>
      <!--Aboutme End -->
    </main>

    <!-- Footer -->
    <footer class="page-footer font-small bg-dark">

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href=""> Fit&FastByEwa</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->

  </body>
</html>
