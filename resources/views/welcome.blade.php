<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <h1>{{__('messages.Welcome')}}</h1>
                <div class="title m-b-md">
                    Laravel
                </div>
                {{--<p>{{$obj -> name}} -- {{$obj -> gender}}</p>--}}
                
                {{--@if($name=='yousri salem')
                    <p>Welcome Germanboy ({{$name}})</p>
                @else
                    <mark>Not Germanboy</mark>
                @endif
                --}}
                <ol>
                {{--@foreach($names as $_name)
                    <li>{{$_name}}</li>
                @endforeach --}}
                </ol>
                @forelse($names as $_name)
                    <b>{{$_name}}</b>
                @empty 
                    <i>Empty Array</i>
                @endforelse
            </div>
        </div>
    </body>
</html>
