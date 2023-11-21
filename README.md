# Projeto Laravel - Buffet Reservas

Este é um projeto Laravel destinado a um Buffet de festas que oferece um sistema de reservas e um painel administrativo. Abaixo estão as principais funcionalidades e tarefas do projeto.

## Instalação do Projeto
1. Clone o repositório: `git clone https://github.com/GuiMedss/Buffet-Infantil-Projeto.git`
2. Acesse o repositório: `cd ./Buffet-Infantil-Projeto`
3. Execute o comando: `sudo docker-compose up -d --build`
4. Agora acesse o terminal do docker: `sudo docker-compose exec app bash`
    - `php artisan key:generate`
    - `php artisan migrate`
    - `php artisan storage:link`
5. Acesse pelo endereço: <http://localhost:8989>
6. Por padrão é gerado um usuário adminstrador
    - email: admin@gmail.com
    - senha: admin123
7. Demais funcionalidades de usuário são disponibilizadas após o registro

## Links do trabalho
 - Telas: <https://www.canva.com/design/DAFxQpX5Xbg/BWr7Kfu0uvJ2IwNhM5NOcA/edit>
 - Divisão de tarefas: <https://trello.com/b/i00zVEND/space-adventure>

## Funcionalidades do Usuário

### Reservas
-  **Selecionar Dia e Hora Disponível para Reserva**
  -  Escolher pacote de comidas
  -  Indicar a quantidade de convidados
  -  Informar nome do aniversariante
  -  Indicar idade do aniversariante

-  **Solicitações de Reserva e Status**
  -  Acompanhar o status da reserva (Solicitado, Negado, Aprovado)

-  **Link para Confirmação de Convidados**
  -  Formulário dinâmico para convidados confirmarem presença
  -  Incluir Nome, CPF e Idade
  -  Permitir que uma família envie todos os membros em um único formulário

-  **Lista de Convidados Confirmados**
  -  Opção de bloquear algum convidado

-  **Visualização do Pacote de Comidas Escolhido**
  -  Possibilidade de trocar, informando a diferença de valor

-  **Lista de Recomendações do Buffet para a Pré-Festa**

-  **Cancelar Reserva**

-  **Pesquisa de Satisfação**

## Funcionalidades do Administrador

### Pacotes de Comida
-  **CRUD de Pacotes de Comida do Buffet**
  -  Título
  -  3 Fotos
  -  Lista de comidas (área de texto e área de texto especializada)
  -  Lista de bebidas
  -  Valor por convidado (em reais)

### Agenda de Disponibilidade do Buffet
-  **CRUD da Agenda de Disponibilidade**

### Reservas
-  **Lista de Solicitações de Reserva**
  -  Aceitar ou Negar Reservas

### Recomendações para a Pré-Festa
-  **CRUD da Lista de Recomendações para a Pré-Festa**

### Próximas Festas
-  **Lista de Próximas Festas em Ordem Cronológica**
  -  Data
  -  Hora
  -  Nome do Aniversariante
  -  Quantidade de Confirmados
  -  Pacote de Comida

### Pesquisas de Satisfação
-  **Resultados das Pesquisas de Satisfação**
