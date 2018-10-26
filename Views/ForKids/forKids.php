<!-- Logo -->
  <section class="jumbotron text-center">
        <div class="container">
          <p class="jumbotron-heading">
            <img src="/public/images/fitandfastbyewa.png" height="100" alt=""></a>
        </p>
        <p class="lead text-muted">
          Nie masz pomysłu co podać swojemu maluchowi na śniadanie, obiad czy kolację. Gdy masz w domu niejadka nie jest łatwo ugotować danie,
          którę zniknie ze stołu w mgnieniu oka. Wypróbuj kilka moich przepisów, które sprawdziły się i zasmakowały mojej pociesze.
        </p>
        </div>
      </section>
  <!-- Logo End-->
  <!-- carousel -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="/public/images/header/piers-z-kurczaka-pieczona-z-warzywami.jpg" alt="Pierś z kurczaka pieczona z warzywami">
              <div class="container">
                <div class="carousel-caption text-left">
                  <h1>Proste przepisy na dania dla najmłodszych</h1>
                  <p>Zdrowe odżywianie to podstawa w rozwoju dziecka. Często nie jest łatwo nakłonić najmłodszych do zjedzenia zdrowych potraw.<br />
                  Fit&FastByEwa pomoże Ci i w takich sytuacjach, podpowiem jak przemycić warzywa i owoce do codziennych posiłków dziecka.
                  Moje przepisy są przetestowane na moim małym niejadku, który niechętnie sięga po nowości na talerzu.
                  </p>
                  <p><a class="btn btn-lg btn-success" href="http://fitandfastbyewa.pl/" role="button">Zobacz co jesz</a></p>
                </div>
              </div>
            </div>
        </div>
      </div>
<!-- carousel End -->


<!-- Posty -->
            <div class="album py-5 bg-light categories">
                <div class="container">
                  <h3 class="text-center category-title">Przepisy na dania dla dzieci</h3>
                  <div class="row">
                    <?php foreach($recipes as $recipe) {
                      include 'recipe.php';
                  } ?>
                  </div>
<nav>
  <!-- Pagination -->
  <ul class="pagination justify-content-center">
<?php
    if(($current_page - 1) > 0) {
        echo '<li class="page-item disabled">
          <a class="page-link" href="/index/' . ($current_page - 1) . '" tabindex="-1"><<</a>
        </li>';
    }

     for($i = 1; $i <= $pages; $i++) {
      if($i == $current_page) {
        echo '<li class="page-item active">
            <a class="page-link" href="#">' . $current_page . ' <span class="sr-only">(current)</span></a>
          </li>';
      } else {
        echo '<li class="page-item"><a class="page-link" href="/index/' . $i . '">' . $i . '</a></li>';
      }
    }

    if(($current_page + 1) <= $pages) {
      echo '<li class="page-item">
        <a class="page-link" href="/index/' . ($current_page + 1) . '">>></a>
      </li>';
    }
      ?>
  </ul>
</nav>
<!-- End Pagination -->

                </div>
              </div>

<!-- Posty End-->
