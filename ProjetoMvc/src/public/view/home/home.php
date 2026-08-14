<?php 
	$oViewHead = new View("src/public/view/layouts/head.php");
	$oViewHead->adicionarDado('sTitulo','Home');
	$oViewHead->render();

	$oViewNav = new View("src/public/view/layouts/nav.php");
	$oViewNav->render();
?>

<div class="mt-24">
	<header class="bg-gray-800 shadow">
		<div class=" mx-auto max-w-7xl py-6 px-4 ml-7">
			<legend class="text-white text-2xl font-bold tracking-tight">Dashboard</legend>
			<hr class="w-60">
		</div>
	</header>
</div>

<!-- Dashboard do TaskFlow, é aqui que vai ter os cards e posts -->
<div class="mt-10 ml-7">
	<button type="button" class="inline-flex items-center gap-3 bg-black/20 hover:bg-black/50 text-white font-bold py-4 px-16 rounded-full">
	  <span class="text-4xl leading-none">+</span>
	  <span>Adicionar Card</span>
	</button>
</div>

<?php 
	$oViewFooter = new View("src/public/view/layouts/footer.php"); 
	$oViewFooter->render();
?>
