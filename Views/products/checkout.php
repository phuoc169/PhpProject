<div class="coupon-area pt-100 pt-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="coupon-accordion">
                            <!-- ACCORDION START -->
                            
                            <?php if(!isset($_COOKIE['Email'])){?>
                            <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                            <div id="checkout-login" class="coupon-content">
                                <div class="coupon-info">
                                    <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                                    <form method="POST" action="/users/login">
                                    <input type="hidden" name="NumberPhone">
                                    <input type="hidden" name="FirstName">
                                    <input type="hidden" name="LastName">
                                        <p class="form-row-first">
                                            <label>Username or email <span class="required">*</span></label>
                                            <input type="email" name="Email" placeholder="Enter your email address..." id="input-email" class="form-control">
                                        </p>
                                        <p class="form-row-last">
                                            <label>Password  <span class="required">*</span></label>
                                            <input type="password" name="Password" placeholder="Password" id="input-password" class="form-control">
                                        </p>
                                        <p class="form-row">
                                            <input name="btnlogin" type="submit" value="Login">
                                            <label>
											<input type="checkbox">
											 Remember me 
										</label>
                                        </p>
                                        <p class="lost-password">
                                            <a href="#">Lost your password?</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                    <?php }?>
                            <!-- ACCORDION END -->
                            <!-- ACCORDION START -->
                            <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                            <div id="checkout_coupon" class="coupon-checkout-content">
                                <div class="coupon-info">
                                    <form action="#">
                                        <p class="checkout-coupon">
                                            <input type="text" class="code" placeholder="Coupon code">
                                            <input type="submit" value="Apply Coupon">
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- ACCORDION END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkout-area pb-100 pt-15 pb-sm-60">
            <div class="container">
                <div class="row">
                <form method="POST" action="/products/checkout">
                <div class="order-notes">
                    <div class="checkout-form-list">
                        <label>Order Notes</label>
                        <textarea name="ordermessage" id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="checkout-form-list">
                        <label>Address <span class="required">*</span></label>
                        <input name="ShippingAddress" type="text" placeholder="Street address">
                    </div>
                </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="your-order">
                            <h3>Your order</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     use app\Database;
                                        if(isset($_SESSION['shoppingcart'])||count($_SESSION['shoppingcart'])>0){
                                            $subtotal=0?>
                                    <?php
                                        foreach($_SESSION['shoppingcart'] as $CartItem){
                                            $prod = Database::$db->getProductById($CartItem['prod_id']);
                                            $product=reset($prod);
                                            $total=$product['ProductPrice']*$CartItem['quantity'];
                                            $subtotal+=$total;?>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                <?php echo $product['ProductName']?> <span class="product-quantity"> <?php echo 'x '.$CartItem['quantity']?> </span>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount"><?php echo $total?> </span>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    <?php }else{ 
                                        echo "Không có sản phẩm nào để thanh toán"?>
                                    <?php }?>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount"><?php echo $subtotal?></span></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingone">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Direct Bank Transfer
                                                </button>
                                                <div id="paypal-button-container"></div>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingone" data-parent="#accordion">
                                            <div class="card-body">
                                            
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingtwo">
                                            <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Cheque Payment
                                        </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingthree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          PayPal
                                        </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingthree" data-parent="#accordion">
                                            <div class="card-body">
                                                 <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subscribe-form-group">
                                <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                                <button value="Make a Payment" name="checkoutbtn" type="submit">Make a Payment</button>
                        </div>
                        </div>

                    </div>
                </div>
                </form>
            </div>
        </div>