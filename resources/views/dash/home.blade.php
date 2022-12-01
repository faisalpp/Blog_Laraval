@extends('dashboardLayout.main')
@push('title')
    <title>Admin Home</title>
@endpush
@section('section')    
<div class="flex flex-col"> 
 <div><input class='h-8 w-full mt-5 ml-2 rounded-xl px-2 text-gray-400 border-2 border-blue-300' type='text' placeholder='Search Articles'/></div>
 <div class="flex">
 <div><x-Stats :posts="$posts_count"/></div>
 <div><x-RecentComment :posts="$posts"/></div>
 </div>
 <div class="flex mt-5">
 <div><h3 class='font-bold text-2xl ml-2 mb-2'>Recent Articles</h3><x-Posts :posts="$posts" trash="false"/></div>
 <div>
 <div><x-SocialCards/></div>
</div>
@endsection