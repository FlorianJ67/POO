<?php
class Titulaire {
    protected $_name;
    protected $_fname;
    protected $_birthday;
    protected $_city;
    protected $_tabAccount;

    
    public function __construct(string $name,string $fname,$birthday,$city){
        $this->_name = $name;
        $this->_fname = $fname;
        $this->_birthday = $birthday;
        $this->_city = $city;
        $this->_tabAccount = [];
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
    public function getTabAccount(){
        return $this->_tabAccount;
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
    

  
    public function addCompte($newAccount){
        array_push($this->_tabAccount,$newAccount);
    }

    
    //Affiche les info d'un titulaire

    public function getUserInfo(){        
        $dateOfBirth = date_create($this->_birthday);
        $today = date("Y-m-d");
        $diff = date_diff($dateOfBirth, date_create($today));

        echo 'Nom : '.$this->_name. 
            '<br>Prenom : '.$this->_fname.
            '<br>Age : '.$diff->format('%y').
            '<br>Ville : '.$this->_city.
            '<br>Compte : <br>';

            foreach($this->_tabAccount as $account){
                $account->getBankAccountInfo();
            }

    }
}
          