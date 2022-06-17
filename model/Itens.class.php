<?php 

class Itens {

    public function listar() {
        global $pdo;
        
        $sql = "SELECT * FROM tb_itens";
        $sql = $pdo->prepare($sql);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            $itens = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $itens;
        }else{
            return array();
        }
    }

    public function excluir($id) {
        global $pdo;

        $sql = "DELETE FROM tb_itens WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("id", $id);
        $sql->execute();
    }

    public function editar($id, $nome, $caminho_imagem, $link) {
        global $pdo;

        $sql = "UPDATE tb_itens SET nome = :nome, caminho_imagem = :caminho_imagem, link = :link WHERE id = $id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("caminho_imagem", $caminho_imagem);
        $sql->bindValue("link", $link);
        $sql->execute();
    }

    public function criar($nome, $caminho_imagem, $link)
    {
        global $pdo;
        
        $sql = "INSERT INTO tb_itens(nome, caminho_imagem, link) VALUES(:nome, :caminho_imagem, :link)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("caminho_imagem", $caminho_imagem);
        $sql->bindValue("link", $link);
        $sql->execute();
    }



}
