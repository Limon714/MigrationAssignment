<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <title>{{ $title ?? 'StoreKeeper' }}</title>
        @livewireStyles
    </head>
    <body>
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bx-store-alt'></i>
              <span class="logo_name">Limon Store</span>
            </div>
              <ul class="nav-links">
                <li>
                  <a wire:navigate href="{{ route('dashboard') }}">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links_name">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a wire:navigate wire:navigate href="{{ route('product') }}">
                    <i class='bx bx-box' ></i>
                    <span class="links_name">Add Product</span>
                  </a>
                </li>

                
                <li>
                  <a wire:navigate wire:navigate href="{{ route('view_product') }}">
                    <i class='bx bx-box' ></i>
                    <span class="links_name">View Product</span>
                  </a>
                </li>


                <li>
                  <a href="{{ route('orderlist') }}">
                    <i class='bx bx-list-ul' ></i>
                    <span class="links_name">Order History</span>
                  </a>
                </li>
                <li class="log_out">
                  <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                  </a>
                </li>
              </ul>
          </div>
          <section class="home-section">
            <nav>
              <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
              </div>
              <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search' ></i>
              </div>
              <div class="profile-details">
                <img src="{{ asset('images/limon.png') }}" alt="">
                <span class="admin_name">Limon Islam</span>
                
              </div>
            </nav>
            <div class="home-content">
                
                    <form action=""  
                method="POST" class="p-4 grid ml-64 grid-row w-[50%]">
                    @csrf
                    <input class="p-3 ml-4 mt-4 rounded-lg focus:outline-none" type="text" name="name" value="{{ $editProduct->id }}" placeholder="Product ID">
                    <input class="p-3 ml-4 mt-4 rounded-lg focus:outline-none" type="text" name="name" value="{{ $editProduct->name }}" placeholder="Product Name">
                    <input class="p-3 ml-4 mt-4 rounded-lg focus:outline-none" type="number" name="price" value="{{ $editProduct->price }}" placeholder="Price">
                    <input class="p-3 ml-4 mt-4 rounded-lg focus:outline-none" type="number" name="quantity" value="{{ $editProduct->quantity }}" placeholder="Quantity">
                    <button type="submit"  class="p-3 ml-4 mt-4 w-[25%] text-white bg-blue-600 rounded-lg">Update</button>
                </form>
                
        </div>
          </section>
       
          @livewireScripts
        <script>
            let sidebar = document.querySelector(".sidebar");
         let sidebarBtn = document.querySelector(".sidebarBtn");
         sidebarBtn.onclick = function() {
           sidebar.classList.toggle("active");
           if(sidebar.classList.contains("active")){
           sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
         }else
           sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
         }
          </script>
         <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>

