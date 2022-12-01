@extends('dashboardLayout.main')
@push('title')
   <title>Posts Trash</title>
@endpush
@section('section')
  <div class="flex w-full justify-center mt-10">
  @if($posts)
   <div class='flex w-2/3 items-center justify-center'><h3 class="text-red-500 font-bold text-3xl">Trash is Empty</h3></div>
  @else
   <div class='flex w-2/3'><x-Posts :posts="$posts" trash="true"/></div>
  @endif
  </div>
@endsection