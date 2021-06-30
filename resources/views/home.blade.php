<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Webiste Bacang Pak Ahmad">
  <meta name="author" content="Rafi Khoirulloh">
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
    <div class="col-span-8 box-main-menu">
      <div class="top-heading flex justify-between">
        <h1 class="text-xl font-bold my-5">Today Menu</h1>
        <input type="search" placeholder="Cari Menu..." class="search-field w-60 h-15 rounded-xl mr-3">
      </div>

      {{-- Banner --}}
      <div class="box-banner yellow-400">
        <div class="flex justify-between">
          <img src="{{ asset('images/food-driver.png') }}" alt="food-driver" class="img-food-driver mr-5">
          
          <div class="sub-content-banner mr-5">
            <h2 class="font-bold text-xl">Hallo, Selamat datang Rafii!</h2>
            <h3 class="font-normal text-justify text-sm mt-3 mb-5">Kamu memiliki 10 voucher diskon menu yang belum kamu pakai. Ayo segera pakai voucher kamu sebelum voucher tersebut hangus</h2>
            <a href="#" class="w-5 h-5 px-4 py-1 text-sm text-white rounded-2xl bg-yellow-400">Click Here</a>
          </div>
        </div>
      </div>

      {{-- Menu Category --}}
      <div class="box-menu-category">
        <div class="flex justify-between mt-5 top-heading">
          <h1 class="font-bold text-xl">Menu Category</h1>
          <a href="#" class="font-medium text-md text-yellow-400 flex">Selengkapnya
            <div class="box-plus bg-yellow-400 w-4 h-4 rounded-lg ml-2">
              <img src="{{ asset('icons/right-arrow.svg') }}" alt="right arrow" class="icon icon-right-arrow">
            </div>
          </a>
        </div>
      </div>

      {{-- Sub Menu Category --}}
      <div class="sub-menu-category">
        <div class="flex justify-between mt-5 mr-5">
          <div class="box-icon-category box-icon-category-active bg-white rounded-xl">
            <div class="box-icon box-active">
              <img src="{{ asset('icons/Burger_Final.png') }}" alt="burger" class="icon icon-burger">
            </div>
            <h3 class="font-bold text-sm ml-2 mt-5 font-active">Makanan Pokok</h3>
          </div>

          <div class="box-icon-category bg-white rounded-xl">
            <div class="box-icon">
              <img src="{{ asset('icons/Donut.png') }}" alt="burger" class="icon icon-burger">
            </div>
            <h3 class="font-bold text-sm ml-1 mt-5">Makanan Satuan</h3>
          </div>

          <div class="box-icon-category bg-white rounded-xl">
            <div class="box-icon">
              <img src="{{ asset('icons/Fries.png') }}" alt="burger" class="icon icon-burger">
            </div>
            <h3 class="font-bold text-sm ml-3 mt-5">Makanan Paket</h3>
          </div>

          <div class="box-icon-category bg-white rounded-xl">
            <div class="box-icon">
              <img src="{{ asset('icons/Hot Dog.png') }}" alt="burger" class="icon icon-burger">
            </div>
            <h3 class="font-bold text-sm ml-1 mt-5">Snack & Cemilan</h3>
          </div>

          <div class="box-icon-category bg-white rounded-xl">
            <div class="box-icon">
              <img src="{{ asset('icons/Glass_Drink.png') }}" alt="burger" class="icon icon-burger">
            </div>
            <h3 class="font-bold text-sm mx-5 mt-5">Jus Buah</h3>
          </div>

          <div class="box-icon-category bg-white rounded-xl">
            <div class="box-icon">
              <img src="{{ asset('icons/Soda_Cup.png') }}" alt="burger" class="icon icon-burger">
            </div>
            <h3 class="font-bold text-sm mx-5 mt-5">Minuman</h3>
          </div>
        </div>
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