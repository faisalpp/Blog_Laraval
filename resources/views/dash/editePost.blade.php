@extends('dashboardLayout.main')
@push('title')
   <title>Edit Post</title>
@endpush
@section('section')
@foreach ($post as $p)
 <form action="{{url('/dashboard/updatePost')}}/{{$p->post_id}}" method="post" class='flex flex-col bg-c1 w-1/2 h-fit mt-10 ml-10 space-y-5 p-5'>
 @csrf
 {!! Form::text('title', $p->title, ['class'=>'border-2 border-c2 rounded-md w-96 px-2','placeholder'=>'Title']) !!}
 {!! Form::select('category', ['ReactJs'=>'ReactJs','UiDesign'=>'UiDesign'], $p->category, ['class'=>'w-fit']) !!}
 {!! Form::text('image', $p->image, ['class'=>'border-2 border-c2 rounded-md w-52 px-2','placeholder'=>'Image']) !!}
 {!! Form::text('excerpt', $p->excerpt, ['class'=>'border-2 border-c2 rounded-md w-96 px-2','placeholder'=>'Excerpt']) !!}
 {!! Form::textarea('content', $p->content, ['class'=>'border-2 border-c2 rounded-md w-full h-52 px-2','placeholder'=>'Content']) !!}
 {!! Form::submit('Update Post', ['class'=>'bg-c2 px-2 py-2 text-c1 w-fit rounded-md px-2']) !!}
 {!! Form::close() !!}
@endforeach

@endsection