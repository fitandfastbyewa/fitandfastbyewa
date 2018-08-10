<!-- Logo -->
  <section class="jumbotron text-center" style="padding:0.5rem">
        <div class="container">
            <img src="/public/images/fitandfastbyewa.png" height="100" alt=""></a>
        </div>
      </section>
  <!-- Logo End-->

<div class="container recipe">
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
    <h1 class="title border-bottom"><?php echo $recipe['title']; ?> <span class="badge badge-success"><?php echo $recipe['cook_time'];?> min</span></h1>
    <p class="mb-0"><?php echo $recipe['description']; ?></p>
  <footer class="blockquote-footer">Fit&FastByEwa | <cite><?php echo $recipe['createdate']; ?></cite></footer>
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

  <h4>Czas przygotowania i ilość porcji</h4>
  <div>
    <?php echo $recipe['cook_time']; ?> min
  </div>
  <h4>Produkty</h4>

  <h4>Przygotowanie</h4>
  <div>
    <?php echo $recipe['recipe']; ?>
  </div>
  <h4>Wiem co jem</h4>

  <h4>Spróbuj także</h4>
</div>
