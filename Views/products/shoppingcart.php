
<?php use app\Database;?>
<div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="cart.html">Cart</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- Cart Main Area Start -->
        <div class="cart-main-area ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Form Start -->
                        <form action="#">
                            <!-- Table Content Start -->
                            <div class="table-content table-responsive mb-45">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(isset($_SESSION['shoppingcart'])||count($_SESSION['shoppingcart'])>0){
                                            $subtotal=0?>
                                        <?php foreach($_SESSION['shoppingcart'] as $CartItem){ 
                                            $prod = Database::$db->getProductById($CartItem['prod_id']);
                                            $product=reset($prod);
                                            $total=$product['ProductPrice']*$CartItem['quantity'];
                                            $subtotal+=$total;
                                            ?>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src=<?php echo "/".$product['ProductImage']?> alt="cart-image"></a>
                                            </td>
                                            <td class="product-name"><a href="#"><?php echo $product['ProductName']?></a></td>
                                            <td class="product-price"><span class="amount"><?php echo $product['ProductPrice']?></span></td>
                                            <td class="product-quantity"><input class=<?php echo "quantity".$product['ProductId']?> onchange="return IncreaseQuantity(<?php echo 'event,'.$product['ProductId']?>)" type="number" value=<?php echo $CartItem['quantity']?>></td>
                                            <td class="product-subtotal"><?php echo $total?></td>
                                            <td class="product-remove"> <a onclick="return removeCart(<?php echo 'event,'.$product['ProductId']?>)" href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                        </tr>
                                        <?php }?>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table Content Start -->
                            <div class="row">
                               <!-- Cart Button Start -->
                                <div class="col-md-8 col-sm-12">
                                    <div class="buttons-cart">
                                        <input type="submit" value="Update Cart">
                                        <a href="/products">Continue Shopping</a>
                                    </div>
                                </div>
                                <!-- Cart Button Start -->
                                <!-- Cart Totals Start -->
                                <div class="col-md-4 col-sm-12">
                                    <div class="cart_totals float-md-right text-md-right">
                                        <h2>Cart Totals</h2>
                                        <br>
                                        <table class="float-md-right">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount"><?php echo $subtotal?></span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        <strong><span class="amount"><?php echo $subtotal?></span></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="/products/checkout">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cart Totals End -->
                            </div>
                            <!-- Row End -->
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
                 <!-- Row End -->
            </div>
        </div>