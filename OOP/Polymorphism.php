<?php
require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Jovian");
var_dump($company);
$company->programmer = new BackendProgrammer("Eko");

var_dump($company);

sayHelloProgrammer(new Programmer("Jovian"));
sayHelloProgrammer(new BackendProgrammer("Eko"));
sayHelloProgrammer(new FrontendProgrammer("Caca"));
