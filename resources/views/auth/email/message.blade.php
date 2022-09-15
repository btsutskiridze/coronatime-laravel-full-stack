<!DOCTYPE html>
<html lang="en" style="height: 100%">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="http://fonts.cdnfonts.com/css/inter" rel="stylesheet" />
    <title>corona time</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
    </style>
</head>

<body style="height: 100%; display: grid; place-items: center">
    <div style="padding: 30px">
        <img src="https://i.ibb.co/dLb6CwL/landing.png" alt="landing" style="width: 100%; object-fit: contain" />
        <h1
            style="font-style: normal; font-weight: 900; font-size: 25px; line-height: 30px; text-align: center; margin-top: 56px; margin-bottom: 16px">
            Confirmation email</h1>
        <p style="font-weight: 400; font-size: 18px; line-height: 22px; text-align: center">click this button to verify
            your email</p>
        <a href="{{ $url }}"
            style="display: flex; margin-top: 40px; justify-content: center; text-decoration: none">
            <button
                style="
                        cursor: pointer;
                        color: white;
                        background: #0fba68;
                        border-radius: 8px;
                        font-weight: 900;
                        font-size: 16px;
                        line-height: 19px;
                        text-align: center;
                        padding: 19px 28%;
                        outline: none;
                        border: none;
                    ">
                VERIFY EMAIL
            </button>
        </a>
    </div>
</body>

</html>
