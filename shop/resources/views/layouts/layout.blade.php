<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="{{asset('assets/scss/dist/styles.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css-tailwind/main.css')}}">
    <style>
     .active-showing{
          opacity:0;
          visibility:hidden;
          transition: .3s;
          
     }
    </style>
</head>

<body class='body__dashboard'>
    <nav class="sidebar h-[100vh] close side-bar__dashboard shadow-md">
        <header>
            @php 
            use Illuminate\Support\Facades\Session;
            @endphp 
            <div class="image-text">
                <span class="image">
                    <img 
                    src='{{Session()->get('user')->img}}' 
                        alt='' width='50px' height='50px' />
                </span>
 
                <div class="text logo-text">
                    <span class="name flex items-center">
                        {{Session()->get('user')->username}}
                    </span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box search__box-dashboard">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#" class='bg-color-rating'>
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class="bi bi-person-check icon"></i>
                            <span class="text nav-text">Employes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class="bi bi-bag icon"></i>
                            <span class="text nav-text">Products</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class="bi bi-basket icon"></i>
                            <span class="text nav-text">Orders</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
    <section class="home__dashboard">
     <div  class='fixed overlay top-0 left-0 w-full h-full bg-color-gray-dark opacity-10 z-[10000] active-showing'></div>
        <div class="content__dashboard py-2 px-4 md:px-10 relative flex flex-col">
            <div class='profiles__dashboard flex justify-between items-center p-5'>
                <h3 class="text-md md:text-3xl font-semibold ">Dashboard</h3>
                <div class='w-14 h-14 p-1 cursor-pointer  border border-color-red-button rounded-full overflow-hidden'>
                    <img 
                    class='w-full h-full rounded-full' 
                    src='{{Session()->get('user')->img}}' 
                    alt='image profile '/>
                </div>
            </div>
            @yield('content')

            <script src='{{asset('assets/js/admin/sidebar.js')}}'></script>
</body>

</html>
                       

                         
                                   