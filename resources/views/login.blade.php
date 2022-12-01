@extends('layout.main')
@section('main-section')
<div class="flex flex-col w-full items-center justify-center bg-c3">
<div class='flex bg-c2/30 space-y-10 shadow-2xl rounded-xl p-10 flex-col lg:w-1/3 w-full lg:h-fit'>
  <h3 class='text-c1 font-bold lg:text-4xl text-xl text-center'>@lang('lang.loginMsg')</h3>
  <h3 class="text-c1 font-semibold text-center">@lang('lang.noAccount')<a href="{{url('/signup')}}"><span class="text-red-400 hover:underline"> @lang('lang.create')</span></a></h3>
  {!! Form::open(['url'=> url('/login'),'method'=>'post','class'=>'flex flex-col']) !!}
  {!! Form::text('email','', ['class'=>'!outline-none backdrop-blur-lg bg-c2/40 w-full h-12 px-2 text-2xl rounded-full mb-10 text-c1' ,'placeholder'=>"Email"]) !!}
  {!! Form::password('password', ['class'=>'!outline-none backdrop-blur-lg bg-c2/40 w-full h-12 px-2 text-2xl rounded-full mb-10 text-c1', 'placeholder'=>"Password"]) !!}  
  {!! Form::submit('Sign In', ['class'=>'self-center backdrop-blur-lg bg-c2/50 text-c1 mt-10 rounded-full px-8 py-3 text-2xl w-fit lg:px-10 lg:py-2']) !!}
  {!! Form::close() !!}
     </div>
    </div>
  </div>
@endsection