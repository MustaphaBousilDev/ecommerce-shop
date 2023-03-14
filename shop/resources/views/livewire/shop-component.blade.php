<div>
    <!--Shopping page -->
    <div class="shopping__page">
        <div class="header__controll__shopping__page md:px-20 bg-color-red-button">
            <div class="empty__row">
                
            </div>
            <div class="content__header">
                <div class="options__sorting">
                    <select class="w-full p-4 rounded-lg outline-none border-0 cursor-pointer select__sorting">
                        <option selected>Sort By</option>
                        <option selected>Choose a country</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
                <div class="options__limit-showings">
                    <select class="w-full p-4 rounded-lg outline-none border-0 cursor-pointer select__sorting">
                        <option selected>Quantity</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="grid__list__systeme-products">
                    <div class="parent__icon">
                        <div><i class='bx bx-list-ul icon__list '></i></div>
                        <div><i class='bx bxs-grid-alt active' ></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body__controll__shopping__page px-1 sm:px-5 md:px-6 lg:px-20 ">
            <div class="filter__products-shop-page shadow-lg py-5 px-5  text-[#333]">
                <h3 class="text-xl" >Categories</h3>
                <div class="categories___dropdown">
                    <div class="category mt-6">
                        <div class="flex justify-between px-2 py-1 shoes ">
                            <h2 class="hover:text-color-red-button transition">Shoes</h2>
                            <span class="flex justify-center items-center 
                                 rounded-full w-6 h-6 span__drop-down" onclick="toggle__dropdown(event)" > 
                                <i class='bx bx-chevron-down font-bold cursor-pointer drop__down-icon'></i>
                            </span>
                        </div>
                        <div class="details mt-2 transition shows_removing">
                            <form class="px-3">
                                <div class="relative"> 
                                    <i class='bx bx-search-alt text-color-gray-background-light text-xl absolute left-2 top-[50%]' style="transform:translateY(-50%)" ></i>
                                    <input
                                        placeholder="Search..." 
                                        type="search" 
                                        class="border border-color-gray-background-light outline-none w-full 
                                        focus:border-color-red-button
                                        py-1.5 px-7 rounded-lg overflow-hidden"/>
                                </div>
                            </form>
                            <div class="px-4 py-2 flex flex-col h-[170px] overflow-hidden overflow-y-scroll mt-2 other__categories">
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="category">
                        <div class="flex justify-between px-2 py-1 shoes">
                            <h2 class="hover:text-color-red-button transition">Shoes</h2>
                            <span class="flex justify-center items-center 
                                 rounded-full w-6 h-6 span__drop-down" onclick="toggle__dropdown(event)" > 
                                <i class='bx bx-chevron-down font-bold cursor-pointer drop__down-icon'></i>
                            </span>
                        </div>
                        <div class="details mt-2  shows_removing">
                            <form class="px-3">
                                <div class="relative"> 
                                    <i class='bx bx-search-alt text-color-gray-background-light text-xl absolute left-2 top-[50%]' style="transform:translateY(-50%)" ></i>
                                    <input
                                        placeholder="Search..." 
                                        type="search" 
                                        class="border border-color-gray-background-light outline-none w-full 
                                        focus:border-color-red-button
                                        py-1.5 px-7 rounded-lg overflow-hidden"/>
                                </div>
                            </form>
                            <div class="px-4 py-2 flex flex-col h-[170px] overflow-hidden overflow-y-scroll mt-2 other__categories">
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>

                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="category">
                        <div class="flex justify-between px-2 py-1 shoes ">
                            <h2 class="hover:text-color-red-button transition">Shoes</h2>
                            <span class="flex justify-center items-center 
                                 rounded-full w-6 h-6 span__drop-down" onclick="toggle__dropdown(event)" > 
                                <i class='bx bx-chevron-down font-bold cursor-pointer drop__down-icon'></i>
                            </span>
                        </div>
                        <div class="details mt-2 transition shows_removing">
                            <form class="px-3">
                                <div class="relative"> 
                                    <i class='bx bx-search-alt text-color-gray-background-light text-xl absolute left-2 top-[50%]' style="transform:translateY(-50%)" ></i>
                                    <input
                                        placeholder="Search..." 
                                        type="search" 
                                        class="border border-color-gray-background-light outline-none w-full 
                                        focus:border-color-red-button
                                        py-1.5 px-7 rounded-lg overflow-hidden"/>
                                </div>
                            </form>
                            <div class="px-4 py-2 flex flex-col h-[170px] overflow-hidden overflow-y-scroll mt-2 other__categories">
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="category">
                        <div class="flex justify-between px-2 py-1 shoes ">
                            <h2 class="hover:text-color-red-button transition">Shoes</h2>
                            <span class="flex justify-center items-center 
                                 rounded-full w-6 h-6 span__drop-down" onclick="toggle__dropdown(event)" > 
                                <i class='bx bx-chevron-down font-bold cursor-pointer drop__down-icon'></i>
                            </span>
                        </div>
                        <div class="details mt-2 transition shows_removing">
                            <form class="px-3">
                                <div class="relative"> 
                                    <i class='bx bx-search-alt text-color-gray-background-light text-xl absolute left-2 top-[50%]' style="transform:translateY(-50%)" ></i>
                                    <input
                                        placeholder="Search..." 
                                        type="search" 
                                        class="border border-color-gray-background-light outline-none w-full 
                                        focus:border-color-red-button
                                        py-1.5 px-7 rounded-lg overflow-hidden"/>
                                </div>
                            </form>
                            <div class="px-4 py-2 flex flex-col h-[170px] overflow-hidden overflow-y-scroll mt-2 other__categories">
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="category">
                        <div class="flex justify-between px-2 py-1 shoes ">
                            <h2 class="hover:text-color-red-button transition">Shoes</h2>
                            <span class="flex justify-center items-center 
                                 rounded-full w-6 h-6 span__drop-down" onclick="toggle__dropdown(event)" > 
                                <i class='bx bx-chevron-down font-bold cursor-pointer drop__down-icon'></i>
                            </span>
                        </div>
                        <div class="details mt-2 transition shows_removing">
                            <form class="px-3">
                                <div class="relative"> 
                                    <i class='bx bx-search-alt text-color-gray-background-light text-xl absolute left-2 top-[50%]' style="transform:translateY(-50%)" ></i>
                                    <input
                                        placeholder="Search..." 
                                        type="search" 
                                        class="border border-color-gray-background-light outline-none w-full 
                                        focus:border-color-red-button
                                        py-1.5 px-7 rounded-lg overflow-hidden"/>
                                </div>
                            </form>
                            <div class="px-4 py-2 flex flex-col h-[170px] overflow-hidden overflow-y-scroll mt-2 other__categories">
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="category">
                        <div class="flex justify-between px-2 py-1 shoes ">
                            <h2 class="hover:text-color-red-button transition">Shoes</h2>
                            <span class="flex justify-center items-center 
                                 rounded-full w-6 h-6 span__drop-down" onclick="toggle__dropdown(event)" > 
                                <i class='bx bx-chevron-down font-bold cursor-pointer drop__down-icon'></i>
                            </span>
                        </div>
                        <div class="details mt-2 transition shows_removing">
                            <form class="px-3">
                                <div class="relative"> 
                                    <i class='bx bx-search-alt text-color-gray-background-light text-xl absolute left-2 top-[50%]' style="transform:translateY(-50%)" ></i>
                                    <input
                                        placeholder="Search..." 
                                        type="search" 
                                        class="border border-color-gray-background-light outline-none w-full 
                                        focus:border-color-red-button
                                        py-1.5 px-7 rounded-lg overflow-hidden"/>
                                </div>
                            </form>
                            <div class="px-4 py-2 flex flex-col h-[170px] overflow-hidden overflow-y-scroll mt-2 other__categories">
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="category">
                        <div class="flex justify-between px-2 py-1 shoes ">
                            <h2 class="hover:text-color-red-button transition">Shoes</h2>
                            <span class="flex justify-center items-center 
                                 rounded-full w-6 h-6 span__drop-down" onclick="toggle__dropdown(event)" > 
                                <i class='bx bx-chevron-down font-bold cursor-pointer drop__down-icon'></i>
                            </span>
                        </div>
                        <div class="details mt-2 transition shows_removing">
                            <form class="px-3">
                                <div class="relative"> 
                                    <i class='bx bx-search-alt text-color-gray-background-light text-xl absolute left-2 top-[50%]' style="transform:translateY(-50%)" ></i>
                                    <input
                                        placeholder="Search..." 
                                        type="search" 
                                        class="border border-color-gray-background-light outline-none w-full 
                                        focus:border-color-red-button
                                        py-1.5 px-7 rounded-lg overflow-hidden"/>
                                </div>
                            </form>
                            <div class="px-4 py-2 flex flex-col h-[170px] overflow-hidden overflow-y-scroll mt-2 other__categories">
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="category">
                        <div class="flex justify-between px-2 py-1 shoes ">
                            <h2 class="hover:text-color-red-button transition">Shoes</h2>
                            <span class="flex justify-center items-center 
                                 rounded-full w-6 h-6 span__drop-down" onclick="toggle__dropdown(event)" > 
                                <i class='bx bx-chevron-down font-bold cursor-pointer drop__down-icon'></i>
                            </span>
                        </div>
                        <div class="details mt-2 transition shows_removing">
                            <form class="px-3">
                                <div class="relative"> 
                                    <i class='bx bx-search-alt text-color-gray-background-light text-xl absolute left-2 top-[50%]' style="transform:translateY(-50%)" ></i>
                                    <input
                                        placeholder="Search..." 
                                        type="search" 
                                        class="border border-color-gray-background-light outline-none w-full 
                                        focus:border-color-red-button
                                        py-1.5 px-7 rounded-lg overflow-hidden"/>
                                </div>
                            </form>
                            <div class="px-4 py-2 flex flex-col h-[170px] overflow-hidden overflow-y-scroll mt-2 other__categories">
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="category">
                        <div class="flex justify-between px-2 py-1 shoes ">
                            <h2 class="hover:text-color-red-button transition">Shoes</h2>
                            <span class="flex justify-center items-center 
                                 rounded-full w-6 h-6 span__drop-down" onclick="toggle__dropdown(event)" > 
                                <i class='bx bx-chevron-down font-bold cursor-pointer drop__down-icon'></i>
                            </span>
                        </div>
                        <div class="details mt-2 transition shows_removing">
                            <form class="px-3">
                                <div class="relative"> 
                                    <i class='bx bx-search-alt text-color-gray-background-light text-xl absolute left-2 top-[50%]' style="transform:translateY(-50%)" ></i>
                                    <input
                                        placeholder="Search..." 
                                        type="search" 
                                        class="border border-color-gray-background-light outline-none w-full 
                                        focus:border-color-red-button
                                        py-1.5 px-7 rounded-lg overflow-hidden"/>
                                </div>
                            </form>
                            <div class="px-4 py-2 flex flex-col h-[170px] overflow-hidden overflow-y-scroll mt-2 other__categories">
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="category">
                        <div class="flex justify-between px-2 py-1 shoes ">
                            <h2 class="hover:text-color-red-button transition">Shoes</h2>
                            <span class="flex justify-center items-center 
                                 rounded-full w-6 h-6 span__drop-down" onclick="toggle__dropdown(event)" > 
                                <i class='bx bx-chevron-down font-bold cursor-pointer drop__down-icon'></i>
                            </span>
                        </div>
                        <div class="details mt-2 transition shows_removing">
                            <form class="px-3">
                                <div class="relative"> 
                                    <i class='bx bx-search-alt text-color-gray-background-light text-xl absolute left-2 top-[50%]' style="transform:translateY(-50%)" ></i>
                                    <input
                                        placeholder="Search..." 
                                        type="search" 
                                        class="border border-color-gray-background-light outline-none w-full 
                                        focus:border-color-red-button
                                        py-1.5 px-7 rounded-lg overflow-hidden"/>
                                </div>
                            </form>
                            <div class="px-4 py-2 flex flex-col h-[170px] overflow-hidden overflow-y-scroll mt-2 other__categories">
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">View All</span>
                                    <span class="text-md font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <hr class="w-[80%] mx-auto my-6 border-0  h-[1px] ">
                <h3 class="text-xl" >Price</h3>
                <div class="range-price mt-3 px-0 py-[10px]">
                    <div class="heading flex justify-between items-center">
                        <h5>Price(DHS)</h5>
                        <input class="sub-price" type="submit" value="OK">
                    </div>
                    <div class="slider">
                        <div class="progress">

                        </div>
                    </div>
                    <div class="range-input">
                        <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                        <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                    </div>
                    <div class="price-input">
                        <div class="field border  rounded-md">
                            <span class="font-bold py-2 text-lg">$</span>
                            <input type="number" class="input-min py-2" value='2000'>
                        </div>
                        <div class="separateur">-</div>
                        <div class="field border rounded-md">
                            <span class="font-bold py-2 text-lg">$</span>
                            <input type="number" class="input-max py-2" value="10000">
                        </div>
                    </div>
                </div>
                <br>
                <hr class="w-[80%] mx-auto my-6 border-0  h-[1px] ">
                <h3 class="text-xl" >Brands</h3>
                <div class="categories___dropdown">
                    <div class="category mt-6">
                        
                        <div class="details mt-2 transition">
                            <form class="px-3">
                                <div class="relative"> 
                                    <i class='bx bx-search-alt text-color-gray-background-light text-xl absolute left-2 top-[50%]' style="transform:translateY(-50%)" ></i>
                                    <input
                                        placeholder="Search..." 
                                        type="search" 
                                        class="border border-color-gray-background-light outline-none w-full 
                                        focus:border-color-red-button
                                        py-1.5 px-7 rounded-lg overflow-hidden"/>
                                </div>
                            </form>
                            <div class="px-4 py-2 flex flex-col h-[170px] overflow-hidden overflow-y-scroll mt-2 other__categories">
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                   <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                    <input type="checkbox"/>
                                    <label>Adidas</label>
                                   </span>
                                   <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>Adidas</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>Adidas</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>Adidas</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>Adidas</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>Adidas</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>Adidas</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>Adidas</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="w-[80%] mx-auto my-6 border-0  h-[1px] ">
                <h3 class="text-xl" >Size</h3>
                <div class="categories___dropdown">
                    <div class="category mt-6">
                        
                        <div class="details mt-2 transition">
                            <form class="px-3">
                                <div class="relative"> 
                                    <i class='bx bx-search-alt text-color-gray-background-light text-xl absolute left-2 top-[50%]' style="transform:translateY(-50%)" ></i>
                                    <input
                                        placeholder="Search..." 
                                        type="search" 
                                        class="border border-color-gray-background-light outline-none w-full 
                                        focus:border-color-red-button
                                        py-1.5 px-7 rounded-lg overflow-hidden"/>
                                </div>
                            </form>
                            <div class="px-4 py-2 flex flex-col h-[170px] overflow-hidden overflow-y-scroll mt-2 other__categories">
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                   <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                    <input type="checkbox"/>
                                    <label>S</label>
                                   </span>
                                   <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                </a>
                                <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>XS</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>M</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>L</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>XL</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>39</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>40</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>41</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>42</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>43</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                 <a href="#" class="flex justify-between items-center w-full mb-2">
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button opacity-[0.7] transition">
                                     <input type="checkbox"/>
                                     <label>44</label>
                                    </span>
                                    <span class="text-xs font-medium text-color-gray-dark hover:text-color-red-button  opacity-[0.7] transition">1,956</span>
                                 </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-xl mt-4" >Colors</h3>
                <div class="w-[95%] mx-auto my-2 h-[150px] p-4 flex flex-wrap colors-filter-shop-page-parent">
                    <div class="w-[24%] mx-[0.5%]  flex justify-center items-center cursor-pointer colors-filter-shop-page">
                        <input type="checkbox" value="red" hidden id="red">
                        <label for='red' class="w-[45px] h-[45px] rounded-full  p-1 
                            flex justify-center items-center border labels-colors">
                            <span class="w-[37px] h-[37px] bg-color-red-button rounded-full"></span>
                        </label>
                    </div>
                    <div class="w-[24%] mx-[0.5%]  flex justify-center items-center cursor-pointer colors-filter-shop-page">
                        <input type="checkbox" value="red" hidden id="red">
                        <label for='red' class="w-[45px] h-[45px] rounded-full  p-1 
                            flex justify-center items-center border labels-colors">
                            <span class="w-[37px] h-[37px] bg-color-red-button rounded-full"></span>
                        </label>
                    </div>
                    <div class="w-[24%] mx-[0.5%]  flex justify-center items-center cursor-pointer colors-filter-shop-page">
                        <input type="checkbox" value="red" hidden id="red">
                        <label for='red' class="w-[45px] h-[45px] rounded-full  p-1 
                            flex justify-center items-center border labels-colors">
                            <span class="w-[37px] h-[37px] bg-color-red-button rounded-full"></span>
                        </label>
                    </div>
                    <div class="w-[24%] mx-[0.5%]  flex justify-center items-center cursor-pointer colors-filter-shop-page">
                        <input type="checkbox" value="red" hidden id="red">
                        <label for='red' class="w-[45px] h-[45px] rounded-full  p-1 
                            flex justify-center items-center border labels-colors">
                            <span class="w-[37px] h-[37px] bg-color-red-button rounded-full"></span>
                        </label>
                    </div>
                    <div class="w-[24%] mx-[0.5%]  flex justify-center items-center cursor-pointer colors-filter-shop-page">
                        <input type="checkbox" value="red" hidden id="red">
                        <label for='red' class="w-[45px] h-[45px] rounded-full  p-1 
                            flex justify-center items-center border labels-colors">
                            <span class="w-[37px] h-[37px] bg-color-red-button rounded-full"></span>
                        </label>
                    </div>
                    <div class="w-[24%] mx-[0.5%]  flex justify-center items-center cursor-pointer colors-filter-shop-page">
                        <input type="checkbox" value="red" hidden id="red">
                        <label for='red' class="w-[45px] h-[45px] rounded-full  p-1 
                            flex justify-center items-center border labels-colors">
                            <span class="w-[37px] h-[37px] bg-color-red-button rounded-full"></span>
                        </label>
                    </div>
                    <div class="w-[24%] mx-[0.5%]  flex justify-center items-center cursor-pointer colors-filter-shop-page">
                        <input type="checkbox" value="red" hidden id="red">
                        <label for='red' class="w-[45px] h-[45px] rounded-full  p-1 
                            flex justify-center items-center border labels-colors">
                            <span class="w-[37px] h-[37px] bg-color-red-button rounded-full"></span>
                        </label>
                    </div>
                    <div class="w-[24%] mx-[0.5%]  flex justify-center items-center cursor-pointer colors-filter-shop-page">
                        <input type="checkbox" value="red" hidden id="red">
                        <label for='red' class="w-[45px] h-[45px] rounded-full  p-1 
                            flex justify-center items-center border labels-colors">
                            <span class="w-[37px] h-[37px] bg-color-red-button rounded-full"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="products-shop-page p-2 py-5">
                <div class="products-shop">
                    <div class="product ">
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/94/514545/1.jpg?0592')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/18/311544/1.jpg?0048')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%] bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/21/599185/1.jpg?8462')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/91/245424/1.jpg?2947')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/88/707725/1.jpg?0130')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/06/918334/1.jpg?7339')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/11/154924/1.jpg?1290')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
                    <div class="product ">
                        <div class="header-product bg-cover bg-center  h-[50%]  bg-color-rating bg-[url('https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/46/082824/1.jpg?9203')]
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
            </div>
        </div>
    </div>
    <!--footer page-->
</div>
