<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-col">
    <div class="lg:w-4/6 mx-auto">
      <div class="rounded-lg h-64 overflow-hidden">
        <img alt="content" class="object-cover object-center h-full w-full" src="
        <?php 
          if (get_the_post_thumbnail_url( )) {
            echo get_the_post_thumbnail_url();
          } else {
            echo 'https://dummyimage.com/1200x500';
          } 
        ?>
        ">
      </div>
      <div class="flex flex-col sm:flex-row mt-10">
        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
          <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div> 
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">{!! the_title( ); !!}</h2>
            <div class="w-12 h-1 bg-blue-500 rounded mt-2 mb-4"></div>
            <p class="text-base">{!! the_excerpt(); !!}</p>
          </div>
        </div>
        <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
          <p class="leading-relaxed text-lg mb-4">{!! the_content(); !!}</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-10 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Teaching Subjects</h1>
    </div>
    <div class="flex flex-wrap -m-2">
      <?php 
        while ($relatedSubjects->have_posts()) {
        $relatedSubjects->the_post(); ?>
        <div class="p-2 lg:w-1/2 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
            <div class="flex-grow">
              <a href="<?php echo the_permalink(); ?>">
                <h2 class="text-gray-900 title-font font-medium"><?php the_title(); ?></h2>
              </a>
              <p class="text-gray-500"></p>
            </div>
          </div>
        </div>
      <?php }
      ?>
    </div>
  </div>
</section>
