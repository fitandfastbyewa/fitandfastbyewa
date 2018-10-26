<!-- Logo -->
  <section class="jumbotron text-center border-bottom" style="padding:0.5rem">
        <div class="container">
            <img src="/public/images/fitandfastbyewa.png" height="100" alt=""></a>
        </div>
      </section>
  <!-- Logo End-->

<div class="container mb-5">
  <!-- Breadcrump -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Fit&FastByEwa</a></li>
      <li class="breadcrumb-item"><a href="#">Składniki śniadanie, obiad i kolację</a></li>
    </ol>
  </nav>
  <!-- BreadcrumpEnd -->

  <h1 class="title text-center">Składniki na śniadanie, obiad i kolację</h1>

<h3 class="pt-5 pb-2 text-center"><a
  href="/recipe/<?php echo $ingredients['sniadanie']['recipe_url']; ?>"><?php echo $ingredients['sniadanie']['recipe_title']; ?></a></h3>
  <ul class="list-group">
<?php foreach($ingredients['sniadanie']['ingredients'] as $ingredient) {
    echo '<li class="list-group-item">';
    if(!empty($ingredient['count'])) {
      echo $ingredient['count'] . ' x ';
    }
    echo $ingredient['name'] . '</li>';
  }?>
  </ul>

  <h3 class="pt-5 pb-2 text-center"><a
    href="/recipe/<?php echo $ingredients['obiad']['recipe_url']; ?>"><?php echo $ingredients['obiad']['recipe_title']; ?></a></h3>

  <ul class="list-group">
<?php foreach($ingredients['obiad']['ingredients'] as $ingredient) {
    echo '<li class="list-group-item">';
    if(!empty($ingredient['count'])) {
      echo $ingredient['count'] . ' x ';
    }
    if(!empty($ingredient['unit'])) {
      echo $ingredient['unit'] . ' ';
    }
    echo $ingredient['name'] . '</li>';
  }?>
  </ul>

  <h3 class="pt-5 pb-2 text-center"><a
    href="/recipe/<?php echo $ingredients['kolacja']['recipe_url']; ?>"><?php echo $ingredients['kolacja']['recipe_title']; ?></a></h3>
  <ul class="list-group">
<?php foreach($ingredients['kolacja']['ingredients'] as $ingredient) {
    echo '<li class="list-group-item">';
    if(!empty($ingredient['count'])) {
      echo $ingredient['count'] . ' x ';
    }
    echo $ingredient['name'] . '</li>';
  }?>
</ul>

</div>
