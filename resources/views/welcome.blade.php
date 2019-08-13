<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .flex-center {
                display: flex;
                flex-flow: column;
            }

            .mt-5 {
                margin-top: calc(5 * 8px);
            }

            .item-list {
                min-width: 700px;
            }

            .item-list table {
                display: flex;
                flex-flow: column;
                padding: 16px;
                max-width: 100%;
            }

            .item-list table thead, .item-list table tbody {
                display: flex;
                flex-grow: 1;
                min-width: 100%;
            }

            tbody {
                flex-flow: column;
            }

            tr {
                border-bottom: 1px solid lightblue;
                padding: 4px;
            }

            td {
                margin-right: 6px;
            }

            tbody tr:nth-child(even) {
                background-color: lightblue;
            }

            tr {
                display: flex;
                flex-grow: 1;
            }

            td {
                flex: 1 1 60px;
                overflow: hidden;
            }

            .overflow-ellipsis {
                display: block;
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
            <div class="mt-5 item-list">
                <table>
                    <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Apellidos</td>
                        <td>Email</td>
                        <td>Contraseña</td>
                        <td>Url Imagen</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                <span class="overflow-ellipsis">{{$user->name}}</span>
                            </td>
                            <td>
                                <span class="overflow-ellipsis">{{$user->lastName}}</span>
                            </td>
                            <td>
                                <span class="overflow-ellipsis">{{$user->email}}</span>
                            </td>
                            <td>
                                <span class="overflow-ellipsis">{{$user->password}}</span>
                            </td>
                            <td>
                                <span class="overflow-ellipsis">{{$user->photo_url}}</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
