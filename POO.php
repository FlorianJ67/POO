<h1>POO Bank</h1>

<?php 

class BankAccount {
    protected $_libelle;
    protected $_devise;
    protected $_titulaire;
    protected $_solde =0;

    public function __construct(string $libelle,string $modele,int $solde){
        $this->_libelle = $libelle;
        $this->_devise = $devise;
        $this->_solde = $solde;
    }

    //GET
    public function getLibelle(){
        return $this->_libelle;
    }
    public function getDevise(){
        return $this->_devise;
    }
    public function getTitulaire(){
        return $this->_titulaire;
    }

    //SET
    public function setMarque($devise){
        $this->_devise = $devise;
    }
    public function setModele($modele){
        $this->_modele = $modele;
    }

    //Crediter/Debiter

    public function Credit($currency){
        $this->$_solde += $currency;
    }
    public function Debit($currency){
        if($currency > $this->$_solde){
            echo "Montant insuffisant";
        }
        $this->$_solde -= $currency;
    }

    //Virement

    public function Credit(/*$compte1,*//*$compte2,*/$currency){
        if ($compte1 < $currency) {
            echo "Montant insuffisant";
        }
    /*
        $compte1 -= $currency;
        $compte2 += $currency;
    */
    }


    
    //Affiche les info d'un compte

    public function getBankAccountInfo(){

    }
}

class Titulaire {
    protected $_name;
    protected $_fname;
    protected $_birthday;
    protected $_city;
    /*ensemble des compte bancaires*/

    public function __construct(string $name,string $fname,$birthday,$city){
        $this->_name = $name;
        $this->_fname = $fname;
        $this->_birthday = $birthday;
        $this->_city = $city;
    }

    //GET
    public function getName(){
        return $this->_name;
    }
    public function getFName(){
        return $this->_fname;
    }
    public function getBirthday(){
        return $this->_birthday;
    }
    public function getCity(){
        return $this->_city;
    }


    //SET
    public function setName($name){
        $this->_name = $name;
    }
    public function setFName($fname){
        $this->_fname = $fname;
    }
    public function setBirthday($birthday){
        $this->_birthday = $birthday;
    }
    public function setCity($fname){
        $this->_city = $city;
    }



        
    //Affiche les info d'un titulaire

    public function getUserInfo(){        
        $dateOfBirth = date_create($this->_birthday);
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));

        echo 'Nom : '.$this->_name. 
            '<br>Prenom : '.$this->_fname.
            '<br>Age : '.$diff->format('%y').
            '<br>Ville : '.$this->_city.
            '<br>Compte : <br>';

    }
}

?>