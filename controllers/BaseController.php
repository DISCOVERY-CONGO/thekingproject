<?php
namespace controllers;

class BaseController{

    protected $data_request;
    protected $request;
    protected $model;
    protected $id;
    protected $affichage;
    protected $data_model;

    public function __construct(){
        $this->request['post'] = $_POST;
        $this->request['file'] = $_FILES;
        $this->request['get'] = $_GET;
        $this->data_model = new ("\\models\\".$this->model) ();
        
        $this->affichage  = new affichage();
    }
    protected function is_post(){
        return !empty($this->request["post"]);
    }
    public function call(){
        $route = route();
        $masque1 = "/^".$this->model.'s\/[0-9]+/';
        //var_dump($masque1);
       
        //var_dump($this->model);
        if($route=="/".$this->model.'s'){
            if($this->is_post()){
                $model = new ("\\models\\".$this->model) ();
                if($this->model == "user"){
                    $this->request['post']['password'] = password_hash($this->request['post']['password'], PASSWORD_DEFAULT);
                }
                $model->create($this->request["post"]);
                ecrire("success");  

            }else{
               // $this->id = $id;
                $this->all();
            }
        }elseif (preg_match("/\/".$this->model.'s\/[0-9]+$/', $route)) {
            $decoupage = explode("/", $route);
           // var_dump($decoupage[count($decoupage)-1]);
            $id = $decoupage[count($decoupage)-1];
            if($this->is_post()){ 
                $model = new ("\\models\\".$this->model) ();
                $model->update($this->request["post"], $id);
                echo "success";
            }else{
                $this->id = $id;
                $this->one();
            }
        }elseif (preg_match("/\/".$this->model.'s\/[0-9]+\/delete$/', $route)) {

            $decoupage = explode("/", $route);
            // var_dump($decoupage[count($decoupage)-1]);
             $id = $decoupage[count($decoupage)-2];
             
                 $model = new ("\\models\\".$this->model) ();
                 $model->delete($id);
                 echo "success";
             
        }
    }

    protected function all(){

    }
    protected function one(){

    }

}



?>