@extends('layouts.layout')
@section('content')
            <div class="products__tables">
               <div class='header__product-lists'>
                    <div class='left__product-header flex justify-between'>
                         <h1 class='text-xl md:text-3xl font-bold'>Products</h1>
                         <button onClick="console.log('fuck that shet ')" class='bg-color-red-button opacity-80 transition hover:opacity-100
                         cursor-pointer outline-none border-none rounded-md text-while py-1 px-3 add-button'>
                              <span class='font-bold'>+</span> Add
                         </button>
                    </div>
                    <div class="body__products-dashboard">
                         <form class='mt-3'>
                              <div class='fields relative border border-color-gray-background-light 
                              bg-color-red-button w-[95%] md:w-[60%] overflow-hidden rounded-md'>
                                   <input type='search' id='search-categories' class='py-3  px-8 w-[100%] h-[100%]' name='search' placeholder="Search" />
                                   <i class='bx bx-search-alt text-color-gray-background-light text-2xl 
                                   absolute left-[10px] top-[50%] translate-y-[-50%]'></i>
                              </div>
                         </form>
                         
                         <div class="relative overflow-x-auto w-[99%] md:w-[95%] mx-auto shadow-lg sm:rounded-lg mt-10">
                              
                         </div>
                    </div>
               </div>
          </div>
          
     </div>
     <!--/Add Product-->
                              <!--table products-->
                         </div>
<!--start-->
<div style='width:60%' class='  bg-primary-50 rounded-lg z-[10000] fixed top-[50%] translate-y-[-50%] left-[50%] translate-x-[-50%] active-showing model_form '>
    <div class='flex'>
     <div onclick="img_div()"  class="w-[140px] m-4 mx-auto  h-[140px] rounded-full bg-color-gray-background-light border border-color-gray-background-light cursor-pointer 
    flex items-center justify-center image-div1">
        <i class='bx bx-plus-medical scale-125 text-color-gray-dark opacity-25'></i>
    </div>
    <div onclick="img_div2()" class="w-[140px] m-4 mx-auto  h-[140px] rounded-full bg-color-gray-background-light border border-color-gray-background-light cursor-pointer 
    flex items-center justify-center image-div2">
        <i class='bx bx-plus-medical scale-125 text-color-gray-dark opacity-25'></i>
    </div>
    <div onclick="img_div3()" class="w-[140px] m-4 mx-auto  h-[140px] rounded-full bg-color-gray-background-light border border-color-gray-background-light cursor-pointer 
    flex items-center justify-center image-div3">
        <i class='bx bx-plus-medical scale-125 text-color-gray-dark opacity-25'></i>
    </div>
    <div onclick="img_div4()" class="w-[140px] m-4 mx-auto  h-[140px] rounded-full bg-color-gray-background-light border border-color-gray-background-light cursor-pointer 
    flex items-center justify-center image-div4">
        <i class='bx bx-plus-medical scale-125 text-color-gray-dark opacity-25'></i>
    </div>
    </div>
    <form class='w-full'>
     <input type='file' hidden class='file__img-input1' name='image1' id='image1' onchange="display_add_image(this.files[0],event)" />
     <input type='file' hidden class='file__img-input2' name='image2' id='image2' onchange="display_add_image(this.files[0],event)" />
     <input type='file' hidden class='file__img-input3' name='image3' id='image3' onchange="display_add_image(this.files[0],event)" />
     <input type='file' hidden class='file__img-input4' name='image4' id='image4' onchange="display_add_image(this.files[0],event)" />
    </form>
    <form action='' class='w-full form-add' id='form-add' enctype="multipart/form-data">
        @csrf
        <h3 class='text-center heading-form'>Add Categories</h3>
               
            <div class="w-[90%] mx-auto flex gap-2">
                <input type="text" name="name" placeholder='name' id="name" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
                <input type="text" name="name" placeholder='name' id="name" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
            </div>
            <div class="w-[90%] mx-auto flex gap-2">
               <input type="text" name="name" placeholder='name' id="name" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
               <input type="text" name="name" placeholder='name' id="name" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
           </div>
           <div class="w-[90%] mx-auto flex gap-2">
               <input type="text" name="name" placeholder='name' id="name" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
               <input type="text" name="name" placeholder='name' id="name" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
           </div>
           <div class="w-[90%] mx-auto flex gap-2">
               <input type="text" name="name" placeholder='name' id="name" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
               <input type="text" name="name" placeholder='name' id="name" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
           </div>
            <div class="w-[80%] mx-auto mt-4 flex gap-2">
                <textarea name="description" id="description" cols="30" rows="10" class="w-full border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"></textarea>
                <textarea name="description" id="description" cols="30" rows="10" class="w-full border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"></textarea>
            </div>
            <div class="w-[80%] mx-auto mt-4">
                <input name='image' type="file" class="file__img-input" onchange="display_add_image(this.files[0])" 
                hidden name="image" id="image" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
            </div>
            <button class='bg-primary-500 px-5 py-2 text-while rounded-md cursor-pointer inline-block mx-1 save_button' type='submit'>Save</button>
            <button class='bg-primary-200 px-5 py-2  rounded-md cursor-pointer inline-block mx-1  cancel_button'>Cancel</button>
    </form>
</div> 
<!--end-->
<!--start edit --> 
<div class='w-[500px] h-[60vh]  bg-primary-50 rounded-lg z-[10000] fixed top-[50%] translate-y-[-50%] left-[50%] translate-x-[-50%] active-showing model_form_edit '>
    <div class="w-[140px] m-4 mx-auto  h-[140px] rounded-full bg-color-gray-background-light border border-color-gray-background-light cursor-pointer 
    flex items-center justify-center image-div-edit">
        <i class='bx bx-plus-medical scale-125 text-color-gray-dark opacity-25'></i>
    </div>
    
    <form action='' class='w-full form-edit' id='form-edit' enctype="multipart/form-data">
        @csrf
        <h3 class='text-center heading-form'>Edit Categories</h3>
        
            <div class="w-[80%] mx-auto">
                <input type='hidden'  name='id' id='id_category'>
                <input type="text" name="name_edit" placeholder='name_edit' id="name_edit" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
            </div>
            <div class="w-[80%] mx-auto mt-4">
                <textarea name="description_edit" id="description_edit" cols="30" rows="10" class="w-full border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"></textarea>
            </div>
            <div class="w-[80%] mx-auto mt-4">
                <input type='hidden' name='old_image' id='old_image'>
                <input name='image_edit' type="file" class="file__img-input-edit" onchange="display_edit_image(this.files[0])" 
                hidden  id="image_edit" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
            </div>
            <button class='bg-primary-500 px-5 py-2 text-while rounded-md cursor-pointer inline-block mx-1 save_button_edit' type='submit'>Save</button>
            <button class='bg-primary-200 px-5 py-2  rounded-md cursor-pointer inline-block mx-1  cancel_button_edit'>Cancel</button>
    </form>
</div> 
<!--end edit -->
<div class="flex flex-col gap-2 md:flex-row mt-7">
    <div class='relative overflow-x-auto w-[99%]  md:w-[60%]  shadow-lg sm:rounded-lg mt-6'>
        <!--model insert categories to database-->
         
         <table class="w-full text-sm text-left text-blue-100 dark:text-blue-100">
              <thead class="text-xs text-white uppercase bg-blue-600 dark:text-white">
               <tr>
                    <th scope="col" class="px-6 py-3">Product name</th>
                    <th scope="col" class="px-6 py-3">Quantity</th>
                    <th scope="col" class="px-6 py-3">Colors</th>
                    <th scope="col" class="px-6 py-3">Size</th>
                    <th scope="col" class="px-6 py-3">Category</th>
                    <th scope="col" class="px-6 py-3">Brands</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
               </tr>
              </thead>
              <tbody class='body__table'>
               <tr class="bg-blue-500 border-b border-b-color-gray-background-light border-blue-400">
                    <th scope="row" class="px-6 py-4 flex items-center gap-2 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                         <span><img src='https://ma.jumia.is/cms/000_2022/Z-Categories/4-TV&HiTech/44-Camera&Video/300/Cam-gris-300-(1).png' 
                              alt="products" class='w-14 h-14 rounded-full' />
                         </span>
                         <span>Apple MacBook Pro 17"</span>
                    </th>
                    <td class="px-6 py-4">
                         <button class='border border-color-gray-background-light w-32 cursor-pointer outline-none rounded-md bg-while flex items-center'>
                              <span class="w-[30%] hover:bg-color-gray-background-light transition text-lg  border-r p-2 border-r-color-gray-background-light">-</span>
                              <span class='w-[40%] hover:bg-color-gray-background-light p-2 transition text-lg'>4</span>
                              <span class='w-[30%] hover:bg-color-gray-background-light transition text-lg border-l p-2 border-l-color-gray-background-light'>+</span>
                         </button>
                    </td>
                    <td class="px-6 py-4">
                         <div class='flex gap-1'>
                              <span class='w-6 h-6 rounded-full bg-color-rating'></span>
                              <span class='w-6 h-6 rounded-full bg-color-red-button'></span>
                              <span class='w-6 h-6 rounded-full bg-[#0ea5e9]'></span>
                         </div>
                    </td>
                    <td class="px-6 py-4">
                         <div class='flex gap-1'>
                              <span class='bg-color-gray-background-light p-1 px-3 rounded-md text-xs font-bold'>XL</span>
                              <span class='bg-color-gray-background-light p-1 px-3 rounded-md text-xs font-bold'>L</span>
                              <span class='bg-color-gray-background-light p-1 px-3 rounded-md text-xs font-bold'>M</span>
                              <span class='bg-color-gray-background-light p-1 px-3 rounded-md text-xs font-bold'>XS</span>
                         </div>
                    </td>
                    <td class="px-6 py-4">
                         <div class='flex flex-col items-center'>
                              <span><img src='https://img.huffingtonpost.com/asset/5ce6bd0c210000b90ed0ed6a.jpeg?ops=scalefit_720_noupscale' alt='category img'
                                   class="w-14 h-14 rounded-full"
                                   />
                              </span>
                              <span>Clothes</span>
                         </div>
                    </td>
                    <td class="px-6 py-4">
                         <div class='flex flex-col items-center'>
                              <span><img src='data:image/png;base64,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' 
                                   alt='brands products' class="w-14 h-14 rounded-full"/></span>
                              <span>Adidas</span>
                         </div>
                    </td>
                    <td class="px-6 py-4">
                         <div class='flex gap-1 items-center'>
                              <span><i class='bx bxs-edit text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#dcfce7] text-[#4ade80]' ></i></span>
                              <span><i class='bx bxs-trash text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#fee2e2] text-[#f87171]' ></i></span>
                              <span><i class='bx bxs-detail text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#cffafe] text-[#22d3ee]' ></i></span>
                         </div>
                    </td>
               </tr>
              </tbody>
         </table>
    </div>
</div>
</div>
<div class='right__product-header'>

</div>
</div>
</div>
</div>
</section>
<script
src="https://code.jquery.com/jquery-3.6.3.min.js"
integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
crossorigin="anonymous"></script>
<script>
    
    $(document).ready(function(){
        $(document).on('click','.save_button',function (e){
        e.preventDefault()
        //get data from form
        //console.log(image)
        $.ajax({
            url: "{{route('category-add')}}",
            type: 'POST',
            data: new FormData($('#form-add')[0]),

            processData: false,
            contentType: false,
            success: function (response){
                console.log('success')
                if(response.status=="success inserted categorie"){
                    $('#form-add')[0].reset()
                    
                    //console.log(response)
                    $('.body__table').empty()
                    $.each(response.categories,function(key,value){
                        console.log(value)
                        //empty table 
                        $('.body__table').append(`
                        
                        `)
                    })
                    


                    
                }
                console.log(response)
            },
            error: function (error){
                console.log("error")
                $.each(error.responseJSON.errors,function(key,value) {
                    console.log(value)
                })
            }
        })
        })
        //show 
        $(document).on('click','.button_edit',function (e){
            e.preventDefault()
            var id = $(this).data('id')
            $.ajax({
                url: "{{route('category-show')}}",
                type: 'POST',
                data: {
                    id:id,
                    _token: "{{ csrf_token() }}"
                },
                success: function (response){
                    console.log(response)
                    $('#name_edit').val(response.categories.name)
                    $('#description_edit').val(response.categories.description)
                    $('#old_img').val(response.categories.image)
                    $('#id_category').val(response.categories.id)
                    //get element has class image-div-edit and set attribute src to image
                    //$('.image-div-edit').style.backgroundImage=`url({{ asset('categories/${response.categories.image}') }})`
                },
                error: function (error){
                    console.log("error")
                    $.each(error.responseJSON.errors,function(key,value) {
                        console.log(value)
                    })
                }
            })


            //set file img data to form
        })
        //update categories 
        $(document).on('click','.save_button_edit',function(e){
            e.preventDefault()
            $.ajax({
                url: "{{route('category-update')}}",
                type: 'POST',
                data: new FormData($('#form-edit')[0]),
                processData: false,
                contentType: false,
                success: function (response){
                    console.log('success')
                    if(response.status=="success updated categories"){
                        $('#form-edit')[0].reset()
                        $('.body__table').empty()
                        $.each(response.categories,function(key,value){
                            console.log(value)
                            //empty table 
                            $('.body__table').append(`
                           
                            `)
                        } 
                        )
                    }
                },
                error: function (error){
                    console.log("error")
                    $.each(error.responseJSON.errors,function(key,value) {
                        console.log(value)
                    })
                }

        })
        })
        //delete categories
        $(document).on('click','.button_delete',function(e){
            e.preventDefault()
            let id = $(this).data('id')
            if(confirm('are you sure to delete this category?')){
                $.ajax({
                    url:"{{route('category-delete')}}",
                    type: 'POST',
                    data: {
                        id:id,
                        _token:$('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response){
                        if(response.status=="success delete categories"){
                            console.log('success')
                            $('.body__table').empty()
                            $.each(response.categories,function(key,value){
                                console.log(value)
                                //empty table 
                                $('.body__table').append(`
                                
                                `)
                            }) 
                        }
                    }, 
                    error: function (error){
                        console.log("error")
                        $.each(error.responseJSON.errors,function(key,value) {
                            console.log(value)
                        })
                    },
                })
            }


        })
            
        
        //search
        $(document).on('keyup','#search-categories',function(e){
            e.preventDefault()
            let search = $(this).val()
            console.log(search)
            $.ajax({
                url:"{{route('category-search')}}",
                type: 'POST',
                data: {
                    search:search,
                    _token:$('meta[name="csrf-token"]').attr('content')
                },
                success: function (response){
                    if(response.status=="success"){
                        console.log('success')
                        //code do while if response data is empty load true if not load false
                        var load = true
                        
                            //filter table of categories by search 
                            $('.body__table').empty()
                            $.each(response.categories,function(key,value){
                                console.log(value)
                                //empty table 
                                $('.body__table').append(`
                                
                                `)
                            
                        })
                    }
                },
                error:function (error){
                    console.log('error')
                }
            })
        })

     })
</script>
<script>
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    
</script>  





<script>
    //display image in div
    function img_div(){
          document.querySelector('.file__img-input1').click()
    }
    function img_div2(){
          document.querySelector('.file__img-input2').click()
    }
    function img_div3(){
          document.querySelector('.file__img-input3').click()
    }
    function img_div4(){
          document.querySelector('.file__img-input4').click()
    }
    

    document.querySelector('.image-div-edit').addEventListener('click',(e)=>{
    document.querySelector('.file__img-input-edit').click()})

    function display_add_image(file,e){
    console.log(e.target)
    let allowed = ['jpg','jpeg','png'];
    let ext = file.name.split(".").pop();
    if(allowed.includes(ext.toLowerCase())){
    image_added=true
    //set image in background-img of div
    if(e.target.className=='file__img-input1'){
            document.querySelector('.image-div1').style.backgroundImage=`url(${URL.createObjectURL(file)})`
    }
     if(e.target.className=='file__img-input2'){
               document.querySelector('.image-div2').style.backgroundImage=`url(${URL.createObjectURL(file)})`
     }
     if(e.target.className=='file__img-input3'){
               document.querySelector('.image-div3').style.backgroundImage=`url(${URL.createObjectURL(file)})`
     }
     if(e.target.className=='file__img-input4'){
               document.querySelector('.image-div4').style.backgroundImage=`url(${URL.createObjectURL(file)})`
     }
    }else {
    alert("Only the following image types are allowed:"+ allowed.toString(", "));
    }
    }
    //edit 
    function display_edit_image(file){
    let allowed = ['jpg','jpeg','png'];
    let ext = file.name.split(".").pop();
    if(allowed.includes(ext.toLowerCase())){
    image_added=true
    //set image in background-img of div
    document.querySelector('.image-div-edit').style.backgroundImage=`url(${URL.createObjectURL(file)})`
    }else {
    alert("Only the following image types are allowed:"+ allowed.toString(", "));
    }
    }
    ////////////////////////////////////////////////////////////////////////



    //hidden and ashow button 
    ///////////////////////////////////////////////////////////////////////////////
    document.querySelector('.add-button').addEventListener('click',()=>{
    console.log('ffuckk')
    document.querySelector('.overlay').classList.remove('active-showing')
    document.querySelector('.model_form').classList.remove('active-showing')
    })
    document.querySelector('.overlay').addEventListener('click',()=>{
    document.querySelector('.overlay').classList.add('active-showing')
    document.querySelector('.model_form').classList.add('active-showing')
    })
    //edit 
    function edit_category(){
        document.querySelector('.overlay').classList.remove('active-showing')
        document.querySelector('.model_form_edit').classList.remove('active-showing')
    }

    

    document.querySelector('.cancel_button').addEventListener('click',(e)=>{
    e.preventDefault()
    //reset form from data 
    //document.querySelector('.form-add').reset()
    document.querySelector('.overlay').classList.add('active-showing')
    document.querySelector('.model_form').classList.add('active-showing')
    
    })

    document.querySelector('.cancel_button_edit').addEventListener('click',(e)=>{
    e.preventDefault()
    //reset form from data 
    //document.querySelector('.form-add').reset()
    document.querySelector('.overlay').classList.add('active-showing')
    document.querySelector('.model_form_edit').classList.add('active-showing')
    
    })
    document.querySelector('.save_button').addEventListener('click',(e)=>{
    e.preventDefault()
    //reset form from data 
    //document.querySelector('.form-add').reset()
    document.querySelector('.overlay').classList.add('active-showing')
    document.querySelector('.model_form').classList.add('active-showing')
    
    })

    document.querySelector('.save_button_edit').addEventListener('click',(e)=>{
    e.preventDefault()
    //reset form from data 
    //document.querySelector('.form-add').reset()
    document.querySelector('.overlay').classList.add('active-showing')
    document.querySelector('.model_form_edit').classList.add('active-showing')
    
    })
    //////////////////////////////////////////////////////////////////////////////



</script>
@endsection


