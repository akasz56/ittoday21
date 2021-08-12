<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket Bundle Payment Confirmed</title>
    <style>
        /* Layouts */
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Montserrat', sans-serif;
        }

        .btn {
            padding: .75em 1em;

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

        a {
            color: #0d6efd;
            text-decoration: underline;
        }

        .fw-bold {
            font-weight: 700 !important;
        }

        p {
            line-height: 250%;
            text-align: justify;
        }

        .footer {
            margin-top: 2em;
        }
    </style>
</head>

<body>
    <!-- Title -->
    <h1>Hello, {{ $name }}!</h1>

    <!-- Description -->
    <p>
        It seems that your payment is not verified, please upload the payment proof again.
    </p>
    <a class="btn" href="{{ $url }}">Continue Processing</a>
    <p>or use this alternative link</p>
    <a href="{{$url}}">{{$url}}</a>

    <!-- Footer -->
    <div class="footer">
        Any Question? <a href="https://wa.me/+6285398553879" target="_blank"> Contact us here (Risda Awalia)</a>
        <hr>
        Thank you for taking part on our journey! <br>
        IT Today 2021 Web Team <br>
        Also Stay Safe! <span style="font-family: monospace;">:3</span>
    </div>
</body>

</html>