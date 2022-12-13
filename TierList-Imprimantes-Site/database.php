<?php

/**
 * 
 * 
 * Auteur : Luca
 * Date : 21.11.22
 * Description : requetes sql utilier pour les page en php
 */


 class Database {


    // Variable de classe
    private $connector;

    public function __construct(){

        try
        {
        $this->connector = new PDO('mysql:host=localhost;dbname=db_imprimante;charset=utf8' , 'root', 'root');
        }
        catch (PDOException $e)
        {
        die('Erreur : ' . $e->getMessage());
        }

    }
    private function querySimpleExecute($query){
        return $this->connector->query($query);
        // TODO: permet de pr�parer et d�ex�cuter une requ�te de type simple (sans where)
    }
//prepare, bind et execute pour proteger les requetes
    private function queryPrepareExecute($query, $binds){
        $req = $this->connector->prepare($query);
        foreach ($binds as $key => $element) {
            $req->bindValue($key, $element["value"], $element["type"]);
        }
        $req->execute();
        return $req;        
    }
//format data
    private function formatData($req){
        $result = $req->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }


    private function unsetData($req){

        // TODO: vider le jeu d�enregistrement
    }

//requete sql qui rend toutes les imprimantes
    public function getAllImprimantes(){
        $query = "SELECT * FROM t_imprimante";
        $req = $this->querySimpleExecute($query);
        $imprimante = $this->formatData($req);
        return $imprimante;

    }
//requete sql qui rend tous les utilisateurs
    public function getAllUser(){
        $query = "SELECT * FROM t_user";
        $req = $this->querySimpleExecute($query);
        $users = $this->formatData($req);
        return $users;
        
    }
//requete sql utiliser pour afficher la page differement selon l'utilisateur
    public function getUser($data) {
        $query = "SELECT * FROM t_user WHERE useLogin ='". $data["login"] ."'";
        $req = $this->querySimpleExecute($query);
        $user = $this->formatData($req)[0];

        if (password_verify($data["password"], $user["usePassword"])) {
            return $user;
        } else {
            return false;
        }

    }
//requete sql qui rend les section
    public function getSection(){
        $query = "SELECT * FROM t_section";
        $req = $this->querySimpleExecute($query);
        $sections = $this->formatData($req);
        return $sections;
    }
//requete sql qui rend un prof
    public function getOneTeacher($id){
        $query = "SELECT * FROM t_teacher INNER JOIN t_section ON t_teacher.fkSection = t_section.idSection WHERE idTeacher='". $id ."'";
        
        $req = $this->querySimpleExecute($query);
        $teacher = $this->formatData($req);
        ///retourne la premiere valeur du tableau
        return $teacher[0];

    }
//requete sql qui efface un prof
    public function deleteOneRecette($idRecette){

        $sql = "DELETE FROM t_recette WHERE idRecette='" . $idRecette . "'";
        $req = $this->querySimpleExecute($sql);
        $idRecette = $this->formatData($req);
        return $idRecette;

    }
//requete sql qui ajoute une recette
    public function addOneimprimante($impFabriquant, $printerModel, $printerTechnologie, $printerSpeed, $printerBac, $printerWeight, $printerResolution, $printerWidth, $printerLength, $printerHeigth, $printerPrice){
        $sql = "INSERT INTO t_recette (`impFabriquant`, `printerModel`, `printerTechnologie`, `printerSpeed`, `printerBac`, `printerWeight`, `printerResolution`, `printerWidth`, `printerLength`, `printerHeigth` , `printerPrice`) VALUES (:impFabriquant, :printerModel, :printerTechnologie, :printerSpeed, :printerBac, :printerWeight, :printerResolution, :printerWidth, :printerLength, :printerHeigth)";
        $binds = [];
        $binds["impFabriquant"] = ["value" => $impFabriquant , "type" => PDO::PARAM_STR];
        $binds["printerModel"] = ["value" => $printerModel , "type" => PDO::PARAM_STR];
        $binds["printerTechnologie"] = ["value" => $printerTechnologie , "type" => PDO::PARAM_STR];
        $binds["printerSpeed"] = ["value" => $printerSpeed , "type" => PDO::PARAM_STR];
        $binds["printerBac"] = ["value" => $printerBac , "type" => PDO::PARAM_STR];
        $binds["printerWeight"] = ["value" => $printerWeight , "type" => PDO::PARAM_STR];
        $binds["printerResolution"] = ["value" => $printerResolution , "type" => PDO::PARAM_STR];
        $binds["printerWidth"] = ["value" => $printerWidth , "type" => PDO::PARAM_STR];
        $binds["printerLength"] = ["value" => $printerLength , "type" => PDO::PARAM_STR];
        $binds["printerHeigth"] = ["value" => $printerHeigth , "type" => PDO::PARAM_STR];
        $binds["printerPrice"] = ["value" => $printerPrice , "type" => PDO::PARAM_STR];
        $this->queryPrepareExecute($sql, $binds);
    }
//requete sql qui modifi une recette
    public function updateRecette($recImage, $idRecette){
        $sql = "UPDATE t_recette SET recImage = :recImage WHERE  idRecette = :idRecette";
        $binds = [];
        $binds["recImage"] = ["value" => $recImage , "type" => PDO::PARAM_STR];
        // $binds["teaName"] = ["value" => $teaName , "type" => PDO::PARAM_STR];
        // $binds["teaGender"] = ["value" => $teaGender , "type" => PDO::PARAM_STR_CHAR];
        // $binds["teaNickname"] = ["value" => $teaNickname , "type" => PDO::PARAM_STR];
        // $binds["teaOrigine"] = ["value" => $teaOrigine , "type" => PDO::PARAM_STR];
        // $binds["fkSection"] = ["value" => $fkSection , "type" => PDO::PARAM_INT];
        $binds["idRecette"] = ["value" => $idRecette , "type" => PDO::PARAM_INT];
        $this->queryPrepareExecute($sql, $binds);
    }
//requete sql qui ajoute une élection
    public function addOneChoice($teaVoix, $idTeacher){
        $sql = "UPDATE t_teacher SET teaVoix = $teaVoix WHERE idTeacher =$idTeacher";
        $req = $this->querySimpleExecute($sql);
        $teaVoix = $this->formatData($req);
        return $teaVoix;
    }


 }


?>