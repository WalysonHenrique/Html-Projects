<?php
class MarcasModel {
    public $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbname = "carros";
    public $conn;


    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getMarca() {
        $sql = "SELECT * FROM marca";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function excluirMarca($id) {
        $sql = "DELETE FROM marca WHERE idMarca = ?";
        $stmt = $this->conn->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("i", $idMarca);
            $stmt->execute();
            $stmt->close();
            return true;
        } else {
            return false;
        }
    }

    public function cadastrarMarca( $nome,$nomeImagem) {
        $sql = "INSERT INTO marca (nome,  nomeImagem) VALUES (?, ?)";
    
        if ($stmt = $this->conn->prepare($sql)) {
            $stmt->bind_param("ss",  $nome, $nomeImagem);
            $executou = $stmt->execute();
            $stmt->close();
    
            return $executou;
        } else {
            return false;
        }
    }

    public function atualizarMarca($id, $nome, $nomeImagem) {
        $sql = "UPDATE marca SET nome = ?, imgMarca = ?  WHERE idMarca = ?";
        $stmt = $this->conn->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("ssi",$nome, $nomeImagem, $id);
            $executou = $stmt->execute();
            $stmt->close();
    
            return $executou;
        } else {
            return false;
        }
    }    

    public function closeConnection() {
        $this->conn->close();
    }
}
