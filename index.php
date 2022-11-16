<h1>POO Bank</h1>

<?php 
 spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});


$titulaire1 = new Titulaire("John","Chirac","1978-10-04","paris");
$compte1 = new BankAccount("compte courrant","euro",500, $titulaire1);
$compte2 = new BankAccount("compte marchant","yen",54000, $titulaire1);

$titulaire1->getUserInfo();

$compte1->Virement($compte2,89);
echo '<br>';
$titulaire1->getUserInfo();

?>