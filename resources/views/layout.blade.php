<!DOCTYPE html>
<html>
    <head>
        <title>@yield('pageTitle')</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

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
                background-color:#e3e3e3;
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

            #menu ul li {
                list-style-type: none;
            }

            #pageContent {
                background-color: #ffffff;
                width:100%;
                text-align:left;
                padding-top:15px;
                padding-bottom:15px;
                padding-left:10px;
                padding-right:10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">@yield('title')</div>
                <div id="menu">
                    <ul>
                        <li><a href="/" target="_self">Home</a></li>
                        <li><a href="persoonlijk" target="_self">Persoonlijke Info</a></li>
                        <li><a href="opleidingen" target="_self">Opleidingen</a></li>
                        <li><a href="werkervaringen" target="_self">Werkervaringen</a></li>
                    </ul>

                </div>
                <div id="pageContent">@yield('pageContent')</div>
            </div>
        </div>
    </body>
</html>
