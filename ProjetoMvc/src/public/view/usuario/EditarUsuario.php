<?php
require_once "src/Model/Usuario/TipoUsuarioEnum.php"
/** @var Usuario $oUsuario*/
?>
    
<?php 
    $oViewHead = new View("src/public/view/layouts/head.php");
    $oViewHead->adicionarDado('sTitulo','Editar Usuário');
	$oViewHead->render();

   	$oViewNav = new View("src/public/view/layouts/nav.php");
	$oViewNav->render();
?>

<div class="mt-24">
    <header class="bg-gray-800 shadow">
        <div class=" mx-auto max-w-7xl py-6 px-4 ml-7">
            <legend class="text-white text-2xl font-bold tracking-tight">Editar</legend>
            <hr class="w-60">
        </div>
    </header>
    <form class="space-y-6" id="formularioEditarUsuario" action="/usuario/atualizar" method="post">
    
        <input type="hidden" name="id" value="<?php echo $oUsuario->getId();?>">

        <div class="ml-7 w-1/2">
            <label class="block text-sm/6 font-medium text-white">Nome</label>
            <div class="mt-2">
                <input type="text" name="username" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" value="<?php echo $oUsuario->getNomeUsuario()?>" required >
            </div>
        </div>

        <div>
            <label class="block mb-2.5 ml-7 text-sm text-white font-medium text-heading">Tipo Usuario</label>
            <div class="ml-7 mt-2 w-60">
                <select name="tipo_usuario" class="block rounded-md w-full px-3 py-2.5 bg-white/5 border-default-medium text-heading text-sm text-white focus:ring-brand focus:border-brand shadow-xs placeholder:text-body" require>

                    <option class="text-gray-900" value="<?php echo TipoUsuarioEnum::Comun ?>" 
                        <?php echo $oUsuario->getTipoUsuario() == TipoUsuarioEnum::Comun 
                                    ? "selected" 
                                    : "" ?>>Comun</option>

                    <option class="text-gray-900" value="<?php echo TipoUsuarioEnum::Administrador ?>" 
                        <?php echo $oUsuario->getTipoUsuario() == TipoUsuarioEnum::Administrador 
                                    ? "selected" 
                                    : "" ?>>Admin</option>
                </select>
            </div>
        </div>

        <div class="flex justify-center">
            <button name="atualizarUsuario" class="w-60 rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Atualizar</button>
        </div>
    </form>
</div>
 
<?php 
	$oViewFooter = new View("src/public/view/layouts/footer.php");
	$oViewFooter->render();
?>