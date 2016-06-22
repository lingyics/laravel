<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">


        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title highlight">Blade has arrived in {{$mylocation}} on {{date('M/d/Y')}}</div>
            </div>
            {{--this a commend--}}
            @if($weather=='sunny')
                <p>It's a {{$weather}} day</p>

            @else
                <p>No weather available.</p>
            @endif
            <hr>
            <ul>
                @foreach($theLandmarks as $landmark)
                    @unless($landmark =="Yosemite NP")
                    <li>
                        {{$landmark}}
                    </li>
                    @endunless
                    @endforeach
            </ul>


        </div>
    </body>
</html>
