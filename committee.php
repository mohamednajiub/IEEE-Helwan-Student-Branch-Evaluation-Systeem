<?php
    // add head and sidenav
    include_once('sidenav.php');
?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Committee Name</h1> <small>Committee Director</small>
            <!-- will appear only in EX-com Dashboard -->
            <div class="card mb-3">
                <div class="row">
                    <div class="col-sm-2">
                        <img class="img-thumbnail img-fluid" src="http://via.placeholder.com/200x200" alt="Director Name" title="Direcor Name">
                    </div>
                    <div class="card-body col-sm-10">
                        <h5 class="card-title">Director Name</h5>
                        <p class="card-text">Points <span class="badge badge-light">4</span></p>
                        <a href="newTask.php" class="btn btn-primary">Send Task</a>
                    </div>
                </div>
            </div>
            <!-- All members in commitee -->
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Member Name
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img class="img-thumbnail img-fluid" src="http://via.placeholder.com/200x200" alt="Director Name" title="Direcor Name">
                                </div>
                                <div class="card-body col-sm-10">
                                    <h5 class="card-title">Member Name</h5>
                                    <p class="card-text">Points <span class="badge badge-light">4</span></p>
                                    <a href="mini_profile.php" class="btn btn-primary">View Minin Profile</a>
                                    <a href="profile.php" class="btn btn-primary">View Profile</a>
                                    <a href="newTask.php" class="btn btn-primary">Send Task</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Member Name
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img class="img-thumbnail img-fluid" src="http://via.placeholder.com/200x200" alt="Director Name" title="Direcor Name">
                                </div>
                                <div class="card-body col-sm-10">
                                    <h5 class="card-title">Member Name</h5>
                                    <p class="card-text">Points <span class="badge badge-light">4</span></p>
                                    <a href="mini_profile.php" class="btn btn-primary">View Minin Profile</a>
                                    <a href="profile.php" class="btn btn-primary">View Profile</a>
                                    <a href="newTask.php" class="btn btn-primary">Send Task</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingthree">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
                            Member Name
                            </button>
                        </h5>
                    </div>
                    <div id="collapsethree" class="collapse show" aria-labelledby="headingthree" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img class="img-thumbnail img-fluid" src="http://via.placeholder.com/200x200" alt="Director Name" title="Direcor Name">
                                </div>
                                <div class="card-body col-sm-10">
                                    <h5 class="card-title">Member Name</h5>
                                    <p class="card-text">Points <span class="badge badge-light">4</span></p>
                                    <a href="mini_profile.php" class="btn btn-primary">View Minin Profile</a>
                                    <a href="profile.php" class="btn btn-primary">View Profile</a>
                                    <a href="newTask.php" class="btn btn-primary">Send Task</a>
                                </div>
                            </div>
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