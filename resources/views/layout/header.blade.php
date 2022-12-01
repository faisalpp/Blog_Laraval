<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('title')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    <link type="text/javascript" href="{{ asset('js/app.js') }}" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js">
     </script>
</head>
<body>
<div class='header flex items-center bg-c1 shadow-md lg:p-3 p-2 w-full'>
 <div class='flex flex-col items-center lg:w-52'>
  <h3 class='text-c3 lg:text-2xl text-xl font-bold'>REACTIAN</h3>
  <h3 class='text-c3 hidden lg:flex'>Design With Code</h3>
 </div>
 <div class='flex justify-end space-x-5 lg:mr-5 w-full font-semibold'>
  <div class='lg:flex hidden lg:space-x-10 items-center'>
   <a href='/'><h3 class='text-c4 hover:border-b-2 hover:border-c3 hover:text-c3 hover:py-0.5 cursor-pointer'>Home</h3></a>
   <a href="{{url('/category/ReactJs')}}" ><h3 class='text-c4 active:text-c2 hover:border-b-2 hover:border-c3 hover:text-c3 hover:py-0.5 cursor-pointer'>ReactJs</h3></a>
   <a href="{{url('/category/UiDesign')}}" ><h3 class='text-c4 hover:border-b-2 hover:border-c3 hover:text-c3 hover:py-0.5 cursor-pointer'>UI Design&apos;s</h3></a>
   <a href="{{url('/contact')}}"><h3 class='text-c4 hover:border-b-2 hover:border-c3 hover:text-c3 hover:py-0.5 cursor-pointer'>Contact</h3></a>
  </div>
  @if(session()->get('role') == 'user')    
  <div class="flex items-center space-x-5">
  <button>
   <div class="lg:flex hidden  border-c2 border-2 rounded-full w-12 h-12 justify-center items-center"><h3 class="text-c2 font-semibold text-xl">{{strtoupper(session()->get('name')[0])}}</h3></div>
  </button>
  <button onclick="window.location ='{{url('/logout')}}';"><i class="fa fa-arrow-right-from-bracket text-2xl text-c2"></i></button>
  </div>
  @elseif(session()->get('role') == 'admin')
  <div class="flex items-center space-x-5">
  <img src="{{url('/images/avtar.png')}}" class="lg:flex hidden rounded-full h-12 w-12" /></button>
  <button onclick="window.location ='{{url('/dashboard/home')}}';">Dashboard</button>
  <button onclick="window.location ='{{url('/logout')}}';"><i class="fa fa-arrow-right-from-bracket text-2xl text-c2"></i></button>
  </div>
  @else
   <div class='lg:flex hidden items-center space-x-2'>
    <a href="{{url('/login')}}" class='bg-c3 hover:bg-c2 text-c1 rounded-lg px-3 py-2 cursor-pointer' >Login</a>
    <a href="{{url('/signup')}}" class='border-2 border-c3 hover:text-c1 text-c2 hover:bg-c2 hover:border-c2 rounded-lg px-3 py-2 cursor-pointer' >SignUp</a>
   </div>
  @endif
  </div>
</div>
