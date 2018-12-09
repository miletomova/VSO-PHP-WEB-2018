<?php 

$phone_numbers = [	
					'John Smith'=> '+1-555-8976',
					'Lisa Smith'=> '+1-555-1234',
					'Sam Doe'	=> '+1-555-5030',
					'Doe Doe'	=> '+1-555-6030',
				];


?>

<form action="" method="get">
	<select name="city">
		<?php 
		foreach($phone_numbers as $name=>$phone){
			echo "<option value='$name'>$name</option>";
		}
		?>
	</select>
	<input type="submit" name="check">	
</form>