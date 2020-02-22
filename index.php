<?php

$data = [
	'name' => '',
	'lastname' => 'testtest',
	'email' => 'alichoopani1380@gmail.com',
	'age' => 12,

];

$rules = [
	'name' => 'minLength:3|maxLength:100',
	'lastname' => 'lengthBetween:3-100',
	'email' => 'notNull|isEmail',
	'age' => 'isNumeric|numberBetween:1-120'
];

require 'Validation.php';

$validation = new Validation($data, $rules);
$errors = $validation->getErrors();
var_dump($errors);