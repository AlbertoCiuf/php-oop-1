<?php 

  class Movie {
    public $title;
    public $originalTitle;
    public $director;
    public $overview;

    function __construct($_title, $_director) {
      $this->title = $_title;
      $this->director = $_director;
    }

    public function getExceptedOverview() {
      $exceptedOverview = $this->overview;
      if (strlen($this->overview) > 50) {
        $exceptedOverview = substr($this->overview, 0, 50)."...";
      }
      return $exceptedOverview;
    }

    
  }