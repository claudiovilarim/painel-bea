<?php

class Usuario {

    public string $nome;
    public string $senha;

    public function __construct() {
        
    }

    public function getNome() {
        return $this->nome;
    }


    public function login($nome, $senha)
    {
        global $pdo;

        $sql = "SELECT * FROM tb_usuarios WHERE nome = :nome AND senha = :senha";
        
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("senha", md5($senha));
        // $sql->bindValue("senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch(); // fetch cria um array que recebe todos os dados dessa tabela tb_usuarios
            $_SESSION['id_usuario'] = $dados['id'];
            $_SESSION['login'] = '1';
            $_SESSION['nomeUsuario'] = $dados['nome'];
            $_SESSION['ad'] = $dados['admin'];
            return true;
        }else{
            return false;
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: ../index.php');
    }

    public function verificarLogin()
    {
        if($_SESSION['login'] != '1'){
            header('Location: ../index.php');
        }
    }

    public function isAdmin()
    {
        if($_SESSION['isAdmin'] == '1'){
            return true;
        }else{
            return false;
        }
    }

    public function listar()
    {
        global $pdo;

        $sql = "SELECT * FROM tb_usuarios";
        $sql = $pdo->prepare($sql);
        $sql->execute();

        if($sql->rowCount() > 0){
            $usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        }else{
            return array();
        }
    }

    public function excluir($id)
    {
        global $pdo;

        $sql = "DELETE FROM tb_usuarios WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("id", $id);
        $sql->execute();
    }

    public function editar($id, $nome, $senha, $isAdmin)
    {
        global $pdo;

        $sql = "UPDATE tb_usuarios SET nome = :nome, senha = :senha, admin = :isAdmin WHERE id = $id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome); 
        $sql->bindValue("senha", md5($senha));
        $sql->bindValue("isAdmin", $isAdmin);
        $sql->execute();
    }

    public function criar($nome, $senha, $administrador)
    {
        global $pdo;
        
        $sql = "INSERT INTO tb_usuarios (nome, senha, admin) VALUES (:nome, :senha, :admin)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("senha", md5($senha));
        $sql->bindValue("admin", $administrador);
        $sql->execute();
    }

}
