<?php

namespace App\Services;


class Page
{
  public static function part($part_name)
  {
    require_once "views/clude" . $part_name . ".php";
  }
} 