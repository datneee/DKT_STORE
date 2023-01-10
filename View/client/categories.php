
<aside class="aside-category">
    <h3><i class="fa fa-bars"></i>&nbsp;&nbsp; Danh mục sản phẩm</h3>
    <ul class="list-unstyled">
        <?php
            foreach ($categories as $category) {
        ?>
            <li >
                <a href="category/<?php echo $category["pk_category_product_id"] ?>" >
                    <?php echo $category["c_name"] ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</aside>