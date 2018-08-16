<!-- Logo -->
  <section class="jumbotron text-center border-bottom" style="padding:0.5rem">
        <div class="container">
            <img src="/public/images/fitandfastbyewa.png" height="100" alt=""></a>
        </div>
      </section>
  <!-- Logo End-->

<div class="container recipe mb-5">
  <blockquote class="blockquote text-center" style="line-height: 1.2em;">
    <!-- Breadcrump -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Fit&FastByEwa</a></li>
        <?php foreach ($breadcrumbs as $breadcrumb) {
          include 'breadcrumb.php';
      }; ?>
      </ol>
    </nav>
    <!-- BreadcrumpEnd -->
    <h1 class="title border-bottom"><?php echo $recipe['title']; ?>
      <span class="badge badge-success"><?php echo $recipe['cook_time'];?> min</span>
    </h1>
    <p class="mb-0"><?php echo $recipe['description']; ?></p>
  <footer class="blockquote-footer">Fit&FastByEwa | <cite><?php echo $recipe['createdate']; ?></cite></footer>
  <div style="font-size:1em;">
    <?php foreach($recipe['categories'] as $category) {
      echo '<span class="badge badge-success mt-3 mr-1"><a href="../category/' . $category['normalize_name'] . '">#' . $category['name'] . '</a></span>';
  } ?>
  </div>
  <div class="social-media float-right">
    <img src="/public/images/social-media/facebook-fitandfastbyewa.png"/>
    <img src="/public/images/social-media/google-plus-fitandfastbyewa.png"/>
    <img src="/public/images/social-media/pinterest-fitandfastbyewa.png"/>
  </div>
</blockquote>

  <figure class="figure">
    <img class="figure-img img-fluid rounded" src="/public/images/przepisy/<?php echo $recipe['imageUrl']; ?>" alt="<?php echo $recipe['title']; ?>"  />
    <figcaption class="figure-caption text-right"><?php echo $recipe['title']; ?> | Fit&FastByEwa</figcaption>
  </figure>

  <h3 class="pt-5 pb-2 text-center border-bottom">Czas przygotowania i ilość porcji</h3>
  <div class="text-justify p-2">
    Przygotowanie <strong><?php echo $recipe['title_variety']; ?> </strong>zajmuje około <?php echo $recipe['cook_time']; ?> min.
    <?php if(!empty($recipe['portion_number'])) {
      echo 'Podane niżej składniki wystarczą na przygotowanie ' . $recipe['portion_number'] . ' porcji.';
    } ?>
  </div>

  <h3 class="pt-5 pb-2 text-center border-bottom">Produkty</h3>
  <div class="text-justify p-2">
    Do przygotowania <strong><?php echo $recipe['title_variety']; ?></strong> potrzebujemy:
    <ul>
      <?php foreach($recipe['ingredients'] as $ingredient) {
        echo '<li>' .
          (!empty($ingredient['count']) ? $ingredient['count'] . ' x ' : '') .
          (!empty($ingredient['unit']) ? $ingredient['unit'] . ' ' : '') .
          $ingredient['name'] . '</li>';
      } ?>
    </ul>
  </div>

  <h3 class="pt-5 pb-2 text-center border-bottom">Przygotowanie</h3>
  <div class="text-justify p-2">
    <?php echo $recipe['recipe']; ?>
  </div>

<h3 class="pt-5 pb-2 text-center border-bottom">Przygotowanie krok po kroku</h3>
<div class="prepare text-justify p-2">
  Krótka foto relacja z przebiegu gotowania, która mam nadzieje pomoże i ułatwi w przygotowaniu <strong><?php echo $recipe['title_variety']; ?></strong>.
    <div class="card-group mt-5">
      <div class="row">
        <?php foreach($recipe['slider'] as $index => $image) {
          echo '
            <div class="col-md-4">
              <div class="card p-1 m-2 text-center">
                <img class="card-img-top" src="' . $image['url'] . '" alt="' . $image['description'] . '">
                  <div class="card-body">
                    <h5 class="card-title border-bottom p-2">Krok ' . ++$index . '</h5>
                    <p class="card-text">' . $image['description'] . '.</p>
                  </div>
              </div>
          </div>';
        } ?>
      </div>
    </div>
</div>
<!--
  <h3 class="p-3 text-center border-bottom">Wiem co jem</h3>
  <div class="text-justify p-2">
  </div>
-->
  <h3 class="pt-5 pb-2 text-center border-bottom">Spróbuj także</h3>
  <div class="similar-recipe text-justify p-2">
    Wypróbuj również inne dania, podobne do <strong><?php echo $recipe['title_variety']; ?></strong>.
  <div class="card-group mt-5">
    <div class="row">
    <?php foreach($recipe['similar_recipe'] as $similarRecipe) {
      echo '
      <div class="col-md-4">
        <div class="card p-1 m-2 text-center">
          <img class="card-img-top" src="/public/images/przepisy/' . $similarRecipe['imageUrl'] . '" alt="' . $similarRecipe['title'] . '">
            <div class="card-body">
              <h5 class="card-title border-bottom p-2">' . $similarRecipe['title'] . '</h5>
                <p class="card-text">' . $similarRecipe['description'] . '</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-success"><a style="color:#FFFFFF;" href="/recipe/' . $recipe['url'] . '">Zobacz</a></button>
                  </div>
                  </div>
            </div>
          </div>
        </div>
      ';
    } ?>
  </div>
</div>
</div>
