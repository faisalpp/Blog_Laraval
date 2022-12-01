
@extends('layout.main')
@push('title')
  <title>Home</title>
@endpush
@section('main-section')
<x-banner/>
<x-hero/>
<div class="lg:w-full w-full">
 <h3 class='lg:ml-24 ml-12 text-2xl font-bold mt-10 text-c3'>Learn ReactJs</h3>      
  <div class='grid lg:grid-cols-4 grid-cols-1  mt-10 mb-10'>
    @foreach ($reactPosts as $post)
    <x-card  :slug="$post->slug" :category="$post->category" :title="$post->title" :excerpt="$post->excerpt" :image="$post->image"/>
    @endforeach
  </div>   
     
  <h3 class='ml-24 text-2xl font-bold mt-10 text-c3'>New Designs</h3>   
   <div class='grid lg:grid-cols-4 grid-cols-1  mt-10 mb-10'>
    @foreach ($uiPosts as $post)
     <x-card  :slug="$post->slug" :category="$post->category" :title="$post->title" :excerpt="$post->excerpt" :image="$post->image"/>    
    @endforeach 
   </div>
</div>
@endsection