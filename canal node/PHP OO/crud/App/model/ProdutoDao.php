<?php 

namespace App\model;

use PDO;

class ProdutoDao{
    public function create(Produto $p){
        $sql = "INSERT INTO produtos (nome, descricao) VALUES (?,?)";

        $stmt = Conexão::getCon()->prepare($sql);
        $stmt->bindValue(1, $p->getNome()); 
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->execute();
    }

    public function read(){
        $sql = "SELECT * FROM produtos";

        $stmt = Conexão::getCon()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } else{
            return [];
        }
    }

    public function update(Produto $p){
        $sql = "UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?";

        $stmt = Conexão::getCon()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->bindValue(3, $p->getId());
        $stmt->execute();

    }

    public function delete($id){
        $sql = "DELETE FROM produtos WHERE id = ?";

        $stmt = Conexão::getCon()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}