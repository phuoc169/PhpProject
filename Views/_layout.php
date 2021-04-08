<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home-3 || Truemart Responsive Html5 Ecommerce Template</title>
    <meta name="viewport" content="width=device-width, block-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/myalert.css">
    <!-- Favicons -->
    <link rel="shortcut icon" href="/img/favicon.ico">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- Ionicons css -->
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <!-- linearicons css -->
    <link rel="stylesheet" href="/css/linearicons.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="/css/nice-select.css">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="/css/jquery.fancybox.css">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    <!-- Nivo slider css -->
    <link rel="stylesheet" href="/css/nivo-slider.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="/css/default.css">
    <!-- Main css -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/css/responsive.css">

    <!-- Modernizer js -->
    <script src="/js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<style>
.alert {
  opacity: 1;
  transition: opacity 0.6s; /* 600ms to fade out */
}
</style>
<html class="no-js" lang="zxx">
    <!-- Banner Popup Start -->
            <div class="popup_banner">
                <span class="popup_off_banner">×</span>
                <div class="banner_popup_area">
                        <img src="/img/banner/pop-banner.jpg" alt="">
                </div>
            </div>
            <!-- Banner Popup End -->
        <!-- Newsletter Popup Start -->
            <div class="popup_wrapper">
                <div class="test">
                    <span class="popup_off">Close</span>
                    <div class="subscribe_area text-center mt-60">
                        <h2>Newsletter</h2>
                        <p>Subscribe to the Truemart mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                        <div class="subscribe-form-group">
                            <form action="#">
                                <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                                <button type="submit">subscribe</button>
                            </form>
                        </div>
                        <div class="subscribe-bottom mt-15">
                            <input type="checkbox" id="newsletter-permission">
                            <label for="newsletter-permission">Don't show this popup again</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter Popup End -->

            <!-- Main Header Area Start Here -->
            <header>
                <!-- Header Top Start Here -->
                <div class="header-top-area">
                    <div class="container">
                        <!-- Header Top Start -->
                        <div class="header-top">
                            <ul>
                                <li><a href="#">Free Shipping on order over $99</a></li>
                                <li><a href="/products/shoppingcart">Shopping Cart</a></li>
                                <li><a href="/products/checkout">Checkout</a></li>
                            </ul>
                            <ul>                                          
                                <li><span>Language</span> <a href="#">English<i class="lnr lnr-chevron-down"></i></a>
                                    <!-- Dropdown Start -->
                                    <ul class="ht-dropdown">
                                        <li><a href="#"><img src="/img/header/1.jpg" alt="language-selector">English</a></li>
                                        <li><a href="#"><img src="/img/header/2.jpg" alt="language-selector">Francis</a></li>
                                    </ul>
                                    <!-- Dropdown End -->
                                </li>
                                <li><span>Currency</span><a href="#"> USD $ <i class="lnr lnr-chevron-down"></i></a>
                                    <!-- Dropdown Start -->
                                    <ul class="ht-dropdown">
                                        <li><a href="#">&#36; USD</a></li>
                                        <li><a href="#"> € Euro</a></li>
                                        <li><a href="#">&#163; Pound Sterling</a></li>
                                    </ul>
                                    <!-- Dropdown End -->
                                </li>
                                <li><a href="#">My Account<i class="lnr lnr-chevron-down"></i></a>
                                    <!-- Dropdown Start -->
                                    <?php

use app\Database;

                                    if(!empty($_COOKIE['Email'])&&!empty($_COOKIE['Password'])){?>
                                        <ul class="ht-dropdown">
                                        <li><a href="/users/login">Profile</a></li>
                                        <li><a href="/users/logout">Logout</a></li>
                                    </ul>
                                    <?php }else{?>
                                        <ul class="ht-dropdown">
                                        <li><a href="/users/login">Login</a></li>
                                        <li><a href="/users/register">Register</a></li>
                                    </ul>
                                    <?php }?>
                                    <!-- Dropdown End -->
                                </li> 
                            </ul>
                        </div>
                        <!-- Header Top End -->
                    </div>
                    <!-- Container End -->
                </div>
                <!-- Header Top End Here -->
                <!-- Header Middle Start Here -->
                <div class="header-middle ptb-15">
                    <div class="container">
                        <div class="row align-items-center no-gutters">
                            <div class="col-lg-3 col-md-12">
                                <div class="logo mb-all-30">
                                    <a href="index.html"><img src="/img/logo/logo.png" alt="logo-image"></a>
                                </div>
                            </div>
                            <!-- Categorie Search Box Start Here -->
                            <div class="col-lg-5 col-md-8 ml-auto mr-auto col-10">
                                <div class="categorie-search-box">
                                    <form action="/products/shop">
                                        <div class="form-group">
                                            <select class="bootstrap-select" name="ByCategory">
                                                <option value="">All categories</option>
                                                <?php foreach($categories as $category){?>   <!-- Render tất cả loại sản phẩm -->
                                                    <option value=<?php echo $category['CateId']?>><?php echo $category['CategoryName']?></option>
                                                    <?php }?>
                                            </select>
                                        </div>
                                        <input type="text" name="ByName" onchange="return Search()" placeholder="I’m shopping for...">
                                        <button type="submit"><i class="lnr lnr-magnifier"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Categorie Search Box End Here -->
                            <!-- Cart Box Start Here -->
                            <div class="col-lg-4 col-md-12">
                                <div class="cart-box mt-all-30">
                                    <ul class="d-flex justify-content-lg-end justify-content-center align-items-center">
                                    <?php if(isset($_SESSION['shoppingcart'])){  $subtotal=0?>
                                        <li><a href="/products/shoppingcart"><i class="lnr lnr-cart"></i><span class="my-cart"><span class="total-pro"><?php echo count($_SESSION['shoppingcart'])?></span><span>cart</span></span></a>
                                        <ul class="ht-dropdown cart-box-width">
                                                <li>
                                                    <!-- Cart Box Start -->
                                                    <?php
                                                    foreach($_SESSION["shoppingcart"] as $CartItem){
                                                        $prod = Database::$db->getProductById($CartItem['prod_id']);
                                                        $product=reset($prod);
                                                        $total=$product['ProductPrice']*$CartItem['quantity'];
                                                        $subtotal+=$total;?>
                                                    <div class="single-cart-box">
                                                        <div class="cart-img">
                                                            <a href="#"><img src=<?php echo "/".$product['ProductImage']?> alt="cart-image"></a>
                                                            <span class="pro-quantity"><?php echo $CartItem['quantity']."X"?></span>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h6><a class="productname" href="product.html"><?php echo $product['ProductName']?></a></h6>
                                                            <span class="cart-price"><?php echo $total."VNĐ"?></span>
                                                        </div>
                                                        
                                                        <a class="del-icone" onclick="return removeCartIndex(<?php echo 'event,'.$product['ProductId']?>)" href="#"><i class="ion-close"></i></a>
                                                    </div>
                                                    <?php }?>
                                                    <!-- Cart Box End -->
                                                    <!-- Cart Box Start -->
                                                    <!-- Cart Box End -->
                                                    <!-- Cart Footer Inner Start -->
                                                    <div class="cart-footer">
                                                    <ul class="price-content">
                                                        <li>Subtotal <span><?php echo $subtotal."VNĐ"?></span></li>
                                                        <!-- <li>Shipping <span>$7.00</span></li>
                                                        <li>Taxes <span>$0.00</span></li>
                                                        <li>Total <span>$64.95</span></li> -->
                                                    </ul>
                                                        <div class="cart-actions text-center">
                                                            <a class="cart-checkout" href="/products/checkout">Checkout</a>
                                                        </div>
                                                    </div>
                                                    <!-- Cart Footer Inner End -->
                                                </li>
                                            </ul>
                                    <?php }else{?>
                                        <li><a href="/products/shoppingcart"><i class="lnr lnr-cart"></i><span class="my-cart"><span class="total-pro">0</span><span>cart</span></span></a>
                                        <?php }?>
                                            
                                        </li>
                                        <li><a href="#"><i class="lnr lnr-heart"></i><span class="my-cart"><span>Wish</span><span>list (0)</span></span></a>
                                        </li>
                                        <li><a href="#"><i class="lnr lnr-user"></i><span class="my-cart"><span> <strong>Sign in</strong> Or</span><span> Join My Site</span></span></a>



                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Cart Box End Here -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Container End -->
                </div>
                <!-- Header Middle End Here -->
                <!-- Header Bottom Start Here -->
                <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-4 col-md-6 vertical-menu d-none d-lg-block">
                                <span class="categorie-title">Shop by Categories</span>
                            </div>                       
                            <div class="col-xl-9 col-lg-8 col-md-12 ">
                                <nav class="d-none d-lg-block">
                                    <ul class="header-bottom-list d-flex">
                                        <li class="active"><a href="index.html">home<i class="fa fa-angle-down"></i></a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul class="ht-dropdown">
                                                <li><a href="index.html">Home Version 1</a></li>
                                                <li><a href="index-2.html">Home Version 2</a></li>
                                                <li><a href="index-3.html">Home Version 3</a></li>
                                                <li><a href="index-4.html">Home Version 4</a></li>
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li>
                                        <li><a href="/products/shop">shop<i class="fa fa-angle-down"></i></a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul class="ht-dropdown dropdown-style-two">
                                                <li><a href="product.html">product details</a></li>
                                                <li><a href="compare.html">compare</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li>
                                        <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul class="ht-dropdown dropdown-style-two">
                                                <li><a href="single-blog.html">blog details</a></li>
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li>
                                        <li><a href="#">pages<i class="fa fa-angle-down"></i></a>
                                            <!-- Home Version Dropdown Start -->
                                            <ul class="ht-dropdown dropdown-style-two">
                                                <li><a href="contact.html">contact us</a></li>
                                                <li><a href="register.html">register</a></li>
                                                <li><a href="login.html">sign in</a></li>
                                                <li><a href="forgot-password.html">forgot password</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                            <!-- Home Version Dropdown End -->
                                        </li>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="contact.html">contact us</a></li>
                                    </ul>
                                </nav>
                                <div class="mobile-menu d-block d-lg-none">
                                    <nav>
                                        <ul>
                                            <li><a href="index.html">home</a>
                                                <!-- Home Version Dropdown Start -->
                                                <ul>
                                                    <li><a href="index.html">Home Version 1</a></li>
                                                    <li><a href="index-2.html">Home Version 2</a></li>
                                                    <li><a href="index-3.html">Home Version 3</a></li>
                                                    <li><a href="index-4.html">Home Version 4</a></li>
                                                </ul>
                                                <!-- Home Version Dropdown End -->
                                            </li>
                                            <li><a href="/products/shop">shop</a>
                                                <!-- Mobile Menu Dropdown Start -->
                                                <ul>
                                                    <li><a href="product.html">product details</a></li>
                                                    <li><a href="compare.html">compare</a></li>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                </ul>
                                                <!-- Mobile Menu Dropdown End -->
                                            </li>
                                            <li><a href="blog.html">Blog</a>
                                                <!-- Mobile Menu Dropdown Start -->
                                                <ul>
                                                    <li><a href="single-blog.html">blog details</a></li>
                                                </ul>
                                                <!-- Mobile Menu Dropdown End -->
                                            </li>
                                            <li><a href="#">pages</a>
                                                <!-- Mobile Menu Dropdown Start -->
                                                <ul>
                                                    <li><a href="register.html">register</a></li>
                                                    <li><a href="login.html">sign in</a></li>
                                                    <li><a href="forgot-password.html">forgot password</a></li>
                                                    <li><a href="404.html">404</a></li>
                                                </ul>
                                                <!-- Mobile Menu Dropdown End -->
                                            </li>
                                            <li><a href="about.html">about us</a></li>
                                            <li><a href="contact.html">contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- Container End -->
                </div>
                <!-- Header Bottom End Here -->
                <!-- Mobile Vertical Menu Start Here -->
                <!-- Mobile Vertical Menu Start End -->
            </header>
            <!-- Main Header Area End Here -->
            <!-- Categorie Menu & Slider Area Start Here -->
            <div class="main-page-banner pb-50 off-white-bg home-3">
                <div class="container">
                    <div class="row">
                        <!-- Vertical Menu Start Here -->
                        <?php echo $getcategories?>
                        <!-- Vertical Menu End Here -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
                <!-- Slider Area Start Here -->
                <div class="slider_box">
                    <div class="slider-wrapper theme-default">
                        <!-- Slider Background  Image Start-->
                        <div id="slider" class="nivoSlider">
                            <a href="/products/shop"><img style="height:287.5px;width:1006.25px" src="/images/banners/banner1.jpg" data-thumb="/img/slider/5.jpg" alt="" title="#htmlcaption"></a>
                            <a href="/products/shop"><img style="height:287.5px;width:1006.25px" src="/images/banners/banner2.jpg" data-thumb="/img/slider/6.jpg" alt="" title="#htmlcaption2"></a>
                        </div>
                        <!-- Slider Background  Image Start-->
                    </div>
                </div>
                <!-- Slider Area End Here -->            
            </div>
            <!-- Categorie Menu & Slider Area End Here -->
            <!-- Brand Banner Area Start Here -->
            <div class="image-banner pb-30 off-white-bg">
                <div class="container">
                    <div class="col-img">
                        <a href="#"><img src="/img/banner/h1-banner.jpg" alt="image banner"></a>
                    </div>
                </div>
                <!-- Container End -->
            </div>
           <!-- Brand Banner Area End Here -->


<?php echo $content?> <!-- Render body -->
 <!-- jquery 3.2.1 -->


 <script>
// Get all elements with class="closebtn"
var close = document.getElementsByClassName("closebtn");
var i;

// Loop through all close buttons
for (i = 0; i < close.length; i++) {
    // When someone clicks on a close button
    close[i].onclick = function(){

    // Get the parent of <span class="closebtn"> (<div class="alert">)
    var div = this.parentElement;

    // Set the opacity of div to 0 (transparent)
    div.style.opacity = "0";

    // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
function ValidateRegister(e)
{
    var firstname = document.getElementById("f-name");
    var lastname = document.getElementById("l-name");
    var email = document.getElementById("email");
    var password = document.getElementById("pwd");
    var confirmpass = document.getElementById("pwd-confirm");
    var close = document.getElementsByClassName("closebtn");
    var i;

// Loop through all close buttons
if(firstname.value.length==0 || lastname.value.length==0 || email.value.length==0 || password.value.length==0)
{
    if(firstname.value.length==0)
    {
        e.preventDefault();
        document.getElementById("FirstNameValidate").style.display="block";
        document.getElementById("FirstNameValidate").style.opacity="1";
    }
    if(lastname.value.length==0)
    {
        e.preventDefault();
        document.getElementById("LastNameValidate").style.display="block";
        document.getElementById("LastNameValidate").style.opacity="1";
    }
    if(email.value.length==0)
    {
        e.preventDefault();
        document.getElementById("EmailValidate").style.display="block";
        document.getElementById("EmailValidate").style.opacity="1";
    }
    if(password.value.length==0)
    {
        e.preventDefault();
        document.getElementById("PasswordValidate").style.display="block";
        document.getElementById("PasswordValidate").style.opacity="1";
    }
    return false
}
    // When someone clicks on a close button
    else if(confirmpass.value!=password.value)
    {
        e.preventDefault();
        document.getElementById("ConfirmPassValidate").style.display="block";
        document.getElementById("ConfirmPassValidate").style.opacity="1";
        return false
    }

}



</script>
 <script src="/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Countdown js -->
    <script src="/js/jquery.countdown.min.js"></script>
    <!-- Mobile menu js -->
    <script src="/js/jquery.meanmenu.min.js"></script>
    <!-- ScrollUp js -->
    <script src="/js/jquery.scrollUp.js"></script>
    <!-- Nivo slider js -->
    <script src="/js/jquery.nivo.slider.js"></script>
    <!-- Fancybox js -->
    <script src="/js/jquery.fancybox.min.js"></script>
    <!-- Jquery nice select js -->
    <script src="/js/jquery.nice-select.min.js"></script>
    <!-- Jquery ui price slider js -->
    <script src="/js/jquery-ui.min.js"></script>
    <!-- Owl carousel -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- Bootstrap popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Plugin js -->
    <script src="/js/plugins.js"></script>
    <!-- Main activaion js -->
    <script src="/js/main.js"></script>
    <script>
    // $(document).ready(function(){
    // $(".addtocart").click(function(){
    //     ProdId=$(".ProdId").val();
    //     alert(ProdId)
    //     ProdQuantity=$("[title|='quantity']").val();
    //     $.ajax({
    //         url:'products',
    //         type: 'GET',
    //         data:{'ProdId' : ProdId,'ProdQuantity':ProdQuantity},
    //         success:function(result)
    //         {
    //            alert("da them thanh cong");
    //         }
            
    //     })
    //     return false;
    // })
    // })
    // var Btnarray = $(".addtocart");
    // var ProdIdArr=$(".ProdId");
    // var ProdQuantityArr =$("[title='quantity']")
    // var i;
    // for(i=0;i<Btnarray.length;i++)
    // {
    //     var ProdId=ProdIdArr[i].value;
    //     var ProdQuantity=ProdQuantityArr[i].value;
    //     Btnarray[i].onclick=function(){
    //         console.log(i)
    //     $.ajax({
    //         url:'products',
    //         type: 'GET',
    //         data:{'ProdId' : ProdId,'ProdQuantity':ProdQuantity},
    //         success:function(result)
    //         {
    //            alert("da them thanh cong");
    //         }
            
    //     })
    //     return false;
    //     }
    // }
    function test(curpath,e,id)
    {
        e.preventDefault()
        var ProdQuantity =$("[title="+'quantity'+id+"]")
        $.ajax({
            url:'/products/addtocart',
            type: 'GET',
            data:{'ProdId' : id,'ProdQuantity':ProdQuantity.val(),'CurPath':curpath},
            success:function(result)
            {
                $("body").html(result)
                $('html, body').css({
                    overflow: 'scroll ',
                    height: 'auto'
                });
            }
            
        })
    }
</script>
<script>
    function removeCart(e,id)
    {
        e.preventDefault();
            $.ajax({
            url:'shoppingcart',
            type: 'POST',
            data:{'ProdId' : id},
            success:function(result)
            {
                $('body').html(result);
            }
            
        })
    }
    function removeCartIndex(e,id)
    {
            e.preventDefault();
            $.ajax({
            url:'/products/removecartindex',
            type: 'POST',
            data:{'ProdId' : id},
            success:function(result)
            {
                $('body').html(result);
            }
            })
        
    }
    function IncreaseQuantity(e,id)
    {
        var ProdQuantity =$(".quantity"+id)
        e.preventDefault();
            $.ajax({
            url:'inscreasequantity',
            type: 'POST',
            data:{'ProductQuantity' : ProdQuantity.val(),'ProdId':id},
            success:function(result)
            {
                $("body").html(result);
            }
            
        })
    }
    function SortElement()
    {
        var sortby = document.getElementById('SortBy').value;
        var container = document.getElementById('grid-view');
        var i
        console.log(sortby)
        switch (sortby){
            case 'NameAz':
                var Products = $('.col-lg-4.col-md-4.col-sm-6.col-6');
                var ProductNamearr=[]
                var ProdElementArr=[]
                for(i=0;i<Products.length;i++)
                {
                    ProductNamearr.push(Products[i].children[0].children[1].children[0].children[0].children[0].innerText.toLowerCase());
                }
                ProductNamearr.sort();

                for(var j=0;j<ProductNamearr.length;j++)
                {
                    var was_found=false;
                    for(var m=0;m<Products.length;m++)
                    {
                        if(Products[m].children[0].children[1].children[0].children[0].children[0].innerText.toLowerCase()==ProductNamearr[j]&&was_found==false)
                        {
                            ProdElementArr.push(Products[m]);
                            console.log(Products[0])
                            was_found=true;
                        }
                    }
                    
                }
                container.children[0].innerHTML=''
                for(var l=0;l<Products.length;l++)
                {
                    container.children[0].innerHTML+=ProdElementArr[l].outerHTML
                }
                break;
                case 'NameZa':
                    var Products = $('.col-lg-4.col-md-4.col-sm-6.col-6');
                    var ProductNamearr=[]
                    var ProdElementArr=[]
                    for(i=0;i<Products.length;i++)
                    {
                        ProductNamearr.push(Products[i].children[0].children[1].children[0].children[0].children[0].innerText.toLowerCase());
                    }
                    ProductNamearr.sort();
                    ProductNamearr.reverse();
                    for(var j=0;j<ProductNamearr.length;j++)
                    {
                        var was_found=false;
                        for(var m=0;m<Products.length;m++)
                        {
                            if(Products[m].children[0].children[1].children[0].children[0].children[0].innerText.toLowerCase()==ProductNamearr[j]&&was_found==false)
                            {
                                ProdElementArr.push(Products[m]);
                                console.log(Products[0])
                                was_found=true;
                            }
                        }
                        
                    }
                    container.children[0].innerHTML=''
                    for(var l=0;l<Products.length;l++)
                    {
                        container.children[0].innerHTML+=ProdElementArr[l].outerHTML
                    }
                    break;
                case 'PriceLowHigh':
                    var Products = $('.col-lg-4.col-md-4.col-sm-6.col-6');
                    var ProductPricearr=[]
                    var ProdElementArr=[]
                    for(i=0;i<Products.length;i++)
                    {
                        ProductPricearr.push(parseInt(Products[i].children[0].children[1].children[0].children[1].children[0].innerText));
                    }
                    
                    ProductPricearr.sort(function(a, b) {
                    return a - b;
                    });
                    for(var j=0;j<ProductPricearr.length;j++)
                    {
                        var was_found=false;
                        for(var m=0;m<Products.length;m++)
                        {
                            if(parseInt(Products[m].children[0].children[1].children[0].children[1].children[0].innerText)==ProductPricearr[j] && was_found==false)
                            {
                                ProdElementArr.push(Products[m]);
                                console.log(Products[0])
                                was_found=true;
                            }
                        }
                        
                    }
                    container.children[0].innerHTML=''
                    for(var l=0;l<Products.length;l++)
                    {
                        container.children[0].innerHTML+=ProdElementArr[l].outerHTML
                    }
                    break;
                case 'PriceHighLow':
                    var Products = $('.col-lg-4.col-md-4.col-sm-6.col-6');
                    var ProductPricearr=[]
                    var ProdElementArr=[]
                    for(i=0;i<Products.length;i++)
                    {
                        ProductPricearr.push(parseInt(Products[i].children[0].children[1].children[0].children[1].children[0].innerText));
                    }
                    ProductPricearr.sort(function(a, b) {
                    return a - b;
                    });
                    ProductPricearr.reverse();
                    for(var j=0;j<ProductPricearr.length;j++)
                    {
                        var was_found=false;
                        for(var m=0;m<Products.length;m++)
                        {
                            if(parseInt(Products[m].children[0].children[1].children[0].children[1].children[0].innerText)==ProductPricearr[j] && was_found==false)
                            {
                                ProdElementArr.push(Products[m]);
                                console.log(Products[0])
                                was_found=true;
                            }
                        }
                        
                    }
                    container.children[0].innerHTML=''
                    for(var l=0;l<Products.length;l++)
                    {
                        container.children[0].innerHTML+=ProdElementArr[l].outerHTML
                    }
                    break;
        }
        
    }
    
</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=629536127909216&autoLogAppEvents=1" nonce="q6lo8b42"></script>
<script src="https://www.paypal.com/sdk/js?client-id=AbUcoJ9FJx-Hp4StQcLrskPnHKj1aZpzVfutPWd5a8d9TArEoFIVWaLn_p3K7FosaK_TqJFuYaL6WS8b"></script>
<script>
var items=[];
productName= document.getElementsByClassName('productname')
productQuantity = document.getElementsByClassName('pro-quantity')
productPrice = document.getElementsByClassName('cart-price')
for(var i=0;i<productName.length;i++)
{   
    items.push({
    name: productName[i].innerHTML,
    unit_amount: {value: ((parseFloat(productPrice[i].innerHTML)/25000)/(parseFloat(productQuantity[i].innerHTML))).toFixed(2).toString(), currency_code: 'USD'},
    quantity: productQuantity[i].innerHTML.slice(0, -1),
    sku: 'haf001'
})
console.log(items)
}
paypal.Buttons(
    {
    createOrder: function(data, actions) {
       
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
                amount: {
                    value: <?php echo $subtotal/25000?>,
                    currency_code: 'USD',
                    breakdown: {
                        item_total: {value: <?php echo $subtotal/25000?>, currency_code: 'USD'}
                    }
                },
                invoice_id: Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5),
                items: items
            }]

      });
    },onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        var shippingaddress = document.getElementsByName('ShippingAddress');
        var ordermessage=document.getElementsByName('ordermessage')
        $.ajax({
            url:'/paypal/payment_status',
            type: 'POST',
            data:{'payername' :details.payer.name.given_name,'ShippingAddress':shippingaddress[0].value,'ordermessage':ordermessage[0].value},
            success:function(result)
            {
                $("body").html(result);
            }
            
        })
        alert('Transaction completed by ' + details.payer.name.given_name);
      });
    }
  }).render('#paypal-button-container');</script>
<!--
JavaScript code to render PayPal checkout button and execute payment
-->


    </body>

</html>
<!-- Footer Area Start Here -->
<footer class="off-white-bg2 pt-95 bdr-top pt-sm-55">
            <!-- Footer Top Start -->
            <div class="footer-top">
                <div class="container">
                    <!-- Signup Newsletter Start -->
                    <div class="row mb-60">
                         <div class="col-xl-7 col-lg-7 ml-auto mr-auto col-md-8">
                            <div class="news-desc text-center mb-30">
                                 <h3>Sign Up For Newsletters</h3>
                                 <p>Be the First to Know. Sign up for newsletter today</p>
                             </div>
                             <div class="newsletter-box">
                                 <form action="#">
                                      <input class="subscribe" placeholder="your email address" name="email" id="subscribe" type="text">
                                      <button type="submit" class="submit">subscribe!</button>
                                 </form>
                             </div>
                         </div>
                    </div> 
                    <!-- Signup-Newsletter End -->                   
                    <div class="row">
                        <!-- Single Footer Start -->
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer mb-sm-40">
                                <h3 class="footer-title">Information</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="contact.html">Terms & Conditions</a></li>
                                        <li><a href="login.html">FAQs</a></li>
                                        <li><a href="login.html">Return Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer mb-sm-40">
                                <h3 class="footer-title">Customer Service</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="wishlist.html">Wish List</a></li>
                                        <li><a href="#">Site Map</a></li>
                                        <li><a href="#">Gift Certificates</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer mb-sm-40">
                                <h3 class="footer-title">Extras</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Gift Certificates</a></li>
                                        <li><a href="#">Affiliate</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">Site Map</a></li>      
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer mb-sm-40">
                                <h3 class="footer-title">My Account</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="wishlist.html">Wish List</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-footer mb-sm-40">
                                <h3 class="footer-title">My Account</h3>
                                <div class="footer-content">
                                    <ul class="footer-list address-content">
                                        <li><i class="lnr lnr-map-marker"></i> Address: 169-C, Technohub, Dubai Silicon Oasis.</li>
                                        <li><i class="lnr lnr-envelope"></i><a href="#"> mail Us: Support@truemart.com </a></li>
                                        <li>
                                            <i class="lnr lnr-phone-handset"></i> Phone: (+800) 123 456 789)
                                        </li>
                                    </ul>
                                    <div class="payment mt-25 bdr-top pt-30">
                                        <a href="#"><img class="img" src="/img/payment/1.png" alt="payment-image"></a>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Top End -->
            <!-- Footer Middle Start -->
            <div class="footer-middle text-center">
                <div class="container">
                    <div class="footer-middle-content pt-20 pb-30">
                            <ul class="social-footer">
                                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><img src="/img/icon/social-img1.png" alt="google play"></a></li>
                                <li><a href="#"><img src="/img/icon/social-img2.png" alt="app store"></a></li>
                            </ul>
                    </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Middle End -->
            <!-- Footer Bottom Start -->
            <div class="footer-bottom pb-30">
                <div class="container">

                     <div class="copyright-text text-center">                    
                        <p>Copyright © 2018 <a target="_blank" href="#">Truemart</a> All Rights Reserved.</p>
                     </div>
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Bottom End -->
        </footer>
        <!-- Footer Area End Here -->
        
   
