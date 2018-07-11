<!DOCTYPE html>
<html>
	<meta charset="utf-8"/>
	<body>
		<h2>Projeto - Curso (v.0.1)</h2>
		<h5>Neste projeto foi usado os seguintes</h5>
		<ol>
			<li><a href="https://laravel.com/" target="_blank">Laravel</a></li>
			<p>Framework MVC</p>
			<li><a href="https://github.com/vitorec/laravel-5.5-pt-br-locale" target="_blank">vitorec/laravel-5.5-pt-br-locale</a></li>
			<p>Esse arquivo vai servir para traduzir as telas de autentificação que o próprio laravel cria</p>
			<li><a href="https://mailtrap.io/" target="_blank">Mailtrap</a></li>
			<p>Depois de configurado e inserido no .ENV, permite testar o envio de e-mail (Ex: recuperação de senha)</p>
			<li><a href="https://github.com/dompdf/dompdf" target="_blank">DomPDF</a></li>
			<p>Permite o desenvolvimento de PDF's a partir de uma tela HTML</p>
			<li><a href="https://viacep.com.br/" target="_blank">ViaCep</a></li>
			<p>Webservice para consulta de CEP (Códigos de Endereçamento Postal)</p>
			<li><a href="https://getbootstrap.com/" target="_blank">Bootstrap</a></li>
			<p>Visual da aplicação e da impressão de PDF</p>
		</ol>
		<h5>Outras ferramentas utilizadas</h5>
		<ol>
			<li><a href="https://docs.docker.com/install/linux/docker-ce/ubuntu/" target="_blank">Docker</a></li>
			<p>Facilita a criação e administração de ambientes isolados. Dentro do Docker nós temos recursos isolados que utilizam bibliotecas de kernel em comum (entre host e container).</p>
			<li><a href="http://laradock.io/" target="_blank">Laradock</a></li>
			<p>Laradock é um importante e reconhecido projeto criado pela comunidade do PHP com configurações prontas para trabalhar com Laravel, utilizando o Docker.</p>
			<li><a href="https://www.sublimetext.com/3" target="_blank">Sublime 3</a></li>
			<p>Um editor de texto e código-fonte multiplataforma, escrito em linguagem C++</p>
		</ol>
		<h5>Desenvolvimento</h5>
		<p>Está aplicação foi feita utilizando todos os ferramentas que o framework Laravel disponibiliza, fora as citatas acima</p>
		<p>Os itens abaixo foram feitos utilizando o Artisan</p>
		<ul>
			<li>php artisan make:auth</li>
			<li>php artisan make:model Aluno -m</li>
			<li>php artisan migrate</li>
			<li>php artisan make:factory AlunoFactory</li>
			<li>php artisan make:seeder UsersTableSeeder</li>
			<li>php artisan make:seeder AlunosTableSeeder</li>
			<li>php artisan migrate:refresh --seed</li>
			<li>php artisan make:request AlunoRequest</li>
			<li>php artisan storage:link</li>
			<li>php artisan make:controller AlunoController --resource</li>
		</ul>
		<p>Os itens abaixo foram feitos e preenchidos na mão</p>
		<ul>
			<li>routes</li>
			<li>factories</li>
			<li>fakers</li>
			<li>Acessor e Mutator (dentro da model Aluno)</li>
			<li>Prefixo do banco alterado para 'cur_' (config/database.php)</li>
			<li>Inserção do usuário e senha do mailtrap no .ENV</li>
		</ul>
		<h5>Projeto foi feito nas seguintes etapas</h5>
		<ul>
			<li>Autenticação</li>
			<li>Criação das tabelas</li>
			<li>Popular tabela com usuário fake e criar um usuário adm</li>
			<li>Criação de request para regras</li>
			<li>Criação de controller para o CRUD</li>
			<li>Criação das rotas</li>
			<li>Impressão de pdf</li>
		</ul>
		<br/>
		<br/>
		<br/>
		<h4>Atenciosamente,</h4>
		<h3>Diego Feitosa de Oliveira</h3>
	</body>
</html>