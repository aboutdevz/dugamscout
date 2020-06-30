

<div class="container-fluid mt-5">
  <div id="CarouselHero" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php $hus = $data['content']['resultSet'] ; ?>
    <?php for ($i=0;$i<=count($hus)-1;$i++):?>
        <li data-target="#CarouselHero" data-slide-to="<?=$i?>" class="<?php if ($i < 1){echo 'active';}?>"></li>
    <?php endfor; ?>
      </ol>

      <?php $counter = 1 ;?>
      <div class="carousel-inner">
        <?php $src = $hus?>
        <?php foreach($src as $pos): ?>
          <?php if($counter == 3){break;} ?>
        <div class="carousel-item <?php if ($counter == 1){echo'active';}?>">
          <img class="carousel-item-img d-block w-100" src="<?=$pos['gambar'];?>" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5><?=$pos['judul']; ?></h5>
            <p><?=$pos['keterangan'];?></p>
          </div>
        </div>
        <?php $counter++;?>
        <?php endforeach; ?>
      </div>
        

   <a class="carousel-control-prev" href="#CarouselHero" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#CarouselHero" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>