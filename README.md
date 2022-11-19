# **Trainee 2022.2**

# **Matflix**

## **Projeto Trainee, Code Jr, Grupo Matflix, 2022.2**

#### Desenvolvedores:

* [Marlon Ruffo Nascimento](https://github.com/marlonruffo).
* [Quezia Emanuelly da Silva Oliveira](https://github.com/queziayxz).
* [Nicolas Soares Martins](https://github.com/nicolassoam).
* [Lucas Coelho de Moraes](https://github.com/Chewb17).

#### Scrum Master:

* [Matheus Leal Costa](https://github.com/matheuslealcosta).





## Descrição do Projeto:

* Blog / Sistema de treinamento e capacitação dos Trainees da CodeJR, na gestão 2022.2;
* Possuirá Front-End em HTML, CSS, JavaScript, Bootstrap e Back-End em PHP (puro) no padrão MVC, com Banco de Dados MySQL;





## Git Tutorial

### Instalação

Pra instalar, basta acessar a página de [downloads](https://git-scm.com/downloads) e seguir as instruções\
Pra se conectar, utilize os seguinte comandos: <sub>(Substitua o nome e o e-mail para o seu)<sub/>
```
git config --global user.name "nomeDeUsuario"
```
```
git config --global user.email email@codejr.com.br
```



### Primeira Configuração

* Pelo terminal entre na pasta onde irá guardar o projeto: cd /caminho/para/a/pasta, depois inicialize o git na pasta com o comando: `git init`

* Outro jeito de fazer o citado acima: clique com o botão direito na pasta e selecione "Git Bash Here" para abrir o terminal do git

* Crie um clone do repositório: `git clone https://github.com/matheuslealcosta/Trainee-2022.2.git`

* Entre na pasta criada pelo comando clone: cd /caminho/para/a/pasta/nova

* Crie sua branch usando como o padrão o nome da feature que você está a desenvolver: `git checkout -b nome_da_feature`

* Após criada a branch você será redirecionado automaticamente a ela, neste espaço que você desenvolverá sua parte do projteto




### Rotina

* Adicione as alterações feitas: `git add .`

* Cheque em qual branch você está e quais alterações foram adicionadas: `git status`

* Dê um commit com uma mensagem especificando as alterações realizadas: `git commit -m "mensagem especificando o que foi feito"`

* Envie o commit feito para sua branch: `git push origin suabranch`



### Quando estiver tudo prontinho *(com autorização do SCRUM Master)*

* Volte para a main: `git checkout main`

* Atualize a main: `git pull`

* Volte para a sua branch: `git checkout nomedabranch`

* Mescle a main com a sua branch : `git merge main`

* Corrija os possíveis conflitos

* Confirme o merge (apenas quando solicitado pelo Scrum Master): `git push origin suabranch`

* Espera a confirmação do seu SCRUM

* Volte para a main: `git checkout main`

* Mescle a main com as alterações enviadas para sua branch (apenas quando solicitado pelo Scrum Master): `git merge suabranch`

* Confirme o merge (apenas quando solicitado pelo Scrum Master): `git push origin main`



### Comandos Básicos

* Para atualizar a main: `git pull`

* Para atualizar alguma branch: `git pull origin branch`

* Ver informações da branch: `git status`

* Para trocar de branch: `git checkout branch_desejada`

* Adicionar todas as alterações feitas: `git add .`

* Adicionar alteração específica: `git add arquivo-especifico`

* Para mesclar sua branch com a main (estando dentro da sua branch): `git merge main`

* Para confirmar o merge: `git push origin suabranch`

## Comandos necessários para o projeto em PHP

### Como executar o projeto inicial
\* É necessário ter o _PHP 8.0+_
1. Abra o Terminal na Pasta do Projeto;

2. Instale as dependências necessárias: `composer install`;

3. Atualize as dependências: `composer update`;

4. Rode o comando composer `dump-autoload`;

5. Crie um banco de dados `sql` com o nome de `sua preferencia e coloque o nome dele dentro do arquivo start_application que está dentro do diretorio bootstrap`;

### Comandos de rotina

1. `php codejr make:migration`: Comando responsavel por criar uma migration. Seus parametros são `1° o nome da tabela`, como por exemplo, "users", `2°: --m` , responsavel por criar uma Model junto a migration. A migration serve para auxiliar os desenvolvedores a manterem o controle das versões do banco de dados, já a model serve para representar o elemento de uma determinada tabela. Rode o comando composer `composer dump-autoload` para que o sistema identifique a nova migration criada.

2. `php codejr run_migrations`: Comando responsavel por rodar todas as migrations dentro da pasta database\migrations. Esse comando vai fazer com que suas migrations passem a existir no banco de dados.

3. `php codejr down_all_migrations`: Comando responsavel por desfazer todas as migrations dentro da pasta database\migrations. Esse comando vai fazer com que suas migrations passem a não mais existir no banco de dados.

4. `php codejr make:controller`: Comando responsavel por criar um controller. Seu parametro é o `nome do controller`, a padronização para nome de controllers é a mesma padronização para nome de classes, então como exemplo, um controller de usuario tera o nome de `UsuarioController`, `2°: --resource`, responsavel por criar um controller com todos os metodos basícos de um controller. O controller serve como intermediario entre o usuario e o banco de dados, podendo chamar metodos que irão tratar dados ou redirecionando o usuario. Rode o comando composer `dump-autoload` para que o sistema identifique o novo controller criado.

5. `php codejr serv`: Comando responsavel por iniciar o servidor do projeto. Seu parametro é --port, o qual torna possivel escolher a porta que o servidor irá executar

