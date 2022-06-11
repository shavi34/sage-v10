<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Subjects extends Composer
{
  /**
   * List of views served by this composer.
   *
   * @var array
   */
  protected static $views = [
    'partials.content-single-subjects',
    'partials.content-subjects',
  ];

  /**
   * Data to be passed to view before rendering, but after merging.
   *
   * @return array
   */
  public function override()
  {
    return [
      'relatedProfessors' => $this->relatedProfessors(),

    ];
  }

  /**
   * Data to be passed to view before rendering, but after merging.
   *
   * @return array
   */
  public function relatedProfessors()
  {
    $relatedProfessors = get_field('professor');
    return $relatedProfessors;
  }
}
