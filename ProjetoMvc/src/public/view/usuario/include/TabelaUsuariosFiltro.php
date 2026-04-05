<?php 
/**
 * @var Model\Usuario\Usuario[] $aoUsuarios
 */
if (!empty($aoUsuarios)) { ?>
    <?php foreach ($aoUsuarios as $oUsuario) { ?>
        <tr>
            <td class="px-6 py-4 font-medium"><?php echo $oUsuario->getNomeUsuario(); ?></td>
            <td class="px-6 py-4"><?php echo $oUsuario->getTipoUsuario(); ?></td>
            <td class="px-6 py-4 text-center">
                <button class="btn-editar px-3 py-1 rounded bg-blue-600 hover:bg-blue-700 transition text-white text-xs" 
                        data-id="<?php echo $oUsuario->getId(); ?>">Editar</button>
            </td>
            <td class="px-6 py-4 text-center">
                <button class="btn-deletar px-2 py-1 rounded bg-red-600 hover:bg-red-700 transition text-white text-xs" 
                        data-id="<?php echo $oUsuario->getId(); ?>">Deletar</button>
            </td>
        </tr>
    <?php }
} ?>