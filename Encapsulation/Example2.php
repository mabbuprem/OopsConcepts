<?php

class Bank {

	private $userId;
	private $pwd;
	public function updatePwd($userId, $pwd) {
		echo("Function to update password ' \n"
				. $pwd .  " \n' for user " . $userId . "\n");
	}
	public function empName($userId) {
		
		echo("Function to check emp name of user \n "
				. $userId);
	}
}
$obj = new Bank();
$obj -> updatePwd('Prem335', 'Prem3335');
$obj -> empName('Batch123');
