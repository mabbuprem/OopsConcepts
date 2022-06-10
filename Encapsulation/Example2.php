<?php

// PHP program to implements encapsulation
class Bank {

	private $userId;
	private $pwd;
	
	// Update Bank password
	public function updatePwd($userId, $pwd) {
		
		// Write function body
		echo("Function to update password ' \n"
				. $pwd .  " \n' for user " . $userId . "\n");
		
	}

	// Check account balance
	public function empName($userId) {
		
		// Write function body
		echo("Function to check emp name of user \n "
				. $userId);
		
	}
}

$obj = new Bank();
$obj -> updatePwd('Prem335', 'Prem3335');
$obj -> empName('Batch123');

?>
