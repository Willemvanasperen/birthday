<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>birthday/editSave" method="post">
	
		<input type="text" name="person" value="<?= $birthday['person']; ?>">
		<input type="text" name="day" value="<?= $birthday['day']; ?>">		
		<input type="text" name="month" value="<?= $birthday['month']; ?>">
		<input type="text" name="year" value="<?= $birthday['year']; ?>">

		
		</select>

		<input type="hidden" name="id" value="<?= $birthday['id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
