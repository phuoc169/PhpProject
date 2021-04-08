<div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="product.html">Shop</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <div class="main-shop-page pt-100 pb-100 ptb-sm-60">
            <div class="container">
                <!-- Row End -->
                <div class="row">
                    <!-- Sidebar Shopping Option Start -->
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="sidebar">
                            <!-- Sidebar Electronics Categorie Start -->
                            <div class="electronics mb-40">
                                <h3 class="sidebar-title">Electronics</h3>
                                <div id="shop-cate-toggle" class="category-menu sidebar-menu sidbar-style">
                                    <ul>
                                    <?php foreach($types as $type){?>
                                        <li class="has-sub"><a href="#"><?php echo $type['TypeName']?></a>
                                            <ul class="category-sub">
                                            <?php foreach($categories as $category){?>
                                            <?php if($category['TypeId']==$type['TypeId']){?>
                                                <li><a href=<?php echo "/products/shop?ByCategory=".$category['CateId']?>><?php echo $category['CategoryName']?></a></li>
                                                <?php }?> 
                                            <?php }?>
                                            </ul>
                                            <!-- category submenu end-->
                                        </li>
                                        <?php }?>
                                    </ul>
                                </div>
                                <!-- category-menu-end -->
                            </div>
                            <!-- Sidebar Electronics Categorie End -->
                            <!-- Price Filter Options Start -->
                            <div class="search-filter mb-40">
                                <h3 class="sidebar-title">filter by price</h3>
                                <form action="#" class="sidbar-style">
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount" class="amount-range" readonly="">
                                </form>
                            </div>
                            <!-- Product Color End -->
                            <!-- Product Top Start -->
                            <div class="top-new mb-40">
                                <h3 class="sidebar-title">Top New</h3>
                                <div class="side-product-active owl-carousel">
                                    <!-- Side Item Start -->
                                    <div class="side-pro-item">
                                    <?php foreach($productstopnew as $producttopnew){?>
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src=<?php echo "/".$producttopnew['ProductImage']?> alt="single-product">
                                                    <img class="secondary-img" src=<?php echo "/".$producttopnew['ProductImage2']?> alt="single-product">
                                                </a>
                                                <div class="label-product l_sale"><?php echo $producttopnew['Discount']?><span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.html"><?php echo $producttopnew['ProductName']?></a></h4>
                                                <p><span class="price"><?php echo $producttopnew['ProductPrice']-$producttopnew['ProductPrice']*0.3?></span><del class="prev-price"><?php echo $producttopnew['ProductPrice']?></del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                    <?php }?>
                                        <!-- Single Product End -->  
                                        <!-- Single Product Start -->
                                                                           
                                    </div>
                                    <!-- Side Item End -->
                                    <!-- Side Item Start -->
                                    <div class="side-pro-item">
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="/img/products/41.jpg" alt="single-product">
                                                    <img class="secondary-img" src="/img/products/42.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.html">Silver Work Lamp  Proin</a></h4>
                                                <p><span class="price">$80.45</span><del class="prev-price">$100.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->  
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="/img/products/36.jpg" alt="single-product">
                                                    <img class="secondary-img" src="/img/products/35.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.html">Silver Work Lamp  Proin</a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="/img/products/33.jpg" alt="single-product">
                                                    <img class="secondary-img" src="/img/products/34.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.html">Lamp Proin Work  Silver </a></h4>
                                                <p><span class="price">$120.45</span><del class="prev-price">130.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="/img/products/31.jpg" alt="single-product">
                                                    <img class="secondary-img" src="/img/products/32.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.html">Work Lamp Silver Proin</a></h4>
                                                <p><span class="price">$140.45</span><del class="prev-price">$150.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->                                        
                                    </div>
                                    <!-- Side Item End -->
                                    <!-- Side Item Start -->
                                    <div class="side-pro-item">
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="/img/products/15.jpg" alt="single-product">
                                                    <img class="secondary-img" src="/img/products/16.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.html">Lamp Work Silver Proin</a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->  
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="/img/products/17.jpg" alt="single-product">
                                                    <img class="secondary-img" src="/img/products/18.jpg" alt="single-product">
                                                </a>
                                                <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.html">Silver Work Lamp  Proin</a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="/img/products/23.jpg" alt="single-product">
                                                    <img class="secondary-img" src="/img/products/24.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.html">Proin Work Lamp Silver </a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End --> 
                                        <!-- Single Product Start -->
                                        <div class="single-product single-product-sidebar">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.html">
                                                    <img class="primary-img" src="/img/products/25.jpg" alt="single-product">
                                                    <img class="secondary-img" src="/img/products/26.jpg" alt="single-product">
                                                </a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <h4><a href="product.html">Work Lamp Silver Proin</a></h4>
                                                <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                        <!-- Single Product End -->                                        
                                    </div>
                                    <!-- Side Item End -->
                                </div>
                            </div>
                            <!-- Product Top End -->                            
                            <!-- Single Banner Start -->
                            <div class="col-img">
                                <a href="shop.html"><img src="/img/banner/banner-sidebar.jpg" alt="slider-banner"></a>
                            </div>
                            <!-- Single Banner End -->
                        </div>
                    </div>
                    <!-- Sidebar Shopping Option End -->
                    <!-- Product Categorie List Start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                        <!-- Grid & List View Start -->
                        <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                            <div class="grid-list-view  mb-sm-15">
                                <ul class="nav tabs-area d-flex align-items-center">
                                    <li><a class="active" data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li><a data-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                                </ul>
                            </div>
                            <!-- Toolbar Short Area Start -->
                            <div class="main-toolbar-sorter clearfix">
                                <div class="toolbar-sorter d-flex align-items-center">
                                    <label>Sort By:</label>
                                    <select onchange="return SortElement()" id="SortBy" class="sorter wide">
                                        <option value="" selected="">Sort By</option>
                                        <option value="NameAz">Name, A to Z</option>
                                        <option value="NameZa">name, Z to A</option>
                                        <option value="PriceLowHigh">Price low to high</option>
                                        <option value="PriceHighLow" >Price high to low</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Toolbar Short Area End -->
                            <!-- Toolbar Short Area Start -->
                            <div class="main-toolbar-sorter clearfix">
                                <div class="toolbar-sorter d-flex align-items-center">
                                    <label>Show:</label>
                                    <select class="sorter wide">
                                        <option value="12">12</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="75">75</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Toolbar Short Area End -->
                        </div>
                        <!-- Grid & List View End -->
                        <div class="main-categorie mb-all-40">
                            <!-- Grid & List Main Area End -->
                            <div class="tab-content fix">
                                <div id="grid-view" class="tab-pane fade show active">
                                    <div class="row">
                                    <?php foreach($products as $product){?>
                                        <!-- Single Product Start -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src=<?php echo "/".$product['ProductImage']?> alt="single-product">
                                                        <img class="secondary-img" style="width: 225px;height: 225px" src=<?php echo "/".$product['ProductImage2']?> alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.html"><?php echo $product['ProductName']?></a></h4>
                                                        <p><span class="price"><?php echo $product['ProductPrice']-$product['ProductPrice']*0.3?></span><del class="prev-price"><?php echo $product['ProductPrice']?></del></p>
                                                        <div class="label-product l_sale"><?php echo $product['Discount']?><span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="#"  data-toggle="modal" data-target=<?php echo '#'.$product['ProductId']?> title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                            </div>
                                        </div>
                                        <?php }?>
                                        <!--Single Product End -->
                                </div>
                                <!-- #grid view End -->
                                <div id="list-view" class="tab-pane fade">
                                    <!-- Single Product Start -->
                                    <div class="single-product"> 
                                        <div class="row">        
                                            <!-- Product Image Start -->
                                            <div class="col-lg-4 col-md-5 col-sm-12">
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="/img/products/23.jpg" alt="single-product">
                                                        <img class="secondary-img" src="/img/products/24.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                     <span class="sticker-new">new</span>
                                                </div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="col-lg-8 col-md-7 col-sm-12">
                                                <div class="pro-content hot-product2">
                                                    <h4><a href="product.html">Accessorize with a straw hat</a></h4>
                                                    <p><span class="price">$15.19</span></p>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                        <a href='#'> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product"> 
                                        <div class="row">        
                                            <!-- Product Image Start -->
                                            <div class="col-lg-4 col-md-5 col-sm-12">
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="/img/products/30.jpg" alt="single-product">
                                                        <img class="secondary-img" src="/img/products/31.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="col-lg-8 col-md-7 col-sm-12">
                                                <div class="pro-content hot-product2">
                                                    <h4><a href="product.html">Tretchy Material Comfortable</a></h4>
                                                    <p><span class="price">$199.19</span><del class="prev-price">$205.50</del></p>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product"> 
                                        <div class="row">        
                                            <!-- Product Image Start -->
                                            <div class="col-lg-4 col-md-5 col-sm-12">
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="/img/products/41.jpg" alt="single-product">
                                                        <img class="secondary-img" src="/img/products/42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                    <span class="sticker-new">new</span>
                                                </div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="col-lg-8 col-md-7 col-sm-12">
                                                <div class="pro-content hot-product2">
                                                    <h4><a href="product.html">Neckline Short Sleeves  Stretchy</a></h4>
                                                    <p><span class="price">$58.19</span></p>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product"> 
                                        <div class="row">        
                                            <!-- Product Image Start -->
                                            <div class="col-lg-4 col-md-5 col-sm-12">
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="/img/products/1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="/img/products/2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="col-lg-8 col-md-7 col-sm-12">
                                                <div class="pro-content hot-product2">
                                                    <h4><a href="product.html">Accessorize with a straw hat</a></h4>
                                                    <p><span class="price">$152.19</span><del class="prev-price">$160.50</del></p>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product"> 
                                        <div class="row">        
                                            <!-- Product Image Start -->
                                            <div class="col-lg-4 col-md-5 col-sm-12">
                                                <div class="pro-img">
                                                    <a href="product.html">
                                                        <img class="primary-img" src="/img/products/23.jpg" alt="single-product">
                                                        <img class="secondary-img" src="/img/products/24.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="col-lg-8 col-md-7 col-sm-12">
                                                <div class="pro-content hot-product2">
                                                    <h4><a href="product.html">Faded Short Sleeves T-shirt</a></h4>
                                                    <p><span class="price">$15.19</span><del class="prev-price">$16.50</del></p>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!Faded short sleeves t-shirt with high neckline. Soft and stretchy material.</p>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.html" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                <!-- #list view End -->
                                <div class="pro-pagination">
                                    <ul class="blog-pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>                                    
                                    <div class="product-pagination">
                                        <span class="grid-item-list">Showing 1 to 12 of 51 (5 Pages)</span>
                                    </div>
                                </div>
                                <!-- Product Pagination Info -->
                            </div>
                            <!-- Grid & List Main Area End -->
                        </div>
                    </div>
                    <!-- product Categorie List End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <?php foreach($products as $product){?>
        <div class="modal fade" id=<?php echo $product['ProductId']?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <div class="main-product-thumbnail ptb-100 ptb-sm-60">
            <div class="container">
                <div class="thumb-bg">
                    <div class="row">
                        <!-- Main Thumbnail Image Start -->
                        <div class="col-lg-5 mb-all-40">
                            <!-- Thumbnail Large Image start -->
                            <div class="tab-content">
                                <div id="thumb1" class="tab-pane fade show active">
                                    <a data-fancybox="images" href=<?php echo "/".$product['ProductImage']?>><img src=<?php echo "/".$product['ProductImage']?> alt="product-view"></a>
                                </div>
                        
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                            <div class="product-thumbnail mt-15">
                                <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                                    <a class="active" data-toggle="tab" href="#thumb1"><img src=<?php echo "/".$product['ProductImage']?> alt="product-thumbnail"></a>
                                </div>
                            </div>
                            <!-- Thumbnail image end -->
                        </div>
                        <!-- Main Thumbnail Image End -->
                        <!-- Thumbnail Description Start -->
                        <div class="col-lg-7">
                            <div class="thubnail-desc fix">
                                <h3 class="product-header"><?php echo $product['ProductName']?></h3>
                                <div class="rating-summary fix mtb-10">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="rating-feedback">
                                        <a href="#">(1 review)</a>
                                        <a href="#">add to your review</a>
                                    </div>
                                </div>
                                <div class="pro-price mtb-30">
                                    <p class="d-flex align-items-center"><span class="prev-price"><?php echo $product['ProductPrice']?></span><span class="price"><?php echo $product['ProductPrice']-$product['ProductPrice']*0.15?></span><span class="saving-price">save 15%</span></p>
                                </div>
                                <p class="mb-20 pro-desc-details"></p>
                                
                                <div class="box-quantity d-flex hot-product2">
                                    <input title=<?php echo "quantity".$product['ProductId']?> class="quantity mr-15" type="number" min="1" value="1">
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a class="addtocart" onclick="return test(1,<?php echo "event,".$product['ProductId']?>)" href="#" title="" data-original-title="Add to Cart"> + Add To Cart</a>
                                        </div>
                                        <div class="actions-secondary">
                                            <a href="compare.html" title="" data-original-title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                            <a href="wishlist.html" title="" data-original-title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="socila-sharing mt-25">
                                    <ul class="d-flex">
                                        <li>share</li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Thumbnail Description End -->
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Container End -->
        </div>
        </div>
        </div>
    </div>
    </div>
    <?php }?>