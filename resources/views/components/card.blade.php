<div class='flex flex-row space-x-20 justify-center mb-10'>
 <a href="{{url('/')}}/postcontent/{{$slug}}" > 
 <div class='h-fit cursor-pointer bg-c1 shadow-xl rounded-xl w-60'>
 <img alt='post_img' src="{{url('/images')}}/{{$image}}" height='200' width='310' class='rounded-t-lg'/>
 <div class='ml-5 mr-5 mt-2'>
  <h3 class='text-c4 text-xs font-semibold border-2 border-c4 w-fit h-fit px-2 rounded-xl'>{{$category}}</h3>
  <h3 class='text-c2 font-bold text-md mb-2 mt-2'>{{$title}}</h3>
  <p class='h-12 text-c3 font-semibold text-xs'>{{$excerpt}}</p>
 </div>
</div></a>
</div>