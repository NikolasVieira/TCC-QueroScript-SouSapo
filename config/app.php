<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Nome da Aplicação
    |--------------------------------------------------------------------------
    |
    | Este valor é o nome do seu aplicativo. Este valor é usado quando o
    | framework precisa colocar o nome do aplicativo em uma notificação ou
    | qualquer outro local conforme exigido pelo aplicativo ou seus pacotes.
    |
    */

    'name' => env('APP_NAME', 'SouSapo'),

    /*
    |--------------------------------------------------------------------------
    | Ambiente de Aplicação
    |--------------------------------------------------------------------------
    |
    | Este valor determina o "ambiente" que seu aplicativo está atualmente
    | rodando. Isso pode determinar como você prefere configurar vários
    | serviços que o aplicativo utiliza. Defina isso em seu arquivo ".env".
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Modo de depuração do aplicativo
    |--------------------------------------------------------------------------
    |
    | Quando seu aplicativo está no modo de depuração, mensagens de erro detalhadas com
    | os rastreamentos de pilha serão mostrados em cada erro que ocorrer dentro de seu
    | aplicativo. Se desativado, uma página de erro genérica simples é mostrada.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL do aplicativo
    |--------------------------------------------------------------------------
    |
    | Este URL é usado pelo console para gerar URLs adequadamente ao usar
    | a ferramenta de linha de comando Artisan. Você deve definir isso para a raiz de
    | seu aplicativo para que seja usado ao executar tarefas Artisan.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Fuso horário do aplicativo
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar o fuso horário padrão para o seu aplicativo, que
    | será usado pelas funções de data e hora do PHP. Nós tínhamos ido
    | em frente e defina isso como um padrão sensato para você fora da caixa.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Configuração de local do aplicativo
    |--------------------------------------------------------------------------
    |
    | A localidade do aplicativo determina a localidade padrão que será usada
    | pelo fornecedor de serviços de tradução. Você é livre para definir este valor
    | para qualquer um dos locais que serão suportados pelo aplicativo.
    |
    */

    'locale' => 'pt-br',

    /*
    |--------------------------------------------------------------------------
    | Local de reserva do aplicativo
    |--------------------------------------------------------------------------
    |
    | O local de fallback determina o local a ser usado quando o atual
    | não está disponível. Você pode alterar o valor para corresponder a qualquer um dos
    | as pastas de idioma fornecidas por meio de seu aplicativo.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | Este local será usado pela biblioteca Faker PHP ao gerar
    | dados para as sementes do seu banco de dados. Por exemplo, isso será usado para obter
    | números de telefone localizados, informações de endereço e muito mais.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Chave de encriptação
    |--------------------------------------------------------------------------
    |
    | Esta chave é usada pelo serviço de criptografia Illuminate e deve ser definida
    | a uma sequência aleatória de 32 caracteres, caso contrário, essas sequências criptografadas
    | não estará seguro. Faça isso antes de implantar um aplicativo!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Provedores de serviços carregados automaticamente
    |--------------------------------------------------------------------------
    |
    | Os provedores de serviços listados aqui serão carregados automaticamente no
    | pedido ao seu aplicativo. Sinta-se à vontade para adicionar seus próprios serviços a
    | esta matriz para conceder funcionalidade expandida aos seus aplicativos.
    |
    */

    'providers' => [

        /*
         * Provedores de serviços do Laravel Framework ...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Provedores de serviço de pacote ...
         */

        /*
         * Provedores de serviços de aplicativos ...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Aliases de classe
    |--------------------------------------------------------------------------
    |
    | Esta matriz de apelidos de classe será registrada quando este aplicativo
    | começou. No entanto, sinta-se à vontade para registrar quantos desejar
    | os aliases são carregados "lentamente" para que não prejudiquem o desempenho.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Http' => Illuminate\Support\Facades\Http::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        // 'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Str' => Illuminate\Support\Str::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

];
