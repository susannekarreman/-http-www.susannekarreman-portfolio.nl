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






<br>
<div class="mijnwerk">
  <h1>Mijn werk</h1>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<body>

<div class="container">
  <div class="column">
<div class="row">
  <div class="col-9 test"> 
<div class="row">

<div class="card1">
    <div class="image">
      <img src="/img/mocupnrc.png"/>
    </div>
    <div class="details">
      <div class="center">
        <h1>Achter de schermen<br><span>Opdrachtgever: NRC</span></h1>
        <a href="/project"><p>Bekijk hier mijn project.</p></a>

      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
<div class="column">
  <div class="row">
  <div class="col-9 test"> 
<div class="row">
  
<div class="card1">
    <div class="image">
      <img src="/img/foodcam.png"/>
    </div>
    <div class="details">
      <div class="center">
        <h1>Foodcam<br><span>Opdrachtgever: Online department</span></h1>
        <a href="/projectfc"><p>Bekijk hier mijn project.</p></a>

      </div>
    </div>
  </div>
  </div>
  </div>
</div>
</div>
</div>


  <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>





  
  <?php snippet('footer') ?>
 
  <?php
  

    
    
  
 

 


