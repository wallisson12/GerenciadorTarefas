<?php
$aFlash = Mensagens::exibirMensagem();
if (!$aFlash) return;

$classes = [
    'success' => 'bg-green-100 text-green-800 border-green-300',
    'error'   => 'bg-red-100 text-red-800 border-red-300',
    'warning' => 'bg-yellow-100 text-yellow-800 border-yellow-300',
];
?>

<div class="pt-10">
    <div class="border-l-4 p-4 mb-4 <?php echo $classes[$aFlash['tipo']] ?>">
        <?php echo htmlspecialchars($aFlash['mensagem']) ?>
    </div>
</div>