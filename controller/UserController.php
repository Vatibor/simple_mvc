<?php
require_once "../app/Controller.php";
require_once "../app/Database.php";
require_once "../model/User.php";

class UserController extends Controller {
    private $db;

    public function showUsers() {
        $this->db = Database::getInstance()->getConnection();
        $stmt = $this->db->query('SELECT * FROM users');
        $data = $stmt->fetchAll(PDO::FETCH_CLASS, 'User');

        $this->view("users", $data);
    }
}
    


