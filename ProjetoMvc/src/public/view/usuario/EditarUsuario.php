<?php
require_once "src/Model/Usuario/TipoUsuarioEnum.php"
/** @var Usuario $oUsuario*/
?>
<html lang="en" class="h-full bg-gray-700">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <script src="http://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
    <div class="mt-20">
    
        <form class="space-y-6" id="formularioEditarUsuario" action="/usuario/atualizar" method="post">
              
            <div class="text-white text-2xl ml-7">
                <legend>Editar</legend>
                <hr class="w-60">
            </div>
        
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>