<?php
    // add head
    include_once('include/head.html');
?>
<div class="container"> <!-- opening container and it close in footer.html -->
    <nav class="navbar navbar-light navbar-static bg-faded" role="navigation">
        <!-- when opening menu overlay -->
        <div class="overlay"></div>
        <!-- Brand Name -->
        <a class="navbar-brand" href="javascript:void(0)">IEEE Helwan Student Branch</a>
        <!-- Nav Button -->
        <ul class="nav navbar-nav">
            <button class="navbar-toggler float-right" id="navbarSideButton" type="button">
                &#9776;
            </button>
        </ul>
        <!-- navbar-side -->
        <ul class="navbar-side col-lg-4 col-md-7 col-10" id="navbarSide">
            <!-- volunteer Data for all positions -->
            <li class="navbar-side-item side-link">
                <figure class="volunteer-data">
                    <div class="row">
                        <img src="http://via.placeholder.com/100x100" class="rounded-circle col-4" alt="Volunteer Name" width="100px" height="100px">
                        <figcaption class="col-8 mt-3">
                            <span class="h4">Volunteer Name</span>
                            <span class="h5">Volunteer Committe</span>
                        </figcaption>
                    </div>
                </figure>
            </li>
            <!-- for EX-Com only -->
            <li class="navbar-side-item">
                <a href="committees.php" class="side-link">Committees</a>
            </li>
            <!-- for EX-Com & Directors -->
            <li class="navbar-side-item">
                <a href="newTask.php" class="side-link">New Task</a>
            </li>
            <!-- for Directors & HR -->
            <li class="navbar-side-item">
                <a href="evaluate.php" class="side-link">Evaluate Task</a>
            </li>
            <!-- for Directors only -->
            <li class="navbar-side-item">
                <a href="mini_profile.php" class="side-link">Mini Profile</a>
            </li>
            <!-- for Members & EX-com -->
            <li class="navbar-side-item">
                <a href="deliverTask.php" class="side-link">Deliver Task</a>
            </li>
        </ul>
    </nav>
