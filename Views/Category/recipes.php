<!-- Logo -->
  <section class="jumbotron text-center">
        <div class="container">
          <p class="jumbotron-heading">
            <img src="/public/images/fitandfastbyewa.png" height="100" alt=""></a>
        </p>
        <p class="lead text-muted">
          Lubisz jeść, ale nie chcesz przytyć. Nie martw się i jedz śmiało, pamiętaj tylko by to co gotujesz było zdrowe. To nie trudne. Rozsmakuj się w zdrowym odżywianiu już dziś!
        </p>
        </div>
      </section>
  <!-- Logo End-->
  <!-- carousel -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="/public/images/header/piers-z-kurczaka-pieczona-z-warzywami.jpg" alt="Pierś z kurczaka pieczona z warzywami">
              <div class="container">
                <div class="carousel-caption text-left">
                  <h1>Zdrowe odżywianie i proste przepisy kulinarne</h1>
                  <p>Sprawdź sam jakie proste jest zdrowe odżywianie. Gotowanie nie musi być trudne i czasochłonne. <br />
                    Wystarczy mieć dobry przepis, a każde
                    śniadanie, obiad czy kolacja doda Ci zdrowia i energii. Fit&FastByEwa pomoże Ci w przygotowaniu posiłków pełnych zdrowia, które dostarczą Twojemu organizmowi
                    niezbędnych witamin i składników mineralnych.</p>
                  <p><a class="btn btn-lg btn-success" href="#" role="button">Zobacz co jesz</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="/public/images/header/piers-z-kurczaka-pieczona-w-pesto-z-pomidorem-i-mozzarella.jpg" alt="Pierś z kurczaka pieczona w pesto z pomidorem i mozzarellą">
              <div class="container">
                <div class="carousel-caption text-left">
                  <h1>Dietetyczne, proste i szybkie dania</h1>
                  <p>Dieta bez diety. To możliwe, wystarczy zastosować odpowiednie składniki i zdrowe, dietetyczne danie gotowe. <br />
                    Zdrowa kuchnia nie musi być nudna.
                  Sprawdź sam i wypróbuj kilka fit przepisów. Dania wegetaiańskie, mięsne czy rybne, zupy, koktajle, przekąski. Każdy znajdzie tu coś dla siebie.
                  Rozpocznij zdrowy tryb życia już dziś!
                </p>
                  <p><a class="btn btn-lg btn-success" href="#" role="button">Sprawdź co na obiad</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="/public/images/header/makaron-z-brokulami-i-suszonymi-pomidorami.jpg" alt="Makaron z brokułami i suszonymi pomidorami">
              <div class="container">
                <div class="carousel-caption text-left">
                  <h1>Dietetyczny blog kulinarny dla każdego</h1>
                  <p>Brakuje Ci inspiracji w kuchni. Chcesz gotować zdrowo i smacznie. <br/>
                    Korzystaj z dietetycznych przepisów bloga Fit&FastByEwa i ciesz się z bycia fit!.
                  Zacznij już dziś zdrowo się odżywiać. Prostymi krokami wprowadź do swojej diety wiecej warzyw i owoców. Zadbaj by składniki były pełnowartościowe i odpowiednio
                  przygotowane.
              </p>
                  <p><a class="btn btn-lg btn-success" href="#" role="button">Wypróbuj dania wegetariańskie</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
<!-- carousel End -->

<!-- Posty -->
<div class="album py-5 bg-light">
        <div class="container">
          <h1 class="text-center">#<?php echo $category; ?></h1>
          <h3 class="text-center category-title">Wypróbuj przepisy oznaczone tagiem: <strong>#<?php echo $category ?></strong></h3>
          <div class="row">
            <?php foreach($recipes as $recipe) {
              include 'recipe.php';
          } ?>
          </div>
        </div>
      </div>

<!-- Posty End-->
