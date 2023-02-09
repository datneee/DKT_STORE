<div class="col-xs-12 col-md-9" style="width: 100%">
    <!-- main -->
    <h1>Tin tức</h1>
    <div class="wrapper-blog" style="display: flex;flex-wrap:wrap ">
        <!-- list news -->
        <?php
        foreach ($news as $new) {
            ?>
            <div class="col-xs-6 col-sm-4 col-md-6 ">
                <div class="product-grid product-loop"">
                    <a href="/news?code=<?php echo $new['pk_news_id'] ?>" class="image"> <img src="public/upload/news/<?php echo $new["c_img"] ?>" alt="<?php echo $new["c_name"] ?>" title="<?php echo $new["c_name"] ?>" class="img-responsive">
                        <h3 style="word-wrap: break-word; white-space: normal;overflow: hidden; display: -webkit-box; text-overflow: ellipsis; -webkit-box-orient: vertical; -webkit-line-clamp: 2; padding: 0 2px"><?php echo $new["c_name"] ?></h3>
                        <p class="date"><?php $now = new DateTime(); echo $now->format('Y-m-d'); ?></p>
                        <!--<p class="desc"><?php /*echo $new["c_description"] */?></p>-->
                    </a>
                </div>

            </div>
        <?php } ?>
        <!-- end list news -->
    <div style="display: flex;width: 100%;justify-content: center;">

        <ul class="pagination pull-right" style="margin-top: 0px !important">
            <li><a >Trang</a></li>
            <?php
                for ($i = 0; $i <= $pages; ++$i) {
                    if ($i + 1 == $paging) {

            ?>
                <li><a style="background: #77ca64; color: #ffff" href="?newPage=<?php echo $i ?>"><?php echo $i + 1 ?></a></li>
            <?php } else { ?>
                        <li><a href="?newPage=<?php echo $i ?>"><?php echo $i + 1 ?></a></li>
            <?php }} ?>
        </ul>
    </div>

    <!-- end main -->
</div>