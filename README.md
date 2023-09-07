# Engenharia de software-2023.2 | Universidade Federal do Tocantins - Palmas, 2023
# Maze-Bank

## Introdução

O projeto desenvolvido na disciplina Engenharia de Software do semestre 2023.2 é dividido em etapas. Primeiramente, os integrantes descrevem os casos expandidos de uso e user stories dos requisitos funcionais do sistema. Foi combinado a utilização da plataforma GitHub para gerenciar e controlar as versões do projeto. A turma foi dividida em 5 grupos, onde cada grupo possui um líder que deve representar e reportar toda a produtividade de seu respectivo grupo.

### Definindo os requisitos 

---

#### Iteração 1

- [ ] RF-1.1 Registro e Login. [Caio santos Silva](https://github.com/CaioSantdev) Revisador por @Vitoriamrfontana

- [ ] RF-1.2 Painel do Cliente. [Vitoria Maria Reias Fontana](https://github.com/Vitoriamrfontana) Revisado por @Carecovisk

- [ ] RF-1.3 Realizar Transferências. [João Victor Ribeiro Santos](https://github.com/Carecovisk) Revisado por @LuizCPorto

- [ ] RF-1.4  Realizar Pagamentos [Luiz Carlos Porto do Carmo](https://github.com/LuizCPorto) Revisado por @Ynguimaraes

- [ ] RF-1.5 Consultar Saldo. [Yngrid Guimarães](https://github.com/Ynguimaraes) Revisado por @CaioSantdev

# Casos de uso e User stories

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