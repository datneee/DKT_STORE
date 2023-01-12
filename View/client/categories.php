
<aside class="aside-category">
    <h3><i class="fa fa-bars"></i>&nbsp;&nbsp; Danh mục sản phẩm</h3>
        <ul class="list-unstyled">
            <?php
            foreach ($categories as $category) {
                if ($category["pk_category_product_id"] == $categoryActived) {
                ?>
                <li >
                    <a style="background: #77ca64; color: #ffff" href="categories?category=<?php echo $category["pk_category_product_id"] ?>" >
                        <?php echo $category["c_name"] ?>
                    </a>
                </li>
            <?php } else {?>
                <li >
                    <a href="categories?category=<?php echo $category["pk_category_product_id"] ?>" >
                        <?php echo $category["c_name"] ?>
                    </a>
                </li>
            <?php }} ?>
        </ul>

</aside>