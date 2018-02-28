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
            <!-- Deadline Data -->
            <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                    <label for="date">Deadline day:</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Deadline" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="time">Deadline Time</label>
                    <input type="time" class="form-control" id="time" name="time" placeholder="Deadline" required>
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