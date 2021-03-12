<?php

class Query
{
    public function get_example()
    {
        echo 'traje datos!';
    }
    public function get_example2()
    {
        echo 'traje datos2!';
    }
    public function get_example3()
    {
        echo 'traje datos3!';
    }
    public function get_example4()
    {
        echo 'traje datos4!';
    }
}
$my_query = new Query();

/* PHP 8
class Point {
    public function __construct(
      public float $x = 0.0,
      public float $y = 0.0,
      public float $z = 0.0,
    ) {}
  } */
