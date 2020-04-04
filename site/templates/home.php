<?php snippet('header') ?>

<main>
  <div class="row align-items-center">
    <div class="col-12 col-lg-6">
      <h1><?= $page->introductiontitle() ?></h1>
      <p class="lead"><?= $page->introductiontext() ?></p>
      <a href="<?= $site->page('projects') ?>" class="btn btn-primary" role="button" aria-pressed="true">Bekijk mijn werk</a>
      <a href="<?= $site->page('about') ?>" class="btn btn-outline-primary" role="button" aria-pressed="true">Meer over mij</a>
    </div>
    <div class="col-12 col-lg-6">
      <img src="<?= $page->image()->url(); ?>" class="img-fluid" alt="<?= $page->image()->title(); ?>" />
    </div>
  </div>
  <?php
  
  if ($projectsPage = page('projects')): ?>
  <div class="row border-top">
    <div class="col-12">
      <br>
      <h2 class="float-left">Mijn werk</h2>
      <br>
      <a class="float-right projectknop" href="<?= $site->page('projects') ?>">Bekijk al mijn werk &#8594;</a>

    </div>
    <?php foreach ($projectsPage->children()->listed()->paginate(3) as $project): ?>
    <div class="col-12 col-lg-4">
      <div class="card h-100">
      <img src="<?= $project->images()->findBy("template", "thumbnail")->url(); ?>" class="card-img-top" alt="thumbnail" />
      <div class="card-body">
        <h4 class="card-title"><a href="<?= $project->url() ?>"><?= $project->title() ?></a></h4>
        <p class="card-text"><?= $project->roles() ?></p>
        <a class="readmoreknop" href="<?= $project->url() ?>">Lees meer &#8594;</a>
      </div>
    </div>
    </div>
    
    <?php endforeach ?>
  </div>
  <?php endif ?>
</main>
<br>
<?php snippet('footer') ?>