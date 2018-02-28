<?php
    // add head and sidenav
    include_once('sidenav.php');
?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <p class="lead">Add Achieve</p>
        <form role="form" action="#">
            <!-- To Label -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email">To</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="To" required>
                </div>
            </div>
            <!-- Achive Name -->
            <div class="form-group col-md-12">
                <label for="achieveName">achieve name</label>
                <input class="form-control" name="achieveName" id="achieveName" placeholder="achieve name" required>
            </div>
            <!-- Task Details -->
            <div class="form-group col-md-12">
                <label for="achievedetails">Task Details</label>
                <textarea class="form-control" name="achievedetails" id="achievedetails" cols="30" rows="10" placeholder="Task Details" required></textarea>
            </div>
            <!-- Send Button -->
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send</button>
            </div>
        </form>
    </div>
</div>
<?php
    // add footer
    include_once('include/footer.html');
?>