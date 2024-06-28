<?php 
class UserController  extends BaseController {
    private $__model;
    public function __construct($conn) {
        $this->__model = $this->initModel("UserModel", $conn);
    }

    public function execute($id = null) {
        //insert or update
        if(isset($_POST["submit"])) {
            $item_code = $_POST["item_code"];
            $item_name = $_POST["item_name"];
            $quantity = $_POST["quantity"];
            $expired_date = $_POST["expired_date"];
            $note = $_POST["note"];
            $id =  $_POST["id"];
            if(empty($id)) {
                //insert
                $this->__model->createUser($item_code, $item_name, $quantity, $expired_date, $note);
            } else {
                //update user
                $this->__model->updateUserById($id, $item_code, $item_name, $quantity, $expired_date, $note);
            }
            
        } else {
            $user = $this->__model->getUserById($id);
            $this->view("user/form", ["user"=> $user]);
        }

        //onpen form
    }

    public function listUsers() {
        $listUser =  $this->__model->listUsers();
        $this->view("layouts/client_layout", ["content"=>"user/listUser", "listUser"=>$listUser]);
    }

    public function delete($id) {
        $this->__model->deleteUserById($id);
    }
}




?>