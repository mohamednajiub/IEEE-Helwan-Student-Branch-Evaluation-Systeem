<?php
    // add head and sidenav
    include_once('sidenav.php');
?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <img class="img-thumbnail img-fluid" src="http://via.placeholder.com/200x200" alt="Volunteer Name" title="Volunteer Name">
                </div>
                <div class="card-body col-sm-10">
                    <h5 class="card-title">Volunteer Name</h5>
                    <p class="card-text">Points <span class="badge badge-light">4</span></p>
                    <a href="newTask.php" class="btn btn-primary">Send Task</a>
                </div>
            </div>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Task name(Number) 
                            </button>
                            <span class="lead float-right">Status: InProgress</span>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <form role="form" action="#">
                                <!-- Deadline Data -->
                                <div class="form-row col-md-12">
                                    <div class="form-group col-md-6">
                                        <label for="date">Deadline day:</label>
                                        <input type="date" class="form-control" id="date" name="date" placeholder="Deadline" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="time">Deadline Time</label>
                                        <input type="time" class="form-control" id="time" name="time" placeholder="Deadline" disabled>
                                    </div>
                                    
                                </div>
                                <!-- Task Details -->
                                <div class="form-group col-md-12">
                                    <label for="taskDetails">Task Details</label>
                                    <textarea class="form-control" name="taskDetails" id="taskDetails" cols="30" rows="10" placeholder="Task Details" disabled></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Task name(Number) 
                            </button>
                            <span class="lead float-right">Status: Done</span>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <form role="form" action="#">
                                <!-- Deadline Data -->
                                <div class="form-row col-md-12">
                                    <div class="form-group col-md-6">
                                        <label for="date">Deadline day:</label>
                                        <input type="date" class="form-control" id="date" name="date" placeholder="Deadline" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="time">Deadline Time</label>
                                        <input type="time" class="form-control" id="time" name="time" placeholder="Deadline" disabled>
                                    </div>
                                    
                                </div>
                                <!-- Task Details -->
                                <div class="form-group col-md-12">
                                    <label for="taskDetails">Task Details</label>
                                    <textarea class="form-control" name="taskDetails" id="taskDetails" cols="30" rows="10" placeholder="Task Details" disabled></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Task name(Number) 
                            </button>
                            <span class="lead float-right">Status: Done</span>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <form role="form" action="#">
                                <!-- Deadline Data -->
                                <div class="form-row col-md-12">
                                    <div class="form-group col-md-6">
                                        <label for="date">Deadline day:</label>
                                        <input type="date" class="form-control" id="date" name="date" placeholder="Deadline" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="time">Deadline Time</label>
                                        <input type="time" class="form-control" id="time" name="time" placeholder="Deadline" Disabled>
                                    </div>
                                    
                                </div>
                                <!-- Task Details -->
                                <div class="form-group col-md-12">
                                    <label for="taskDetails">Task Details</label>
                                    <textarea class="form-control" name="taskDetails" id="taskDetails" cols="30" rows="10" placeholder="Task Details" Disabled></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    // add footer
    include_once('include/footer.html');
?>