<div class=" bg-white rounded-lg w-full">
 <table class="w-full">
  <thead class="border-b-2 border-c2 ">
  <tr class="font-bold text-lg text-center">
  <td>#</td>
  <td>Image</td>
  <td>Title</td>
  <td>Created At</td>
  <td>Date</td>
  <td>Comments</td>
  <td>Actions</td>
  </tr>
  </thead>
 <tbody>  
 @foreach ($posts as $post) 
  <tr class=" text-center border-b-2 border-c4 [&>td]:px-2 [&>td]:py-2">
   <td class="font-bold">{{$loop->index}}</td>
   <td><img class="rounded-md h-14 w-16" src="{{url('/images')}}/{{$post->image}}"/></td>
   <td class="text-slate-400">{{$post->title}}</td>
   <td><div class="border-2 border-c2 text-c2 rounded-full text-sm w-fit px-2">{{$post->category}}</div></td>
   <td><div class="title-date">{{$post->created_at}}</div></td>
   <td>{{count($post->comments)}}</td>  
   <td class="space-x-2">
    @if($trash == "true")
    <a href="{{url('/dashboard/undoPost')}}/{{$post->post_id}}"><button><i class="fa-solid fa-recycle text-red-500 hover:text-red-400 cursor-pointer"></i></button></a>
    <a href="{{url('/dashboard/deletePost')}}/{{$post->post_id}}"><button><i class="fa-solid fa-trash text-red-500 hover:text-red-400 cursor-pointer"></i></button></a>
    @else
    <a href="{{url('/dashboard/trashPost')}}/{{$post->post_id}}"><button><i class="fa-solid fa-trash text-red-500 hover:text-red-400 cursor-pointer"></i></button></a>
    <a href="{{url('/dashboard/editePost')}}/{{$post->post_id}}" ><button><i class="fa-solid fa-pencil text-c2 hover:text-c3 cursor-pointer"></i></button></a>
    @endif
   </td>
  </tr>
 @endforeach  
</tbody>
</table>
</div>
<script type="text/javascript">
 let el = document.getElementsByClassName('title-date');
  for(i=0;i<el.length;i++){
  el[i].innerHTML = moment(el[i].innerHTML).format('MMM-DD-YYYY')
 }
</script>