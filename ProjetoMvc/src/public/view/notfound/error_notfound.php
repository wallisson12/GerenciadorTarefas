<?php
	$oViewHead = new View("src/public/view/layouts/head.php");
    $oViewHead->adicionarDado('sTitulo','Not Found');
	$oViewHead->render();

    $oView = new View("src/public/view/layouts/flash.php");
    $oView->render();
?>

<div>    
    <header class="bg-gray-800 shadow">
       <div class="flex items-center justify-between mx-auto max-w-7xl py-6 px-4">
        
        <legend class="text-white text-2xl font-bold">
            Error Not Found
             <hr class="w-60">
        </legend>

        <a href="/" class="py-2 px-3 text-white font-bold hover:text-gray-400 transition">
            Home
        </a>

    </div>
    </header>

    <div class="mt-52 flex text-center justify-center">
        <h3 class="text-gray-400 text-5xl font-bold">Página não encontrada</h3>
    </div>
</div>


<?php 
	$oViewFooter = new View("src/public/view/layouts/footer.php"); 
	$oViewFooter->render();
?>