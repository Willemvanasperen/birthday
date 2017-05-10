<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>birthday/editSave" method="post">
	
	<input type="text" name="person" value="<?= $birthday['person']; ?>">
	<select name="day">
			<?php for ($i = 1; $i <= 31; $i++) 
			{ echo "<option value = \"$i\">$i</option>";} ?>

		</select>
		<select name="month">
		
		<?php for ($m = 1; $m <= 13; $m++)
		if($month = $birthday['month'])
			{ echo "<option value = \"$m\">$m</option>";} ?>
		}
		
		?>
		
		
        </select>
        <select name="year">
			<?php for ($d = 2017; $d >= 1900; $d--) 
			{ echo "<option value = \"$d\">$d</option>";} ?>
		</select>
		

		<input type="hidden" name="id" value="<?= $birthday['id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
