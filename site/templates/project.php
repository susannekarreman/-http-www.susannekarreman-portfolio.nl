<?php snippet('header') ?>
<div class="row border-bottom">
  <div class="col-12">
    <h6> Schoolopdracht NRC september 2020 - november 2020 </h6>
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-12">
    <h2> Achter de scheremen </h2>
    <br>
    <p> <i> Achter de schermen is een concept waarbij het NRC een gezicht krijgt door de journalist 
      naar de voorgrond te laten treden, die niet stopt tot de volledige waarheid boven water komt. 
      Hierdoor helpen we de lezer een mening te vormen door feiten aan te reiken en het hele proces zo 
      transparant mogelijk te laten zien.</i> </p>

      <img src="<?= $site->url() ?>/img/nrcxteam.jpg">
      <br>
      <p> Het project is opgedeeld in verschillende fases en sprints. Tijdens deze fases zijn niet alle
      deliverables op het juiste momet uitgevoerd. Dit maakte mijn proces uniek en heb ik 
      veel geleerd van mijn design sprints. </p>

      
  <div class="row">

<div class="column">
      <li><b>Discover</b></li>
      <ol> 
      <li>Deskresearch</li>
      <li>Fieldresearch</li>
      <li>Observatie doelgroep</li>
      <li>Insightwall</li>
      <li>Merkanalyse</li>
      <li>Enquete</li>
      <li>Persona</li>
      <li>User journey</li>
      <li>Onderzoeksposter</li>
      </ol>
</div>
      
<div class="column">
      <li><b>Define</b></li>
      <ol>
      <li>Co-creatie NRC abonnee</li>
      <li>HWK vragen (met Moscow)</li>
      <li>Design principles</li>
      <li>Ideation sessie</li>
      <li>Brainwriting</li>
      <li>Senario</li>
      <li>Storyboard</li>
      <li>3 concepten</li>
      <li>3 prototypes</li>
      <li>Presenatie opdrachtgever</li>
      </ol>
</div>
   <div class="column">   
    <li><b>Desing</b></li>
    <ol>
    <li>stakeholdersmap</li>
    <li>Golden circle</li>
    <li>Job stories</li>
    <li>Reframing</li>
    <li>Ondrzoek naar de journalist</li>
    <li>Bezoek aan NRC journalist</li>
    <li>User story map (backlog)</li>
    <li>Sitemap</li>
    <li>Wirefrimes</li>
    </ol>
</div>
  
<div class="column">
    <li><b>Deliver</b></li>
    <ol>
    <li>Wireframes in sketch</li>
    <li>Low fid prototype in sketch</li>
    <li>Desing system</li>
    <li>High fid prototype Figma</li>
    <li>Usability test</li>
    <li>User test</li>
    <li>Expo</li>
    </ol>
</div>

  </div>
</div>
</div>





  <?php
  if ($projectsPage = page('projects')): ?>
  <div class="row border-top">
    <div class="col-12">
      <h2 class="float-left">Mijn werk</h2>
      <a class="float-right" href="<?= url('projects'); ?>">Bekijk al mijn werk &#8594;</a>
    </div>
    <?php foreach ($projectsPage->children()->listed()->paginate(3) as $project): ?>
    <div class="col-12 col-lg-4">
      <div class="card h-100">
      <img src="<?= $project->images()->findBy("template", "thumbnail")->url(); ?>" class="card-img-top" alt="thumbnail" />
      <div class="card-body">
        <h4 class="card-title"><a href="<?= $project->url() ?>"><?= $project->title() ?></a></h4>
        <p class="card-text"><?= $project->roles() ?></p>
        <a href="<?= $project->url() ?>">Lees meer &#8594;</a>
      </div>
    </div>
    </div>
    <?php endforeach ?>
  </div>
  <?php endif ?>

</main>

<?php snippet('footer') ?>
