<?php 
require_once "src/Model/Usuario/TipoUsuarioEnum.php";
?>
<?php 
    $oViewHead = new View("src/public/view/layouts/head.php");
    $oViewHead->adicionarDado('sTitulo','Cadastro Usuário');
	$oViewHead->render();

   	$oViewNav = new View("src/public/view/layouts/nav.php");
	$oViewNav->render();
?>
<div class="mt-24">
    <header class="bg-gray-800 shadow mb-5">
        <div class=" mx-auto max-w-7xl py-6 px-4 ml-7">
            <legend class="text-white text-2xl font-bold tracking-tight">Cadastrar Usuario</legend>
            <hr class="w-60">
        </div>
    </header>
    <form class="space-y-6" id="formularioCadastroUsuario" action="/usuario/cadastar" method="post">

        <div class="ml-7 w-1/2">
            <label for="username" class="block text-sm/6 font-medium text-white">Nome</label>
            <div class="mt-2">
                <input id="username" type="text" name="username" class="w-full block rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" required />
            </div>
        </div>

        <div>
            <label for="password" class="ml-7 block text-sm/6 font-medium text-white">Senha</label>
            <div class="mt-2 ml-7 w-1/2 relative">
                <input id="password" type="password" name="senha" autocomplete="current-password" class="block w-full rounded-md bg-white/5 px-3 py-1.5 pr-10 text-base text-white outline outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm" required/>
                <button id="btn_exibir_senha" type="button" class="absolute inset-y-0 right-3 flex items-center text-gray-400 hover:text-gray-200">
                    <img id="icon_eye" src="/src/public/view/login/assets/image/eye-slash.svg" class="h-6 justify-left" />
                </button>
            </div>
        </div>
        

        <div>
            <label for="tipo_usuario" class="ml-7 block mb-2.5 text-sm text-white font-medium text-heading">Tipo Usuario</label>
            <div class="w-60 mt-2 ml-7">
                <select id="tipo_usuario" name="tipo_usuario" class="w-full block rounded-md px-3 py-2.5 bg-white/5 border-default-medium text-heading text-sm text-white focus:ring-brand focus:border-brand shadow-xs placeholder:text-body" require>
                    <option class="text-gray-900" value="<?php echo TipoUsuarioEnum::Comun; ?>">Comun</option>
                    <option class="text-gray-900" value="<?php echo TipoUsuarioEnum::Administrador; ?>">Admin</option>
                </select>
            </div>
        </div>
        
        <div class="flex justify-center">
            <button type="submit" name="cadastrarUsuario" class="w-60 rounded-md bg-indigo-500 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Cadastrar</button>
        </div>
    </form>
</div>

<?php 
	$oViewFooter = new View("src/public/view/layouts/footer.php");
    $aJsScripts = ['/src/public/view/login/js/toggleSenha.js']; 
    $oViewFooter->adicionarDado('aJsScripts',$aJsScripts);
	$oViewFooter->render();
?>