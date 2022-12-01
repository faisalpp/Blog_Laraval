@extends('dashboardLayout.main')
@push('title')
   <title>All Posts</title>
@endpush
@section('section')
  <div class="flex flex-col w-full justify-center mt-5">
    <form action="" id="search" class="flex justify-end space-x-3 mb-5 mr-10"><input class="px-2 border-2 border-c2 rounded-md w-52" value="{{$search}}" type="search" name="search" placeholder="Search Blog"/><button class="bg-c2 px-2 py-2 text-c1 font-semibold rounded-md">Search</button></form>
   <div class='flex flex-col w-11/12 self-center'>
    <x-Posts :posts="$posts" trash="false"/>
   </div>
    <div class="flex w-full mb-10 mt-10 justify-center">{{$posts->links()}}</div>
  </div>
@endsection