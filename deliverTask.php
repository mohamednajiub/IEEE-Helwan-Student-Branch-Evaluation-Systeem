<?php
    // add head and sidenav
    include_once('sidenav.php');
?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <p class="lead">Deliver Task</p>
        <form role="form" action="#">
            <!-- To Label -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email">To</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="To" required>
                </div>
            </div>
            <!-- File uploader -->
            <div class="col-md-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file">
                        <label class="custom-file-label" for="file">Choose file</label>
                    </div>
                </div>
            </div>
            <!-- Task Details -->
            <div class="form-group col-md-12">
                <label for="taskDetails">Task Details</label>
                <textarea class="form-control" name="taskDetails" id="taskDetails" cols="30" rows="10" placeholder="Task Details" required></textarea>
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