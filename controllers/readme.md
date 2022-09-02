# Controllers

 chaque **controller** de modèle Hérite de la classe Base Controller qui dispose déja des methodes pour le CRUD du modèle
 ## Méthodes du controleur de base **BaseController** :
  > call()
  cette méthode capture les routes : 
  - GET * /model+s* :  pour retourner toute les enregistrement d'un modele dans une route et renvoie ça à la fonction all() implementez donc celle-ci pour ajouter une vue avec le propriéte affichage
  -POST */model+s* : ajoute une nouvelle enregistrement d'un modèle reportez-vous à la propriéte attributes du modèle pour voir toutes les attributs requis dans une requette 
  -GET *model+s/id* :  retourne un enregistrement du modele correspondant à l'id et renvoie ça à la methode one, implementez donc la vue dans cette methode en receptionnant un parametre de  données 
  N.B si un enregistrement est inéxistante les données renvoyer seront égale à false
  -POST *model+s/id* : met à jour un enregistrement ayant l'id données 
  -POST *model+s/id/delete* : supprime un enregistrement données 

  >route() 
  cette méthode doit etre implementez dans les sous-classe de controllers pour ajoutez les routes à votre guise
  pour capturer les url utilisez la methode get 
  exemple:  
  ```     
protected function route(){
        if($this->get("about/[0-9]+")){
            $this->affichage->views("index");
        }
       }



  ```                                   
