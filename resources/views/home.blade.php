<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BPA - Homepage</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  {{-- CDN Font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
  {{-- Main Menu --}}
  <div class="grid grid-cols-12 gap-4">
    <div class="col-start-1">
      <div class="grid grid-cols-1 max-w-sm max-h-md rounded-md border-white wrapper">
        <div class="my-5 mx-5">
          <img src="{{ asset('icons/Category.svg') }}" alt="Category" class="icon icon-category">
        </div>
    
        <div class="grid grid-rows-1 my-5 mx-5">
          <img src="{{ asset('icons/Bag.svg') }}" alt="Bag" class="icon icon-bag">
        </div>
    
        <div class="grid grid-rows-1 my-5 mx-5">
          <img src="{{ asset('icons/Heart.svg') }}" alt="Heart" class="icon icon-heart">
        </div>
    
        <div class="grid grid-rows-1 my-5 mx-5">
          <img src="{{ asset('icons/Ticket.svg') }}" alt="Ticket" class="icon icon-ticket">
        </div>
    
        <div class="grid grid-rows-1 my-5 mx-5">
          <img src="{{ asset('icons/Chat.svg') }}" alt="Chat" class="icon icon-chat">
        </div>
    
        <div class="grid grid-rows-1 my-5 mx-5">
          <img src="{{ asset('icons/Setting.svg') }}" alt="Setting" class="icon icon-setting">
        </div>
      </div>
    </div>
    <div class="col-span-8 flex justify-between">
        <h1 class="text-xl font-bold my-5">Today Menu</h1>
      <div class="mt-5">
        <input type="text" placeholder="Search menu..." class="search-field w-60 h-15 rounded-xl">
      </div>
    </div>
    <div class="col-span-3">
      <div class="box-profile">
        <h1>test</h1>
      </div>
    </div>
  </div>
</body>
</html>