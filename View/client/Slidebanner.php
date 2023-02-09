<div class="owl-slider">
    <div class="item">
        <!-- ============================ -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                    foreach ($slides as $slide) {
                        if ($slide["pk_slide_id"] == 1) {

                ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $slide["pk_slide_id"] ?>" class="active"></li>
                <?php
                        } else {

                ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $slide["pk_slide_id"] ?>"></li>
                <?php } } ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php

                    foreach ($slides as $slide) {
                        if ($slide["pk_slide_id"] == 1) {
                ?>
                    <div class="item active"><img src="public/frontend/images/<?php echo $slide["c_img"] ?>"
                                              alt="Los Angeles">
                    </div>
                <?php
                        } else {
                ?>
                    <div class="item"><img src="public/frontend/images/<?php echo $slide["c_img"] ?>"
                                       alt="Los Angeles">
                    </div>
                <?php
                        } }
                ?>
            </div>

            <!-- Left and right controls -->
        </div>
    </div>
</div>