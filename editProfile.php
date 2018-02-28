<?php
    // add head and sidenav
    include_once('sidenav.php');
?>
<div class="row">
    <!-- start Registration -->
    <div class="col-sm-12">
            <p class="h1">Edit Profile</p>
            <!-- Image Preview -->
            <img src="" alt="" title="" id="img_preview" class="img-fluid img-thumbnail rounded" width="200px">
            <form method="POST" action="#">
                <!-- Image uploader -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file_input" id="file_input" onchange="preview.call(this)">
                        <label class="custom-file-label" for="file_input">Choose image</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" >
                </div>
                <div class="form-group">
                    <label for="reg_mail">Email address</label>
                    <input type="email" name="reg_mail" class="form-control" id="reg_mail" placeholder="Enter email" >
                </div>
                <div class="form-group">
                    <label for="reg_password">Password</label>
                    <input type="password" name="reg_password" class="form-control" id="reg_password" placeholder="Password" >
                </div>
                <div class="form-group">
                    <label for="Re_password">RE-Password</label>
                    <input type="password" name="Re_password" class="form-control" id="Re_password" placeholder="Re-Password" >
                </div>
                <!-- Edit committee 
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
-->
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Your Phone" >
                </div>
                <!-- form check 
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
-->
                <!-- login submit -->
                <div class="form-group">
                    <div class="clearfix"></div>
                    <button type="submit" class="btn btn-primary float-right" name="save">Save</button>
                </div>
            </form>
        </div>
        <!-- End Registration -->
</div>
<?php
    // add footer
    include_once('include/footer.html');
?>