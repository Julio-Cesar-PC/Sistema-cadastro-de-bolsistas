Projeto realizado com Laravel PHP e PostgreSQL.

Os requisitos deste sistema estão listados a seguir:

- [x] Criação de uma tela de cadastro de pessoa bolsista, que contará com os seguintes campos: nome completo, e-mail, cpf, função e status do projeto;
- [x] Ao finalizar o cadastro da pessoa bolsista, a pessoa usuária deverá ser direcionada para a tela principal do sistema, em que são listadas as pessoas cadastradas no projeto, junto de um botão chamado detalhes;
- [x] Ao clicar no botão detalhes, a pessoa usuária será direcionada para a tela de detalhes, em que será mostrado todos os dados do bolsista;
- [x] Na tela de detalhes terá um botão Remover, que ao ser clicado, irá remover a pessoa bolsista. Como extra, pode ter uma mensagem perguntando se tem certeza na remoção do cadastro.

Alguns requisitos extras que podem ser feitos no sistema:

- [x] O sistema poderá ser responsivo;
- [x] O sistema poderá ter validação dos campos do formulários;
- [x] O sistema poderá ter estilização das páginas em CSS.
- [x] O sistema podera ter um sistema de busca e filtros;

Para rodar o sistema precisa do Laravel, o sistema foi desenvolvido em Laravel 9. Node versão 16.x.x.
Utilizei o [Laravel Breeze](https://laravel.com/docs/9.x/starter-kits) como base.
Além disso foram implementados os factory para o model Bolsista.

```
npm install
```

```
npm run dev
```

```
npm start
```

```
php artisan serve
```


