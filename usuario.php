<?php
class Usuario {
    private $nome;
    private $email;
    private $cpf;
    private $senha;
    private $ddd;
    private $telefone;
    private $cep;
    private $complemento;
    private $numero;

    // Método construtor da classe
    public function __construct($nome, $email, $cpf, $senha, $ddd, $telefone, $cep, $complemento, $numero) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->ddd = $ddd;
        $this->telefone = $telefone;
        $this->cep = $cep;
        $this->complemento = $complemento;
        $this->numero = $numero;
    }

    // Método para exibir um alerta e redirecionar
    private function exibirAlertaRedirecionar($mensagem, $redirecionarPara) {
        echo '<script>alert("' . $mensagem . '");</script>';
        echo '<script>window.location.href = "' . $redirecionarPara . '";</script>';
        exit;
    }

    // Função para exibir um alerta
    private function exibirAlerta($mensagem) {
        echo '<script>alert("' . $mensagem . '");</script>';
    }

    // Método para validar o nome do usuário
    private function validarNome($nome) {
        // Verificar se o nome está vazio
        if (empty($nome)) {
            $this->exibirAlerta("Nome não pode estar vazio.");
            return false;
        }

        // Verificar se o nome possui apenas letras e espaços
        if (!preg_match("/^[a-zA-Z ]*$/", $nome)) {
            $this->exibirAlerta("Nome deve conter apenas letras e espaços.");
            return false;
        }
        return true;
    }

    // Método para validar o email do usuário
    private function validarEmail($email) {
        // Verificar se o email está vazio
        if (empty($email)) {
            $this->exibirAlerta("Email não pode estar vazio.");
            return false;
        }

        // Verificar se o email possui um formato válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email inválido.";
            return false;
        }
        return true;
    }

    // Método para validar o CPF do usuário
    private function validarCPF($cpf) {
        // Verificar se o CPF está vazio
        if (empty($cpf)) {
            $this->exibirAlerta("CPF não pode estar vazio.");
            return false;
        }

        // Verificar se o CPF possui 11 dígitos
        if (strlen($cpf) != 11) {
            $this->exibirAlerta("CPF inválido.");
            return false;
        }

        // Verificar se o CPF é válido usando o algoritmo de validação
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
        if (strlen($cpf) != 11 ||
            $cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999') {
            $this->exibirAlerta("CPF inválido.");
            return false;
        } else {
            // Calcula os dígitos verificadores para verificar se o CPF é válido
            for ($i = 9; $i < 11; $i++) {
                for ($j = 0, $k = 0; $k < $i; $k++) {
                    $j += $cpf[$k] * (($i + 1) - $k);
                }
                $j = ((10 * $j) % 11) % 10;
                if ($cpf[$k] != $j) {
                    $this->exibirAlerta("CPF inválido.");
                    return false;
                }
            }
        }
        return true;
    }

    // Método para validar a senha do usuário
    private function validarSenha($senha) {
        // Verificar se a senha está vazia
        if (empty($senha)) {
            $this->exibirAlerta("Senha não pode estar vazia.");
            return false;
        }
        return true;
    }

    // Método para validar o DDD do usuário
    private function validarDDD($ddd) {
        // Verificar se o DDD está vazio
        if (empty($ddd)) {
            $this->exibirAlerta("DDD não pode estar vazio.");
            return false;
        }
        
        if (!filter_var($ddd, FILTER_VALIDATE_INT)) {
            $this->exibirAlerta("DDD inválido.");
            return;
        }
        

        // Verificar se o DDD possui 2 dígitos
        if (strlen($ddd) != 2) {
            $this->exibirAlerta("DDD inválido.");
            return false;
        }
        return true;
    }

    // Método para validar o telefone do usuário
    private function validarTelefone($telefone) {
        // Verificar se o telefone está vazio
        if (empty($telefone)) {
            $this->exibirAlerta("Telefone não pode estar vazio.");
            return false;
        }

        // Verificar se o CPF possui 11 dígitos
        if (strlen($telefone) != 9 && strlen($telefone) != 8) {
            $this->exibirAlerta("Telefone inválido.");
            return false;
        }
        return true;
    }

    // Método para validar o CEP do usuário
    private function validarCEP($cep) {
        // Verificar se o CEP está vazio
        if (empty($cep)) {
            $this->exibirAlerta("CEP não pode estar vazio.");
            return false;
        }

        // Verificar se o CPF possui 11 dígitos
        if (strlen($cep) != 8) {
            $this->exibirAlerta("CEP inválido.");
            return false;
        }
        return true;
    }

    // Método para validar o número do usuário
    private function validarNumero($numero) {
        // Verificar se o número está vazio
        if (empty($numero)) {
            $this->exibirAlerta("Número não pode estar vazio.");
            return false;
        }
        return true;
    }

    // Método para validar todos os atributos do usuário
    public function validarCampos() {
        $valido = true;

        if (!$this->validarNome($this->nome)) {
            $valido = false;
        }

        if (!$this->validarEmail($this->email)) {
            $valido = false;
        }

        if (!$this->validarCPF($this->cpf)) {
            $valido = false;
        }

        if (!$this->validarSenha($this->senha)) {
            $valido = false;
        }

        if (!$this->validarDDD($this->ddd)) {
            $valido = false;
        }

        if (!$this->validarTelefone($this->telefone)) {
            $valido = false;
        }

        if (!$this->validarCEP($this->cep)) {
            $valido = false;
        }

        if (!$this->validarNumero($this->numero)) {
            $valido = false;
        }

        return $valido;
    }

    public function cadastrar() {
        // Validar os campos antes de prosseguir
        if (!$this->validarCampos()) {
            return;
        }
    
        include('conexao.php');

        // Hash da senha usando o algoritmo padrão
        $senhaHash = password_hash($this->senha, PASSWORD_DEFAULT);
    
        $query = "INSERT INTO usuario (nome, email, cpf, senha, ddd, telefone, cep, complemento, numero) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssssssss", $this->nome, $this->email, $this->cpf, $senhaHash, $this->ddd, $this->telefone, $this->cep, $this->complemento, $this->numero);
        
        if ($stmt->execute()) {
            $this->exibirAlertaRedirecionar("Usuário cadastrado com sucesso!", 'telaLogin.php');
        } else {
            echo "Erro ao cadastrar usuário: " . $stmt->error;
        }
    
        $stmt->close();
        $conn->close();
    }
    
    // Método para atualizar os dados de um usuário
    public function atualizar($id) {
        // Validar os campos antes de prosseguir
        if (!$this->validarCampos()) {
            return;
        }

        include('conexao.php');

        // Hash da senha usando o algoritmo padrão
        $senhaHash = password_hash($this->senha, PASSWORD_DEFAULT);
    
        $query = "UPDATE usuario SET nome = ?, email = ?, cpf = ?, senha = ?, ddd = ?, telefone = ?, cep = ?, complemento = ?, numero = ? 
                  WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssssssssi", $this->nome, $this->email, $this->cpf, $senhaHash, $this->ddd, $this->telefone, $this->cep, $this->complemento, $this->numero, $id);

        if ($stmt->execute()) {

            // Armazena os dados nas variáveis de sessão
            $_SESSION['id'] = $id;
            $_SESSION['nome'] = $this->nome;
            $_SESSION['email'] = $this->email;
            $_SESSION['cpf'] = $this->cpf;
            $_SESSION['senha'] = $this->senha;
            $_SESSION['ddd'] = $this->ddd;
            $_SESSION['telefone'] = $this->telefone;
            $_SESSION['cep'] = $this->cep;
            $_SESSION['complemento'] = $this->complemento;
            $_SESSION['numero'] = $this->numero;

            $this->exibirAlertaRedirecionar("Usuário atualizado com sucesso!", 'telaLogado.php');

        } else {
            echo "Erro ao atualizar usuário: " . $stmt->error;
        }
    
        $stmt->close();
        $conn->close();
    }
    
    // Método para excluir um usuário
    public function excluir($id) {
        include('conexao.php');
    
        $query = "DELETE FROM usuario WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
    
        if ($stmt->execute()) {
            //session_start(); // Inicia a sessão

            // Armazena os dados nas variáveis de sessão
            $_SESSION['id'] = -1;
            $_SESSION['nome'] = "";
            $_SESSION['email'] = "";
            $_SESSION['cpf'] = "";
            $_SESSION['senha'] = "";
            $_SESSION['ddd'] = 0;
            $_SESSION['telefone'] = "";
            $_SESSION['cep'] = "";
            $_SESSION['complemento'] = "";
            $_SESSION['numero'] = 0;

            $this->exibirAlertaRedirecionar("Usuário excluído com sucesso!", 'index.html');

        } else {
            echo "Erro ao excluir usuário: " . $stmt->error;
        }
    
        $stmt->close();
        $conn->close();
    }

    //Método para validar o Login do usuário
    public function validaLogin() {
        if (!$this->validarCPF($this->cpf) || !$this->validarSenha($this->senha)) {
            return;
        }

        include('conexao.php');

        $usuario = $this->cpf;

        $sql = "SELECT * FROM usuario WHERE cpf = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $usuario);

        // Executa a consulta
        $stmt->execute();

        // Obtém o resultado da consulta
        $result = $stmt->get_result();

        // Verifica se a consulta retornou algum resultado
        if ($result->num_rows > 0) {
            // Recupera os dados do usuário
            $row = $result->fetch_assoc();

            // Obtém os dados do usuário
            $this->id = $row["id"];
            $this->nome = $row["nome"];
            $this->email = $row["email"];
            $this->cpf = $row["cpf"];
            $senhaCriptografada = $row['senha'];
            $this->ddd = $row['ddd'];
            $this->telefone = $row['telefone'];
            $this->cep = $row['cep'];
            $this->complemento = $row['complemento'];
            $this->numero = $row['numero'];

            if (password_verify($this->senha, $senhaCriptografada) && ($this->cpf == $usuario)) {

                session_start(); // Inicia a sessão

                // Armazena os dados nas variáveis de sessão
                $_SESSION['id'] = $this->id;
                $_SESSION['nome'] = $this->nome;
                $_SESSION['email'] = $this->email;
                $_SESSION['cpf'] = $this->cpf;
                $_SESSION['senha'] = $this->senha;
                $_SESSION['ddd'] = $this->ddd;
                $_SESSION['telefone'] = $this->telefone;
                $_SESSION['cep'] = $this->cep;
                $_SESSION['complemento'] = $this->complemento;
                $_SESSION['numero'] = $this->numero;

                // Redireciona para a página "telaLogado.php"
                $this->exibirAlertaRedirecionar("Login feito com sucesso!", 'telaLogado.php');
            } else {
                $this->exibirAlerta("Dados incorretos");
            }
        } else {
            $this->exibirAlerta("Nenhum usuário foi encontrado");
        }

        // Fecha a declaração e a conexão
        $stmt->close();
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>