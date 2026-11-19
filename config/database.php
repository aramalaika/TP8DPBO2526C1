
<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "tp_mvc25";

    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new mysqli(
                $this->host,
                $this->username,
                $this->password,
                $this->database
            );

            if ($this->conn->connect_error) {
                throw new Exception($this->conn->connect_error);
            }

        } catch (Exception $e) {
            die("Koneksi database gagal: " . $e->getMessage());
        }

        return $this->conn;
    }
}

?>
