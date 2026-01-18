document.addEventListener("DOMContentLoaded",()=>{
    realizarRequisicaoAjaxListarUsuarios();
});

function realizarRequisicaoAjaxListarUsuarios(){
    $.ajax({
        url: "/usuario/listarAjax",
        type: "GET",
        dataType: "json",
        success: (usuarios) => {
            let html = '';
            usuarios.forEach(usuario => {
                html += `
                    <tr>
                        <td class="px-6 py-4 font-medium">${usuario.username}</td>
                        
                        <td class="px-6 py-4">${usuario.tipo_usuario}</td>

                         <td class="px-6 py-4 text-center">
                            <button class="btn-editar px-3 py-1 rounded bg-blue-600 hover:bg-blue-700 transition text-white text-xs" data-id="${usuario.id}">Editar</button>
                        </td>

                        <td class = "px-6 py-4 text-center">
                            <button class="btn-deletar px-3 py-1 rounded bg-red-600 hover:bg-red-700 transition text-white text-xs" data-id="${usuario.id}">Deletar</button>
                        </td>
                    </tr>
                `;
            });
            $("#tabela_usuarios tbody").html(html);
            anexarEventosAcoesBotoes();
        },
        error: () =>{
            console.error("Ocorreu um erro ao tentar listar os filiados")
        }
    });
}

/**
 * Anexa os eventos para os botoes de acoes da tabela de usuarios
 */
function anexarEventosAcoesBotoes() {
    adicionarEventoEditar();
    adicionarEventoApagar();
}

/**
 * Adiciona um evento ao editar um usuario
 */
function adicionarEventoEditar(){
    $("#tabela_usuarios").on("click",".btn-editar",function(){
        let iIdUsuario = $(this).data('id');
        window.location.href = `/usuario/editar?id=${iIdUsuario}`;
    });
}

/**
 * Adiciona um evento ao apagar um usuario 
 */
function adicionarEventoApagar() {
    $("#tabela_usuarios").on("click", ".btn-deletar", function(){
        let iIdUsuario = $(this).data('id');
        window.location.href = `/usuario/deletar?id=${iIdUsuario}`;
    });
}