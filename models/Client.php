<?php 

namespace Models;
use \models\base;

class Client extends Model{

    protected $connect;
    protected $database;
    protected $req;

protected $attributes=[
    "nom"
];

public function __construct(){
    $this->database = new base();
    $this->connect = $this->database->init_connection();
}

public function all_clients(){
        $sql = "SELECT * FROM client ORDER BY id DESC";
        $this->req = $this->connect->query($sql);
        $result = $this->req->fetchAll();
        return $result;
}

public function count(){
    
    $this->req = $this->connect->query("SELECT * FROM client");
    return $this->req->rowCount();
}

}

// public function getMemberCartItem($member_id)
// {
//     $query = "SELECT tbl_product.*, tbl_cart.id as cart_id,tbl_cart.quantity FROM tbl_product, tbl_cart WHERE 
//         tbl_product.id = tbl_cart.product_id AND tbl_cart.member_id = ?";
    
//     $params = array(
//         array(
//             "param_type" => "i",
//             "param_value" => $member_id
//         )
//     );
    
//     $cartResult = $this->getDBResult($query, $params);
//     return $cartResult;
// }


?>