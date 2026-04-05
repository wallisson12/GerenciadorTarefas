document.addEventListener("DOMContentLoaded",()=>{
    realizarRequisicaoAjaxListarUsuarios();
});

function realizarRequisicaoAjaxListarUsuarios(){
    $.ajax({
        url: "/usuario/listarAjax",
        type: "post",
        dataType: "html",
        success: (html) => {
            $("#tabela_usuarios tbody").html(html);
            anexarEventosAcoesBotoes();
        },
        error: () => {
           $.toast("Ocorreu um erro ao tentar listar os usuários","error");
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