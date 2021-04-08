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

<?php 
for($i=0;$i<=2;$i++){?>
<?php  
    if(!empty($productbyCategories[$categories[$i]["CategoryName"]])){?>
    <div class="trendig-product pb-10 off-white-bg">
            <div class="container">
                <div class="trending-box">
                <div class="title-box">
                    <h2><?php echo $categories[$i]["CategoryName"]?></h2>
                </div>
                <div class="product-list-box">
                    <!-- Arrivals Product Activation Start Here -->
                    <div class="trending-pro-active owl-carousel">
                    <?php foreach($productbyCategories[$categories[$i]["CategoryName"]] as $product){?>
                        <!-- Single Product Start -->
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href=<?php echo "/products/product_detail?ProductId=".$product['ProductId']?>>
                                    <img class="primary-img" style="height:225px;width:225px" src=<?php echo $product['ProductImage']?> alt="single-product">
                                    <img class="secondary-img" style="height: 225px;width:225px" src=<?php echo $product['ProductImage2']?> alt="single-product">
                                </a>
                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                            </div>
                            <!-- Product Image End -->
                            <!-- Product Content Start -->
                            <div class="pro-content">
                                <div class="pro-info">
                                    <h4><a href=<?php echo "/products/product_detail?ProductId=".$product['ProductId']?>><?php echo $product['ProductName']?></a></h4>
                                    <p><span class="price"><?php echo $product['ProductPrice']-$product['ProductPrice']*($product['Discount']/100)."VNĐ"?></span> <del class="prev-price"><?php echo $product['ProductPrice']?></del></p>
                                    <div class="label-product l_sale"><?php echo $product['Discount']?><span class="symbol-percent">%</span></div>
                                </div>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <input type="hidden" class="ProdId" value=<?php echo $product['ProductId']?>>
                                        <a href='#' data-toggle="modal" data-target=<?php echo '#'.$product['ProductId']?>> + Add To Cart</a>
                               
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
<?php 
for($i=0;$i<=2;$i++){?>
<?php  
if(!empty($productbyCategories[$categories[$i]["CategoryName"]])){?>
<?php foreach($productbyCategories[$categories[$i]["CategoryName"]] as $product){?>
<div class="modal fade" id=<?php echo $product['ProductId']?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
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
                                    <a data-fancybox="images" href="/img/products/35.jpg"><img src=<?php echo $product['ProductImage']?> alt="product-view"></a>
                                </div>
                        
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                            <div class="product-thumbnail mt-15">
                                <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                                    <a class="active" data-toggle="tab" href="#thumb1"><img src=<?php echo $product['ProductImage']?> alt="product-thumbnail"></a>
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
                                    <p class="d-flex align-items-center"><span class="prev-price"><?php echo $product['ProductPrice']."VNĐ"?></span><span class="price"><?php echo $product['ProductPrice']-$product['ProductPrice']*($product['Discount']/100)."VNĐ"?></span><span class="saving-price"><?php echo "save ".$product["Discount"]?></span></p>
                                </div>
                                <p class="mb-20 pro-desc-details"></p>
                                
                                <div class="box-quantity d-flex hot-product2">
                                    <input title=<?php echo "quantity".$product['ProductId']?> class="quantity mr-15" type="number" min="1" value="1">
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a class="addtocart" onclick="return test(0,<?php echo "event,".$product['ProductId']?>)" href="#" title="" data-original-title="Add to Cart"> + Add To Cart</a>
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
    <?php }?>
    <?php }?>


     