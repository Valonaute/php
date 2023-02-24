<!------------------------Début du Carousel -------------------->
<div id="carouselExampleCaptions" class="carousel slide" data-interval="1000" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" style="color: black ;">
        <?php // ------------------ Tentative de rendu dynamique de le carousel -----------------
                        foreach($slides as $slide){
                            $i = 0;
                            $i++;
                            $activeslide = ($slide['id_slide'] == $i) ? 'active' : '' ;
                    ?>
                        <div class="carousel-item <?= $activeslide; ?>" id="item-<?= $slide['id_slide'] ?>">
                            <img src="uploads/<?= $slide['image'] ?>">
                            <div class="carousel-caption">
                                <h4><?= $slide['titre'] ?></h4><p><?= $slide['description'] ?></p>
                            </div>              
                        </div> 
                    <?php
                        }
                    ?></div> //------------------ Reprise format simple ----------------------------------*/ ?>

            <?php foreach ($slides as $slide) { ?>
                <div class="carousel-item active">
                    <img src="uploads/<?= $slide['image'] ?>" height="800px" width="500px" class="d-block w-100" alt="<?= $slide['description'] ?>">
                    <div class="carousel-caption d-none d-md-block" style="color: black ;">
                        <h5><?= $slide['titre'] ?></h5><br>
                        <p>
                            <?= $slide['description'] ?>
                        </p><br>
                    </div>
                </div>
            <?php } ?>
        </div>

        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev" style="color: black ;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next" style="color: black ;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div> ----------------------------------------------------->