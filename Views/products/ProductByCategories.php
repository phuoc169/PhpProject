<?php   
        $productbyCategories=array();
        foreach($categories as $category){
            $productCate=[];
            foreach($products as $product){
                if($product['CateId']==$category['CateId']){
                    array_push($productCate,$product);
                }
            }
            $productbyCategories=array_merge($productbyCategories,array($category['CategoryName']=>$productCate));  
        }
?>

<?php foreach($categories  as $category){?>
<?php if(!empty($productbyCategories[$category["CategoryName"]])){?>
    <div class="trendig-product pb-10 off-white-bg">
            <div class="container">
                <div class="trending-box">
                <div class="title-box">
                    <h2><?php echo $category['CategoryName']?></h2>
                </div>
                <div class="product-list-box">
                    <!-- Arrivals Product Activation Start Here -->
                    <div class="trending-pro-active owl-carousel">
                    <?php foreach($productbyCategories[$category["CategoryName"]] as $product){?>
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href=<?php echo "/products/product_detail?ProductId=".$product['ProductId']?>>
                                    <img class="primary-img" src="/img/products/1.jpg" alt="single-product">
                                    <img class="secondary-img" src="/img/products/2.jpg" alt="single-product">
                                </a>
                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <div class="pro-info">
                                    <h4><a href=<?php echo "/products/product_detail?ProductId=".$product['ProductId']?>><?php echo $product['ProductName']?></a></h4>
                                    <p><span class="price"><?php echo $product['ProductPrice']-$product['ProductPrice']*0.15?></span> <del class="prev-price"><?php echo $product['ProductPrice']?></del></p>
                                    <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                                </div>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="cart.html" title="Add to Cart"> + Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a href="compare.html" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                        <a href="wishlist.html" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Content End -->
                        </div>
                        <?php }?>
                    </div>
                    <!-- Arrivals Product Activation End Here -->                    
                </div>
                <!-- main-product-tab-area-->
                </div>
            </div>
            <!-- Container End -->
        </div>
<?php }?>
<?php }?>





     