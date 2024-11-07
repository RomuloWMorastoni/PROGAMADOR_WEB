function loadUsuarios(){
    const method = "GET";
    const rota = "usuarios";
    callApi(method, rota, function (data) {
        carregaTabelaConsulta(data);
    });
}

function carregaTabelaConsulta(aListaDados) {
    // Se não for array, coloca como array
    if (!Array.isArray(aListaDados)) {
        aListaDados = new Array(aListaDados);
    }

    const tabela = document.querySelector("#consulta-usuario");
    tabela.innerHTML = "";
    aListaDados.forEach(function (data, key) {
        const codigo    = data.id;
        const nome      = data.nome;
        const email     = data.email;
        const senha     = data.senha;
        
        const acoes = getAcoes(codigo);

        tabela.innerHTML +=
            `
        <tr>
            <td class="text-center">` +
            codigo +
            `</td>
            <td style="text-align: left;">` +
            nome +
            `</td>
            <td class="text-center" style="text-align: right;">` +
            email +
            `</td>
            <td class="text-center">` +
            senha +
            `</td>           
            <td>` +
            acoes +
            `</td>
        </tr>
        `;
    });
}

function getAcoes(codigo) {
    return (
        `<div class="acoes text-center">
                <button class="btn btn-warning" onclick="alterarUsuario(` +
        codigo +
        `)">Alterar</button>
                <button  class="btn btn-danger" onclick="excluirUsuario(` +
        codigo +
        `)">Excluir</button>
        </div>
    `
    );
}