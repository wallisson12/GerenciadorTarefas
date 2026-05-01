
<h1>TaskyFlow</h1>
<p>- Sistema completo de gerenciamento de tarefas, desenvolvido com foco em organização arquitetural, boas práticas e estrutura escalável para aplicações reais. A aplicação permite o gerenciamento de usuários e tarefas por meio de um backend estruturado em PHP 7 puro, JavaScript, Jquery, Ajax e Tailwind CSS, seguindo o padrão MVC e com separação clara de responsabilidades, utilizando clean architecture. </p>

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

<h2>Telas</h2>
<img width="1297" height="633" alt="Captura de tela de 2026-04-30 23-50-38" src="https://github.com/user-attachments/assets/f6acff1b-4e0a-4ff0-ac77-3e69ff0946ba" />
<img width="1293" height="633" alt="Captura de tela de 2026-04-30 23-52-20" src="https://github.com/user-attachments/assets/d6acbb2b-fd1e-4b36-8b2f-8fd65affc186" />
<img width="1293" height="633" alt="Captura de tela de 2026-04-30 23-51-55" src="https://github.com/user-attachments/assets/7157a5a1-d0a5-4b69-8a84-24456b635d3b" />


