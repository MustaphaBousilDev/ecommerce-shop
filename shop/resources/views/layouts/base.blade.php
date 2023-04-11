<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="{{asset('assets/css-tailwind/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/scss/dist/styles.css')}}"/>
    @livewireStyles
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
        <div class="content__dashboard py-2 px-4 md:px-10 relative flex flex-col">
            <div class='profiles__dashboard flex justify-between items-center p-5'>
                <h3 class="text-md md:text-3xl font-semibold ">Dashboard</h3>
                <div class='w-14 h-14 p-1 cursor-pointer  border border-color-red-button rounded-full overflow-hidden'>
                    <img class='w-full h-full rounded-full' src='https://newprofilepic2.photo-cdn.net//assets/images/article/profile.jpg' alt='image profile '/>
                </div>
            </div>
            {{$slot}}
        </div>
    </section>

<!--admin-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{asset('assets/js/admin/sidebar.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');
    const bar_chart=document.getElementById('bar-chart');
    const line_chart=document.getElementById('line-chart');
    const data = {
        labels: [
            'Red',
            'Green',
            'Yellow',
            'Grey',
            'Blue'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [11, 16, 7, 3, 14],
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(75, 192, 192)',
            'rgb(255, 205, 86)',
            'rgb(201, 203, 207)',
            'rgb(54, 162, 235)'
            ]
        }]
    };
    new Chart(ctx, {
        type: 'polarArea',
        data: data,
        options: {}
    });

    //function event if i scroll page 
    
    //bar charts
    
    Chart.defaults.backgroundColor = '#000';
    new Chart(bar_chart, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
            label: '# of Votes',
            data: [3, 10, 9, 10,12,13],
            backgroundColor:[
                'rgba(255,99,132,0.2)',
                'rgba(54,162,235,0.2)',
                'rgba(255,206,86,0.2)',
                'rgba(75,192,192,0.2)',
                'rgba(153,102,255,0.2)',
                'rgba(255,159,64,0.2)',
            ],
            borderColor:[
                'rgba(255,99,132,1)',
                'rgba(54,162,235,1)',
                'rgba(255,206,86,1)',
                'rgba(75,192,192,1)',
                'rgba(153,102,255,1)',
                'rgba(255,159,64,1)',
            ],
            borderWidth: 1,
            }]
        },
        options: {
            responsive:true,
        }
    });

    //Line Charts 
    
    new Chart(line_chart,{
        type: 'line',
        data: {
            labels: 'Red',
            datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]

        }
    })
</script>
@livewireScripts
</body>

</html>