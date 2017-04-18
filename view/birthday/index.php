<?php
        $month = array("", "Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December");
    ?>

    <?php 
    $currentMonth = null;
    $currentDay = null;

    foreach($birthdays as $birthday) { ?> 
    <?php if ($currentMonth != $birthday['month']) {
        echo "<h1>" . $month[$birthday['month']] . "</h1>";
        $currentMonth = $birthday['month'];
    }

    if ($currentDay != $birthday['day']) {
         echo "<h2>" . $birthday['day'] . "</h2>";
        $currentDay = $birthday['day'];
    } ?>
        <p>
            <a href="<?php echo URL . 'birthday/edit/' . $birthday['id']; ?>">
                <?php echo $birthday['person'] . " (" . $birthday['year'] . ")";  ?></a>

            <a href="<?php echo URL . 'birthday/delete/' . $birthday['id']; ?>">x</a>
        </p>
    <?php } ?>
<p><a href="<?= URL ?>birthday/create">+ Toevoegen</a></p>
