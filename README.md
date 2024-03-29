# Engenharia de software-2023.2 | Universidade Federal do Tocantins - Palmas, 2023
#### Professor: Edeilson Milhomem <br>
#### Monitor: João Gabriel<br>
#### Integrantes: Luiz Carlos Porto, João Victor Ribeiro, Vitória Maria Reias Fontana(Desistente), Caio Santos Silva, Yngrid Guimarães
# Maze-Bank

## Introdução

O "Maze-Bank" é um banco digital desenvolvido para todo tipo de pessoas. Sem muita burocracia para abrir a conta para que não tomamos muito seu tempo, oferecemos todo o suporte necessario, desde antes de criar conta até o momento de deletar, nosso objetivo é a democratização ao acesso bancario, podemos realizar transfêrencias, financiamentos, empréstimos, cartões de credito, tudo isso na palma da sua mão e o principal, sem burocracia.


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

## *US-2.0 Registrar e logar 
# User story

 |User Story
 |-------------------------------------
 | Como um usuário novo do banco gostaria de criar uma nova conta com meus dados para que seja possivel gerenciar minhas contas e dinheiro.

## Protótipo
![Tela login](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/115596240/03af0bbd-9d83-4547-9b74-b15efd5f3d98)
![Tela Registro](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/115596240/67d069be-c04b-4ae5-9956-b2185782ea60)

## *US-2.1 Recuperar Senha 
# User story

 |User Story
 |-------------------------------------
 | Como cliente desejo poder recuperar minha senha, caso eu tenha perdido o acesso a conta.

## Protótipo
![Recuperar senha](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/115596240/1743341d-f09a-4d39-93c8-303c28c9e1ef)

## *US-2.3 Painel do Cliente
# User story

 |User Story
 |-------------------------------------
 |“Como um cliente bancário, eu quero ter acesso a um painel de controle eficiente para que eu possa gerenciar minhas finanças com facilidade.”	“Como um cliente bancário, desejo um painel intuitivo e de fácil acesso para que eu possa realizar operações bancárias sem complicações.”|Certificar que todas as funcionalidades principais estejam funcionando corretamente. |

## Protótipo
![Tela Home](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/115596240/fae7898d-dd3e-40dd-bb09-4e48cafbe345)

## *US-2.4 Detalhar Conta
# User story

 |User Story
 |-------------------------------------
 |Eu como cliente quero poder ver todos os dados da conta, e poder alterar caso necessario.|

## Protótipo
![Meu Perfil](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/115596240/487b6d3f-9538-4849-b4db-68a7396efd55)

## *US-2.5 Solicitar Cartão

# User Stroy 

|User Story 
|---------------------------------------------------
|Eu como cliente, desejo poder pedir um cartão, para fazer compras com crédito e débito.

# Protótipo 

![Solicitar Cartao](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/73500497/35ccf76d-cff6-4836-89b2-234f4a4558d7)

## *US-2.6 Aprovar Cartao

# User Stroy 

|User Story 
|---------------------------------------------------
|Eu como cliente, gostaria de acompanhar aprovação do meu cartao até a entrega.

# Protótipo 
![Aprovação do Cartão](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/115596240/538e1584-4428-4388-8f49-8fd4d8c2f31b)

## *US-2.7 Fechar Conta

# User Stroy 

|User Story 
|---------------------------------------------------
|Eu como cliente, desejo ter o poder de fechar conta, para caso o banco não atenta minhas expectativas.

# Protótipo 

![Apagar Conta](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/73500497/05cdf529-3822-43ca-a0de-07deb3a2dd0f)

## *US-2.8 Suporte ao cliente 

# User Stroy 

|User Story 
|---------------------------------------------------
|Eu como cliente, desejo ter todo o suporte necessário, desde de antes da criação da conta até o encerramento dela.

# Protótipo 

![Prototipos_page-0001](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/101116408/24b0ab8f-d9b0-45dc-94e1-d82392fb13db)


## *US-2.9 Extrato

# User Stroy 

|User Story 
|---------------------------------------------------
|Eu como usuário, desejo poder acompanhar todos os meus gastos pelo meu extrato.

# Protótipo 

![Prototipos_page-0002](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/101116408/cff642b4-2f24-498d-8941-044819c61f8b)

## *US-2.10 Realizar Transferências 

# User Stroy 

|User Story 
|---------------------------------------------------
|Eu como usuário, desejo poder fazer transferências para outros usuários.

# Protótipo 
![Tela de transferencias](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/115596240/03151b28-381d-4e22-88c7-ed9eec0ed0f7)

## *US-2.11 Pedir Emprestimo 

# User Stroy 

|User Story 
|---------------------------------------------------
Eu como usuario, cadastrado, logado e sem debitos de emprestimos, quero fazer um emprestimo no banco. Para isso preciso ir à aba de emprestimos e selecionar a opção de pedir emprestimo. Apos isso devo colocar o valor do emprestimo e clicar no botão de confirmar.

# Protótipo 
## Tela de escolha

![Emprestimo](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/86208743/0cbfe988-177b-4a87-b343-3ec08605e984)

## Tela pedir Emprestimo
![pagarEmprestimo](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/86208743/f2356257-9d0c-4be6-a0e3-f45fc31bd2c7)

## *US-2.12 Pagar Emprestimo

# User Stroy 

|User Story 
|---------------------------------------------------
|Eu como usuario, cadastrado e logado, quero fazer o pgamento dos emprestimos no banco. Para isso preciso ir à aba de emprestimos e selecionar a opção de pagar emprestimo. Apos isso, devo informar a quantidade a ser paga e depois confirmar clicando no botão "Confirmar".

# Protótipo 
## Tela de pagar emprestimo

![pedirEmprestimo](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/86208743/0283b7fe-9462-462c-8a03-204e674476d2)

## *US-2.13 Visualizar Fatura

# User Stroy 

|User Story 
|---------------------------------------------------
|Eu como usuario, gostaria de ter as opções de: pagar, parcelar e visualizar a fatura.

# Protótipo 
![Tela extrato](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/115596240/e991998d-d12b-4fb4-8c33-e3ba74d348c8)

## *US-2.14 Depositar dinheiro

# User Stroy 

|User Story 
|---------------------------------------------------
|Eu como usuario, gostaria poder depositar dinheiro na minha conta, ou na conta de outros usuários.

# Protótipo 
![Deposito](https://github.com/LuizCPorto/ES-2023-2-Maze-Bank/assets/115596240/5d51ff99-6725-4053-8386-8d4eaa4305b8)







