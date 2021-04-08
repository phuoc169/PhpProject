<div class="breadcrumb-area mt-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="d-flex align-items-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="register.html">Register</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <div class="register-account ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="register-title">
                            <h3 class="mb-10">REGISTER ACCOUNT</h3>
                            <p class="mb-10">If you already have an account with us, please login at the login page.</p>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
                <div id="EmailValidate" class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    Không được bỏ trống Email
                </div>
                <div id="LastNameValidate" class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    Không được bỏ trống LastName
                </div>
                <div id="FirstNameValidate" class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    Không được bỏ trống FirstName
                </div>
                <div id="PasswordValidate" class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    Không được bỏ trống PassWord
                </div>
                <div id="ConfirmPassValidate" class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                   Password Xác nhận không trùng khớp
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form method="POST" onsubmit="return ValidateRegister(event);" class="form-register">
                            <fieldset>
                                <legend>Your Personal Details</legend>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>First Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="FirstName" id="f-name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Last Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="LastName" id="l-name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="email"><span class="require">*</span>Enter you email address here...</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" id="email" name="Email" placeholder="Enter you email address here...">
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="number"><span class="require">*</span>Telephone</label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" name="NumberPhone" id="number" placeholder="Telephone">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Your Password</legend>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="pwd"><span class="require">*</span>Password:</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" id="pwd" name="Password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="pwd-confirm"><span class="require">*</span>ConfirmPass</label>
                                    <div class="col-md-10">
                                        <input type="password" name="UserName" class="form-control" id="pwd-confirm" placeholder="Confirm password">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="newsletter-input">
                                <legend>Newsletter</legend>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="col-md-2 control-label">Subscribe</label>
                                    <div class="col-md-10 radio-button">
                                         <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                         <label class="radio-inline"><input type="radio" name="optradio">No</label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="terms">
                                <div class="float-md-right">
                                    <span>I have read and agree to the <a href="#" class="agree"><b>Privacy Policy</b></a></span>
                                    <input type="checkbox" name="agree" value="1"> &nbsp;
                                    <input type="submit" name="btnsubmit" value="Continue" class="return-customer-btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>