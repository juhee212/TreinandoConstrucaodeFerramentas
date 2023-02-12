<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,900" rel="stylesheet">
    <style>
    #notfound {
    position: relative;
    height: 100vh;
    }
    #notfound .notfound {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    }
    .notfound {
    max-width: 920px;
    width: 100%;
    line-height: 1.4;
    text-align: center;
    padding-left: 15px;
    padding-right: 15px;
    }
    .notfound .notfound-404 {
    position: absolute;
    height: 100px;
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    z-index: -1;
    }
    .notfound .notfound-404 h1 {
    font-family: 'Maven Pro', sans-serif;
    color: #ececec;
    font-weight: 900;
    font-size: 276px;
    margin: 0px;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    }
    .notfound h2 {
    font-family: 'Maven Pro', sans-serif;
    font-size: 46px;
    color: #000;
    font-weight: 900;
    text-transform: uppercase;
    margin: 0px;
    }
    .notfound p {
    font-family: 'Maven Pro', sans-serif;
    font-size: 16px;
    color: #000;
    font-weight: 400;
    text-transform: uppercase;
    margin-top: 15px;
    }
    .notfound a {
    font-family: 'Maven Pro', sans-serif;
    font-size: 14px;
    text-decoration: none;
    text-transform: uppercase;
    background: #ff0000;
    background: -webkit-linear-gradient(right, #c50000, #d84308, #fdc221, #efff5b);
    background: -o-linear-gradient(right, #c50000, #d84308, #fdc221, #efff5b);
    background: -moz-linear-gradient(right, #c50000, #d84308, #fdc221, #efff5b);
    background: -moz-linear-gradient(right, #c50000, #d84308, #fdc221, #efff5b);
    display: inline-block;
    padding: 16px 38px;
    border: -1px solid transparent;
    border-radius: 40px;
    color: #fff;
    font-weight: 400;
    -webkit-transition: 0.2s all;
    transition: 0.2s all;
    }
    .notfound a:hover {
    border-color: white;
    color: white;
    }
    @media only screen and (max-width: 480px) {
        .notfound .notfound-404 h1 {
            font-size: 162px;
        }
        .notfound h2 {
            font-size: 26px;
        }
    }
    </style>
</head>
<body>
<body>

<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>OOPSSS</h1>
        </div>
        <h2>Desculpe, acesso negado!</h2>
        <p>Acesso restrito a funcionários, por favor comunique o suporte.</p>
        <a href="../../index.php">Fazer login</a>
    </div>
</div>

</body>
</body>
</html>