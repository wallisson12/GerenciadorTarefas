<h1>TaskyFlow</h1>
<p>- Sistema completo de gerenciamento de tarefas, desenvolvido com foco em organização arquitetural, boas práticas e estrutura escalável para aplicações reais. A aplicação permite o gerenciamento de usuários e tarefas por meio de um backend estruturado em PHP 7 puro, seguindo o padrão MVC e com separação clara de responsabilidades utilizando clean architecture. </p>

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
<p>- O padrão de arquitetura MVC dividindo sua aplicação em três camadas.</p>
<p>- Clean Architecture, visando a separação de responsabilidades, criando o sistema mais testável e independente, com camadas bem definidas.</p>

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
  <li>Gerenciamento de Usuario (CRUD)</li>
  <li>Sistema de login e Atenticação</li>
  <li>Roteamento</li>
  <li>FeedBack visual de mensagens do sistema</li>
</ul>

<h2>Como executar o projeto</h2>
- docker-compose up -d


