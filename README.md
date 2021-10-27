# CURSO INTRODUÇÃO AO LARAVEL 8

https://academy.especializati.com.br/curso/introducao-ao-laravel-8

APRENDA DE UMA VEZ POR TODAS O MELHOR E MAIS COMPLETO FRAMEWORK PHP DO MERCADO. APRENDA COM QUEM FAZ, E ENSINA O QUE FEZ!

## <a name="indice">Índice</a>

1. [Setup](#parte1)     
2. [CRUD](#parte2)     
3. [Upload Arquivos](#parte3)     
4. [Autenticação](#parte4)     
5. [Final](#parte5)     
---


## <a name="parte1">1 - Setup</a>

01 - Bem-vindo ao curso de Laravel 8.

- [https://github.com/especializati/curso-laravel-8](https://github.com/especializati/curso-laravel-8)


02 - Ferramentas Para o Curso de Laravel 8

03 - Instalando e Configurando o Laravel 8

- [https://laravel.com/docs/8.x/installation](https://laravel.com/docs/8.x/installation)


04 - Versionamento de Código com o Git (e armazenar no GitHub)

[Voltar ao Índice](#indice)

---


## <a name="parte2">2 - CRUD</a>

- 05 - Conectar Laravel ao Banco de Dados

- 06 - Listar Registros com o Laravel
 
- 07 - Inserir Registros com o Laravel (feat. Segurança)
 
- 08 - Validações com o Laravel
 
- 09 - Exibir Detalhes de Registro e Deletar com o Laravel
 
- 10 - Atualizar Registros com o Laravel
 
- 11 - Paginação e Ordem das Rotas com o Laravel
 
- 12 - Filtros no Laravel 8
 
- 13 - Reaproveitar Códigos Blade no Laravel 8
 
- 14 - Templates Blade no Laravel 8


[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - Upload Arquivos</a>

- 15 - Configurações no Laravel para Upload de Arquivos

```php
class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',160)->unique();
            $table->string('image');
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }
```

```
$ php artisan migrate:refresh
Rolling back: 2021_10_23_192429_create_posts_table
Rolled back:  2021_10_23_192429_create_posts_table (43.93ms)
(...)
```

- [app-1-laravel8/.env](app-1-laravel8/.env)

```
FILESYSTEM_DRIVER=public
```

```
$ php artisan storage:link
The [C:\Users\josem\Documents\workspaces\especializati-intermediario\CURSO_INTRODUCAO_AO_LARAVEL_8\app-1-laravel8\public\storage
] link has been connected to [C:\Users\josem\Documents\workspaces\especializati-intermediario\CURSO_INTRODUCAO_AO_LARAVEL_8\app-
1-laravel8\storage\app/public].
The links have been created.

```

- 16 - Upload de Arquivos no Laravel (pt-1)

- 17 - Upload de Arquivos no Laravel (pt-2)

- 18 - Validações de Upload no Laravel

[Voltar ao Índice](#indice)

---


## <a name="parte4">4 - Autenticação</a>



[Voltar ao Índice](#indice)

---


## <a name="parte5">5 - Final</a>



[Voltar ao Índice](#indice)

---

