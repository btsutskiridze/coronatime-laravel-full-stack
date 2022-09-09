<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.cdnfonts.com/css/inter" rel="stylesheet">
    <title>corona time</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        html {
            height: 100%;
        }

        body {
            height: 100%;
            display: grid;
            place-items: center;
        }

        div {
            padding: 30px;
        }

        img {
            width: 100%;
            object-fit: contain;
        }

        h1 {
            font-style: normal;
            font-weight: 900;
            font-size: 25px;
            line-height: 30px;
            text-align: center;
            margin-top: 56px;
            margin-bottom: 16px;
        }

        p {
            font-weight: 400;
            font-size: 18px;
            line-height: 22px;
            text-align: center;
        }

        button {
            color: white;
            background: #0FBA68;
            border-radius: 8px;
            font-weight: 900;
            font-size: 16px;
            line-height: 19px;
            text-align: center;
            padding: 19px 28%;
            margin-top: 40px;
            outline: none;
            border: none;
        }

        a {
            display: flex;
            justify-content: center;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div>
        <img src="https://i.ibb.co/dLb6CwL/landing.png" alt="landing">
        <h1>Confirmation email</h1>
        <p>click this button to verify your email</p>
        <a href="{{ $url }}">
            <button>VERIFY EMAIL</button>
        </a>
    </div>
</body>

</html>
