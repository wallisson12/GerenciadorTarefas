<?php 
    $oViewHead = new View("src/public/view/layouts/head.php");
    $oViewHead->adicionarDado('sTitulo','Lista Usuários');
	$oViewHead->render();

   	$oViewNav = new View("src/public/view/layouts/nav.php");
	$oViewNav->render();
?>
<div class=" mt-20 p-6">
    <header class="bg-gray-800 shadow mb-5">
        <div class=" mx-auto max-w-7xl py-6 px-4 ml-7">
            <legend class="text-white text-2xl font-bold tracking-tight">Lista Usuários</legend>
            <hr class="w-60">
        </div>
    </header>

    <div class="overflow-x-auto rounded-lg shadow-lg">
        <table id="tabela_usuarios" class="min-w-full bg-gray-800 text-gray-200 text-sm">
        <thead class="bg-gray-900 text-gray-300 uppercase text-xs">
                <tr>
                    <th class="px-6 py-3 text-left">Usuário</th>
                    <th class="px-6 py-3 text-left">Tipo</th>
                    <th class="px-6 py-3 text-center">Editar</th>
                    <th class="px-6 py-3 text-center">Excluir</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-700">
            </tbody>
        </table>
    </div>
</div>

<?php 
    $oViewFooter = new View("src/public/view/layouts/footer.php");
    $aJsScripts = ['/src/public/view/usuario/js/Usuario.js']; 
    $oViewFooter->adicionarDado('aJsScripts',$aJsScripts);
    $oViewFooter->render();
?>