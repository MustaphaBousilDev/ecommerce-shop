<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('assets/css-tailwind/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/scss/dist/styles.css')}}"/>
    @livewireStyles
    <title>Home</title>
</head> 
<body class="body">
    <!--navbar top-->
    <div class="bg-color-gray-dark w-[100vw]   md:px-20   h-12 items-center flex header__home">
        <div class=" w-[100%]    flex justify-between text-xs md:text-md">
            <div class="flex items-center  sm:ml-2 md:ml-0">
                <div class="text-color-red-button"><i class='bx bx-phone-call'></i></div>
                <div class="mx-2 text-color-gray-background-light font-medium"><span>Support</span>+212.448.494</div>
            </div>
            <div class="hidden md:flex">
                <i class='bx bxs-chevron-left icon-direction-left'></i>
                <div class="offre">
                    <p class="active">Free shipping for order over $200</p>
                    <p>wa return money within 30 days</p>
                    <p>Friendly 24/7 customer suppport</p>
                </div>
                <i class='bx bxs-chevron-right icon-direction-right'></i>
            </div>
            <div class="flex cursor-pointer relative  sm:mr-4 md:mr-0
            " onclick='menu__Toggle()'>
                <div>
                    <img 
                    class="w-7 h-4"
                    src="https://www.shutterstock.com/image-vector/united-states-america-flag-vector-260nw-1406928203.jpg" 
                    alt="language"/>
                </div>
                <div class="ml-2 text-color-gray-background-light">
                    <span>Eng/ $</span>
                </div>
                <div class="flex ml-1">
                    <i class='bx bxs-down-arrow text-color-gray-background-light  text-xs'style="font-size:9px;"></i>
                </div>   
                <div class="fixed z-[200] rounded  w-40 h-[230px] 
                        bg-while right-[20px] shadow-lg  
                        md:right-[100px] p-2 
                        menu-language

                        ">
                        <div class="flex items-center mb-2 bg-while p-2 cursor-pointer scale-[.98] hover:scale-100 transition opacity-[.8] hover:opacity-[1]">
                            <img src="https://cdn.freebiesupply.com/logos/large/2x/france-logo-svg-vector.svg"
                            class="w-9 h-5"
                             alt="french"/>
                             <p class="mx-2 text-md">Français</p>
                        </div>
                        <div class="flex items-center mb-2 bg-while p-2 cursor-pointer scale-[.98] hover:scale-100 transition opacity-[.8] hover:opacity-[1]">
                            <img src="https://cdn.freebiesupply.com/logos/large/2x/france-logo-svg-vector.svg"
                            class="w-9 h-5"
                             alt="french"/>
                             <p class="mx-2 text-md">Français</p>
                        </div>
                        <div class="flex items-center mb-2 bg-while p-2 cursor-pointer scale-[.98] hover:scale-100 transition opacity-[.8] hover:opacity-[1]">
                            <img src="https://cdn.freebiesupply.com/logos/large/2x/france-logo-svg-vector.svg"
                            class="w-9 h-5"
                             alt="french"/>
                             <p class="mx-2 text-md">Français</p>
                        </div>
                        <div class="flex items-center mb-2 bg-while p-2 cursor-pointer scale-[.98] hover:scale-100 transition opacity-[.8] hover:opacity-[1]">
                            <img src="https://cdn.freebiesupply.com/logos/large/2x/france-logo-svg-vector.svg"
                            class="w-9 h-5"
                             alt="french"/>
                             <p class="mx-2 text-md">Français</p>
                        </div>
                        <div class="flex items-center mb-2 bg-while p-2 cursor-pointer scale-[.98] hover:scale-100 transition opacity-[.8] hover:opacity-[1]">
                            <img src="https://cdn.freebiesupply.com/logos/large/2x/france-logo-svg-vector.svg"
                            class="w-9 h-5"
                             alt="french"/>
                             <p class="mx-2 text-md">Français</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!--navbar bottom-->
    <div class="navbar__home px-3   md:px-20">
        <div class="top-navbar  sm:px-4 md:px-0">
            <div>
                <a href='/'>
                    <div class="logo-mugiwara">
                        <img 
                        src="https://seeklogo.com/images/M/mugiwara-logo-303FD55C54-seeklogo.com.png"
                        alt="mugiwara logo"/>
                    </div>
                    <div class="font-bold name-logo">
                        <a class="" href="#">Mugi
                            <span class="text-color-gray-dark">wara</span>
                        </a>
                    </div>
                </a>
            </div>
            <div>
                <div>
                    <form class="w-full relative form-search">
                        <i class='bx bx-search absolute top-[50%] 
                                translate-y-[-50%] z-30 left-2
                                text-color-gray-background-light' >
                        </i>
                        <input
                         class="
                            bg-gray-200 appearance-none border-2 
                            border-color-gray-background-light
                            rounded w-full py-2 px-6 text-gray-700 leading-tight transition
                            focus:outline-none focus:bg-white focus:border-color-red-button" 
                            id="inline-password"  placeholder="search"
                         type="search"/>
                    </form>
                </div>
            </div>
            <div>
                <div class="icon-wishlist">
                    <a href='{{route('product.wishlist')}}'>
                        <i class='bx bx-heart 
                        text-color-gray-background-light rounded-full
                        w-9 h-9 flex items-center justify-center
                        p-2' >
                        </i>
                    </a>
                    <p class="text-xs mx-2 hidden lg:block">wishlist</p>
                </div>
                <div class="account">
                    @php
                    use App\Models\User;
                    $user=User::find(session('loginId'));
                    @endphp 
                    @if($user)
                        <div class='icon-header'>
                        <a href='{{route("admin.dashboard")}}'>
                            <img class='w-9 h-9 rounded-full' src="{{$user->img}}" alt='profile img'/>
                        </a>
                        </div>
                        
                    @else 
                        <div class="icon-header">
                              <i class="bx bx-user text-color-gray-background-light" ></i>
                        </div>
                    @endif
                    <div class="sign-in">
                            @if($user)
                                @if($user->utype=='ADM')
                                    <a href='{{route("admin.dashboard")}}'>Admin</a>
                                @else
                                    <a href='#'>{{$user->username}}</a>
                                @endif
                            @else 
                                <a href='{{route('login')}}'>Sign In</a>
                            @endif
                    </div>
                </div>
                <div class="cart-shopping relative cart cart__parent">
                    <div class="icon-cart-shopping cart">
                        <div class="relative cart">
                            <span class="absolute bg-color-red-button cart">1</span>
                            <a href='{{route('cart')}}'><i class='bx bx-cart-alt 
                                text-color-gray-background-light cart' ></i></a>
                        </div>
                    </div>
                    <div class="cart-boxing cart">
                        <span class="cart">My Cart</span>
                        <p class="text-md cart">289$ 
                            <i class='bx bx-chevron-down text-lg text-left font-bold cart '></i>
                        </p>
                    </div>
                    <div class="body  box-carts fixed z-[900000] rounded w-60 h-[360px]  md:w-[400px] md:h-[400px] 
                            shadow-lg top-[120px]  md:top-[120px] border-[#cbd5e1] border 
                            bg-while
                            right-[30px]    md:right-[70px]  p-5  flex flex-col cart-menu">
                        <p class="p-2 h-[70%] 
                            overflow-y-auto w-[100%] relative">
                            <span class=" bg-while h-20 flex items-center cursor-pointer
                                border-b border-[#cbd5e1]">
                                <img class="w-16 h-16" 
                                    src="https://cartzilla.createx.studio/img/shop/cart/widget/01.jpg"
                                    alt="fucking shoes"/>
                                <span class="flex flex-col">
                                    <span class="font-bold">Women Colorblock Sneakers</span>
                                    <span class="text-color-red-button">$150.00x 
                                        <b class="text-[#000]" style="font-size: 12px;">1</b>
                                    </span>
                                </span>
                            </span>
                            <span class="border-[#cbd5e1] bg-while h-20 flex items-center cursor-pointer
                                border-b">
                                <img class="w-16 h-16" 
                                    src="https://cartzilla.createx.studio/img/shop/cart/widget/02.jpg"
                                    alt="fucking shoes"/>
                                <span class="flex flex-col">
                                    <span class="font-bold">Women Colorblock Sneakers</span>
                                    <span class="text-color-red-button">$150.00x 
                                        <b class="text-[#000]" style="font-size: 12px;">1</b>
                                    </span>
                                </span>
                            </span>
                            <span class="border-[#cbd5e1] bg-while h-20 flex items-center cursor-pointer
                                border-b">
                                <img class="w-16 h-16" 
                                    src="https://cartzilla.createx.studio/img/shop/cart/widget/03.jpg"
                                    alt="fucking shoes"/>
                                <span class="flex flex-col">
                                    <span class="font-bold">Women Colorblock Sneakers</span>
                                    <span class="text-color-red-button">$150.00x 
                                        <b class="text-[#000]" style="font-size: 12px;">1</b>
                                    </span>
                                </span>
                            </span>
                            <span class="border-[#cbd5e1] bg-while h-20 flex items-center cursor-pointer
                                border-b">
                                <img class="w-16 h-16" 
                                    src="https://cartzilla.createx.studio/img/shop/cart/widget/04.jpg"
                                    alt="fucking shoes"/>
                                <span class="flex flex-col">
                                    <span class="font-bold">Women Colorblock Sneakers</span>
                                    <span class="text-color-red-button">$150.00x 
                                        <b class="text-[#000]" style="font-size: 12px;">1</b>
                                    </span>
                                </span>
                            </span>
                            <span class="border-[#cbd5e1] bg-while h-20 flex items-center cursor-pointer
                                border-b">
                                <img class="w-16 h-16" 
                                    src="https://cartzilla.createx.studio/img/shop/catalog/04.jpg"
                                    alt="fucking shoes"/>
                                <span class="flex flex-col">
                                    <span class="font-bold">Women Colorblock Sneakers</span>
                                    <span class="text-color-red-button">$150.00x 
                                        <b class="text-[#000]" style="font-size: 12px;">1</b>
                                    </span>
                                </span>
                            </span>
                            <span class="border-[#cbd5e1] bg-while h-20 flex items-center cursor-pointer
                                border-b">
                                <img class="w-16 h-16" 
                                    src="https://cartzilla.createx.studio/img/shop/catalog/07.jpg"
                                    alt="fucking shoes"/>
                                <span class="flex flex-col">
                                    <span class="font-bold">Women Colorblock Sneakers</span>
                                    <span class="text-color-red-button">$150.00x 
                                        <b class="text-[#000]" style="font-size: 12px;">1</b>
                                    </span>
                                </span>
                            </span>
                            <span class="border-[#cbd5e1] bg-while h-20 flex items-center cursor-pointer
                                border-b">
                                <img class="w-16 h-16" 
                                    src="https://cartzilla.createx.studio/img/shop/catalog/03.jpg"
                                    alt="fucking shoes"/>
                                <span class="flex flex-col">
                                    <span class="font-bold">Women Colorblock Sneakers</span>
                                    <span class="text-color-red-button">$150.00x 
                                        <b class="text-[#000]" style="font-size: 12px;">1</b>
                                    </span>
                                </span>
                            </span>
                        </p>
                        <p class="p-2 flex mt-4 justify-between text-lg">
                            <span class="text-[14px] md:text-lg">Subtotal: 
                                <b class="text-color-red-button text-[14px] md:text-lg font-normal">$265</b>.
                                <b style="font-size: 12px;" class="text-color-red-button font-normal">00</b>
                            </span>
                            <button class="border rounded text-[10px] px-1 py-0   md:text-sm md:py-2 md:px-3 border-[#cbd5e1]">
                                Expand now >
                            </button>
                        </p>
                        <button class="rounded bg-color-red-button flex 
                            justify-center items-center w-[90%] mx-auto py-2 cursor-pointer text-while
                            ">
                            <i class='bx bxl-paypal text-[#455aab]'></i>
                            <span><a href='{{route('checkout')}}'>Check Out</a></span>
                        </button>
                    </div>
                </div>
                <div class="menu-bar"><i class='bx bx-menu'></i></div>
            </div>
        </div>
        <div class="flex bottom-navbar h-16">
            <div class="departement my-depart w-[160px] flex items-center p-3 py-2 cursor-pointer
                text-color-gray-background-light relative">
                <div class="mx-1 my-depart"><i class='bx bx-grid-alt icon-departement'></i></div>
                <div class="mx-1 my-depart">Categories</div>
                <div class="flex justify-center items-center my-depart">
                    <i class='bx bxs-down-arrow icon-arrow-dow-departement my-depart'></i>
                </div>
                <div class=" overflow-y-scroll departement-products absolute bg-while shadow-md md:w-[680px] 
                    md:h-[350px] lg:w-[850px] lg:h-[450px] z-50 rounded-md
                     p-2">
                    <div class="relative flex gap-2 departement-products-categories" style="flex-wrap: wrap;">
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://i.ytimg.com/vi/q2LqMlxE8eY/maxresdefault.jpg"
                            alt ="one" class="h-full w-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">Accesoirs mobile</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/38d7f640108731.5606d146b9bb7.jpg"
                            alt ="one" class="h-full w-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">Bébé tools</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://i.wfcdn.de/teaser/1920/49296.jpg"
                            alt ="one" class="h-full w-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">Gaming</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://i.pinimg.com/736x/25/ca/42/25ca426cad1148ceff2270fe153b078e.jpg"
                            alt ="one" class="h-full w-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">Accesois women</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqlGDjIG-Wwu_HqboZZVg2vKxSjlXDWE2tZG6Qaz3xslUWbyA6L9oW0346D5xodDMXS-E&usqp=CAU"
                            alt ="one" class="h-full w-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">Sports</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7W3kSjtKsOQQUm1jP6WjXv3mtiRt27mg5Qg&usqp=CAU"
                            alt ="one" class="h-full w-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">Phones</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://ma.jumia.is/cms/SIS/moulinex/mlp/PC-OK-BANNIERE-TEASER-MOULINEX-PREPA-CULINAIRE-572X250-11-3-2021.jpg"
                            alt ="one" class="h-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">Tools Cooke</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://ma.jumia.is/cms/slider-Nivea-desktop.jpg"
                            alt ="one" class="h-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">Products propre</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://ma.jumia.is/cms/000_2022/Z-Categories/7-Supermarche/z-provi/220/epsuc-220-gris.jpg"
                            alt ="one" class="h-full w-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">Food</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://images.yourstory.com/cs/7/1da9ec3014cc11e9a1b2b928167b6c62/mensfashionbanner1572434751640png?w=752&fm=auto&ar=2:1&mode=crop&crop=faces"
                            alt ="one" class="h-full w-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">Clothes Men</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://img.huffingtonpost.com/asset/5ce6bd0c210000b90ed0ed6a.jpeg?ops=scalefit_720_noupscale"
                            alt ="one" class="h-full w-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">Women Clothes</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://mir-s3-cdn-cf.behance.net/projects/404/f9d2a2112033561.Y3JvcCwxMjkzLDEwMTEsMCww.jpg"
                            alt ="one" class="h-full w-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">TV</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://www.shutterstock.com/image-photo/kitchen-utensils-cooking-tools-on-260nw-1738748708.jpg"
                            alt ="one" class="h-full w-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">Tools Cuisins</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://www.ensemble-multitudes.com/phooksee/2021/06/instruments-musique-facile-apprendre-5.jpg"
                            alt ="one" class="h-full w-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">Musique Tools</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://images.ctfassets.net/lhzh8coidz9i/5oiTD260pHHo0cAI2RJDtP/3a16d739b3c9a2d2be8f82422503c7ef/5_Creative_Counting_Games_for_Kids.jpg"
                            alt ="one" class="h-full w-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">Kids game</span>
                        </div>
                        <div class="box relative rounded-lg overflow-hidden w-[24%] h-[100px]">
                            <img src="https://www.blog-du-net.net/wp-content/uploads/ordi-surface.jpg"
                            alt ="one" class="h-full w-full"/>
                            <span class="absolute top-0 left-0 w-full h-full">PC Portable</span>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="links-page flex items-center">
                <ul class="flex pr-3 bg-while">
                    <li class="mx-7 lg:mx-4"><a href="/">Home</a></li>
                    <li class="mx-7 lg:mx-4"><a href="{{route('shop')}}">Shop</a></li>
                    <li class="mx-7 lg:mx-4 relative account-link">
                        <a  href="#" class="relative">Account</a>
                        <ul class="fixed list-account-nav  left-[-10px]  p-5 shadow-sm rounded-md w-44 lg:w-56 top-10 bg-while">
                            <li class="mb-2 transition relative links-one-secondary">
                                <a class="flex items-center justify-between" href="#">Shop User Account <i class='bx bxs-right-arrow'></i></a>
                                <ul class="fixed z-[3000] left-48 w-52 top-[0px] bg-while rounded-md shadow-sm p-5 list-ul-secondary">
                                    <li class="mb-2"><a href="#">Orders History</a></li>
                                    <li class="my-2"><a href="#">Profile Settings</a></li>
                                    <li class="my-2"><a href="#">Account Address</a></li>
                                    <li class="my-2"><a href="#">Payments Method</a></li>
                                    <li class="my-2"><a href="#">Wishlist</a></li>
                                </ul>
                            </li>
                            <li class="my-2 transition links-one-secondary-2">
                                <a class="flex items-center justify-between" href="#">Vendor Dashboard  <i class='bx bxs-right-arrow'></i></a>
                                <ul class="fixed z-[3000] left-10 w-44 lg:w-65 top-[0px] bg-while rounded-md shadow-sm p-5  list-ul-secondary-2">
                                    <li class="mb-2"><a href="#">Settings</a></li>
                                    <li class="my-2"><a href="#">Favourite</a></li>
                                    <li class="my-2"><a href="#">Sales</a></li>
                                    <li class="my-2"><a href="#">Products</a></li>
                                </ul>
                            </li>
                            <li class="my-2 transition"><a href="#">Sign in / Sign up</a></li>
                            <li class="mt-2 transition"><a href="#">Password Recovery</a></li>
                        </ul>
                    </li>
                    <li class="mx-7 lg:mx-4"><a href="#">Blogs</a></li>
                    <li class="mx-7 lg:mx-4"><a href="{{route('contact')}}">Contact</a></li>
                    
                </ul>
            </div>
        </div>
        <div class="nav-links-bottom-phono shadow-sm">
            <div class="">
                <form>
                    <div class="relative">
                        <input class="input-search-mobile" type="search" placeholder="Search for Products"/>
                        <i class='bx bx-search icon-search-mobile'></i>
                    </div>
                </form>
                <ul class='listat'>
                    <li class="departement_mode_phone">
                        <a href="#">
                            <i class='bx bx-grid-alt icon-grid' ></i>
                            <span>Departement</span>
                            <i class='bx bx-chevron-down icon-arrow'></i>
                        </a>
                    </li>
                    <ul class="list_categories_mode_phono">
                        <li class="flex">
                            <a href="#" class="w-[25%] mr-2 overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://i.ytimg.com/vi/q2LqMlxE8eY/maxresdefault.jpg" alt="" />
                            </a>
                            <a href="#" class="w-[25%] mr-2 overflow-hidden rounded-md">
                                <img class="h-[90px] w-full"  src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/38d7f640108731.5606d146b9bb7.jpg" alt="" />
                            </a>
                            <a href="#" class="w-[25%] mr-2 overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://i.wfcdn.de/teaser/1920/49296.jpg" alt="" />
                            </a>
                            <a href="#" class="w-[25%] overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://i.pinimg.com/736x/25/ca/42/25ca426cad1148ceff2270fe153b078e.jpg" alt="" />
                            </a>
                        </li>
                        <li class="flex">
                            <a href="#" class="w-[25%] mr-4 overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://i.pinimg.com/736x/25/ca/42/25ca426cad1148ceff2270fe153b078e.jpg" alt="" />
                            </a>
                            <a href="#" class="w-[25%] mr-4 overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqlGDjIG-Wwu_HqboZZVg2vKxSjlXDWE2tZG6Qaz3xslUWbyA6L9oW0346D5xodDMXS-E&usqp=CAU" alt="" />
                            </a>
                            <a href="#" class="w-[25%] mr-4 overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7W3kSjtKsOQQUm1jP6WjXv3mtiRt27mg5Qg&usqp=CAU" alt="" />
                            </a>
                            <a href="#" class="w-[25%]  overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://ma.jumia.is/cms/SIS/moulinex/mlp/PC-OK-BANNIERE-TEASER-MOULINEX-PREPA-CULINAIRE-572X250-11-3-2021.jpg" alt="" />
                            </a>
                        </li>
                        <li class="flex">
                            <a href="#" class="w-[25%]  mr-4 overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://ma.jumia.is/cms/slider-Nivea-desktop.jpg" alt="" />
                            </a>
                            <a href="#" class="w-[25%] mr-4 overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://ma.jumia.is/cms/000_2022/Z-Categories/7-Supermarche/z-provi/220/epsuc-220-gris.jpg" alt="" />
                            </a>
                            <a href="#" class="w-[25%] mr-4 overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://images.yourstory.com/cs/7/1da9ec3014cc11e9a1b2b928167b6c62/mensfashionbanner1572434751640png?w=752&fm=auto&ar=2:1&mode=crop&crop=face" alt="" />
                            </a>
                            <a href="#" class="w-[25%] overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://img.huffingtonpost.com/asset/5ce6bd0c210000b90ed0ed6a.jpeg?ops=scalefit_720_noupscale" alt="" />
                            </a>
                        </li>
                        <li class="flex">
                            <a href="#" class="w-[25%] mr-4 overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://mir-s3-cdn-cf.behance.net/projects/404/f9d2a2112033561.Y3JvcCwxMjkzLDEwMTEsMCww.jpg" alt="" />
                            </a>
                            <a href="#" class="w-[25%] mr-4 overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://www.shutterstock.com/image-photo/kitchen-utensils-cooking-tools-on-260nw-1738748708.jpg" alt="" />
                            </a>
                            <a href="#" class="w-[25%] mr-4 overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://www.ensemble-multitudes.com/phooksee/2021/06/instruments-musique-facile-apprendre-5.jpg" alt="" />
                            </a>
                            <a href="#" class="w-[25%] overflow-hidden rounded-md">
                                <img class="h-[90px] w-full" src="https://images.ctfassets.net/lhzh8coidz9i/5oiTD260pHHo0cAI2RJDtP/3a16d739b3c9a2d2be8f82422503c7ef/5_Creative_Counting_Games_for_Kids.jpg" alt="" />
                            </a>
                        </li>
                    </ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="account-link-mobile-li z-[200000]" onclick="console.log('hhhh')">
                        <a href="#">
                            <span>Account</span>
                            <i class='bx bx-chevron-down icon-arrow'></i>
                        </a>
                    </li>
                    <div class=" account-list-mobile rounded-md">
                        <span class="mx-5 py-1 account-link-version-mobile" >
                            <a href="#" class="" >
                                Shop User Account <i class='bx bxs-right-arrow'></i>
                            </a>
                            <div class="child-one-account-version-mobile">
                                <span><a href="#">Orders History</a></span>
                                <span><a href="#">Profile Settings</a></span>
                                <span><a href="#">Account Address</a></span>
                                <span><a href="#">Payments Method</a></span>
                                <span><a href="#">Wishlist</a></span>
                            </div>
                        </span>
                        <span class="mx-5 py-1  vendor-dashboard-link-version-mobile">
                            <a href="#" class="">
                                Vendor Dashboard  <i class='bx bxs-right-arrow'></i>
                            </a>
                            <div class="child-two-account-version-mobile">
                                <span><a href="#">Settings</a></span>
                                <span><a href="#">Favourite</a></span>
                                <span><a href="#">Sales</a></span>
                                <span><a href="#">Products</a></span>
                            </div>
                        </span>
                        <span class="mx-5 py-1"><a href="#" class="">Sign in / Sign up</a></span>
                        <span class="mx-5 py-1"><a href="#" class="">Password Recovery</a></span>
                    </div>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
    {{$slot}}
    <footer class="">
     <div class="header__footer  md:p-2 lg:p-8 ">
         <div class="child child__footer-1 flex justify-center items-center ">
             <a href="#" class="flex items-center">
                 <div><h2 class="text-lg sm:text-xl md:text-3xl lg:text-4xl text-while">MUGIWARA</h2></div>
             </a>
         </div>
         <div class="child child__footer-2 flex justify-center items-center">
             <form class="md:w-[90%] mx-auto bg-while rounded-2xl overflow-hidden">
                 <div class="w-[100%]  bg-color-rating relative">
                     <i class='bx bx-envelope absolute left-2 top-[25%] text-2xl z-40 text-color-gray-dark'></i>
                     <input class="w-[100%] h-[100%] p-4 px-9 border-0 outline-none text-color-gray-dark" type="email" placeholder="Your Email" name="message"/>
                     <button class="absolute border-none outline-none right-0 z-40 text-color-gray-dark bg-color-red-button h-[100%] w-20">
                         <i class='bx bx-send send text-3xl'></i>
                     </button>
                 </div>
             </form>
         </div>
         <div class="child child__footer-3 ">
             <a href="#" class="flex border mx-2 items-center w-[45%] rounded-md p-1 px-3">
                 <div class="mx-1"><i class='bx bxl-apple text-3xl' ></i></div>
                 <div>
                     <span class="text-xs m-0">Download on the</span>
                     <h3 class="m-0 mt-[-8px] text-while">App Store</h3>
                 </div>
             </a>
             <a href="#" class="flex border items-center w-[45%] rounded-md  p-1 px-3">
                 <div class="mx-1 m-0"><i class='bx text-3xl bxl-play-store' ></i></div>
                 <div>
                     <span class="text-xs">Git in on</span>
                     <h3 class="m-0 mt-[-8px] text-while">Google Play</h3>
                 </div>
             </a>
         </div>
     </div>
     <div class="body__footer  bg-color-gray-dark">
         <div class="our__services p-5 md:p-8 lg:p-8 ">
             <ul>
                 <h2 class="text-while text-xl">SERVICE CLIENT</h2>
                 <li><a href="#">Contactez-nous</a></li>
                 <li><a href="#">Aide & FAQ</a></li>
                 <li><a href="#">Commandez par Tél: 05.22.04.18.18</a></li>
                 <li><a href="#">Utiliser un coupon de réduction</a></li>
                 <li><a href="#">Politique de Résolution des Litiges</a></li>
                 <li><a href="#">Retour et Remboursement</a></li>
             </ul>
             <ul>
                 <h2 class="text-while text-xl">À PROPOS</h2>
                 <li><a href="#">Qui sommes-nous</a></li>
                 <li><a href="#">Carrières chez Jumia</a></li>
                 <li><a href="#">Conditions Générales d'Utilisation</a></li>
                 <li><a href="#">Notification sur la confidentialité</a></li>
                 <li><a href="#">Notification sur les cookies</a></li>
                 <li><a href="#">Termes et Conditions de Retour et Remboursement</a></li>
                 <li><a href="#">Jumia Express</a></li>
                 <li><a href="#">Toutes les boutiques officielles</a></li>
                 <li><a href="#">Ventes Flash</a></li>
             </ul>
             <ul>
                 <h2 class="text-while text-xl">GAGNEZ DE L'ARGENT AVEC JUMIA</h2>
                 <li><a href="#">Vendez sur Jumia</a></li>
                 <li><a href="#">Devenez Consultant Jumia</a></li>
                 <li><a href="#">Devenir partenaire de service logistique</a></li>
                 <li><a href="#">Devenir livreur Jumia.ma</a></li>
                 <li><a href="#">Devenir livreur Jumia Food</a></li>
             </ul>
             <ul>
                 <h1 class="text-while text-xl">JUMIA À L'INTERNATIONAL</h1>
                 <li><a href="#">Egypte</a></li>
                 <li><a href="#">Ghana</a></li>
                 <li><a href="#">Kenya</a></li>
                 <li><a href="#">Nigeria</a></li>
                 <li><a href="#">Sénégal</a></li>
                 <li><a href="#">Tunisie</a></li>
                 <li><a href="#">Uganda</a></li>
             </ul>
         </div>
     </div>
    </footer>
<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
<script src="{{asset('assets/js/header-home.js')}}"></script>
<script src="{{asset('assets/js/navab-home.js')}}"></script>
<script src="{{asset('assets/js/slider-home.js')}}"></script>
<script src="{{asset('assets/js/slider-category-home.js')}}"></script>
<script src="{{asset('assets/js/slider-product-offre-home.js')}}"></script>
<script src="{{asset('assets/js/ads-offre-home.js')}}"></script>
<!--shop page-->
<script src="{{asset('assets/js/shop/drop_down-categories.js')}}"></script>
<script src="{{asset('assets/js/shop/filter-colors.js')}}"></script>
<script src="{{asset('assets/js/shop/range.js')}}"></script>
<script src="{{asset('assets/js/shop/select.js')}}"></script>
<!--product details-->
<script src="{{asset('assets/js/product-details/info-filter.js')}}"></script>
<script src="{{asset('assets/js/product-details/slider.js')}}"></script>
<!--login-->
<script src="{{asset('assets/js/login/change-img.js')}}"></script>
<script src="{{asset('assets/js/login/validation.js')}}"></script>
<!--register-->
<script src="{{asset('assets/js/register/change-img.js')}}"></script>
<script src="{{asset('assets/js/register/validation.js')}}"></script>

@livewireScripts
</body>
</html>