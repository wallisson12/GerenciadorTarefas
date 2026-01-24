<?php 
	$oViewHead = new View("src/public/view/layouts/head.php");
	$oViewHead->adicionarDado('sTitulo','Home');
	$oViewHead->render();

	$oViewNav = new View("src/public/view/layouts/nav.php");
	$oViewNav->render();
?>

<div class="mt-20">
	<header class="bg-gray-800 shadow">
		<div class=" mx-auto max-w-7xl py-6 px-4 ml-7">
			<legend class="text-white text-2xl font-bold tracking-tight">Home</legend>
			<hr class="w-60">
		</div>
	</header>
	<ul class="mt-5">
		<li><a class="text-blue-700 underline" href="/usuario/indexCadastrar">Cadastro Usuario</a></li>
		<li><a class="text-blue-700 underline" href="/usuario/indexListar">Lista Usuarios</a></li>
	</ul>
</div>

<?php 
	$oViewFooter = new View("src/public/view/layouts/footer.php"); 
	$oViewFooter->render();
?>
