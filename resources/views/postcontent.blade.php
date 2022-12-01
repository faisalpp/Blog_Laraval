@extends('layout.main')
@section('main-section')
   
<div class='flex flex-col rounded-xl ml-10 mt-10 w-fit'>
  
  @foreach ($content as $post)
    <div class='flex items-center space-x-3 text-gray-500 mb-5'><div id="title-date" class="text-c2 font-semibold">{{$post->created_at}}</div><div class='bg-red-500 w-3 h-3 rounded-full'></div><h3 class="text-c2 font-semibold">{{$post->category}}</h3></div>
    <div class='flex mt-10 mb-10 w-full h-full space-x-16'>
     <div class="lg:w-2/3"><img class='rounded-2xl lg:w-full lg:h-full' src="{{url('/images')}}/{{$post->image}}"/></div>
    </div>
    
    <div class='flex flex-col w-full'>
    <div class='bg-c1 w-2/3 rounded-lg shadow-md px-2 py-2 font-bold text-4xl mb-5 text-c2'>{{$post->title}}</div>
    <div class='flex w-full'>
     <p class="w-2/3 bg-c1 px-5 py-5 shadow-lg">{{$post->content}}</p>
    @endforeach 
     <div class="flex flex-col">
     {{-- Related Posts --}}
     <div class="w-80 h-fit bg-c1 rounded-lg shadow-xl ml-16">
      <h3 class="text-2xl text-c2 text-center mt-5 font-bold">Related Post&apos;s</h3>
         {{--Related Post Card  --}}
       @foreach ($relatedPosts as $post)  
       <div class="flex border-t-2 border-t-c4 ml-3 mr-3 mt-5 mb-5 py-5">
        <img class='rounded-xl w-20 h-20' src="{{url('/images')}}/{{$post->image}}" />
        <div class='flex flex-col ml-3'>
         <h3 class="text-c3 font-semibold">{{$post->first()->title}}</h3>
         <p class="text-sm text-slate-600 py-px w-fit h-14 overflow-y-clip">{{$post->excerpt}}</p>
        </div>
       </div>
       @endforeach
      </div>
        <div class="w-80 h-auto bg-c1 rounded-lg ml-16 mt-10 shadow-xl">
         <h3 class="text-2xl text-center mt-5 font-bold text-c2">Tags</h3>
         <div class="flex w-fit h-fit ml-5 mr-5 mt-5 mb-5 space-x-3 font-semibold">
          <div class="border-2 border-c2 text-c2 rounded-full text-sm px-2 py-px">ReactJs</div>
         </div>
        </div>
     </div> 
     </div>
    </div>
    
    <div id="comments" class="w-96 mt-12 bg-c1 rounded-xl px-5 py-3 shadow-xl">
     <h3 class='text-2xl text-c2 font-bold mb-5'>{{count($content->first()->comments)}} Comment&apos;s</h3>
      
      <form action="{{url('/create-comment')}}" method="post" class='border-2 border-gray-300 rounded-lg px-2 py-2 w-fit h-fit'>
       <input name="postId" class="hidden" value="{{$content->first()->post_id}}" />
       <div class='flex space-x-2 w-full'>
        <input name="comment" />
        <button type="submit" class='flex items-center bg-c4 w-fit h-fit rounded-lg text-white px-2 py-px'>Send</button>
       </div>
      </form>

    @foreach ($content->first()->comments as $comment)
    <div class='mt-5 mb-8 border-b-2 border-c4'>
    <div class='flex items-center'><img alt='user_img' class='rounded-full h-10 w-10' src="{{url('/images')}}/{{$comment->image}}" />
    <a href="/"><h3 class='hover:underline ml-3 text-c3 font-semibold overflow-hidden'>{{$comment->name}}</h3></a>
    </div>
    <p class='ml-12 text-slate-600'>{{$comment->comment}}</p>
    <div class='flex items-center ml-12 mt-2 mb-2 space-x-5'> 
    <div class='flex border-2 rounded-xl px-2 bg-gray-100'>
      <div class='text-c4 text-sm hover:text-c2 cursor-pointer'>
      <form action="{{url('/post-likes')}}" method="post">
      @csrf
      <input name="commentId" value="{{$comment->comment_id}}" class="hidden" />
      <button type="submit" class='text-xs cursor-pointer font-bold'>
        {{count($comment->likes)}}
      </button>
      <i class="fa-sharp fa-solid fa-thumbs-up text-sm"></i>
      </form>
       </div>
      </div>
     <div class="com-date flex border-2 rounded-xl px-2 bg-gray-100">{{$comment->created_at}}</div>
   </div>
  </div>
   @endforeach
 </div>
</div>
@endsection