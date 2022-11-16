<?php
class BankAccount {
    protected $_libelle;
    protected $_devise;
    protected $_titulaire;
    protected $_solde =0;
        
    public function __construct(string $libelle,string $devise,int $solde, Titulaire $titulaire){
        $this->_libelle = $libelle;
        $this->_devise = $devise;
        $this->_solde = $solde;
        $this->_titulaire= $titulaire;
        $this->_titulaire->addCompte($this);
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
    public function getSolde(){
        return $this->_solde;
    }

        
    //SET
    public function setLibelle($libelle){
        $this->_libelle = $libelle;
    }
    public function setMarque($devise){
        $this->_devise = $devise;
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
           
    public function Virement($compte2,$currency){
        if ($this->_solde < $currency) {
            echo "Montant insuffisant";
        }
        $this->_solde -= $currency;
        $compte2->_solde += $currency;
    }
                    
    //Affiche les info d'un compte
            
    public function getBankAccountInfo(){
            echo "*******************<br>".$this->_libelle."<br>".$this->_solde." ".$this->_devise."<br>";
    }
}