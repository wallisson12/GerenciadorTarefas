<h1>Gerenciador de Tarefa</h1>
- Aplicação backend desenvolvida em PHP 7 puro seguindo o padrão MVC, com o objetivo de desenvolver uma aplicação em arquitetura de sistemas legados, organização de código, boas práticas e ambiente de execução containerizado.

<h2>Ferramentas Utilizadas</h2>
<ul>
<li>PHP</li>
<li>Apache</li>
<li>JS</li>
<li>Jquery</li>
<li>SQL</li>
<li>Mysql</li>
<li>TailWind</li>
<li>Docker</li>
<li>Composer</li>
</ul>

<h2>Arquitetura</h2>
- O padrão de arquitetura MVC dividindo sua aplicação em três camadas.

<ul>
  <li><b>Model:</b> Camada responsável pelas regras de negócio.</li>
  
  <li><b>View:</b> Camada responsável pela apresentação.</li>
  
  <li><b>Controller:</b> Camada responsável pelo fluxo da aplicação e regras de controle, faz a mediação entre o Model e a View, processando as requisições.</li>
  
  <li><b>Service:</b> Camada responável por centralizar a regra de negócio, validações, cálculos etc.</li>

  <li><b>DAO:</b> Camada responsável por centralizar a lógica de acesso aos dados no banco de dados</li>

  <li><b>Middleware:</b> Camada intermediária entre a rota e o controller</li>
  
</ul>

<h2>Funcionalidades</h2>
<ul>
  <li>Gerenciamento de Usuario</li>
  <li>Sistema de login</li>
  <li>Roteador</li>
  <li>FeedBack visual de mensagens do sistema</li>
</ul>

<h2>Como executar o projeto</h2>
- docker-compose up -d


