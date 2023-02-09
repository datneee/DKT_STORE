<h2 class="title"><span>Tin tức</span></h2>
    <div class="row">

        <div class="owl-home-blog owl-home-blog-sidebar">
            <!-- list hot news -->
            <?php
                foreach ($hotnews as $new) {
            ?>
                <div class="item">
                    <div class="article">
                        <a href="news/<?php echo $new["pk_slide_id"] ?>" class="image"> <img src="public/upload/news/<?php echo $new["c_img"] ?>" alt="<?php echo $new["c_name"] ?>" title="<?php echo $new["c_name"] ?>" class="img-responsive">
                            <div class="info">
                                <h3><a href="public/frontend/thumb/large/100/047/633/articles/<?php echo $new["c_img"] ?>"><?php echo $new["c_name"] ?></a></h3>
                                <p class="time"><?php $now = new DateTime(); echo $now->format('Y-m-d'); ?></p>
                                <p class="desc"><?php echo $new["c_description"] ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
            <!-- end list hot news -->
        </div>


    </div>
</div>