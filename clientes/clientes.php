<?php

$clientes = [
    [
        "nome" => "Maria Oliveira",
        "telefone" => "(75) 99999-1111"
    ],
    [
        "nome" => "João Santos",
        "telefone" => "(75) 98888-2222"
    ],
    [
        "nome" => "Ana Souza",
        "telefone" => "(75) 97777-3333"
    ]
];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AgendaFácil - Clientes</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header class="topo">

    <div class="logo">
        AgendaFácil
    </div>

    <nav>

        <a class="ativo"
           href="http://localhost:8080/06102026/clientes/clientes.php">
            CLIENTES
        </a>

        <a href="http://127.0.0.1:5000">
            AGENDA
        </a>

        <a href="http://localhost:8080/06102026/servicos/">
            SERVIÇOS
        </a>

    </nav>

</header>


<main>

    <div class="cabecalho">

        <div>

            <span class="numero">
                01 • CLIENTES
            </span>

            <h1>
                Lista de clientes
            </h1>

            <p>
                Cadastre e gerencie os clientes do AgendaFácil.
            </p>

        </div>

        <button
            class="azul-btn"
            onclick="mostrarFormulario()">

            + Novo cliente

        </button>

    </div>


    <section class="card">

        <?php foreach ($clientes as $cliente): ?>

            <div class="cliente">

                <div>

                    <strong>
                        <?php echo $cliente["nome"]; ?>
                    </strong>

                    <span>
                        <?php echo $cliente["telefone"]; ?>
                    </span>

                </div>


                <div class="acoes">

                    <button
                        onclick="editarCliente('<?php echo $cliente['nome']; ?>')">

                        Editar

                    </button>


                    <button
                        class="excluir"
                        onclick="excluirCliente(this)">

                        Excluir

                    </button>

                </div>

            </div>

        <?php endforeach; ?>

    </section>


    <section
        id="formulario"
        class="formulario">

        <h2>
            Novo cliente
        </h2>

        <input
            id="nome"
            type="text"
            placeholder="Nome do cliente">

        <input
            id="telefone"
            type="text"
            placeholder="Telefone">

        <button
            class="azul-btn"
            onclick="cadastrarCliente()">

            Cadastrar

        </button>

    </section>

</main>


<script>

function mostrarFormulario() {

    document.getElementById("formulario").style.display = "block";

}


function cadastrarCliente() {

    let nome = document.getElementById("nome").value;

    let telefone = document.getElementById("telefone").value;

    if (nome === "" || telefone === "") {

        alert("Preencha todos os campos.");

        return;

    }

    alert("Cliente cadastrado com sucesso!");

    document.getElementById("nome").value = "";

    document.getElementById("telefone").value = "";

}


function editarCliente(nome) {

    alert("Editando o cliente: " + nome);

}


function excluirCliente(botao) {

    if (confirm("Deseja excluir este cliente?")) {

        botao.closest(".cliente").remove();

    }

}

</script>

</body>

</html>