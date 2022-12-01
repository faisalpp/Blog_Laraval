<div>
<div class="footer flex lg:flex-row flex-col w-full p-3 bg-c1 border-t-2 border-c2 lg:justify-start justify-center items-center">
 <h3 class="text-c2 font-bold text-2xl">REACTIAN</h3>
 <div class="flex lg:flex-row flex-col lg:justify-end lg:w-full lg:space-x-5 lg:mr-10"> 
 <i class="fa-brands fa-facebook text-2xl text-c2"></i>
 <i class="fa-brands fa-twitter text-2xl text-c2"></i>
 <i class="fa-brands fa-github text-2xl text-c2"></i>
 </div>
</div>
</div>
     <script type="text/javascript">
     //To Format Article Date
     let title_el = document.querySelector('#title-date').innerHTML;
     document.querySelector('#title-date').innerHTML = moment(title_el).format('MM/DD/YYYY');
     
     //To Convert Comments Date into Past Time
     let el = document.getElementsByClassName('com-date');
     for(i=0;i<el.length;i++){
        el[i].innerHTML = moment(el[i].innerHTML).fromNow()
     }
     </script>
</body>
</html>