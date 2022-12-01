<div class='bg-c1 max-h-min w-40 py-2 px-2 shadow-2xl'>
 <div class='flex flex-row justify-center'><h3 class='font-bold text-c2 text-2xl'>BLOG</h3></div>
  <div class='flex flex-col items-center space-y-5'>
  <i class="text-c2 text-xl fa-solid fa-ellipsis-vertical mt-5"></i>
    <a href="{{url('/dashboard/home')}}"><div class='flex items-center space-x-3 py-2 px-2 bg-gray-100 rounded-lg hover:rounded-lg group hover:bg-c2 cursor-pointer w-full'>
    <i class=' text-gray-500 group-hover:text-white fa-solid fa-grid'></i><h3 class=' text-gray-500 group-hover:text-white'>Dashboard</h3>
    </div></a>
    <a href="{{url('/dashboard/allPosts')}}"><div class='flex items-center space-x-3 py-2 px-2 bg-gray-100 rounded-lg hover:rounded-lg group hover:bg-c2  cursor-pointer w-full '>
    <i class=' text-gray-500 group-hover:text-white fa-solid fa-page'></i><h3 class=' text-gray-500 group-hover:text-white'>All Posts</h3>
    </div></a>
    <a href="{{url('/dashboard/createPost')}}"><div class='flex items-center space-x-3 py-2 px-2 bg-gray-100 rounded-lg hover:rounded-lg group hover:bg-c2  cursor-pointer w-full '>
    <i class=' text-gray-500 group-hover:text-white fa-solid fa-file-plus'></i><h3 class=' text-gray-500 group-hover:text-white'>Write Posts</h3>
  </div></a>
    <a href="{{url('/dashboard/trash')}}"><div class='flex items-center space-x-3 py-2 px-2 bg-gray-100 rounded-lg hover:rounded-lg group hover:bg-c2  cursor-pointer w-full '>
    <i class=' text-gray-500 group-hover:text-white fa-solid fa-file-plus'></i><h3 class=' text-gray-500 group-hover:text-white'>Trash</h3>
  </div></a>
 </div>
</div>