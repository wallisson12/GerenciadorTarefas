<?php
  function routeNavegation(string $sValor){
		return $_SERVER['REQUEST_URI'] == $sValor;		
	}
  
  $sClassCurrentPage = "bg-gray-700";
?>
<?php if(!is_null(SessionManager::obter("usuario"))) { ?>
  <nav class="bg-gray-800 fixed w-full top-0 start-0 border-b border-default">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <div class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="/src/public/imagens/LogoGerenciadorTarefas.png" class="h-10 w-auto" alt="Logo">
          <span class="self-center text-gray-200 text-xl text-heading font-bold">TaskyFlow</span>
      </div>
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <form class="mb-0" action="/login/logout" method="post">
            <button type="submit" id="logout_usuario" name="logoutUsuario" class="text-white bg-indigo-600 hover:bg-indigo-500 font-bold rounded-md text-sm px-8 py-2">Sair</button>
          </form>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-default rounded-base bg-neutral-secondary-soft md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-neutral-primary">
          <li>
            <a href="/home/index" class="<?php echo routeNavegation('/home/index') ? $sClassCurrentPage : '' ?> hover:bg-gray-900 block py-2 px-3 text-white text-heading rounded transition-colors duration-200 md:border-0 md:hover:text-fg-brand">Home</a>
          </li>
          <li>
            <a href="/usuario/indexListar" class="<?php echo routeNavegation('/usuario/indexListar') ? $sClassCurrentPage : '' ?> hover:bg-gray-900 block py-2 px-3 text-white text-heading rounded transition-colors duration-200 md:border-0 md:hover:text-fg-brand">Usuários</a>
          </li>
          <li>
            <a href="/usuario/indexCadastrar" class="<?php echo routeNavegation('/usuario/indexCadastrar') ? $sClassCurrentPage : '' ?> hover:bg-gray-900 block py-2 px-3 text-white text-heading rounded transition-colors duration-200 md:border-0 md:hover:text-fg-brand">Cadastrar Usuário</a>
          </li>
          <li>
            <a href="#" class="hover:bg-gray-900 block py-2 px-3 text-white text-heading rounded transition-colors duration-200 md:border-0 md:hover:text-fg-brand">Meu Perfil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php } ?>