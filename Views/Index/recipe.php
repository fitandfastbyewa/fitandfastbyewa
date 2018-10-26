<div class="col-md-4">
  <div class="card p-1 m-2 text-center">
    <img class="card-img-top" alt="<?php echo $recipe['title']; ?>"
    src="/public/images/przepisy/<?php echo $recipe['imageUrl']; ?>" >
    <div class="card-body">
      <h4 class="card-title border-bottom p-2"><a href="/<?php echo $recipe['url']; ?>"><?php echo $recipe['title']; ?></a></h4>
      <span class="badge badge-success mb-2 p-2"><?php echo $recipe['cook_time']?> min</span>
      <p class="card-text"><?php echo $recipe['description']; ?></p>
      <div class="d-flex float-right">
        <div class="btn-group">
          <a style="color:#FFFFFF;" href="/<?php echo $recipe['url']; ?>"><button type="button" class="btn btn-sm btn-dark">Zobacz</button></a>
        </div>
      </div>
    </div>
</div>
</div>
