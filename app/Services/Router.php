<?php

namespace APP\Services;

class Router
{
    private static $list = [];

   public static function page($uri, $page_name)
   {
      self::$list[] =  [
         "uri" => $uri,
         "page" => $page_name
      ];
   }
}