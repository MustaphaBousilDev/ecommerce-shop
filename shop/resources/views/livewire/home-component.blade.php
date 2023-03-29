<div>
    <!--navbar slider img-->
    <div class="slider__home">
        @foreach($sliders as $slider)
        <div class="container-slide">
            <div>
                <div  
                class="content-slider"  style="background-color:{{$slider->colors}};">
                <div class="info__slider">
                    <p class="paragraph__slide hidden-motion">Has just arrived!</p>
                    <h2 class="heading__slide hidden-motion">{{$slider->title}}</h2>
                    <span class="span__slide hidden-motion">{{$slider->description}}</span>
                </div>
                @php  $slug = Str::slug($slider->title, '-'); @endphp
                <a style="z-index: 10000" class="btn__slide-shop hidden-motion opacity-100" href="{{route('slider.products',['slug'=>$slug])}}">
                    Show Now <i class='bx bx-chevron-right'></i>
                </a>
                </div>
                <div class="img-slider bg-color-red-button" 
                style="background-image: url('{{asset('sliders/'.$slider->image)}}');
                background-size: cover;
                background-position: center;
                "
                >
                    
                </div>
            </div>
        </div>
        @endforeach 
        <ul class="bullets-pagination left-[50%] z-30  
            absolute flex bottom-2  h-5 
            translate-x-[-50%] items-center justify-center">
        <!--
            
            <li class="w-3 h-3 p-0 transition  mx-1 border border-1 border-color-red-button rounded-full cursor-pointer active"></li>
            <li class="w-3 h-3 p-0  mx-1 border border-1 transition border-color-red-button rounded-full cursor-pointer"></li>
            <li class="w-3 h-3 p-0  mx-1 border border-1 transition border-color-red-button rounded-full cursor-pointer"></li>
            <li class="w-3 h-3 p-0  mx-1 border border-1 transition border-color-red-button rounded-full cursor-pointer"></li>
        
        -->
        </ul>
        <span class="absolute right-5 opacity-0 flex  invisible top-[50%] translate-y-[-50%] w-11 h-11 
            items-center justify-center  z-20 rounded-full cursor-pointer
            span-icons-slier span-icons-slier-right">
            <i class='bx bxs-chevron-right scale-x-[1.5] scale-y-[1.9] icon-right-slider icon-slider'></i>
        </span> 
        <span class="absolute left-5 opacity-0 flex invisible top-[50%] translate-y-[-50%] w-11 h-11  
            items-center justify-center  z-20 rounded-full cursor-pointer
            span-icons-slier span-icons-slier-left">
            <i class='bx bxs-chevron-left scale-x-[1.5] scale-y-[1.9] icon-left-slider icon-slider' ></i>
        </span>
    </div>
    <!--categories products -->
    <div class="category__slider-product-home h-[100px] sm:h-[100px] md:h-[150px] lg:h-[160]  mx-1 md:mx-10 lg:mx-28 my-1 bg-color-red-button relative shadow-md">
        <div class="content__categories">
            <div class="category-home">
                <div class="box-category mx-2 md:mx-3 sm:min-w-[80px] sm:h-[80px] md:min-w-[120px] md:h-[120px] lg:min-w-[140px] lg:h-[140px] bg-[url('https://i.ytimg.com/vi/q2LqMlxE8eY/maxresdefault.jpg')] bg-cover bg-center"></div>
                <div class="box-category mx-2 md:mx-3 sm:min-w-[80px] sm:h-[80px] md:min-w-[120px] md:h-[120px] lg:min-w-[140px] lg:h-[140px] bg-[url('https://mir-s3-cdn-cf.behance.net/project_modules/disp/38d7f640108731.5606d146b9bb7.jpg')] bg-cover bg-center"></div>
                <div class="box-category mx-2 md:mx-3 sm:min-w-[80px] sm:h-[80px] md:min-w-[120px] md:h-[120px] lg:min-w-[140px] lg:h-[140px] bg-[url('https://i.wfcdn.de/teaser/1920/49296.jpg')] bg-cover bg-center"></div>
                <div class="box-category mx-2 md:mx-3 sm:min-w-[80px] sm:h-[80px] md:min-w-[120px] md:h-[120px] lg:min-w-[140px] lg:h-[140px] bg-[url('https://i.pinimg.com/736x/25/ca/42/25ca426cad1148ceff2270fe153b078e.jpg')] bg-center bg-cover"></div>
                <div class="box-category mx-2 md:mx-3 sm:min-w-[80px] sm:h-[80px] md:min-w-[120px] md:h-[120px] lg:min-w-[140px] lg:h-[140px] bg-[url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqlGDjIG-Wwu_HqboZZVg2vKxSjlXDWE2tZG6Qaz3xslUWbyA6L9oW0346D5xodDMXS-E&usqp=CAU')] bg-center bg-cover"></div>
                <div class="box-category mx-2 md:mx-3 sm:min-w-[80px] sm:h-[80px] md:min-w-[120px] md:h-[120px] lg:min-w-[140px] lg:h-[140px] bg-[url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7W3kSjtKsOQQUm1jP6WjXv3mtiRt27mg5Qg&usqp=CAU')] bg-center bg-cover"></div>
                <div class="box-category mx-2 md:mx-3 sm:min-w-[80px] sm:h-[80px] md:min-w-[120px] md:h-[120px] lg:min-w-[140px] lg:h-[140px] bg-[url('https://img.huffingtonpost.com/asset/5ce6bd0c210000b90ed0ed6a.jpeg?ops=scalefit_720_noupscale')] bg-center bg-cover"></div>
                <div class="box-category mx-2 md:mx-3 sm:min-w-[80px] sm:h-[80px] md:min-w-[120px] md:h-[120px] lg:min-w-[140px] lg:h-[140px] bg-[url('https://ma.jumia.is/cms/slider-Nivea-desktop.jpg')] bg-right bg-cover"></div>
                <div class="box-category mx-2 md:mx-3 sm:min-w-[80px] sm:h-[80px] md:min-w-[120px] md:h-[120px] lg:min-w-[140px] lg:h-[140px] bg-[url('https://ma.jumia.is/cms/000_2022/Z-Categories/7-Supermarche/z-provi/220/epsuc-220-gris.jpg')] bg-center bg-cover"></div>
                <div class="box-category mx-2 md:mx-3 sm:min-w-[80px] sm:h-[80px] md:min-w-[120px] md:h-[120px] lg:min-w-[140px] lg:h-[140px] bg-[url('https://images.yourstory.com/cs/7/1da9ec3014cc11e9a1b2b928167b6c62/mensfashionbanner1572434751640png?w=752&fm=auto&ar=2:1&mode=crop&crop=face')] bg-center bg-cover"></div>
                <div class="box-category mx-2 md:mx-3 sm:min-w-[80px] sm:h-[80px] md:min-w-[120px] md:h-[120px] lg:min-w-[140px] lg:h-[140px] bg-[url('https://img.huffingtonpost.com/asset/5ce6bd0c210000b90ed0ed6a.jpeg?ops=scalefit_720_noupscale')] bg-center bg-cover"></div>
            </div>
        </div>
        <i class='bx bx-chevron-right arrow-categories-slider-home arrow_right-categories-slider-home'></i>
        <i class='bx bx-chevron-left arrow-categories-slider-home arrow_left-categories-slider-home' ></i>
    </div>
    <!--products offre-->
    <div class="products__offre-home mt-2 rounded-lg h-[100px] sm:h-[480px] md:h-[400px] lg:h-[420px] overflow-hidden  mx-1 md:mx-10 lg:mx-28  shadow-md relative">
        <div class="offre__header-home  h-10 md:h-12 lg:h-14  bg-color-red-button flex justify-between px-4 items-center">
            <h3 class="flex items-center text-while">
                <p class='w-6 h-6 md:w-8 md:h-8 bg-[url("https://cdn-icons-png.flaticon.com/128/5775/5775289.png")] mx-2 bg-center bg-cover bg-color-gray-dark'></p>
                <p>Vite</p>
            </h3>
            <div class="crono__offre-home ">
                <h3 class="text-lg md:text-2xl lg:text-3xl font-bold text-while"><span>12</span>:<span>56</span>:<span>00</span></h3>
            </div>
            <p><a class="text-md md:text-xl text-while" href="#">more...</a></p>
        </div>
        <div class="offre__body-home p-3 relative">
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <a href='{{route('product.details')}}'>
                    <div class="header-product bg-center bg-cover h-[50%]
                bg-color-rating bg-[url('https://falconreact18.prium.me/static/media/8.5337a0bb9c2ffd16669d.jpg')]
                    transition
                    hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]"></div>
                </a>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://falconreact18.prium.me/static/media/5.09ac6a83faf13369156d.jpg')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://falconreact18.prium.me/static/media/6.143652509e9714eab9cd.jpg')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://falconreact18.prium.me/static/media/3.ba98a1ec4092e9f3e1e8.jpg')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://falconreact18.prium.me/static/media/7.28b0461293b557493c78.jpg')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/4.jpg')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/1-2.jpg')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/1.jpg')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <i class='bx bxs-chevron-right icon-offre-home right-icon-offre-product-home'></i>
        <i class='bx bxs-chevron-left  icon-offre-home left-icon-offre-product-home' ></i>
    </div>
    <!--start adds home-->
    <div class="offre-ads-home-one mt-2 mx-1 md:mx-10 lg:mx-28  gap-1">
        <div class="content-ads-home-offre h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo ads-photo-hide  absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Destockage/NewArrivageADI/378X252_copie_3_copy_3_copie_5.png')]
                bg-center bg-cover
                ">
            </a>
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Destockage/Mode/378X252_copie_3_copy_3_copie_7.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo ads-photo-hide absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Destockage/Beaute/378X252_copie_3_copy_3_copie_9.png')]
                bg-center bg-cover
                ">
            </a>
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Destockage/Supermarche/v2/378X252_copie_3_copy_3_copie_3.jpg')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo ads-photo-hide absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/7-Tvs/378X252_copie_3_copy_3_copie_5.png')]
                bg-center bg-cover
                ">
            </a>
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Ads/ElectroBousfiha/Promos/378X252_copie_3_copy_3_Electro_Bou.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
    </div>
    <!--product-slider 1-->
    <div class="products__slider-home-one products__offre-home mt-2 rounded-lg h-[100px] sm:h-[480px] md:h-[400px] lg:h-[420px] overflow-hidden  mx-1 md:mx-10 lg:mx-28  shadow-md relative">
        <div class="offre__header-home  h-10 md:h-12 lg:h-14  bg-color-red-button flex justify-between px-4 items-center">
            <h3 class="flex items-center text-while">
                <p class='w-6 h-6 md:w-8 md:h-8 bg-[url("https://cdn-icons-png.flaticon.com/128/5775/5775289.png")] mx-2 bg-center bg-cover bg-color-gray-dark'></p>
                <p>Vite</p>
            </h3>
            <p><a class="text-md md:text-xl text-while" href="#">more...</a></p>
        </div>
        <div class="offre__body-home p-3 relative">
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/01/788475/1.jpg?3015')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/44/688475/1.jpg?3032')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/27/788475/1.jpg?3073')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/79/688475/1.jpg?3021')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/22/135116/1.jpg?5288')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/74/022793/1.jpg?4016')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/00/888475/1.jpg?3068')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/63/788475/1.jpg?3008')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/18/688475/1.jpg?3022')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <i class='bx bxs-chevron-right icon-offre-home right-icon-offre-product-home'></i>
        <i class='bx bxs-chevron-left  icon-offre-home left-icon-offre-product-home' ></i>
    </div>
    <!--offre-two-->
    <div class="offre-ads-home-two mt-2 mx-1 md:mx-10 lg:mx-28  gap-1">
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Ads/FLO/3/572x250.jpg')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Ads/GroupeSEB/572x250_.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
    </div>
    <div class="offre-ads-home-two mt-2 mx-1 md:mx-10 lg:mx-28  gap-1">
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Ads/Nivea/572x250.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Ads/Waikiki/DDB.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
    </div>
    <!--product-slider 2-->
    <div class="products__slider-home-one products__offre-home mt-2 rounded-lg h-[100px] sm:h-[480px] md:h-[400px] lg:h-[420px] overflow-hidden  mx-1 md:mx-10 lg:mx-28  shadow-md relative">
        <div class="offre__header-home  h-10 md:h-12 lg:h-14  bg-color-red-button flex justify-between px-4 items-center">
            <h3 class="flex items-center text-while">
                <p class='w-6 h-6 md:w-8 md:h-8 bg-[url("https://cdn-icons-png.flaticon.com/128/5775/5775289.png")] mx-2 bg-center bg-cover bg-color-gray-dark'></p>
                <p>Vite</p>
            </h3>
            <p><a class="text-md md:text-xl text-while" href="#">more...</a></p>
        </div>
        <div class="offre__body-home p-3 relative">
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/40/699524/1.jpg?4990')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/37/423064/1.jpg?5434')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/58/892054/1.jpg?2987')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/92/699606/1.jpg?3115')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/50/599606/1.jpg?3149')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/43/762575/1.jpg?8194')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/02/510435/1.jpg?7672')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/85/060885/1.jpg?0997')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/16/355134/1.jpg?1217')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <i class='bx bxs-chevron-right icon-offre-home right-icon-offre-product-home'></i>
        <i class='bx bxs-chevron-left  icon-offre-home left-icon-offre-product-home' ></i>
    </div>
    <!--product-slider 3-->
    <div class="products__slider-home-one products__offre-home mt-2 rounded-lg h-[100px] sm:h-[480px] md:h-[400px] lg:h-[420px] overflow-hidden  mx-1 md:mx-10 lg:mx-28  shadow-md relative">
        <div class="offre__header-home  h-10 md:h-12 lg:h-14  bg-color-red-button flex justify-between px-4 items-center">
            <h3 class="flex items-center text-while">
                <p class='w-6 h-6 md:w-8 md:h-8 bg-[url("https://cdn-icons-png.flaticon.com/128/5775/5775289.png")] mx-2 bg-center bg-cover bg-color-gray-dark'></p>
                <p>Vite</p>
            </h3>
            <p><a class="text-md md:text-xl text-while" href="#">more...</a></p>
        </div>
        <div class="offre__body-home p-3 relative">
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/13/759145/1.jpg?4784')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/912655/1.jpg?4845')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/73/677845/1.jpg?4846')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/37/636635/1.jpg?8949')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/32/532635/1.jpg?9723')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/96/055375/1.jpg?9977')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/54/701995/1.jpg?4223')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/03/055375/1.jpg?4845')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/03/055375/1.jpg?4845')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <i class='bx bxs-chevron-right icon-offre-home right-icon-offre-product-home'></i>
        <i class='bx bxs-chevron-left  icon-offre-home left-icon-offre-product-home' ></i>
    </div>
    <!--product-slider 4-->
    <div class="products__slider-home-one products__offre-home mt-2 rounded-lg h-[100px] sm:h-[480px] md:h-[400px] lg:h-[420px] overflow-hidden  mx-1 md:mx-10 lg:mx-28  shadow-md relative">
        <div class="offre__header-home  h-10 md:h-12 lg:h-14  bg-color-rating flex justify-between px-4 items-center">
            <h3 class="flex items-center text-while">
                <p class='w-6 h-6 md:w-8 md:h-8 bg-[url("https://cdn-icons-png.flaticon.com/128/5775/5775289.png")] mx-2 bg-center bg-cover bg-color-gray-dark'></p>
                <p>Vite</p>
            </h3>
            <p><a class="text-md md:text-xl text-while" href="#">more...</a></p>
        </div>
        <div class="offre__body-home p-3 relative">
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/12/041293/1.jpg?6774')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/37/022293/1.jpg?4248')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/02/041293/1.jpg?6774')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/71/041293/1.jpg?6774')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/92/041293/1.jpg?6774')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/72/041293/1.jpg?6774')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/35/022293/1.jpg?3830')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/03/041293/1.jpg?6774')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/53/041293/1.jpg?6773')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <i class='bx bxs-chevron-right icon-offre-home right-icon-offre-product-home'></i>
        <i class='bx bxs-chevron-left  icon-offre-home left-icon-offre-product-home' ></i>
    </div>
     <!--offre-two-->
     <div class="offre-ads-home-two mt-2 mx-1 md:mx-10 lg:mx-28  gap-1">
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/Z-Jex/DB.jpg')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2022/Z-HP-Elements/572x250_copy.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
    </div>
    <!--offre-for-->
    <div class="offre-ads-home-three mt-2 mx-1 md:mx-10 lg:mx-28  gap-1">
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/7-Tvs/378X252_copie_3_copy_3_copie_6-2.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/7-Tvs/378X252_copie_3_copy_3_copie_6v2.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/7-Tvs/378X252_copie_3_copy_3_copie_6-1v2.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
    </div>
    <!--product-slider 4-->
    <div class="products__slider-home-one products__offre-home mt-2 rounded-lg h-[100px] sm:h-[480px] md:h-[400px] lg:h-[420px] overflow-hidden  mx-1 md:mx-10 lg:mx-28  shadow-md relative">
        <div class="offre__header-home  h-10 md:h-12 lg:h-14  bg-color-red-button flex justify-between px-4 items-center">
            <h3 class="flex items-center text-while">
                <p class='w-6 h-6 md:w-8 md:h-8 bg-[url("https://cdn-icons-png.flaticon.com/128/5775/5775289.png")] mx-2 bg-center bg-cover bg-color-gray-dark'></p>
                <p>Vite</p>
            </h3>
            <p><a class="text-md md:text-xl text-while" href="#">more...</a></p>
        </div>
        <div class="offre__body-home p-3 relative">
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/11/341116/1.jpg?0424')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/14/241116/1.jpg?4545')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/24/241116/1.jpg?4544')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/12/341116/1.jpg?1383')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/74/235194/1.jpg?5742')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/22/969815/1.jpg?6248')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/65/962625/1.jpg?5284')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/86/129625/1.jpg?5465')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/69/393725/1.jpg?2370')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <i class='bx bxs-chevron-right icon-offre-home right-icon-offre-product-home'></i>
        <i class='bx bxs-chevron-left  icon-offre-home left-icon-offre-product-home' ></i>
    </div>
    <!--offre-five-->
    <div class="offre-ads-home-three mt-2 mx-1 md:mx-10 lg:mx-28  gap-1">
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/4-Beaute/378X252_copie_3_copy_3_copie_4.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/4-Beaute/378X252_copie_3_copy_3_copie_5.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/4-Beaute/378X252_copie_3_copy_3_copie_3.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
    </div>
    <!--product-slider 4-->
    <div class="products__slider-home-one products__offre-home mt-2 rounded-lg h-[100px] sm:h-[480px] md:h-[400px] lg:h-[420px] overflow-hidden  mx-1 md:mx-10 lg:mx-28  shadow-md relative">
        <div class="offre__header-home  h-10 md:h-12 lg:h-14  bg-color-red-button flex justify-between px-4 items-center">
            <h3 class="flex items-center text-while">
                <p class='w-6 h-6 md:w-8 md:h-8 bg-[url("https://cdn-icons-png.flaticon.com/128/5775/5775289.png")] mx-2 bg-center bg-cover bg-color-gray-dark'></p>
                <p>Vite</p>
            </h3>
            <p><a class="text-md md:text-xl text-while" href="#">more...</a></p>
        </div>
        <div class="offre__body-home p-3 relative">
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/31/899873/1.jpg?2475')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/91/259193/1.jpg?1538')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/01/644785/1.jpg?1159')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/12/041293/1.jpg?6774')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/57/048823/1.jpg?2806')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/61/041293/1.jpg?6774')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/04/903206/1.jpg?6588')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/45/980223/1.jpg?7543')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/27/904214/1.jpg?7808')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <i class='bx bxs-chevron-right icon-offre-home right-icon-offre-product-home'></i>
        <i class='bx bxs-chevron-left  icon-offre-home left-icon-offre-product-home' ></i>
    </div>
    <!--offre-six-->
    <div class="offre-ads-home-three mt-2 mx-1 md:mx-10 lg:mx-28  gap-1">
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/5-Maison/378X252_copie_3_copy_3_copie_4.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/5-Maison/378X252_copie_3_copy_3_copie_5.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/5-Maison/378X252_copie_3_copy_3_copie_3_copy.jpg')]
                bg-center bg-cover
                ">
            </a>
        </div>
    </div>
    <!--product-slider 4-->
    <div class="products__slider-home-one products__offre-home mt-2 rounded-lg h-[100px] sm:h-[480px] md:h-[400px] lg:h-[420px] overflow-hidden  mx-1 md:mx-10 lg:mx-28  shadow-md relative">
        <div class="offre__header-home  h-10 md:h-12 lg:h-14  bg-color-red-button flex justify-between px-4 items-center">
            <h3 class="flex items-center text-while">
                <p class='w-6 h-6 md:w-8 md:h-8 bg-[url("https://cdn-icons-png.flaticon.com/128/5775/5775289.png")] mx-2 bg-center bg-cover bg-color-gray-dark'></p>
                <p>Vite</p>
            </h3>
            <p><a class="text-md md:text-xl text-while" href="#">more...</a></p>
        </div>
        <div class="offre__body-home p-3 relative">
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/67/443725/1.jpg?8701')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/16/484315/1.jpg?7145')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/03/247225/1.jpg?4424')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/65/146825/1.jpg?6736')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/34/638673/1.jpg?2444')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/37/695595/1.jpg?6285')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/72/738673/1.jpg?5399')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/81/247225/1.jpg?4228')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/86/459145/1.jpg?2942')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <i class='bx bxs-chevron-right icon-offre-home right-icon-offre-product-home'></i>
        <i class='bx bxs-chevron-left  icon-offre-home left-icon-offre-product-home' ></i>
    </div>
    <!--offre-six-->
    <div class="offre-ads-home-three mt-2 mx-1 md:mx-10 lg:mx-28  gap-1">
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/6-Telephonie/1v3.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/6-Telephonie/3v3.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/6-Telephonie/378X252_copie_3_copy_3_copie_5.png')]
                bg-center bg-cover
                ">
            </a>
        </div>
    </div>
    <!--product-slider 4-->
    <div class="products__slider-home-one products__offre-home mt-2 rounded-lg h-[100px] sm:h-[480px] md:h-[400px] lg:h-[420px] overflow-hidden  mx-1 md:mx-10 lg:mx-28  shadow-md relative">
        <div class="offre__header-home  h-10 md:h-12 lg:h-14  bg-color-red-button flex justify-between px-4 items-center">
            <h3 class="flex items-center text-while">
                <p class='w-6 h-6 md:w-8 md:h-8 bg-[url("https://cdn-icons-png.flaticon.com/128/5775/5775289.png")] mx-2 bg-center bg-cover bg-color-gray-dark'></p>
                <p>Vite</p>
            </h3>
            <p><a class="text-md md:text-xl text-while" href="#">more...</a></p>
        </div>
        <div class="offre__body-home p-3 relative">
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover  h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/35/751305/1.jpg?1527')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover  h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/90/485685/1.jpg?4864')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover  h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/31/966375/1.jpg?3604')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/94/427254/1.jpg?6955')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/97/562784/1.jpg?9907')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/57/664384/1.jpg?8250')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/57/562784/1.jpg?8918')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/76/664384/1.jpg?8206')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/57/106384/1.jpg?0677')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/02/735984/1.jpg?8932')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/40/140724/1.jpg?7709')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/72/171705/1.jpg?3375')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/11/090694/1.jpg?7549')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/28/733165/1.jpg?0407')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/98/866375/1.jpg?0926')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/32/426554/1.jpg?6376')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/62/241774/1.jpg?1448')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/22/971093/1.jpg?9867')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/23/526614/1.jpg?3930')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/63/697685/1.jpg?0288')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/66/728564/1.jpg?6459')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/91/155585/1.jpg?3285')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/51/603824/1.jpg?6758')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/51/603824/1.jpg?6758')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <i class='bx bxs-chevron-right icon-offre-home right-icon-offre-product-home'></i>
        <i class='bx bxs-chevron-left  icon-offre-home left-icon-offre-product-home' ></i>
    </div>
    <!--offre-six-->
    <div class="offre-ads-home-three mt-2 mx-1 md:mx-10 lg:mx-28  gap-1">
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/8-Informatique/378X252_copie_3_copy_3_copie_3_copy_3.jpg')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/8-Informatique/378X252_copie_3_copy_3_copie_3_copy_2.jpg')]
                bg-center bg-cover
                ">
            </a>
        </div>
        <div class="content-ads-home-offre-2 h-96 bg-color-red-button  rounded-lg relative overflow-hidden">
            <a href="#" class="ads-photo absolute top-0 left-0 w-full h-full 
                bg-[url('https://ma.jumia.is/cms/000_2023/000001_Janvier/Camps/2-Promotions/8-Informatique/378X252_copie_3_copy_3_copie_3_copy.jpg')]
                bg-center bg-cover
                ">
            </a>
        </div>
    </div>
    <!--product-slider 4-->
    <div class="products__slider-home-one products__offre-home mt-2 rounded-lg h-[100px] sm:h-[480px] md:h-[400px] lg:h-[420px] overflow-hidden  mx-1 md:mx-10 lg:mx-28  shadow-md relative">
        <div class="offre__header-home  h-10 md:h-12 lg:h-14  bg-color-red-button flex justify-between px-4 items-center">
            <h3 class="flex items-center text-while">
                <p class='w-6 h-6 md:w-8 md:h-8 bg-[url("https://cdn-icons-png.flaticon.com/128/5775/5775289.png")] mx-2 bg-center bg-cover bg-color-gray-dark'></p>
                <p>Vite</p>
            </h3>
            <p><a class="text-md md:text-xl text-while" href="#">more...</a></p>
        </div>
        <div class="offre__body-home p-3 relative">
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center  h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/63/133935/1.jpg?8056')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center  h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/80/624506/1.jpg?4638')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover bg-center  h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/60/775685/1.jpg?0365')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/60/775685/1.jpg?0365')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/94/514545/1.jpg?0592')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/18/311544/1.jpg?0048')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/21/599185/1.jpg?8462')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/11/539693/1.jpg?2200')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product  bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/91/245424/1.jpg?2947')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/88/707725/1.jpg?0130')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/55/068425/1.jpg?0152')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/60/288273/1.jpg?9493')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/74/865024/1.jpg?3797')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/65/528624/1.jpg?8421')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-center  bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/09/579585/1.jpg?5485')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__offre sm:min-w-[200px]    md:min-w-[210px] lg:min-w-[270px]">
                <div class="header-product bg-cover h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/32/426554/1.jpg?6376')]
                hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]">
                    
                </div>
                <div class="body-product p-1">
                    <h3 class="md:text-sm lg:text-lg my-0">Logitech G305 Gaming Mouse</h3>
                    <a href="#" class="text-sm my-0 ">Computer & Accessories</a>
                    <div class="flex items-center">
                        <h2 class="text-xl font-bold text-color-red-button mx-1">$34.56</h2>
                        <span class="text-xs old__price-span">$95.00</span>
                    </div>
                    <p class="text-sm text-color-gray-background-light">Shipping Cost: <span class="font-bold">$20</span></p>
                    <p class="text-sm text-color-gray-background-light">Stock: <span class="font-bold" style="color:rgb(106, 240, 106)">Available</span></p>
                    <div class=" flex items-center justify-between mt-2">
                        <div class="ratings">
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <i class='bx bx-star text-color-rating'></i>
                            <span class="text-color-gray-background-light text-sm ">(6)</span>
                        </div>
                        <div class="btns-cart-wish flex">
                            <button class="btn__cart-shopping"><a href="#"><i class='bx bx-cart-alt'></i></a></button>
                            <button class="btn__cart-wishlist"><a href="#"><i class='bx bx-heart'></i></a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <i class='bx bxs-chevron-right icon-offre-home right-icon-offre-product-home'></i>
        <i class='bx bxs-chevron-left  icon-offre-home left-icon-offre-product-home' ></i>
    </div>
</div>
