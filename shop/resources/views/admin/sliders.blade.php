@extends('layouts.layout')
@section('content')
            <div class="products__tables">
               <div class='header__product-lists'>
                    <div class='left__product-header flex justify-between'>
                         <h1 class='text-xl md:text-3xl font-bold'>Sliders Products</h1>
                         <button onClick="" class='bg-color-red-button opacity-80 transition hover:opacity-100
                         cursor-pointer outline-none border-none rounded-md text-while py-1 px-3 add-button'>
                              <span class='font-bold'>+</span> Add
                         </button>
                    </div>
                    <div class="body__products-dashboard">
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
<div class='w-[500px] p-4  bg-primary-50 rounded-lg z-[10000] fixed top-[50%] translate-y-[-50%] left-[50%] translate-x-[-50%] active-showing model_form '>
    <div style="height:200px" class="w-[90%] m-4 mx-auto  bg-color-gray-background-light border border-color-gray-background-light cursor-pointer 
    flex items-center justify-center image-div">
        <i class='bx bx-plus-medical scale-125 text-color-gray-dark opacity-25'></i>
    </div>
    
    <form action='' class='w-full form-add' id='form-add' enctype="multipart/form-data">
        @csrf
        <h3 class='text-center heading-form'>Add Sliders</h3>
            <div class="w-[80%] mx-auto">
                <input type="text" name="title" placeholder='title' id="title" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
            </div>
            <div class="w-[80%] mx-auto">
               <input type="text" name="description" placeholder='description' id="description" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
            </div>
            <div class="w-[80%] mx-auto">
               <input type="text" name="colors" placeholder='colors' id="colors" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
            </div>
            <div class="w-[80%] mx-auto">
               <select style="width:100%;padding:8px;border-radius:5px;" name='brand_id' class=' mt-4'>
                    <option value="">Select Brand</option>
                    @foreach ($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>
            </div>
           <div class="w-[80%] mx-auto">
               <select style="width:100%;padding:8px;border-radius:5px;"
                name='subcategory_id' class='w-[80%] mx-auto mt-4'>
                    <option value="">Select SubCategory</option>
                    @foreach ($subcategories as $subcategory)
                        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                    @endforeach
                </select>
           </div>
            <div class="w-[80%] mx-auto mt-4">
                <input name='image' type="file" class="file__img-input" onchange="display_add_image(this.files[0])" 
                hidden name="image" id="image" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
            </div>
            <div class="w-[80%] mx-auto mt-4">
                <button class='bg-primary-500 px-5 py-2 text-while rounded-md cursor-pointer inline-block mx-1 save_button' type='submit'>Save</button>
                <button class='bg-primary-200 px-5 py-2  rounded-md cursor-pointer inline-block mx-1  cancel_button'>Cancel</button>
            </div>
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
        <h3 class='text-center heading-form'>Edit Brands</h3>
        <input type='hidden' name='slide' id='slide'/>
        <div class="w-[80%] mx-auto">
          <input type="text" name="title_edit" placeholder='title' id="title_edit" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
        </div>
      <div class="w-[80%] mx-auto">
         <input type="text" name="description_edit" placeholder='description_edit' id="description_edit" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
      </div>
      <div class="w-[80%] mx-auto">
         <input type="text" name="colors_edit" placeholder='colors_edit' id="colors_edit" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
      </div>
      <div class="w-[80%] mx-auto">
         <select style="width:100%;padding:8px;border-radius:5px;" id='name='brand_id_edit'' name='brand_id_edit' class=' mt-4'>
              <option value="">Select Brand</option>
              @foreach ($brands as $brand)
                  <option value="{{$brand->id}}">{{$brand->name}}</option>
              @endforeach
          </select>
      </div>
     <div class="w-[80%] mx-auto">
         <select style="width:100%;padding:8px;border-radius:5px;"
          name='subcategory_id_edit' id='subcategory_id_edit' class='w-[80%] mx-auto mt-4'>
              <option value="">Select SubCategory</option>
              @foreach ($subcategories as $subcategory)
                  <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
              @endforeach
          </select>
     </div>
            <div class="w-[80%] mx-auto mt-4">
                <input type='hidden' name='old_image' id='old_image'>
                <input name='image_edit' type="file" class="file__img-input-edit" onchange="display_edit_image(this.files[0])" 
                hidden  id="image_edit" class="w-full h-[40px] border border-color-gray-background-light rounded-md px-3 mt-2 outline-none focus:border-color-red-button"/>
            </div>
            <div class="w-[80%] mx-auto mt-4">
                <button class='bg-primary-500 px-5 py-2 text-while rounded-md cursor-pointer inline-block mx-1 save_button_edit' type='submit'>Save</button>
                <button class='bg-primary-200 px-5 py-2  rounded-md cursor-pointer inline-block mx-1  cancel_button_edit'>Cancel</button>
            </div>
    </form>
</div> 
<!--end edit -->
<div class="flex flex-col gap-2 md:flex-row mt-7">
    <div class='relative overflow-x-auto w-[99%]  md:w-[60%]  shadow-lg sm:rounded-lg mt-6'>
        <!--model insert categories to database-->
         
         <table class="w-full text-sm text-left text-blue-100 dark:text-blue-100">
              <thead class="text-xs text-white uppercase bg-blue-600 dark:text-white">
                   <tr>
                        <th scope="col" class="px-6 py-3">Slide</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Actions</th>
                   </tr>
              </thead>
              <tbody class='body__table'>
                    @foreach ($sliders as $slider)
                        <tr class="bg-blue-500 border-b border-b-color-gray-background-light border-blue-400">
                            <th scope="row" class="px-6 py-4 flex items-center gap-2 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                <span><img src="{{ asset('sliders/'.$slider->image) }}" alt="products" class='w-14 h-14 rounded-full' />
                                </span>
                                <span>{{$slider->title}}</span>
                            </th>
                            <td class="px-6 py-4">
                                <form>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer" checked>
                                        <div class="w-11 h-6 bg-color-red-button rounded-full peer peer-focus:ring-4 peer-focus:bg-color-gray-background-light
                                        dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full 
                                        peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] 
                                        after:bg-color-red-button after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 
                                        after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    </label>
                                </form>
                            </td>
                            <td class="px-6 py-4">
                                <div class='flex gap-1 items-center'>
                                    <span onclick='edit_category()' class='button_edit' data-id='{{$slider->id}}'>
                                        <i class='bx bxs-edit text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#dcfce7] text-[#4ade80]' ></i>
                                    </span>
                                    <span class='button_delete' data-id='{{$slider->id}}'><i class='bx bxs-trash text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#fee2e2] text-[#f87171]' ></i></span>
                                    <span><i class='bx bxs-detail text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#cffafe] text-[#22d3ee]' ></i></span>
                                </div>
                            </td>
                        </tr>
                    @endforeach
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
        $.ajax({
            url: "{{route('sliders-add')}}",
            type: 'POST',
            data: new FormData($('#form-add')[0]),

            processData: false,
            contentType: false,
            success: function (response){
                console.log('success')
                if(response.status=="success inserted slider"){
                    $('#form-add')[0].reset()
                    
                    //console.log(response)
                    $('.body__table').empty()
                    $.each(response.sliders,function(key,value){
                        console.log(value)
                        //empty table 
                        $('.body__table').append(`
                        <tr class="bg-blue-500 border-b border-b-color-gray-background-light border-blue-400">
                            <th scope="row" class="px-6 py-4 flex items-center gap-2 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                <span><img src="{{ asset('sliders/${value.image}') }}" alt="products" class='w-14 h-14 rounded-full' />
                                </span>
                                <span>${value.title}</span>
                            </th>
                            <td class="px-6 py-4">
                                <form>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer" checked>
                                        <div class="w-11 h-6 bg-color-red-button rounded-full peer peer-focus:ring-4 peer-focus:bg-color-gray-background-light
                                        dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full 
                                        peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] 
                                        after:bg-color-red-button after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 
                                        after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    </label>
                                </form>
                            </td>
                            <td class="px-6 py-4">
                                <div class='flex gap-1 items-center'>
                                    <span onclick='edit_category()' class='button_edit' data-id='${value.id}' ><i class='bx bxs-edit text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#dcfce7] text-[#4ade80]' ></i></span>
                                    <span class='button_delete' data-id='${value.id}'><i class='bx bxs-trash text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#fee2e2] text-[#f87171]' ></i></span>
                                    <span><i class='bx bxs-detail text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#cffafe] text-[#22d3ee]' ></i></span>
                                </div>
                            </td>
                        </tr>
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
                url: "{{route('sliders-show')}}",
                type: 'POST',
                data: {
                    id:id,
                    _token: "{{ csrf_token() }}"
                },
                success: function (response){
                    console.log(response)
                    $('#title_edit').val(response.slider.title)
                    $('#description_edit').val(response.slider.description)
                    $('#brand_id_edit').val(response.slider.brand_id)
                    $('#subcategory_id_edit').val(response.slider.subcategory_id)
                    $('#colors_edit').val(response.slider.colors)
                    $('#slide').val(response.slider.id)
                    console.log($('#title_edit'))
                    console.log($('#description_edit'))
                    console.log($('#brand_id_edit'))
                    console.log($('#subcategory_id_edit'))
                    console.log($('#colors_edit'))


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
        //update brands 
        $(document).on('click','.save_button_edit',function(e){
            e.preventDefault()
            $.ajax({
                url: "{{route('sliders-update')}}",
                type: 'POST',
                data: new FormData($('#form-edit')[0]),
                processData: false,
                contentType: false,
                success: function (response){
                    console.log(response)
                    console.log('success')
                    if(response.status=="success updated slider"){
                        $('#form-edit')[0].reset()
                        $('.body__table').empty()
                        $.each(response.sliders,function(key,value){
                            console.log(value)
                            //empty table 
                            $('.body__table').append(`
                            <tr class="bg-blue-500 border-b border-b-color-gray-background-light border-blue-400">
                                <th scope="row" class="px-6 py-4 flex items-center gap-2 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                    <span><img src="{{ asset('sliders/${value.image}') }}" alt="products" class='w-14 h-14 rounded-full' />
                                    </span>
                                    <span>${value.title}</span>
                                </th>
                                <td class="px-6 py-4">
                                    <form>
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox" value="" class="sr-only peer" checked>
                                            <div class="w-11 h-6 bg-color-red-button rounded-full peer peer-focus:ring-4 peer-focus:bg-color-gray-background-light
                                            dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full 
                                            peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] 
                                            after:bg-color-red-button after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 
                                            after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                        </label>
                                    </form>
                                </td>
                                <td class="px-6 py-4">
                                    <div class='flex gap-1 items-center'>
                                        <span onclick='edit_category()' class='button_edit' data-id='${value.id}'><i class='bx bxs-edit text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#dcfce7] text-[#4ade80]' ></i></span>
                                        <span class='button_delete' data-id='${value.id}'><i class='bx bxs-trash text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#fee2e2] text-[#f87171]' ></i></span>
                                        <span><i class='bx bxs-detail text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#cffafe] text-[#22d3ee]' ></i></span>
                                    </div>
                                </td>
                            </tr>
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
        //delete brands
        $(document).on('click','.button_delete',function(e){
            e.preventDefault()
            let id = $(this).data('id')
            if(confirm('are you sure to delete this brands?')){
                $.ajax({
                    url:"{{route('sliders-delete')}}",
                    type: 'POST',
                    data: {
                        id:id,
                        _token:$('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response){
                        if(response.status=="success deleted slider"){
                            console.log('success')
                            $('.body__table').empty()
                            $.each(response.sliders,function(key,value){
                                console.log(value)
                                //empty table 
                                $('.body__table').append(`
                                <tr class="bg-blue-500 border-b border-b-color-gray-background-light border-blue-400">
                                    <th scope="row" class="px-6 py-4 flex items-center gap-2 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                        <span><img src="{{ asset('sliders/${value.image}') }}" alt="products" class='w-14 h-14 rounded-full' />
                                        </span>
                                        <span>${value.title}</span>
                                    </th>
                                    <td class="px-6 py-4">
                                        <form>
                                            <label class="relative inline-flex items-center cursor-pointer">
                                                <input type="checkbox" value="" class="sr-only peer" checked>
                                                <div class="w-11 h-6 bg-color-red-button rounded-full peer peer-focus:ring-4 peer-focus:bg-color-gray-background-light
                                                dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full 
                                                peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] 
                                                after:bg-color-red-button after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 
                                                after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                            </label>
                                        </form>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class='flex gap-1 items-center'>
                                            <span onclick='edit_category()' class='button_edit' data-id='${value.id}'><i class='bx bxs-edit text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#dcfce7] text-[#4ade80]' ></i></span>
                                            <span class='button_delete' data-id='${value.id}'><i class='bx bxs-trash text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#fee2e2] text-[#f87171]' ></i></span>
                                                <span><i class='bx bxs-detail text-2xl rounded-full flex items-center justify-center cursor-pointer w-11 h-11 bg-[#cffafe] text-[#22d3ee]' ></i></span>
                                        </div>
                                    </td>
                                </tr>
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
            

     })
</script>
<script>
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    
</script>  





<script>
    //display image in div
    document.querySelector('.image-div').addEventListener('click',(e)=>{
    document.querySelector('.file__img-input').click()})

    document.querySelector('.image-div-edit').addEventListener('click',(e)=>{
    document.querySelector('.file__img-input-edit').click()})

    function display_add_image(file){
    let allowed = ['jpg','jpeg','png'];
    let ext = file.name.split(".").pop();
    if(allowed.includes(ext.toLowerCase())){
    image_added=true
    //set image in background-img of div
    document.querySelector('.image-div').style.backgroundImage=`url(${URL.createObjectURL(file)})`
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


