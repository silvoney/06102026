let servicos = [

    {
        nome: "Corte de cabelo",
        preco: "R$ 35,00"
    },

    {
        nome: "Barba",
        preco: "R$ 25,00"
    },

    {
        nome: "Corte + Barba",
        preco: "R$ 55,00"
    }

];


function mostrarServicos() {

    const area = document.getElementById("servicos");

    area.innerHTML = "";


    servicos.forEach((servico, index) => {

        area.innerHTML += `

            <div class="servico">

                <div class="icone">
                    ◆
                </div>

                <div class="dados">

                    <h2>
                        ${servico.nome}
                    </h2>

                    <p>
                        ${servico.preco}
                    </p>

                </div>


                <div class="acoes">

                    <button
                        onclick="editarServico(${index})">

                        Editar

                    </button>


                    <button
                        class="excluir"
                        onclick="excluirServico(${index})">

                        Excluir

                    </button>

                </div>

            </div>

        `;

    });

}


function novoServico() {

    const nome = prompt("Nome do serviço:");

    if (!nome) {
        return;
    }


    const preco = prompt("Preço do serviço:");

    if (!preco) {
        return;
    }


    servicos.push({

        nome: nome,

        preco: "R$ " + preco

    });


    mostrarServicos();

}


function editarServico(index) {

    const novoNome = prompt(
        "Novo nome:",
        servicos[index].nome
    );


    if (novoNome) {

        servicos[index].nome = novoNome;

    }


    mostrarServicos();

}


function excluirServico(index) {

    if (confirm("Deseja excluir este serviço?")) {

        servicos.splice(index, 1);

        mostrarServicos();

    }

}


mostrarServicos();