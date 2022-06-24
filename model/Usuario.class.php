<?php

class Usuario
{

    public $nome;
    public $senha;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
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

        if ($sql->rowCount() > 0) {
            $dados = $sql->fetch(); // fetch cria um array que recebe todos os dados dessa tabela tb_usuarios
            $_SESSION['id_usuario'] = $dados['id'];
            $_SESSION['login'] = '1';
            $_SESSION['nomeUsuario'] = $dados['nome'];
            $_SESSION['ad'] = $dados['admin'];
            return true;
        } else {
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
        if ($_SESSION['login'] != '1') {
            header('Location: ../index.php');
        }
    }

    public function isAdmin()
    {
        if ($_SESSION['isAdmin'] == '1') {
            return true;
        } else {
            return false;
        }
    }

    public function listar()
    {
        global $pdo;

        $sql = "SELECT * FROM tb_usuarios";
        $sql = $pdo->prepare($sql);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        } else {
            return array();
        }
    }

    public function excluir($id)
    {
        global $pdo;
        
        if($id == $_SESSION['id_usuario']){
            header('Location: ../view/gerenciar_usuarios.php?erro=1');
        }else{
            $sql = "DELETE FROM tb_usuarios WHERE id = :id";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("id", $id);
            $sql->execute();
            header('Location: ../view/gerenciar_usuarios.php');
        }
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
        header('Location: ../view/gerenciar_usuarios.php');
    }

    public function criar($nome, $senha, $administrador)
    {
        global $pdo;

        //verificar se o usuario ja existe
        $sql = "SELECT * FROM tb_usuarios WHERE nome = :nome";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            echo "já existe um usuario com esse nome";
            header('Location: ../view/usuario_criar.php?msg=1');
        } else {
            $sql = "INSERT INTO tb_usuarios (nome, senha, admin) VALUES (:nome, :senha, :admin)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("nome", $nome);
            $sql->bindValue("senha", md5($senha));
            $sql->bindValue("admin", $administrador);
            $sql->execute();
            header('Location: ../view/gerenciar_usuarios.php');
        }
    }

    public function alterarSenha($id, $senhaAtual, $novaSenha)
    {
        global $pdo;

        // verificar se a senhaAtual esta correta
        $sql = "SELECT * FROM tb_usuarios WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("id", $id);
        $sql->execute();

        if ($sql->rowCount() > 0) { // se o usuario existe
            $dados = $sql->fetch(); // fetch cria um array que recebe todos os dados dessa tabela tb_usuarios
            if (md5($senhaAtual) == $dados['senha']) { // se a senhaAtual estiver correta
                $sql = "UPDATE tb_usuarios SET senha = :senha WHERE id = :id";
                $sql = $pdo->prepare($sql);
                $sql->bindValue("senha", md5($novaSenha));
                $sql->bindValue("id", $id);
                $sql->execute();
                header('Location: ../view/painel.php?msg=1');
            } else {
                header('Location: ../view/alterar_senha.php?erro=1');
            }
        } else {
            header('Location: ../view/alterar_senha.php?erro=2');
        }
    }
}
