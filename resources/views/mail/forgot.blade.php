<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Reset Password</title>
    <style>
        /* Layouts */
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Montserrat', sans-serif;
        }

        body {
            width: 100vw;
        }

        /* Buttons & Links */
        .btn {
            padding: 0.375rem 0.75rem;

            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            text-decoration: none;

            text-align: center;
            vertical-align: middle;
            
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            
            border-radius: 0.25rem;
            border: 1px white transparent;
            color: white;
            background: linear-gradient(135deg, #2E847B, #2A9CBE, #A6B651);
        }
    </style>
</head>

<body>
    <!-- Title -->
    <h1>Hello, {{$name}}</h1>

    <!-- Description -->
    <div class="desc">
        <p>Someone has requested to reset your account's password <br> if this is you, then please use the link below
            <br> to reset your password within 30 minutes</p>
        <p> <a href="{{$url}}" class="btn">Reset Password</a> </p>
        <p>or use this alternative link</p>
        <p><a href="{{$url}}">{{$url}}</a></p>
    </div>

    <div style="height: 25px"></div>

    <!-- Footer -->
    <div>
        Thanks, <br> IT Today 2021 Web Team <br> Also thanks for taking part on our journey!
    </div>
</body>



</html>
