<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userPage</title>
    <!-- Favicons -->
    <link href="{{asset('/frontend/image/favicon.ico')}}" rel="icon">
    <link href="{{asset('/frontend/image/apple-touch-icon.ico')}}" rel="apple-touch-icon">
  
    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{asset('/frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/frontend/css/app.css')}}">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
</head>
<body>
      <div class="qrcodee pt-2">
            <div class="d-flex justify-content-around ticket">
              <img src="{{asset('/frontend/image/logo/minin 1.png')}}"  alt="">
              <img src="{{asset('/frontend/image/logo/innoweek 1.png')}}"  alt="">
              <img src="{{asset('/frontend/image/logo/MO123 1.png')}}"  alt="">
            </div>
            <h1 class="mt-3"> {{__('ELECTRONIC TICKET')}} </h1>
            <p class="text-center"> {{__('Ticket to enter Innoweek-2022')}} </p>
            <div class="d-flex justify-content-around userinf mt-3">
              <h1 class="d-flex align-items-center"> {{$ticket->first_name }} {{ $ticket->last_name }} </h1>
              <img src="{{asset('/frontend/image/image 2.png')}}" alt="">
            </div>
            <div class="grid-container">
              <p class="d-flex align-items-center space-x-2">
                <img class="flex-shrink-0" src="{{asset('/frontend/image/icon/Group 3.png')}}" width="20px" alt=""> 
                <span>{{__('Validity period')}}:</span>
                <span class="ml-autoi">21.10.2022</span>
              </p>
        
              <p class="d-flex align-items-center space-x-2">
                <img class="flex-shrink-0" src="{{asset('/frontend/image/icon/Group 1.png')}}" width="20px" alt=""> 
                <span>{{__('Date and time of visit')}}: </span>
                <span class="ml-autoi">17.10.2022 10:00</span>
        
              </p>
        
              <p class="d-flex align-items-center space-x-2">
                <img class="flex-shrink-0" src="{{asset('/frontend/image/icon/Group 2.png')}}" width="20px" alt=""> 
                <span>{{__('University Street, 7, Tashkent city')}}</span>
              </p>
            </div>
            <p class="footer"> {{__('It is strictly forbidden for another person to use this pass.')}} </p>
            
        </div>  
        <p class="investorr">{{ Str::upper($ticket->profession_name) }}</p>
        
</body>
</html>