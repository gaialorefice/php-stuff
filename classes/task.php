<?php

class Task
{
    protected $description;
    protected $completed;

    public function __construct($description)
    {
      $this->description = $description;
      $this->completed = false;
    }

    public function isCompleted()
    {
      return $this->completed;
    }

    public function complete()
    {
      $this->completed = true;
    }

    public function description()
    {
      return $this->description;
    }
}
