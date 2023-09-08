# Engenharia de software-2023.2 | Universidade Federal do Tocantins - Palmas, 2023
# Maze-Bank

## Introdução

O projeto desenvolvido na disciplina Engenharia de Software do semestre 2023.2 é dividido em etapas. Primeiramente, os integrantes descrevem os casos expandidos de uso e user stories dos requisitos funcionais do sistema. Foi combinado a utilização da plataforma GitHub para gerenciar e controlar as versões do projeto. A turma foi dividida em 5 grupos, onde cada grupo possui um líder que deve representar e reportar toda a produtividade de seu respectivo grupo.

### Definindo os requisitos 

---

#### Iteração 1

- [ ] RF-1.1 Efetuar Cadastro e Login. [Caio santos Silva](https://github.com/CaioSantdev) Revisador por @Vitoriamrfontana

- [ ] RF-1.2 Painel do Cliente. [Vitoria Maria Reias Fontana](https://github.com/Vitoriamrfontana) Revisado por @Carecovisk

- [ ] RF-1.3 Realizar Transferências. [João Victor Ribeiro Santos](https://github.com/Carecovisk) Revisado por @LuizCPorto

- [ ] RF-1.4  Realizar Pagamentos [Luiz Carlos Porto do Carmo](https://github.com/LuizCPorto) Revisado por @Ynguimaraes

- [ ] RF-1.5 Consultar Saldo. [Yngrid Guimarães](https://github.com/Ynguimaraes) Revisado por @CaioSantdev

# Casos de uso e User stories

## *RF-1.1 - Registro e Login*

#### Autor: @CaioSantdev – Caio Santos Silva.

---

### Revisor: @Vitoriamrfortana – Vitoria Fortana.

| Item            | Descrição                                                                                                                                                      |
| --------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Caso de uso     |  RF-1.1 - Login e cadastro de usuário.                                                                                                                                |
| Resumo          | A primeiro momento, o cliente fará o cadastro, inserindo seus dados, após isso poderá efetuar o login e gerenciar sua conta, com depósitos e transferências.   |
| Ator principal  | Ator utilizador da plataforma e novos usuários.                                                                                                                |
| Ator Secundário | O banco.                                                                                                                |
| Pré-condição    | Para acessar a plataforma, é necessário conexão com a internet.                                                                                                |
| Pós-condição    | Para fazer o login o usuário precisa criar uma conta.                                                                                                          |

#### Fluxo principal

| Passos  | Descrição                                                                                                                                              |
| ------- | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| Passo 1 | O ator deseja utilizar o banco Maze Bank ;                                                                                                          |
| Passo 2 | A primeiro momento ele não tem uma conta então clica em Registre-se;                                                                                   |
| Passo 3 | Com isso é exibido um formulário para preencher seus dados;                                                                                            |
| Passo 4 | Ao preencher os campos necessários o cliente clica em “Criar conta”;                                                                                   |
| Passo 5 | Em seguida é redirecionado a página de login;                                                                                                          |
| Passo 6 | Entra em sua conta e pode começar a gerenciar seu dinheiro;                                                                                            |

#### Campos do formulário.

| Campo    | Obrigatório? | Editável? | Formato      |
| ------------ | ----------------- | ------------ | --------------- |
| Usuario  | Sim          | Sim       | Texto        |
| Email       | Sim          | Sim       | Texto        |
| CPF        | Sim          | Sim       | Alfanumérico        |
| Senha     | Sim          | Sim       | Texto        |
| Senha     | Sim          | Sim       | Texto        |


#### Opções de usuário

| Opção       | Descrição                 | Atalho |
| ----------- | ------------------------- | ------ |
| Criar conta | Confirmar Dados inseridos |

#### Relatório de usuário
| Campo                    | Descrição                                                             | Formato |
| ------------------------ | --------------------------------------------------------------------- | ------- |
| Conta Criada com sucesso | Isso confirma e garante todo êxito na operação de cadastro do usuário | Texto |

#### Fluxo alternativo

| Passos    | Descrição                                                                                                      |
| --------- | -------------------------------------------------------------------------------------------------------------- |
| Passo 1.1 | O cliente já tem uma conta.                                                                                       |
| Passo 1.2 | O cliente já entra na tela de login que é a padrão . |
| Passo 2.1 | Cliente informa seu usuário e senha para efetuar o login|
| Passo 2.2 | Caso os dados estiverem errados, é exibido uma mensagem e pede para inserir os dados novamente.|
| Passo 3.1 | Os dados do cliente confirmam e ele é enviado para Home do banco.|


# User story

 |User Story
 |-------------------------------------
 | Como um usuário novo do banco gostaria de criar uma nova conta com meus dados para que seja possivel gerenciar minhas contas e dinheiro.

## Protótipo


## **RF-1.4 Realizar Pagamentos**

#### Autor: @LuizCPorto - Luiz Carlos Porto do Carmo.

---

### Revisor: @Ynguimaraes - Yngrid Guimarães

| Item            | Descrição                                                                                                                                                                                               |
| --------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Caso de uso     | Realizar pagamentos.                                                                                                                                                                                    |
| Resumo          | Realizar o pagamento de contas, usando Código de Barras.                                                                                                                                                |
| Ator principal  | Usuário que possui um cadastro.                                                                                                                                                                         |
| Pré-condição    | O ator necessita ter acesso a internet, ter saldo em conta ou cartão de credito, está logado e decidir data do pagamento.                                                                               |
| Pós-condição    | Conta paga.     

#### Fluxo principal

| Passos  | Descrição                                                                                           |
| ------- | ----------------------------------------------------------------------------------------------------|
| Passo 1 | O ator precisar logar em sua contar para automaticamente para o painel de cliente.                  |
| Passo 2 | Ao clicar no ícone de um código de barras será direcionado para tela de pagamento.                  |
| Passo 3 | O usuário deve escolher a opção do que vai pagar (Cartão ou Saldo em conta).                        |
| Passo 4 | O usuário devera escolher a data de pagamento.                                                      |
| Passo 5 | Após realizar todos procedimentos o usuário deverá confirmar com sua senha o pagamento da conta.    |
| Passo 6 | Logo o sistema irá mostrar um comprovante de pagamento.                                             |
| Passo 7 | O usuário deve clicar em voltar para retornar ao painel de cliente.                                 |

#### Opções de usuário

| Opção              | Descrição                           |
| ------------------ | ----------------------------------- |
| Forma de Pagamento | Escolher a opção de pagamento.      |
| Definir data       | Definir a data do pagamento.        |
| Confirmar Pagamento| Confirmar pagamento com senha.      |

#### Fluxo alternativo

| Passos    | Descrição                                                        
| --------- | -----------------------------------------------------------------
| Passo 1.1 | Se não tiver saldo na conta o sistema exibirá uma mensagem avisando que está sem saldo.                                                         
| Passo 2.1 | Se o usuário digitar a senha errada o sistema exibirá uma mensagem avisando que a senha está incorreta.
| Passo 2.2 | Caso o usuário queria retornar ao painel de cliente terá um botão para retornar.


# User story

 |User Story
 |-------------------------------------
 | Como usuario eu quero realizar o pagamentos da minha conta. Pra isso eu preciso estar logado, e entrar na opção de pagamentos, digitar meu codigo de barras e confirmar com minha senha.

# Protótipo
