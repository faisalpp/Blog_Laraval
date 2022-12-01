@if(session()->has('loginMsg'))
<div class="w-full bg-c2 border-b-2 text-c1 text-center text-2xl"><h3>{{session()->get('loginMsg')}}, {{session()->get('name')}}</h3></div>
@elseif(session()->has('newUserMsg'))
<div class="w-full bg-c2 border-b-2 text-c1 text-center text-2xl"><h3>{{session()->get('newUserMsg')}}</h3></div>
@endif
