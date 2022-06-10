<?php
class Employee
{
public $employee_name;
public $employee_id;
function __construct($emp_name, $emp_id)
{
$this->employee_name = $emp_name;
$this->employee_id = $emp_id;
}
public function Employee_details()
{
echo "Employee name is $this->employee_name and Employee id is $this->employee_id";
}
}
$obj = new Employee("Premkumar", "123456");
echo $obj->Employee_details();
?>