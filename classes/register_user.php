<?php

class Client extends Personne{
	
	protected $_dateCrea;
	protected $_pwd;

	// constructeur------------

 	function __construct($nom,$prenom,$dateNaiss,$mail,$adresse,$ville,$codePostal,$dateCrea,$pwd){

 	parent::__construct($nom,$prenom,$dateNaiss,$mail,$adresse,$ville,$codePostal);
 	$this->setDateCrea($dateCrea);
 	$this->setPwd($pwd);
 	
 	}

 // ---------------accesseurs-------------
	 public function getDateCrea(){

	 	return $this->_dateCrea;
	 }

	 public function getPwd(){

 	return $this->_pwd;
	 
	 }
 // ---------------mutateurs------------------
	public function setDateCrea(){

 	return $this->_dateCrea;
 	}

	public function setPwd(){

 	return $this->_pwd;
	 
 	}


 // ---------------méthodes-----------------

	public function new(){
		$db = Database::connect;

		$passHash = password_hash($pwd, PASSWORD_DEFAULT);

		$statement = $db->prepare("INSERT INTO users (nom_client,prenom_client,mail_client, adresse_client, cp_client, ville_client, pwd_client) VALUES (:unom,:uprenom,:umail,:uadresse,:ucp,:uville,:upass)");
							$statement->bindValue(':unom',$last);
							$statement->bindValue(':uprenom',$first);
							$statement->bindValue(':umail',$email);
							$statement->bindValue(':uadresse',$address);
							$statement->bindValue(':ucp',$cp);
							$statement->bindValue(':uville',$ville);
							$statement->bindValue(':upass',$passHash);
        					$statement->execute();


	}

	public function read(){

	}

	public function update(){

	}

	public function delete(){

	}
	public function authentication(){
		
	}
}
 

?>