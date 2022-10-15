<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INNOWEEK - Verification Code</title>
    </head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #fff;
            font-family: sans-serif;
        }

        body {
            background-color: #041A57;
        }

        .box {
            text-align: center;
            margin-top: 10rem;
            width: 600px;
            margin: 10rem auto 0;
        }

        .box-icons {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .title {
            margin-top: 20px;
        }

        .title h1 {
            margin-bottom: 30px;
        }

        @media(min-width: 0) and (max-width: 474.9px) {
            .box {
                width: 80%;
                margin-top: 7rem;
            }
        }
    </style>

    <body>
        <div class="box">
            <div class="box-icons">
                <img src="{{ asset('/email/img/min.webp') }}" width="80px" alt="">
                <img src="{{ asset('/email/img/logo.webp') }}" width="180px" alt="">
            </div>
            <div class="title">
                <h1>{{ __('WELCOME TO INTERNATIONAL WEEK OF INNOVATIVE IDEAS 2022')}}</h1>
                @isset($mailData['ticket_id'])
                    <p>Congratulations. You have registered. Your ticker number: <strong>{{ $mailData['ticket_id'] }}</strong></p>
                    <p>Ticket QR-Code</p>
                    {!! QrCode::size(170)->generate(url('/').'/check/ticket/'.$mailData['ticket_id']) !!}
                    <p>Your ticket url: {{ url('/').'/check/ticket/'.$mailData['ticket_id'] }}</p>
                @endisset
                @isset($mailData['ticket'])
                    <h3>{{ __('Your varification code')}}: <h1>{{ $mailData['code'] }}</h3>
                @endisset
               
                <p>&copy;
                    <span id="currentYear">2022</span> INNOWEEK.UZ All Rights Reserved.
                </p>
            </div>
        </div>
    </body>

</html>