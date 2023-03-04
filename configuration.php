<?php
	if (isset($_POST['submit'])) {
		$input_1 = htmlspecialchars($_POST['first_input']);
		$input_2 = htmlspecialchars($_POST['second_input']);
		$operator = $_POST['function'];

		if ($input_1 == null) {
			exit("<br><br>Please Enter The First Number ^_^");
		}

		switch ($operator) {
			case 'Add':
				$adding = $input_1 + $input_2;
				echo "<br><br>Result:<br> " . $adding;
			break;

			case 'Subtract':
				$subtracting = $input_1 - $input_2;
				echo "<br><br>Result:<br> " . $subtracting;
			break;

			case 'Multiply':
				$multiply = $input_1 * $input_2;
				echo "<br><br>Result:<br>" . $multiply;
			break;

			case 'Divide':
				$divide = $input_1 / $input_2;
				echo "<br><br>Result:<br>" . $divide;
			break;

			case 'Square':
		        $square = $input_1 * $input_1;
				exit("<br><br>Result:<br>" . $square);
			break;

			case 'Square Root':
				$square_root = sqrt($input_1);
				exit("<br><br>Result:<br>" . $square_root);
			break;			
			}
	}
?>