<div>
    <!--product details-->
    <style>
        .sizes{
            opacity: .5;
            transition: .3s
        }
        .colors{
            opacity: .5;
            transition: .3s
        }
        .sizes:hover,.colors:hover{
            opacity: 1;
        }
        .sizes.click,.colors.click{
            opacity:1;
        }
    </style>
    <div class="product__details-page mx-2 md:mx-8 lg:mx-24 flex">
        <div class="products__details">
            <div class="product__principalte-details ">
                @foreach($images as $image)
                    @if($image->id==$product->img_id)
                        <img class="w-[100%] h-[370px]" 
                        src="{{asset('products/'.$image->img)}}" alt="" />
                    @endif 
                @endforeach
                <i class='bx bxs-chevron-right right-icon__product-details'></i>
                <i class='bx bxs-chevron-left  left-icon__product-details' ></i>
            </div>
            <div class="products__secondaires-details">
                <div class="product__secondary-detail">
                    @foreach($images as $image)
                        @if($image->id==$product->img_id)
                            <img data-index="0" class="w-[100%] h-[100%]" 
                            src="{{asset('products/'.$image->img)}}" alt="" />
                        @endif 
                    @endforeach
                </div>
                <div class="product__secondary-detail">
                    @foreach($images as $image)
                        @if($image->id==$product->img2_id)
                            <img data-index="1" class="w-[100%] h-[100%]" 
                            src="{{asset('products/'.$image->img)}}" alt="" />
                        @endif 
                    @endforeach
                </div>
                <div class="product__secondary-detail">
                    @foreach($images as $image)
                        @if($image->id==$product->img3_id)
                            <img data-index="2" class="w-[100%] h-[100%]" 
                            src="{{asset('products/'.$image->img)}}" alt="" />
                        @endif 
                    @endforeach
                </div>
                <div class="product__secondary-detail">
                    @foreach($images as $image)
                        @if($image->id==$product->img3_id)
                            <img data-index="3" class="w-[100%] h-[100%]" 
                            src="{{asset('products/'.$image->img)}}" alt="" />
                        @endif 
                    @endforeach
                </div>
            </div>
        </div>
        <div class="details___product-details">
            <h3>{{$product->name}}</h3>
            <p>
                @foreach($product->tags as $tag)
                    <a href="#" class="">{{$tag->name}}</a> 
                @endforeach
            </p>
            <div class="ratings-product-details">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
            </div>
            <p class="description-details-products">
                {{$product->short_description}}
            </p>
            <div class="price__product-details">
                <h3>${{$product->regular_price}} <span>${{$product->sale_price}} -50%</span></h3>
            </div>
            <p class="shipping-product-details">Shipping Cost: <span>$50</span></p>
            <p class="stock__product-details">Stock: <span class="font-bold">Available</span></p>
            <div class="tags__product-details">
                <p><span>Tags : </span>
                    <span>
                        @foreach($product->tags as $tag)
                            <a href="#" class="">{{$tag->name}}</a> 
                        @endforeach
                    </span>
                </p>
            </div>
            <div class="size___products">
                <p><span>Size : </span>
                    <div class="flex gap-2">
                        @foreach($product->sizes as $size)
                            <div>
                                <label onClick="add(event)" for="{{$size->id}}" class="w-8 items-center justify-center h-8 bg-color-gray-background-light 
                                    font-bold inline-block p-3 rounded-sm cursor-pointer flex sizes">
                                    {{$size->name}}
                                </label>
                                <input wire:model="size_id" hidden type="radio" id="{{$size->id}}" name="size" value="{{$size->id}}" />
                            </div>
                        @endforeach
                    </div>
                </p>
            </div>
            <div class="color__products">
                <p><span>Color : </span>
                    @php 
                        $colorss=array() ;
                        $quantity=array();
                        $pro=array();
                    @endphp
                    @foreach($product->sizes as $size)
                        @foreach($size->colors as $color)
                            @if($color->pivot->product_id == $product->id)
                            @php 
                            $colorss[]=$color->id  ;
                            $quantity['id']=$color->id;
                            $quantity['qty']=$color->pivot->quantity;
                            //push to array
                            array_push($pro,$quantity);

                            
                            @endphp
                            
                            @endif 
                        @endforeach 
                    @endforeach 
                    
                    @for($i=0;$i<count($pro);$i++)
                        @for($j=$i+1;$j<count($pro);$j++)
                            @if($pro[$i]['id']==$pro[$j]['id'])
                                @php 
                                    $pro[$i]['qty']=$pro[$i]['qty']+$pro[$j]['qty'];
                                    unset($pro[$j]);
                                    $pro=array_values($pro);
                                @endphp
                            @endif
                        @endfor
                    @endfor
                    
                    @php 

                        $colorss=array_unique($colorss);
                        sort($colorss);
                        
                        $i=0; 
                    @endphp
                    <div class="flex gap-2">
                        @foreach($colors as $key=>$color)
                        @if($i < count($pro))
                            @if($color->id==$pro[$i]['id'])
                                <label style="background:{{$color->code}}" onClick="addc(event)" for="{{$color->id}}" class="cursor-pointer relative rounded-full w-11 h-11 flex colors">
                                    <span style="font-size:10px;color:#000;background:#fff;padding:0.5px" class="absolute  font-bold rounded-full bottom-0 right-0 z-40 flex">
                                        {{$pro[$i]['qty']}}
                                    </span>
                                </label>
                                <input wire:model="color_id" hidden type="radio" id="{{$color->id}}" name="color" value="{{$color->id}}" />
                                @php $i++ @endphp
                            @endif
                        @endif 
                       @endforeach 
                    </div>
                </p>
            </div>
            <div class="buttons__product-details mt-3 flex gap-2">
                <button class="btn__qty-product-details flex bg-color-red-button w-[25%] items-center 
                    outline-none rounded">
                    <span wire:click.prevent="decreaseQuantity()" class="w-[30%] flex justify-center items-center ">-</span>
                    <span wire:model="qty" class="w-[40%] flex justify-center items-center">1</span>
                    <span wire:click.prevent="increaseQuantity()" class="w-[30%] flex justify-center items-center">+</span>
                </button>
                <button
                    wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->sale_price}})" 
                    class="btn__cart-shopping-product-details flex bg-color-red-button w-[35%] items-center 
                    outline-none rounded justify-center text-[#fff]">
                    <span class="flex  items-center mx-2">
                        <i class='bx bxs-cart-add text-lg'></i>
                    </span>
                    <span  class="flex items-center text-xs font-semibold">
                        Add To Cart
                    </span>
                </button>
                <button class="btn__cart-wishlist flex bg-color-red-button w-[20%] items-center 
                outline-none rounded justify-center text-[#fff]">
                <span class="flex  items-center mx-1">
                    <i class='bx bx-heart' ></i>
                </span>
                <span class="flex items-center"> 
                    256
                </span>
            </button>
            </div>
        </div>
        
    </div>
    <!--review & description-->
    <div class="review-description-products mx-2 md:mx-8 lg:mx-24 p-3">
        <div class="header-review-description-products flex">
            <p class="mx-2 font-bold description">DESCRIPTION</p>
            <p class="mx-2 font-bold thisOpacity infos">ADDITIONEL INFO</p>
            <p class="mx-2 font-bold thisOpacity reviews">REVIEWS(3)</p>
        </div>
        <div class="description__product-details mt-4 w-[70%]">
            <p>
                Uninhibited carnally hired played in whimpered dear gorilla koala 
                depending and much yikes off far quetzal goodness and from for 
                grimaced goodness unaccountably and meadowlark near unblushingly 
                crucial scallop tightly neurotic hungrily some and dear furiously
                this apart.
            </p>
            <p class="mt-3">
                Spluttered narrowly yikes left moth in yikes bowed this that 
                grizzly much hello on spoon-fed that alas rethought much decently 
                richly and wow against the frequent fluidly at formidable 
                acceptably flapped besides and much circa far over the 
                bucolically hey precarious goldfinch mastodon goodness gnashed 
                a jellyfish and one however because.
            </p>
            <ul class="my-5 w-[100%]" >
                <div class="flex my-2 text-color-gray-dark">
                    <li class="w-[20%]">Type Of Packing </li>
                    <span class="inline-block w-[50%] ml-5">Bottle</span>
                </div>
                <div class="flex my-2 text-color-gray-dark">
                    <li class="w-[20%]">Color </li>
                    <span class="inline-block w-[50%] ml-5">Green, Pink, Powder Blue, Purple</span>
                </div>
                <div class="flex my-2 text-color-gray-dark">
                    <li class="w-[20%]">Quantity Per Case </li>
                    <span class="inline-block w-[50%] ml-5">100ml</span>
                </div>
                <div class="flex my-2 text-color-gray-dark">
                    <li class="w-[20%]">Ethyl Alcohol </li>
                    <span class="inline-block w-[50%] ml-5">70%</span>
                </div>
                <div class="flex my-2 text-color-gray-dark">
                    <li class="w-[20%]">Piece In One </li>
                    <span class="inline-block w-[50%] ml-5">Piece In One</span>
                </div>
            </ul>
            <hr class="h-[1px] bg-color-gray-background-light" />
            <p class="mt-4 mb-14">
                Laconic overheard dear woodchuck wow this outrageously taut beaver 
                hey hello far meadowlark imitatively egregiously hugged that yikes 
                minimally unanimous pouted flirtatiously as beaver beheld above 
                forward energetic across this jeepers beneficently cockily less 
                a the raucously that magic upheld far so the this where crud then 
                below after jeez enchanting drunkenly more much wow callously 
                irrespective limpet.
            </p>
            <h3 class="mb-3">Packaging & Delivery</h3>
            <hr/>
            <p>
                Less lion goodness that euphemistically robin expeditiously bluebird 
                smugly scratched far while thus cackled sheepishly rigid after due one 
                assenting regarding censorious while occasional or this more crane went 
                more as this less much amid overhung anathematic because much held one 
                exuberantly sheep goodness so where rat wry well concomitantly.<br>

                Scallop or far crud plain remarkably far by thus far iguana lewd precociously
                and and less rattlesnake contrary caustic wow this near alas and next and
                pled the yikes articulate about as less cackled dalmatian in much less 
                well jeering for the thanks blindly sentimental whimpered less across 
                objectively fanciful grimaced wildly some wow and rose jeepers outgrew 
                lugubrious luridly irrationally attractively dachshund.
            </p>
        </div>
        <div class="info__product-details mt-4 hiddens">
            <table class=" w-[100%] md:w-[50%]">
                <thead>
                  <tr>
                    <th class="border border-slate-600">Info</th>
                    <th class="border border-slate-600"></th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-slate-700 p-3 py-1">Size</td>
                        <td class="border border-slate-700 p-3 py-1">M, S</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 p-3 py-1">Color</td>
                        <td class="border border-slate-700 p-3 py-1">Black, Blue, Red, White</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 p-3 py-1">Width</td>
                        <td class="border border-slate-700 p-3 py-1">24″</td>
                    </tr>
                    <tr>
                        <td class="border border-slate-700 p-3 py-1">Frame</td>
                        <td class="border border-slate-700 p-3 py-1">Aluminum</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="rating__product-details mt-4 flex hiddens">
            <div class="profile__commenter w-[50%]">
                <div class="flex items-center p-1">
                    <div class="profile-info mt-4 flex flex-col items-end px-4 w-[20%]">
                        <img 
                            class="w-[55px] h-[55px]" style="border-radius: 50%;" 
                            src="data:image/jpeg;base64,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" alt="" 
                        />
                        <p class="text-xs font-bold py-1">Jacky chan</p>
                        <span class="text-xs  text-color-gray-background-light">since 2012</span>
                    </div>
                    <div class="profile-commenter">
                        <div class="rating__commenter-user">
                            <span>
                                <i class='bx text-color-rating bxs-star inline-block mx-0'></i>
                                <i class='bx text-color-rating  bxs-star inline-block mx-0'></i>
                                <i class='bx text-color-rating  bxs-star inline-block mx-0'></i>
                                <i class='bx text-color-rating  bxs-star inline-block mx-0'></i>
                                <i class='bx text-color-rating bxs-star-half' ></i>
                            </span>
                            <p class="text-sm">Thank you very fast shipping from Poland only 3days.</p>
                            <span class="text-sm text-color-gray-background-light">December 4, 2020 at 3:12 pm</span>
                        </div>
                    </div>
                </div>
                <hr class="h-[1px] w-[100%]  bg-color-gray-background-light">
                <div class="flex items-center p-1">
                    <div class="profile-info mt-4 flex flex-col items-end px-4 w-[20%]">
                        <img 
                            class="w-[55px] h-[55px]" style="border-radius: 50%;" 
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9EbwkzGU2zM36rZtSNU8ZUdHG4GnvX4Hj7Frc2Cm1e1SuXt78OvG1MWvVGlXq5y0Ij78&usqp=CAU" alt="" 
                        />
                        <p class="text-xs font-bold py-1">Jacky chan</p>
                        <span class="text-xs  text-color-gray-background-light">since 2012</span>
                    </div>
                    <div class="profile-commenter">
                        <div class="rating__commenter-user">
                            <span>
                                <i class='bx text-color-rating bxs-star inline-block mx-0'></i>
                                <i class='bx text-color-rating  bxs-star inline-block mx-0'></i>
                                <i class='bx text-color-rating  bxs-star inline-block mx-0'></i>
                                <i class='bx text-color-rating  bxs-star inline-block mx-0'></i>
                                <i class='bx text-color-rating bxs-star-half' ></i>
                            </span>
                            <p class="text-sm">Thank you very fast shipping from Poland only 3days.</p>
                            <span class="text-sm text-color-gray-background-light">December 4, 2020 at 3:12 pm</span>
                        </div>
                    </div>
                </div>
                <hr class="h-[1px] w-[100%]  bg-color-gray-background-light">
                <div class="flex items-center p-1">
                    <div class="profile-info mt-4 flex flex-col items-end px-4 w-[20%]">
                        <img 
                            class="w-[55px] h-[55px]" style="border-radius: 50%;" 
                            src="https://umbrella.data.naturalint.com/production/articles/uploads/photo/Untitleddesign403.20220526114538.jpg" alt="" 
                        />
                        <p class="text-xs font-bold py-1">Jacky chan</p>
                        <span class="text-xs  text-color-gray-background-light">since 2012</span>
                    </div>
                    <div class="profile-commenter">
                        <div class="rating__commenter-user">
                            <span>
                                <i class='bx text-color-rating bxs-star inline-block mx-0'></i>
                                <i class='bx text-color-rating  bxs-star inline-block mx-0'></i>
                                <i class='bx text-color-rating  bxs-star inline-block mx-0'></i>
                                <i class='bx text-color-rating  bxs-star inline-block mx-0'></i>
                                <i class='bx text-color-rating bxs-star-half' ></i>
                            </span>
                            <p class="text-sm">Thank you very fast Thank you very fast Thank you very fast shipping from Poland only 3days.</p>
                            <span class="text-sm text-color-gray-background-light">December 4, 2020 at 3:12 pm</span>
                        </div>
                    </div>
                </div>
                <hr class="h-[1px] w-[100%]  bg-color-gray-background-light">
            </div>
            <div class="rating__profile-commenter w-[30%] pl-16">
                <h3>Customer reviews</h3>
                <div class="flex items-center mt-4 ">
                    <i class='bx bxs-star text-color-rating'></i>
                    <i class='bx bxs-star text-color-rating'></i>
                    <i class='bx bxs-star text-color-rating'></i>
                    <i class='bx bxs-star text-color-rating'></i>
                    <i class='bx bxs-star text-color-rating'></i>
                    <span class="font-bold text-xs inline-block mx-4">4.8 out of 5</span>
                </div>
                <div class="">
                    <div class="flex mt-6 items-center flex-col">
                        <div class="flex mt-3">
                            <span class="text-xs">5 star</span>
                            <div class="w-[250px] mx-3 h-5 bg-color-gray-background-light">
                                <span class="h-[100%] w-[60%] bg-color-red-button flex items-center text-xs px-1 justify-end">
                                    50%
                                </span>
                            </div>
                        </div>
                        <div class="flex mt-4">
                            <span class="text-xs">5 star</span>
                            <div class="w-[250px] mx-3 h-5 bg-color-gray-background-light">
                                <span class="h-[100%] w-[40%] bg-color-red-button flex items-center text-xs px-1 justify-end">
                                    50%
                                </span>
                            </div>
                        </div>
                        <div class="flex mt-4">
                            <span class="text-xs">5 star</span>
                            <div class="w-[250px] mx-3 h-5 bg-color-gray-background-light">
                                <span class="h-[100%] w-[90%] bg-color-red-button flex items-center text-xs px-1 justify-end">
                                    50%
                                </span>
                            </div>
                        </div>
                        <div class="flex mt-4">
                            <span class="text-xs">5 star</span>
                            <div class="w-[250px] mx-3 h-5 bg-color-gray-background-light">
                                <span class="h-[100%] w-[20%] bg-color-red-button flex items-center text-xs px-1 justify-end">
                                    50%
                                </span>
                            </div>
                        </div>
                        <div class="flex mt-4">
                            <span class="text-xs">5 star</span>
                            <div class="w-[250px] mx-3 h-5 bg-color-gray-background-light">
                                <span class="h-[100%] w-[55%] bg-color-red-button flex items-center text-xs px-1 justify-end">
                                    50%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[70%] h-[500px] p-8 add__review-product-details">
                <h1 class="text-xl mb-2">Add a Review</h1>
                <div>
                    <i class='bx bx-star mx-0 inline-block'></i>
                    <i class='bx bx-star mx-0 inline-block'></i>
                    <i class='bx bx-star mx-0 inline-block'></i>
                    <i class='bx bx-star mx-0 inline-block'></i>
                    <i class='bx bx-star mx-0 inline-block'></i>
                </div>
                <form class="mt-3">
                    <textarea class="w-[90%] h-56 rounded-md outline-none border">
                        Write Comment
                    </textarea>
                    <div class="flex items-center">
                        <input placeholder="Name" class="w-[44%] border p-3 mr-[1%] rounded-md outline-none" type="text"/>
                        <input placeholder="Email" class="w-[44%] border p-3 ml-[1%] rounded-md outline-none" type="text"/>
                    </div>
                    <Button class="bg-color-red-button text-[#fff] px-7 py-2 rounded-md mt-3">Save</Button>
                </form>
            </div>
        </div>
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
                <div class="header-product bg-center bg-cover h-[50%]
                bg-color-rating bg-[url('https://falconreact18.prium.me/static/media/8.5337a0bb9c2ffd16669d.jpg')]
                    transition
                    hover:bg-[url('https://prium.github.io/falcon/v3.14.0/assets/img/products/2.jpg')]"></div>
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

    <script>
        function add(e){
            document.querySelectorAll('.sizes').forEach((item)=>{
                item.classList.remove('click')
            })
            e.target.classList.add('click')
            console.log(e.target)
        }
        function addc(e){
            document.querySelectorAll('.colors').forEach((item)=>{
                item.classList.remove('click')
            })
            e.target.classList.add('click')
            console.log(e.target)
        }
    </script>
</div>
