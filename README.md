# projeto_integracao

Projeto, onde estou realizando a matéria destinado do Projeto Integração I ADS.


# Criar as funções para definição das estruturas de dados, bem como algoritmos de cadastro e consulta
# dos produtos, movimentações de estoque e relatórios.

•Definição de Estruturas de Dados: Estruturas bem definidas para produtos, categorias e
movimentações.

•Algoritmos de Cadastro e Consulta: Funções para cadastrar e consultar dados no sistema.

•Algoritmos de Movimentação: Funções para registrar entradas e saídas de produtos e
atualizar o estoque.

•Relatórios e Consultas: Funções para gerar relatórios e consultar o histórico de
movimentações.

Como uma parte de extensão do meu trabalho, vou específicar o que foi realizado e o que foi pensado.

Como a problematização pede uma criação de um sistema para uma empresa que está em um crescimento relativamente auto, é necessário pensar na agilização das demandas, para isso é certo pensar em ferramentas e/ou Frameworks que podem ajudar a realizar tal tarefa com mais precisão e mais rápidez.

Existem vários frameworks que podem fazer isso, eu achei um Framework que eu mais me familiarizei, o Laravel.
O Laravel possuí um entendimento muito fácil por conta da sua completa documentação.

Para realizar essa atividade não instalei o Laravel, mas inseri arquivos em pastas que são do Laravel, assim ficando fácil entendimento.

## Pasta 'controllers':
Está pasta dentro do Laravel ela é a responsável por realizar as funções destinadas, como por exemplo em um formulário simples de requisição dos produtos, o arquivo GerenciamentoController.php na função consultaProdutos realiza a busca na model referente a tabela do banco de dados do sistema, trazendo os produtos cadastrados.

## Pasta 'models':
A pasta models, é responsável por armazenar arquivos que fazer referencia ao Banco de dados, cada arquivo model é referente a uma tabela expecífica, e é claro que o Laravel pode otimizar isso para realizações de requisições usando apenas uma model para outras tabelas também.

Deste modo a organização do Laravel e sua funcionalidades ajudam muito na criação de um sistema Web, podendo ser responsivo e ser usado em mobile também.

O Laravel ajudaria muito no processo de criação deste Sistema.
E é claro que o Laravel faz a conexão com o Banco e tambpém cria as Rotas para navegação e requisição na Web.
Mas é claro que é um assunto mais aprofundado, aqui está a documentação mais recente no momento do Laravel https://laravel.com/docs/12.x.
