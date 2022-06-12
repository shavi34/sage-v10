<div class="py-8 px-4 lg:w-1/3">
  <div class="h-full flex items-start">
    <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
      @php 
        $date = DateTime::createFromFormat('Ymd', get_field('event_date')); 
      @endphp
      <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200"> {{$date->format('M')}} </span>
      <span class="font-medium text-lg text-gray-800 title-font leading-none">{{$date->format('d')}}</span>
    </div>
    <div class="flex-grow pl-6">
      <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
      <a href="{{ the_permalink(); }}">
      <h1 class="title-font text-xl font-medium text-gray-900 mb-3">{{the_title()}}</h1>
      </a>
      <p class="leading-relaxed mb-5">{{the_excerpt()}}</p>
      <?php 
       foreach ($relatedSubjects as $key => $subject) { 
       ?>
        <a class="inline-flex items-center mr-0">
          <img alt="blog" src="https://dummyimage.com/30x30" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
          <span class="flex-grow flex flex-col pl-3">
            <span class="title-font font-medium text-gray-900">{{ get_the_title($subject); }}</span>
          </span>
        </a>
      <?php }
      ?>
    </div>
  </div>
</div>