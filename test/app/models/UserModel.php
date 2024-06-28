<?php 
class UserModel {
    private $__conn;
    public function __construct($conn) {
        $this->__conn = $conn;
    }

    public function login($username, $password) {
        $sql = "select * from user where username = :username and password = :password";
        $stmt = $this->__conn->prepare($sql);
        $stmt->bindParam("username", $username, PDO::PARAM_STR);
        $stmt->bindParam("password", $password, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
        //ASSOC : mỗi phần tử là 1 mảng , OBJ : Mỗi 1 phần tử là 1 stdObject, 
        //CLASS : 1 phần tử là 1 object của class mà mình đang lấy ra
    }

    public function createUser($item_code, $item_name, $quantity, $expired_date, $note) { 
        $sql = "insert into item_sale (`item_code`, `item_name`, `quantity`, `expired_date`, `note`) values (:item_code, :item_name, :quantity, :expired_date, :note)";
        $stmt = $this->__conn->prepare($sql);
        $stmt->bindParam("item_code", $item_code, PDO::PARAM_STR);
        $stmt->bindParam("item_name", $item_name, PDO::PARAM_STR);   
        $stmt->bindParam("quantity", $quantity, PDO::PARAM_STR);
        $stmt->bindParam("expired_date", $expired_date, PDO::PARAM_STR);
        $stmt->bindParam("note", $note, PDO::PARAM_STR);
        $stmt->execute();
        header("Location: http://localhost/test/user/listUsers");
    }

    public function listUsers() {
        try {
            if (isset($this->__conn)) {
                $sql = "select * from item_sale order by id desc ";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $result;
            }
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function getUserById($id) {
        try {  
            $sql = "select * from item_sale where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            return $result;
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function updateUserById($id, $item_code, $item_name, $quantity, $expired_date, $note) {
        try {  
            $sql = "update item_sale set username = :username, password = :password, role = :role where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->bindParam("item_code", $item_code, PDO::PARAM_STR);
            $stmt->bindParam("item_name", $item_name, PDO::PARAM_STR);   
            $stmt->bindParam("quantity", $quantity, PDO::PARAM_STR);
            $stmt->bindParam("expired_date", $expired_date, PDO::PARAM_STR);
            $stmt->bindParam("note", $note, PDO::PARAM_STR);
            $stmt->execute();
            header("Location: http://localhost/test/user/listUsers");
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function deleteUserById($id) {
        try {  
            $sql = "delete from item_sale where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            header("Location: http://localhost/test/user/listUsers");
        } catch(Exception $e) {
            echo $e->getMessage();
            exit();
        }
    }

}





?>