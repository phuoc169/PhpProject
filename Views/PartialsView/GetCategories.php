<div class="col-xl-3 col-lg-4 d-none d-lg-block">
    <div class="vertical-menu mb-all-30">
        <nav>
            <ul class="vertical-menu-list">
            <?php foreach($categories as $category){?>
                <li class=""><a href="shop.html"><span><img src="/img/vertical-menu/1.png" alt="menu-icon"></span><?php echo $category['CategoryName']?><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                <?php }?>
                <!-- More Categoies Start -->
                <li id="cate-toggle" class="category-menu v-cat-menu">
                    <ul>
                        <li class="has-sub"><a href="#">More Categories</a>
                            <ul class="category-sub">
                                <li><a href="shop.html"><span><img src="/img/vertical-menu/11.png" alt="menu-icon"></span>Accessories</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
              
                <!-- More Categoies End -->
            </ul>
        </nav>
    </div>
</div>