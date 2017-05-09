<!DOCTYPE html>
<html>
    <head>
        <title>{{ $info }}.</title>

        

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
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
                font-size: 54px;
                margin-bottom: 40px;
                font-weight:400;
                font-family:"隶书","微软雅黑","黑体";
            }
        </style>
    </head>
    
    <script>
        setTimeout(function(){
            window.location.href="{{$url or '/'}}";

        },3000)
    </script>
    
    
    <body>
        <div class="container">
            <div class="content">
                <div class="title">{{$info or "Seems out of the question... 404！"}}</div>
            </div>
        </div>
    </body>
</html>
