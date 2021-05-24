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
            color: white;
            height: 98vh;
            background-image: linear-gradient(120deg, #4A6FD0, #82BAEE, #CC4EF9);
            background-repeat: no-repeat;

            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;

            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;

            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;

            text-align: center;
        }

        /* Buttons & Links */
        .btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            border-radius: 0.25rem;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;

            border-color: white;
            color: white;
            background: linear-gradient(135deg, #2E847B, #2A9CBE, #A6B651);
        }

        /* Typography */

        p {
            line-height: 1.5em;
        }

        h1 {
            font-style: normal;
            font-weight: 600;
            font-size: 4em;
            letter-spacing: 0.05em;
        }

        @media (max-width: 1400px) {
            h1 {
                font-size: 3.6em;
            }
        }

        @media (max-width: 992px) {
            h1 {
                font-size: 2.8em;
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.4em;
            }

            p {
                font-size: .8em;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 8vw;
            }
        }

    </style>
</head>

<body>
    <div class="body"></div>
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

    <div style="height: 100px"></div>

    <!-- Footer -->
    <div>
        Thanks, <br> IT Today 2021 Web Team <br> Also thanks for taking part on our journey!
    </div>
</body>



</html>
