<?php
class CarrosModel {
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

    public function getCarros() {
        $sql = "SELECT carro.id, carro.descricao, carro.ano, carro.preco, carro.imagem, 
               marca.nome AS nomeMarca, marca.nomeImagem
        FROM carro
        JOIN marca ON carro.idMarcaCarro = marca.idMarca";

        $result = $this->conn->query($sql);
        return $result;
    }

    public function excluirCarro($id) {
        $sql = "DELETE FROM carro WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
            return true;
        } else {
            return false;
        }
    }

    public function cadastrarCarro( $descricao, $preco ,$nomeImagem, $marca, $ano) {
        $sql = "INSERT INTO carro (descricao, preco,  imagem, idMarcaCarro, ano) VALUES (?, ?, ?, ?, ?)";
    
        if ($stmt = $this->conn->prepare($sql)) {
            $stmt->bind_param("sdsss",  $descricao, $preco, $nomeImagem, $marca, $ano);
            $executou = $stmt->execute();
            $stmt->close();
    
            return $executou;
        } else {
            return false;
        }
    }

    public function atualizarCarro($id, $titulo, $descricao, $preco) {
        $sql = "UPDATE carro SET descricao = ?, preco = ?  WHERE filmes_id = ?";
        $stmt = $this->conn->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("sdi",$descricao, $preco, $id);
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
