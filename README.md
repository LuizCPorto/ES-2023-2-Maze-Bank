# Engenharia de software-2023.2 | Universidade Federal do Tocantins - Palmas, 2023
# Maze-Bank

## Introdução

O projeto desenvolvido na disciplina Engenharia de Software do semestre 2023.2 é dividido em etapas. Primeiramente, os integrantes descrevem os casos expandidos de uso e user stories dos requisitos funcionais do sistema. Foi combinado a utilização da plataforma GitHub para gerenciar e controlar as versões do projeto. A turma foi dividida em 5 grupos, onde cada grupo possui um líder que deve representar e reportar toda a produtividade de seu respectivo grupo.

### Definindo os requisitos 

---

#### Iteração 1

- [X] RF-1.1 Efetuar Cadastro e Login. [Caio santos Silva](https://github.com/CaioSantdev) Revisador por @Vitoriamrfontana

- [X] RF-1.2 Painel do Cliente. [Vitoria Maria Reias Fontana](https://github.com/Vitoriamrfontana) Revisado por @Carecovisk

- [X] RF-1.3 Realizar Transferências. [João Victor Ribeiro Santos](https://github.com/Carecovisk) Revisado por @LuizCPorto

- [X] RF-1.4  Realizar Pagamentos [Luiz Carlos Porto do Carmo](https://github.com/LuizCPorto) Revisado por @Ynguimaraes

- [X] RF-1.5 Consultar Saldo. [Yngrid Guimarães](https://github.com/Ynguimaraes) Revisado por @CaioSantdev

# Casos de uso e User stories

## *RF-1.1 - Efetuar Cadastro e Login*

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

![Login](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/73500497/f2bed4fa-f3f5-485a-b7b1-30ee2c78925c)
![Registre-se](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/73500497/65627ec8-7f2c-419a-9f34-725aa44c450c)

## *RF-1.2 Painel do Cliente*

#### Autor: @Vitoriamrfontana – Vitória Maria Reis Fontana.

---

### Revisor: @Carecovisk– João Victor Ribeiro Santos.

| Item            | Descrição                                                                                                                                                      |
| --------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Caso de uso     |  - Painel de controle do cliente.                                                                                                                                |
| Resumo          | O painel do cliente é a interface principal que permite aos usuários acessarem e gerenciarem suas contas bancárias, realizar transações e obter informações sobre suas finanças.   |
| Ator principal  | Usuário da plataforma, clientes bancários.                                                                                                             |
| Pré-condição    | Para acessar o painel do cliente, é necessário conexão com a internet e uma conta de usuário ativa.                                                                                                |
| Pós-condição    | Após o login bem-sucedido, o cliente terá acesso total às funcionalidades da plataforma bancária.                                                                                                          |

#### Fluxo principal

| Passos  | Descrição                                                                                                                                              |
| ------- | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| Passo 1 | O cliente inicia o aplicativo ou acessa o site do banco;                                                                                                          |
| Passo 2 | O cliente insere suas credenciais de login (nome de usuário e senha);                                                                                   |
| Passo 3 | O sistema verifica as credenciais e autentica o cliente;                                                                                            |
| Passo 4 | O cliente é redirecionado para o painel do cliente, onde pode escolher as funcionalidades desejadas;                                                                                   |
| Passo 5 | O cliente interage com o painel para realizar suas operações bancárias, como verificar o saldo, fazer transferências, pagar contas, entre outras;                                                                                                          |
| Passo 6 | Após concluir as operações, o cliente pode fazer logout ou sair do painel;                                                                                            |

#### Fluxo alternativo

| Passos    | Descrição                                                                                                      |
| --------- | -------------------------------------------------------------------------------------------------------------- |
| Passo 1.1 | O cliente já possui uma sessão ativa ou já está logado.                                                                                       |
| Passo 1.2 | O cliente é direcionado diretamente para o painel inicial após abrir o aplicativo ou acessar o site. |
| Passo 2.1 | Cliente já está autenticado, não precisa inserir credenciais novamente.|
| Passo 2.2 | Cliente pode realizar operações diretamente após o login.|
| Passo 3.1 | Cliente já possui sessão ativa e está logado.|
| Passo 3.2 | Cliente é direcionado para o painel inicial sem necessidade de novo login.|


# User story

 |User Story
 |-------------------------------------
 |  “Como um cliente bancário, eu quero ter acesso a um painel de controle eficiente para que eu possa gerenciar minhas finanças com facilidade.”	“Como um cliente bancário, desejo um painel intuitivo e de fácil acesso para que eu possa realizar operações bancárias sem complicações.”|Certificar que todas as funcionalidades principais estejam funcionando corretamente. |

## Protótipo

![Desktop - 1](https://uploaddeimagens.com.br/images/004/605/533/original/Desktop_-_1.png?1694561453).

## **RF-1.3 Realizar Transferências**

#### Autor: @Carecovisk - João Victor Ribeiro Santos.

---

### Revisor: @LuizCPorto - Luiz Carlos Porto

| Item            | Descrição                                                                                                                                                                                               |
| --------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Caso de uso     | Realizar pagamentos.                                                                                                                                                                                    |
| Resumo          | Realizar tranferencias através da cheave de um destinatario.                                                                                                                                                |
| Ator principal  | Usuário que possui um cadastro.                                                                                                                                                                         |
| Pré-condição    | O usuário precisa ter acesso a internet, ter saldo em conta ou cartão de credito, e ter a chave do destinatario.                                                                               |
| Pós-condição    | O destinatario recebeu a tranferencia.

#### Fluxo principal

| Passos  | Descrição                                                                                           |
| ------- | ----------------------------------------------------------------------------------------------------|
| Passo 1 | Usario define valor a ser transferido.                  |
| Passo 2 | Usuario define destinatario através do e-mail.                  |
| Passo 3 | O usuário deve escolher a opção do que vai pagar (Cartão ou Saldo em conta).                        |
| Passo 4 | Usuario visualiza dados da transferencia e confirma transação com senha                                                     |


#### Opções de usuário

| Opção              | Descrição                           |
| ------------------ | ----------------------------------- |
| Forma de Pagamento | Escolher a opção de pagamento.      |
| Cancelar Transação | Cancela a transferencia.            |
| Confirmar Transação| Confirmar transferencia com senha.  |

#### Fluxo alternativo

| Passos    | Descrição                                                        
| --------- | -----------------------------------------------------------------
| Passo 1.1 | Se não tiver saldo na conta o sistema exibirá uma mensagem avisando que está sem saldo.                                                         
| Passo 2.1 | Se o usuário digitar a senha errada o sistema exibirá uma mensagem avisando que a senha está incorreta.
| Passo 2.2 | Caso o usuário queira retornar ao painel de cliente terá um botão para retornar.


# User story


 Eu como cliente maze bank quero fazer transferencias para cumprir com meus compromissos finaceiros, para isso preciso estar logado, escolher um valor, um destinatario, colocar minha senha e confirmar.

# Protótipo

![prototipoPaginaDeTransferencia](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/86208743/d004c685-4004-4b03-b57f-18271c2699b4)



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


![prototipoLuiz](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/86208743/4947acca-a6dc-4f5c-8e64-28093e10e05b)

## *RF-1.5 Consultar saldo*

#### Autor: @Ynguimaraes - Yngrid Guimarães Silva.

---

### Revisor: @CaioSantdev - Caio santos Silva

| Item            | Descrição                                                                                                                                                                                               |
| --------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Caso de uso     | Consultar Saldo.                                                                                                                                                                                        |
| Resumo          | Visualizar o saldo do usario |
| Ator principal  | Usuário que possui cadastro |
| Pré-condição    | O ator necessita ter acesso a internet e estar logado no sistema.                        |
| Pós-condição    | Consulta de saldo feita.    |
#### Fluxo principal

| Passos  | Descrição                                                                                              |
| ------- | -------------------------------------------------------------------------------------------------------|
| Passo 1 | O ator precisar logar em sua conta.                                                                    |
| Passo 2 | Ao clicar no botão de visualização de saldo o usuário será direcionado para a tela de consulta.        |
| Passo 3 | O usuário também possui três opções na tela em questão, como depositar, sacar, e visualizar histórico  |
| Passo 4 | O usuário além de visualizar o saldo pode escolher entre três opções.                                  |
| Passo 5 | Após realizar a ação desejada o usuário poderá voltar a tela inicial.                                  |

#### Opções de usuário

| Opção              | Descrição                           |
| ------------------ | ----------------------------------- |
| Depositar          | Escolher a opção de depositar.      |
| Sacar              | Escolher a opção de sacar.          |
| Histórico          | Escolher a opção de histórico.      |

#### Fluxo alternativo

| Passos    | Descrição                                                        
| --------- | -----------------------------------------------------------------
| Passo 1.1 | Se não tiver saldo na conta o sistema exibirá uma mensagem avisando que está sem saldo.                                                         
| Passo 2.1 | Se não houver saldo mínimo para saque o sistema irá emitir uma mensagem.
| Passo 2.2 | Se não houver transações será emitido um alerta dentro da tela de histórico.


# User story

 |User Story
 |-------------------------------------
 | Como usuario eu quero visualizar o saldo da minha conta. Pra isso eu preciso estar logado, e entrar na opção de saldo, e visualiza-lo ou clicar na opção desejada.

# Protótipo


![RF-1 5 Consultar Saldo (1)](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/115596240/020fa71c-0709-40a3-a9ab-5e01a8b95077)




## *US-1.6 Suporte ao cliente 

# User Stroy 

|User Story 
|---------------------------------------------------
|Eu como cliente, desejo ter todo o suporte necessário, desde de antes da criação da conta até o encerramento dela.

# Protótipo 

![Prototipos_page-0001](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/101116408/24b0ab8f-d9b0-45dc-94e1-d82392fb13db)


## *US-1.7 Extrato

# User Stroy 

|User Story 
|---------------------------------------------------
|Eu como cliente, desejo ter todo o suporte necessário, desde de antes da criação da conta até o encerramento dela.

# Protótipo 

![Prototipos_page-0002](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/101116408/cff642b4-2f24-498d-8941-044819c61f8b)

## *US-1.8 Solicitar Cartão

# User Stroy 

|User Story 
|---------------------------------------------------
|Eu como cliente, desejo poder pedir um cartão, para fazer compras com crédito e débito.

# Protótipo 

![image](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/73500497/fb4e9df3-0582-4312-84e5-7e75d087966f)
![image](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/73500497/b317b2aa-aa90-46bf-9c0b-318b62b0de38)

## *US-1.9 Fechar Conta

# User Stroy 

|User Story 
|---------------------------------------------------
|Eu como cliente, desejo ter o poder de fechar conta, para caso o banco não atenta minhas espectativas.

# Protótipo 

![image](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/73500497/f4cbdefa-34fc-46f3-9aa3-ad830c26e831)




