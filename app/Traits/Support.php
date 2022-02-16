<?php namespace App\Traits;

Trait Support
{
  public function view($view, $title, $data = [])
  {
    $data["title"] = $title;

    return view($view, $data);
  }
}