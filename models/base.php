<?php 
namespace models;






use \pdo;
class base{


	private $user;
	private $db_name;
	private $hote = "localhost";
	private $login = "root";
	private $pass = "";
	private $pdo;
	private $exemple = "dd";
	private $enregistrement;
	protected $table;
	private $main_table;
	protected $colonne = array();



	
	
 public function __construct(){
 
 	 //ouverture de la classe de configuration du serveur : structure
    $structure = new structure();
 	$this->hote = $structure->definition['hote'];
 	$this->login = $structure->definition['login'];
 	$this->pass = $structure->definition['pass'];
 	$this->db_name = $structure->definition['db_name'];
 	$this->construire_base_de_donnees();
 	

    $this->init_base();
  		
 }

 protected function construire_base_de_donnees(){
 	 $structure = new structure();
 	$this->hote = $structure->definition['hote'];
 	$this->login = $structure->definition['login'];
 	$this->pass = $structure->definition['pass'];
 	$this->db_name = $structure->definition['db_name'];
 	try{
$connexion=new PDO("mysql:host=".$this->hote,$this->login,$this->pass);
	$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$connexion->exec("CREATE DATABASE IF NOT EXISTS ".$this->db_name."");
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host='.$this->hote.';dbname='.$this->db_name, $this->login, $this->pass,
$pdo_options);
	 // création des  table pour enregistrement comptes utilisateur

$bdd->exec("
CREATE TABLE IF NOT EXISTS produit (
 id INT NOT NULL AUTO_INCREMENT,
 nom VARCHAR(255) NOT NULL,
 quantite INT NOT NULL,
 categorie VARCHAR(255),
 prix FLOAT NOT NULL,
 created_at DATE,
 updated_at DATE,
 PRIMARY KEY (id)
 );");

 $bdd->exec("
	 CREATE TABLE IF NOT EXISTS categorie (
 id INT NOT NULL AUTO_INCREMENT,
 nom VARCHAR(255),
 created_at DATE,
 updated_at DATE,
 PRIMARY KEY (id)
 );");

 $bdd->exec("
	 CREATE TABLE IF NOT EXISTS serveur (
 id INT NOT NULL AUTO_INCREMENT,
 nom VARCHAR(255),
 post_nom VARCHAR(255),
 sexe VARCHAR(255),
 created_at DATE,
 updated_at DATE,
 PRIMARY KEY (id)
 );");

 $bdd->exec("
	 CREATE TABLE IF NOT EXISTS commande (
 id INT NOT NULL AUTO_INCREMENT,
 serveur INT NOT NULL,
 client INT NOT NULL,
 table_id INT NOT NULL,
 numcommande VARCHAR(255),
 created_at DATE,
 updated_at DATE,
 PRIMARY KEY (id)
 );");

 $bdd->exec("
 CREATE TABLE IF NOT EXISTS client (
id INT NOT NULL AUTO_INCREMENT,
nom VARCHAR(255),
created_at DATE,
updated_at DATE,
PRIMARY KEY (id)
);");


$bdd->exec("
 CREATE TABLE IF NOT EXISTS user (
id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(255),
secondName VARCHAR(255),
email VARCHAR(255),
password VARCHAR(255),
role VARCHAR(255) NOT NULL,
created_at DATE,
updated_at DATE,
PRIMARY KEY (id)
);");

$bdd->exec("
 CREATE TABLE IF NOT EXISTS mouvement_commande (
id INT NOT NULL AUTO_INCREMENT,
produit INT NOT NULL,
quantite INT NOT NULL,
prix FLOAT NOT NULL,
created_at DATE,
updated_at DATE,
PRIMARY KEY (id)
);");

$bdd->exec("
 CREATE TABLE IF NOT EXISTS data_table (
id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(255),
created_at DATE,
updated_at DATE,
PRIMARY KEY (id)
);");


$bdd->exec("
 CREATE TABLE IF NOT EXISTS approvisionnement (
id INT NOT NULL AUTO_INCREMENT,
quantite INT NOT NULL,
provenance VARCHAR(255),
prix_unit FLOAT NOT NULL,
created_at DATE,
updated_at DATE,
PRIMARY KEY (id)
);");

$bdd->exec("
 CREATE TABLE IF NOT EXISTS depense (
id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(255),
created_at DATE,
updated_at DATE,
PRIMARY KEY (id)
);");

$bdd->exec("
 CREATE TABLE IF NOT EXISTS libelle_depense (
id INT NOT NULL AUTO_INCREMENT,
title VARCHAR(255),
montant FLOAT NOT NULL,
created_at DATE,
updated_at DATE,
PRIMARY KEY (id)
);");

 
$bdd->exec("
 CREATE TABLE IF NOT EXISTS role (
id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(255),
created_at DATE,
updated_at DATE,
PRIMARY KEY (id)
);");

 
    


 	}catch(Exception $e){
	die('Erreur : '.$e->getMessage());
	var_dump($e);
	echo"<h1>echecs de la connexion<h1>";} 
 }

public  function init_connection(){
	
	if(isset($GLOBALS["pdo"])){
		return $GLOBALS["pdo"];
	}else{



	$dsn = 'mysql:host='.$this->hote.';dbname='.$this->db_name;
	$pdo = new PDO($dsn, $this->login, $this->pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$this->pdo=$pdo;
	$GLOBALS["pdo"] = $pdo;
	return $pdo;
}
}
protected function init_base(){
	



}


private  function start_connection(){
	$dsn = 'mysql:host='.$this->hote.';dbname='.$this->db_name;
	$pdo = new PDO($dsn, $this->user, $this->pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$this->pdo=$pdo;
	return $pdo;
}
public function requette($req){
	$cont=0;
	$connect =$this->init_connection();

	$masque1 = "'";
	$masque2 = '"';
	if(longueur_chaine_filtre($req, $masque1)==longueur_chaine($req)){
		if(longueur_chaine_filtre($req, $masque2)){
			//var_dump($req);
			$reponse=$connect->query($req);
	
	$donnees = $reponse->fetch();
	
}else{
	$chaine = explode('"', $req);
	$requette ='';
	$array = array();
	for($i=0; $i<count($chaine); $i++){
         if(($i+2)%2==0){
           $requette =$requette.''.$chaine[$i];
           if($i!=count($chaine)-1){$requette=$requette.'?';}
         }else{
         	$array[count($array)]=$chaine[$i];
         }

	}
	$reponse = $connect->prepare($requette);
	$reponse->execute($array);
	$donnees = $reponse->fetch();
	}
}else{
	$chaine = explode("'", $req);
	$requette ='';
	$array = array();
	for($i=0; $i<count($chaine); $i++){
         if(($i+2)%2==0){
           $requette =$requette.''.$chaine[$i];
           if($i!=count($chaine)-1){$requette=$requette.'?';}
         }else{
         	$array[count($array)]=$chaine[$i];
         }

	}
	$reponse = $connect->prepare($requette);

	$reponse->execute($array);
	$donnees = $reponse->fetch();
}
	
return $donnees;
}
public function requetteAll($req){
	$cont=0;
	$connect =$this->init_connection();
	$masque1 = "'";
	$masque2 = '"';
	if(longueur_chaine_filtre($req, $masque1)==longueur_chaine($req)){
		if(longueur_chaine_filtre($req, $masque2)){
			$reponse=$connect->query($req);
	
	$donnees = $reponse->fetchAll();
	
}else{
	$chaine = explode('"', $req);
	$requette ='';
	$array = array();
	for($i=0; $i<count($chaine); $i++){
         if(($i+2)%2==0){
           $requette =$requette.''.$chaine[$i];
           if($i!=count($chaine)-1){$requette=$requette.'?';}
         }else{
         	$array[count($array)]=$chaine[$i];
         }

	}
	$reponse = $connect->prepare($requette);
	$reponse->execute($array);
	$donnees = $reponse->fetchAll();
	}
}else{
	$chaine = explode("'", $req);
	$requette ='';
	$array = array();
	for($i=0; $i<count($chaine); $i++){
         if(($i+2)%2==0){
           $requette =$requette.''.$chaine[$i];
           if($i!=count($chaine)-1){$requette=$requette.'?';}
         }else{
         	$array[count($array)]=$chaine[$i];
         }

	}
	$reponse = $connect->prepare($requette);
	$reponse->execute($array);
	$donnees = $reponse->fetchAll();
}
	
return $donnees;
}
public function insert($data, $table, $attributes){	
/** @$table : le nom de la table qui doit recevoir les données 
@$data : est un tableau contenant la liste des donnée à inserer dans chaque colonne de la table de donnée suivant l'ordre des colonne
	*/
		$connect = $this->init_connection();
	
	$requet = "INSERT INTO ".$table."(".implode(", ", $attributes).") VALUES(?,?)";
	$insert = $connect->prepare($requet);

	$array = $this->getArray($attributes, $data);
	
		$insert->execute($array);
			
    
	
	return true;
}



public function inserer($data, $table, $attributes){	
	/** @$table : le nom de la table qui doit recevoir les données 
		*/
			$connect = $this->init_connection();
		
		$requet = "INSERT INTO ".$table."(".$attributes.") VALUES(?)";
		$insert = $connect->prepare($requet);
		$insert->execute([$data]);
				
		
		
		return true;
	}



private function getArray($table1, $table2){
	/** @var : $table1 et $table2 doivent avoir la meme taille
	*/
if(count($table1) == count($table2)){
	for($i=0; $i < count($table1); $i++){
		$nouveau[$table1[$i]]=$table2[$i];

	}
return $nouveau;	
}else{ return false;}
}
public function update($table, $colonne, $data, $reference){
	/*
@$table : contient le nom de la table 
@colonne : contient un tableau censé contenir la liste des éléments à modifier dans la table
@data : contient un tableau contenant toutes les valeurs à modifier de maniere ordonné
@reference : contient la refernces des donnée ex: id=5


	**/
	$connect = $this->init_connection();
	$modification = '';
	$array_fetch = array();
	// var_dump($data);
	for($i=0; $i<count($colonne);$i++){

		if($i==0){$modification = ''.$colonne[$i].'=:'.$colonne[$i];
        $array_fetch[$colonne[$i]] = $data[$i]; }else{
		$modification =$modification.', '.$colonne[$i].'=:'.$colonne[$i];
        $array_fetch[$colonne[$i]] = $data[$i];
 }
	}
	$requette = "UPDATE ".$table." SET ".$modification." WHERE ".$reference;
	
	$base = $connect->prepare($requette);

	$base->execute($array_fetch);
}

public function supprimer($table, $reference){
	/*
	@table : contient le nom de la table 
	@reference : contient le reference ex : id=3

	**/

	$connect = $this->init_connection();
	$modification = '';
	
	$requette = "DELETE FROM ".$table." WHERE ".$reference;
	
	$base = $connect->query($requette);
	//$base->execute($requette);

}
public static function construire_table($table_name, $array_colonne){
	$colonne = array();
	foreach ($array_colonne as $key => $value) {
		$colonne[compter_tableau($colonne)] = $value;
	}
if(!empty($colonne)){
	return (new table($table_name, $colonne));
}else{
	return 'impossible de crée une table à colonne vide';
}
}


function getDBResult($query, $params = array())
{
	$connect = $this->init_connection();
	$sql_statement = $connect->prepare($query);
	if (! empty($params)) {
		$this->bindParams($sql_statement, $params);
	}
	$sql_statement->execute();
	$result = $sql_statement->get_result();
	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$resultset[] = $row;
		}
	}
	
	if (! empty($resultset)) {
		return $resultset;
	}
}

function updateDB($query, $params = array())
{
	$connect = $this->init_connection();
	$sql_statement =$connect->prepare($query);
	if (! empty($params)) {
		$this->bindParams($sql_statement, $params);
	}
	$sql_statement->execute();
}

function bindParams($sql_statement, $params)
{
	$param_type = "";
	foreach ($params as $query_param) {
		$param_type .= $query_param["param_type"];
	}
	
	$bind_params[] = & $param_type;
	foreach ($params as $k => $query_param) {
		$bind_params[] = & $params[$k]["param_value"];
	}
	
	call_user_func_array(array(
		$sql_statement,
		'bind_param'
	), $bind_params);
}

}

?>