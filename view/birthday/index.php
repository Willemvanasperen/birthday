<?php 
print_r($birthdays);
$birthday = array ("", "januari", "februari", "maart", "april", "mei", "juni", "juli", 
    "augustus", "september", "oktober", "november", "december");

foreach ($birthdays as $birthday);
 echo "<h1>" . $birthday['month'] . "</h1>";
?>



<h1>februari</h1>
        <h2>22</h2>
        <p>
            <a href="edit.php?id=4">
                Anoushka (1981)</a>
                
            <a href="delete.php?id=4">x</a>
        </p>
        <p>
            <a href="edit.php?id=10">
                Mila (1993)</a>
                
            <a href="delete.php?id=10">x</a>
        </p>
           
<p><a href="create.php">+ Toevoegen</a></p>