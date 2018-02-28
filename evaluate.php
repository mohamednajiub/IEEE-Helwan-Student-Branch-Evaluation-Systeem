<?php
    // add head and sidenav
    include_once('sidenav.php');
?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <p class="lead">Send Task</p>
        <form role="form" action="#">
            <!-- To Label -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email">To</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="To" required>
                </div>
            </div>
            <!-- Task Datails -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="Task_Name">Task Name</label>
                    <input type="text" class="form-control" id="Task_Name" name="Task_Name" placeholder="Task Name" required>
                </div>
            </div>
            <!-- Review for Director -->
            <div class="form-group col-md-12">
                <label for="D-evaluate">Evaluate:</label>
                <input id="D-evaluate" name="evaluate" type="range" min="1" max="3" step="1" value="2">
            </div>
            <div class="form-group">
                <div class="row">
                    <p class="float-left col-md-4">Low</p>
                    <p class="text-center col-md-4">Medium</p>
                    <p class="float-right col-md-4 text-right">Height</p>
                </div>
            </div>
            <!-- Review for HR -->
            <div class="form-group col-md-12">
                <label for="evaluate">Evaluate:</label>
                <input id="HR-evaluate" name="HR-evaluate" type="number" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <label for="Review">Review</label>
                <textarea class="form-control" name="Review" id="Review" cols="30" rows="10" placeholder="Review" required></textarea>
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