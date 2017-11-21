<?php include 'includes/config.php'?>


<?php get_header()?>

<h3>Song of the Day!</h3>
<p>Current contents of the variable day: <?=$day?></p>
<?php
    echo "<p>" . $song . "</p>";
    echo "<p>" . $description . "</p>";
    echo "<img src='images/" . $image . "'>";   
    
?>

<p><a href="daily.php?day=Monday">Monday</a></p>
<p><a href="daily.php?day=Tuesday">Tuesday</a></p>
<p><a href="daily.php?day=Wednesday">Wednesday</a></p>
<p><a href="daily.php?day=Thursday">Thursday</a></p>
<p><a href="daily.php?day=Friday">Friday</a></p>
<p><a href="daily.php?day=Saturday">Saturday</a></p>
<p><a href="daily.php?day=Sunday">Sunday</a></p>



<?php get_footer()?>
