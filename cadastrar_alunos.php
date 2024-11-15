<?php
    include "conexao.php"; //  Reaproveitamento de código

    if(isset($_POST['nome'])) {
        //entrada
        $nome = trim($_POST['nome']); // É fundamental
        $telefone = trim($_POST['telefone']);
        $email = trim($_POST['email']);

        //processamento - inserindo dados no BD
        $sql = "insert into aluno(nome,telefone,email) values ('$nome', '$telefone', '$email')";

        $cadastrar = mysqli_query($conexao, $sql);

        //saida feedback ao usuário
        if($cadastrar) {
            echo "
            <script>
                alert('Aluno Cadastrado com Sucesso!');
                window.location = 'listar_alunos.php';
            </script>
            ";
        } else {
            echo "
                <p>Banco de dados Temporariamente fora do ar. Tente novamente mais tarde. Entre em contato com o administração do site para reportar o problema. </p>

                <p> Clique <a href='alunos.php' >aqui </a> para retornar ao formulário de cadastro </p>
            ";
        }

    } else { // Tratamento de erro e redirecionamento
        echo "
        <p> Esta é uma página de tratamento de dados </p>
        <p> Clique <a href='alunos.php' > aqui </a> para acessar o formulário de cadastro </p>
        ";
    }

?>