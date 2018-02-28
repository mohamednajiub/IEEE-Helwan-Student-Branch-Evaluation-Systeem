<?php
    // add head
    include_once('include/head.html');
?>
<div class="container text-center mb-3">
    <img src="img/ieee_logo.jpg" alt="IEEE Logo" title="IEEE Logo">
</div>
<div class="container">
    <div class="row">
        <!-- start login -->
        <div class="col-md-6 col-sm-12 login">
            <p class="h1">Sign In</p>
            <!-- Start login form -->
            <form method="POST" action="">
                <!-- login email -->
                <div class="form-group">
                    <label for="log_email">Email address</label>
                    <input type="email" name="log_email" class="form-control" id="log_email" placeholder="Enter email" required>
                </div>
                <!-- login password -->
                <div class="form-group">
                    <label for="log_password">Password</label>
                    <input type="password" name="log_password" class="form-control" id="log_password" placeholder="Password" required>
                </div>
                <!-- form check -->
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="position" id="EX_COM" value="EX_COM">
                    <label class="form-check-label" for="EX_COM">EX_COM</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="position" id="Director" value="Director">
                    <label class="form-check-label" for="Director">Director</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="position" id="Volunteer" value="Volunteer">
                    <label class="form-check-label" for="Volunteer">Volunteer</label>
                </div>
                <!-- login button -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary float-right" name="login">Login</button>
                    <div class="clearfix"></div>
                    <small id="loginHelp" class="form-text text-muted float-right">Don't have an account!? signup <i class="fas fa-arrow-right"></i></small>
                </div>
                <!-- End login Form -->
            </form>
        </div>
        <!-- End login -->

        <!-- start Registration -->
        <div class="col-md-6 col-sm-12">
            <p class="h1">Sign Up</p>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="reg_mail">Email address</label>
                    <input type="email" name="reg_mail" class="form-control" id="reg_mail" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="reg_password">Password</label>
                    <input type="password" name="reg_password" class="form-control" id="reg_password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="Re_password">RE-Password</label>
                    <input type="password" name="Re_password" class="form-control" id="Re_password" placeholder="Re-Password" required>
                </div>
                <div class="form-group">
                    <label for="committee">committee/Chapter</label>
                    <input list="committee" class="form-control"></input>
                    <datalist name="committee" id="committee">

                        <optgroup label="RAS-Chapter">
                            <option value="RAS Juniors">Juniors</option>
                            <option value="RAS Technical support">RAS TS</option>
                            <option value="RAS Project">RAS Project</option>
                        </optgroup>
                        
                        <optgroup label="PES Chapter">
                            <option value="PES Technical support">PES Technical support</option>
                        </optgroup>

                        <optgroup label="WIE Chapter">
                            <option value="WIE Juniors">WIE Juniors</option>
                        </optgroup>

                        <option value="HR-Organisation Development">HR-OD
                        <option value="HR-Talent Managment">HR-TM
                        <option value="PR &amp; Marketing">PR &amp; Marketing
                        <option value="Multi Media">Multi Media
                        <option value="Decoration">Decoration
                        <option value="Magazine &amp; Membership">Magazine &amp; Membership
                        <option value="Logistics">Logistics
                        <option value="Quality control">QC
                        <option value="social Media">SM
                        <option value="Information Technology">IT
                        <option value="Fund Raising">FR
                        <option value="Academic">AC
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Your Phone" required>
                </div>
                <!-- form check -->
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="position" id="EX_COM" value="EX_COM">
                    <label class="form-check-label" for="EX_COM">EX_COM</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="position" id="Director" value="Director">
                    <label class="form-check-label" for="Director">Director</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="position" id="Volunteer" value="Volunteer">
                    <label class="form-check-label" for="Volunteer">Volunteer</label>
                </div>
                <!-- login submit -->
                <div class="form-group">
                    <small id="loginHelp" class="form-text text-muted float-right"><i class="fas fa-arrow-left"></i> Already have an account!? login..</small>
                    <div class="clearfix"></div>
                    <button type="submit" class="btn btn-primary float-right" name="signup">Register</button>
                </div>
            </form>
        </div>
        <!-- End Registration -->
    </div>
</div>
<?php
    // add footer
    include_once('include/footer.html');
?>