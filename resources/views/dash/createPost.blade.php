@extends('dashboardLayout.main')
@push('title')
   <title>Create Post</title>
@endpush
@section('section')
 {!! Form::open(['url'=> url('/dashboard/createPost'),'method'=>'post','class'=>'flex flex-col bg-c1 w-1/2 h-fit mt-10 ml-10 space-y-5 p-5']) !!}
 {!! Form::text('title', '', ['class'=>'border-2 border-c2 rounded-md w-96 px-2','placeholder'=>'Title']) !!}
 {!! Form::select('category', ['ReactJs'=>'ReactJs','UiDesign'=>'UiDesign'], 'ReactJs', ['class'=>'w-fit']) !!}
 {!! Form::text('image', '', ['class'=>'border-2 border-c2 rounded-md w-52 px-2','placeholder'=>'Image']) !!}
 {!! Form::text('excerpt', '', ['class'=>'border-2 border-c2 rounded-md w-96 px-2','placeholder'=>'Excerpt']) !!}
 {!! Form::textarea('content', '', ['class'=>'border-2 border-c2 rounded-md w-full h-52 px-2','placeholder'=>'Content']) !!}
 {!! Form::submit('Create Post', ['class'=>'bg-c2 px-2 py-2 text-c1 w-fit rounded-md px-2']) !!}
 {!! Form::close() !!}
@endsection