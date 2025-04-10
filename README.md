
# CollabTask

Gerencie tarefas de forma colaborativa com boards compartilhados, listas personalizáveis e progresso visual.
Ideal para times, grupos de estudo ou qualquer projeto em equipe.

![Logo](https://img.freepik.com/vetores-premium/pessoas-ou-modelo-de-design-de-logotipo-de-icone-de-cuidado-de-trabalho_412311-3886.jpg?w=360)


## Licença

[MIT](https://choosealicense.com/licenses/mit/)


## Apêndice

CollabTask é uma plataforma de gerenciamento de tarefas em equipe, inspirada no conceito de boards Kanban. Nele, usuários podem criar projetos, convidar pessoas, organizar tarefas em listas (como “A fazer”, “Em progresso”, “Concluído”) e acompanhar o andamento em tempo real.
Além disso, há comentários nas tarefas, sistema de notificações e controle de permissões.


## Funcionalidades

 Login com Auth0;

 Criação de múltiplos projetos;

 Boards com listas e tarefas;

 Arrastar e soltar tarefas;

 Comentários nas tarefas;

 Notificações em tempo real com WebSocket;


## Stack utilizada

Backend: PHP com Laravel;

Frontend: HTML, CSS, JavaScript;

Containerização: Docker;

Banco de Dados: MySQL (via Docker);

Autenticação: Laravel Sanctum;

Estilo: CSS puro ou com pré-processador (como SASS, opcional);

Deploy/Dev Environment: Docker Compose (para orquestração de containers);
## Instalação

Clone o projeto

bash
Copiar
Editar
git clone https://github.com/seu-usuario/collabtask.git
cd collabtask
Instale as dependências

bash
Copiar
Editar
cd frontend
npm install
cd ../backend
npm install


Configure os arquivos .env

env
Copiar
Editar

# .env (backend)
MONGO_URI=...
AUTH0_DOMAIN=...
AUTH0_CLIENT_ID=...

Rode os servidores

bash
Copiar
Editar
# Backend
cd backend
npm run dev

# Frontend
cd ../frontend
npm run dev
## Deploy

📦 Opção 1: Deploy com Docker em um servidor VPS
Pré-requisitos:

Servidor Linux com Docker e Docker Compose instalados

Acesso via SSH

Clone o repositório no servidor:

bash
Copiar
Editar
git clone (https://github.com/seu-usuario/collabtask.git)
cd collabtask
Configure variáveis de ambiente no arquivo .env

Execute o Docker Compose:

bash
Copiar
Editar
docker-compose up -d --build
Acesse pelo navegador:

(http://seu-ip-ou-dominio)

☁️ Opção 2: Deploy com Laravel Forge ou Ploi (sem Docker)
Se preferir, você pode fazer deploy manual com serviços como Laravel Forge ou Ploi.io, que facilitam a configuração de servidores otimizados para Laravel.

🧪 Ambiente de Desenvolvimento Local
Você também pode rodar o projeto localmente com Docker:

bash
Copiar
Editar
docker-compose up -d --build
Isso sobe o app Laravel, o MySQL e o PHPMyAdmin em containers separados.

## Autores

- [João Gabriel](https://github.com/GabrielJTech)

- [Ana Vitória](https://github.com/anavitoria17)

- [Samuel Chaves](https://github.com/samuelchavezs)
## Aprendizados

Este projeto nos ensinou muito sobre:

Comunicação em tempo real com WebSockets

Organização de componentes reutilizáveis com Next.js

Boas práticas com MongoDB e Mongoose

UX em drag-and-drop com React Beautiful DnD

Fluxo de autenticação segura com Auth0


## Contribuindo

Contribuindo 
Tem ideias ou melhorias? Faça parte!

Fork o repositório

Crie uma branch: git checkout -b nova-ideia

Faça suas alterações

Envie com um Pull Request

Vamos revisar e publicar juntos 🚀


