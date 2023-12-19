<<<<<<< HEAD
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
                  <a wire:navigate href="{{ route('dashboard') }}" >
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
                    <input class="p-3 ml-4 mt-4 rounded-lg focus:outline-none" type="text" name="name" value="{{ $editSell->name }}" placeholder="Product Name">
                    <input class="p-3 ml-4 mt-4 rounded-lg focus:outline-none" type="number" name="price" value="{{ $editSell->price }}" placeholder="Price">
                    <input class="p-3 ml-4 mt-4 rounded-lg focus:outline-none" type="number" name="quantity" value="{{ $editSell->quantity - $editSell->quantity }}" placeholder="Quantity">
                    <button type="submit"  class="p-3 ml-4 mt-4 w-[17%] text-white bg-blue-600 rounded-lg">Sell</button>
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

=======
<main>
    
    <!-- transactions.blade.php -->
    <table class="p-3 ml-64 rounded-lg">
        <thead>
           <tr class="border-2">
                <th class="p-3 ">Product ID</th>
                <th class="p-3 ">Product Name</th>
                <th class="p-3 ">In Stock </th>
                <th class="p-3 ">Quantity </th>
                <th class="p-3 text-center"> Action </th>
                <!-- Other transaction details -->
            </tr>
            @foreach ($view as $viu)
            <tr class="border-2 text-center">
                <td class="p-3 m-4 bg-gray-100 ">{{ $viu->id }}</td>
                <td class="p-3 m-4 bg-gray-300 ">{{ $viu->name }}</td>
                <td class="p-3 m-4 bg-orange-100">{{ $viu->quantity }}</td>
                <td class="p-3 m-4 bg-blue-100">
                    <form action="">
                        <input type="number" class="text-center outline-none" name="qty" id="" value="{{ $viu->quantity - $viu->quantity  }}">
                    </form></td>
                <td class="p-3 m-4"> <a wire:navigate href="{{ route('view_product') }}" class="p-2  text-white bg-blue-600 rounded-lg">Sell</a>
                </td>
            </tr>
            @endforeach
            
        </thead>
        <tbody>
            <!-- Loop through transaction history data and display in table rows -->
        </tbody>
    </table>
    
    </main>
    
   
>>>>>>> c26f7eea498ed1fc70773b94ea7d0b6cce310687
