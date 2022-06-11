<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class Professors extends Composer
{
  /**
   * List of views served by this composer.
   *
   * @var array
   */
  protected static $views = [
    'partials.content-single-professors',
    'partials.content-professors',
  ];

  /**
   * Data to be passed to view before rendering, but after merging.
   *
   * @return array
   */
  public function override()
  {
    return [
      'relatedSubjects' => $this->relatedSubjects(),
    ];
  }

  /**
   * Data to be passed to view before rendering, but after merging.
   *
   * @return array
   */
  public function relatedSubjects()
  {
    $relatedSubjects = new WP_Query(array(
      'posts_per_page' => -1,
      'post_type' => 'subjects',
      'orderby' => 'title',
      'order' => 'ASC',
      'meta_query' => array(
        array(
          'key' => 'professor', // 
          'compare' => 'LIKE',
          'value' => '"' . get_the_ID() . '"'
        )
      )
    ));
    return $relatedSubjects;
  }
}
