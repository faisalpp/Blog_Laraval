@extends('layout.main')
@push('title')
  <title>Category</title>
@endpush
@section('main-section')

<div class='w-full' style="min-height: calc(100vh - 190px)">
  <div class='lg:flex hidden items-center text-c3 ml-2 shadow-md bg-c1 mt-5 w-fit rounded-full space-x-2 px-2'><h3>Home</h3><i class="fa fa-angle-right text-c2"></i><h3>Category</h3><i class="fa fa-angle-right text-c2"></i><h3>ReactJs</h3></div>
    <form action="" id="search" class="flex justify-end space-x-3 mr-10"><input class="px-2 border-2 border-c2 rounded-md w-52" value="{{$search}}" oninput="document.getElementById('search').submit();" type="search" name="search" placeholder="Search Blog"/><button class="bg-c2 px-2 py-2 text-c1 font-semibold rounded-md">Search</button></form>
    <div class='grid lg:grid-cols-4 sm:grid-cols-1  mt-10 mb-10'>
     @foreach ($category as $post)
      <x-card :slug="$post->slug" :category="$post->category" :title="$post->title" :excerpt="$post->excerpt" :image="$post->image"/>
     @endforeach
    </div>
    <div class="flex justify-center mb-10 text-c2 font-bold">
     {{$category->links()}}
    </div>
</div>
</body>

@endsection