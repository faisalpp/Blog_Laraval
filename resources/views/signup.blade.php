@extends('layout.main')
@section('main-section')
<div class="flex w-full justify-center items-center bg-c3">
<div class='flex space-y-10 bg-c2/30 shadow-2xl rounded-xl p-10 flex-col lg:w-1/3 w-full lg:h-fit h-full'>
      <h3 class='text-c1 font-bold lg:text-2xl text-xl text-center'>@lang('lang.createNewAccount')</h3>
        <h3 class="text-c1 font-semibold text-center text-md">@lang('lang.alreadyAccount')<a href="{{url('/login')}}" ><span class="text-red-400 hover:underline"> @lang('lang.login')</span></h3></a>
      {!! Form::open(['url'=>url('/signup'),'method'=>'post','class'=>'flex flex-col']) !!}
        {!! Form::text('name','', ['class'=>'!outline-none backdrop-blur-lg bg-c2/40 w-full h-10 px-2 text-xl rounded-full mb-10 text-c1' ,'placeholder'=>"Name"]) !!}
        {!! Form::text('email','', ['class'=>'!outline-none backdrop-blur-lg bg-c2/40 w-full h-10 px-2 text-xl rounded-full mb-10 text-c1' ,'placeholder'=>"Email"]) !!}
        {!! Form::password('password', ['class'=>'!outline-none backdrop-blur-lg bg-c2/40 w-full h-10 px-2 text-xl rounded-full mb-10 text-c1' ,'placeholder'=>"Password"]) !!}
        {!! Form::submit('Sign Up', ['class'=>'self-center backdrop-blur-lg bg-c2/50 text-c1 mt-2 rounded-full px-8 py-3 text-2xl w-fit lg:px-10 lg:py-2']) !!}
      {!! Form::close() !!}
     </div>
    </div>
@endsection