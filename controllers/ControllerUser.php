<?php
namespace Controllers;
use \Models\User;

class ControllerUser extends BaseController{
    protected $model = "user";
    //implementez les methodes all et one pour afficher les données 

    protected function all($data){
        return $this->affichage->views("index", $data);
       }
   
       protected function one($data){
           return $this->affichage->views("index", $data);
          }

         
           

          protected function route(){
            $user = new User;
            if($this->get("login")){
                $this->affichage->views("auth/login");
  
            } 
            if($this->get("register")){
                $this->affichage->views("auth/register");
            } 

            if($this->get("logout")){
                session_destroy();
                $structure = new \models\structure();
                return header("location:".$structure->redirect['domaine']."/login");
            } 
            if ($this->get("users")) {
                $data = $user->users();
                $this->affichage->views("user/users",$data);
            }
            if ($this->get("editRole/([0-9]?[0-9]|100)")) {
                $tableau = $this->get_parameters();
                $last = $tableau[array_key_last($tableau)];
                $data = $user->user_by_id($last);
                $this->affichage->views("user/roleEdit",$data);

            }
          }

public function role_edit($data){
    $user = new \Models\User;
    $user->edit_role($data);
    $data = $user->users();
    $this->affichage->views("user/users",$data);
}
         

        }




?>