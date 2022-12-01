<div class='bg-c1 ml-5 rounded-lg mt-5 h-fit w-60 px-2 py-2'>
 <h3 class='text-center font-bold mb-3'>Recent Comments</h3>    
  @foreach ($posts->first()->comments as $comment)
  <div class='flex flex-col space-y-2 px-2 py-2 rounded-lg'>
   <div class="flex space-x-3">
    <img class='rounded-md h-10 w-10' src="{{url('/images')}}/{{$comment->image}}"/>
    <div class='flex flex-col'>  
    <h6 class='text-xs text-red-500 font-bold'>{{$comment->name}} <span class="text-slate-400" >Has Commented</span></h6>
    <h6 class='text-xs truncate font-bold'>{{$comment->comment}}...</h6>
    </div>
   </div>
  </div>
  @endforeach      
</div>