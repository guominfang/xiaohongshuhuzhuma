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
            font-size: 30px;
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

        .m-t-md {
            margin-top: 30px;
        }

        .input-w {
            width: 200px;
            margin-left: 8px;
        }

        .label-w {
            width: 100px;
            text-align: end;
            display: inline-block;
        }
    </style>
</head>
<body>
<div class="position-ref full-height">
    <div class="content">
        <div class="title m-t-md">
            小红书<br/>春节游乐园活动助手
        </div>

        <form action="/search" method="post">
            @csrf
            <p><label class="label-w">薯粉码:</label><input class="input-w" type="text" name="gzh_code"
                                                         placeholder="wool小顽家公众号发送 '薯粉码'"/></p>
            <p><label class="label-w">剩余互助次数:</label><input class="input-w" type="text" name="count"
                                                            placeholder="诚信填写剩余次数"/></p>
            <p><label class="label-w">你的互助码:</label><textarea class="input-w" cols="5" rows="4" name="code"
                                                              placeholder="再邀请3名好友助力，立即获得1只薯队长（非拉新码）"></textarea></p>
            <button type="submit" value="search">查询互助队伍</button>
        </form>
    </div>
</div>
</body>
</html>
