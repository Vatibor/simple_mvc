<?php
require_once "../app/Controller.php";
require_once "../app/Database.php";
require_once "../model/Advertisement.php";


class AdvController extends Controller {
    private $db;

    public function showAdv() {
        $this->db = Database::getInstance()->getConnection();
        $stmt = $this->db->query('
            SELECT advertisements.id, advertisements.title, users.name 
            FROM advertisements 
            JOIN users ON advertisements.userid = users.id
        ');
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->view('advertisement', [$data]);
    }
}