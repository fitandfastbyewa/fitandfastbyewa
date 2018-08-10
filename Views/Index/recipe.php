<div class="col-md-4">
  <div class="card mb-4 shadow-sm">
    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="<?php echo $recipe['title']; ?>"
    src="/public/images/przepisy/<?php echo $recipe['imageUrl']; ?>" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
    <div class="card-body">
      <h4><?php echo $recipe['title']; ?> <small class="text-muted text-right cook-time"><?php echo $recipe['cook_time']; ?> min</small></h4>
      <p class="card-text"><?php echo $recipe['description']; ?></p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <button type="button" class="btn btn-sm btn-success"><a style="color:#FFFFFF;" href="/<?php echo $recipe['url']; ?>">Zobacz</a></button>
        </div>
        <div>
          <img src="/public/images/social-media/facebook-fitandfastbyewa.png"/>
          <img src="/public/images/social-media/google-plus-fitandfastbyewa.png"/>
          <img src="/public/images/social-media/pinterest-fitandfastbyewa.png"/>
        </div>
      </div>
    </div>
  </div>
</div>
