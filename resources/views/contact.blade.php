@extends('layout.main')
@push('title')
 <title>Contact</title>
@endpush
@section('main-section')
    <div class='flex justify-center w-full items-center bg-c3'>      
      <div class='flex space-y-10 bg-c2/30 shadow-2xl rounded-xl lg:p-10 p-5 flex-col w-fit h-fit'>
      <h3 class='text-c1 font-bold text-3xl text-center'>@lang('lang.msgMe')</h3>
      {!! Form::open(['url'=>url('/message'),'method'=>'post','class'=>'flex flex-col']) !!}
        {!! Form::text('name','', ['class'=>'!outline-none backdrop-blur-lg bg-c2/40 w-full h-10 px-2 text-xl rounded-full mb-10 text-c1' ,'placeholder'=>"Name"]) !!}
        {!! Form::text('email','', ['class'=>'!outline-none backdrop-blur-lg bg-c2/40 w-full h-10 px-2 text-xl rounded-full mb-10 text-c1' ,'placeholder'=>"Email"]) !!}
        {!! Form::password('password', ['class'=>'!outline-none backdrop-blur-lg bg-c2/40 w-full h-10 px-2 text-xl rounded-full mb-10 text-c1' ,'placeholder'=>"Password"]) !!}
        {!! Form::submit('Sign Up', ['class'=>'cursor-pointer self-center backdrop-blur-lg bg-c2/50 text-c1 mt-2 rounded-full px-8 py-3 text-2xl w-fit lg:px-10 lg:py-2']) !!}
      {!! Form::close() !!}
     </div>
    </div>


@endsection
