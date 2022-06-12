<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Events extends Composer
{
  /**
   * List of views served by this composer.
   *
   * @var array
   */
  protected static $views = [
    // 'partials.content-single-events',
    // 'partials.content-events',
    'archive-events',
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
      // 'relatedProfessors' => $this->relatedProfessors(),
    ];
  }

  /**
   * Data to be passed to view before rendering, but after merging.
   *
   * @return array
   */
  public function relatedSubjects()
  {
    $relatedSubjects = get_field('related_subjects');
    // print_r($relatedSubjects);
    return $relatedSubjects;
  }
}
