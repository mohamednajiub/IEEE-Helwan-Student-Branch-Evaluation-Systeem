<?php
    // add head and sidenav
    include_once('sidenav.php');
?>
<p class="lead" id="greeting">what's up, My friend </p>
<div class="alert alert-danger" role="alert">
  Next <a href="profile.php" class="alert-link">Task</a> Dead line in <span id="counter" class="badge badge-warning float-right">Secondary</span>
</div>
<script>
    // Greeting function
    var Greeting = document.getElementById('greeting'),
        // Get time
        date = new Date(),
        days = date.getDay();
        hours = date.getHours();
        min = date.getMinutes();
        sec = date.getSeconds();
    if(hours >= 05){
        Greeting.innerHTML = "Good Morning Volunteer name";
    } else if(hours >= 12){
        Greeting.innerHTML = "Good AfterNone Volunteer Name";
    } else if(hours >= 17){
        Greeting.innerHTML = "Good evening Volunteer Name";
    } else {
        Greeting.innerHTML = "Work Hard OR GO TO SLEEP! Good Night :)";
    }
    // countDown
    function count(){
        var countDown = document.getElementById('counter'),
            time =  hours + ':' + min + ':' + sec;


        countDown.innerText = time;
        setTimeout(count, 1000);
        
    }
    count();
    
</script>
<?php
    // add footer
    include_once('include/footer.html');
?>