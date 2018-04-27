<?php
class User {
  private $first;
  private $last;

  public function __construct($first, $last) {
    $this->setName($first, $last);
  }

  public function setName($first, $last) {
    $this->first = $first;
    $this->last = $last;
  }

  public function getName() {
    return ($this->first . ' ' . $this->last);
  }

  public function __destruct() {
    echo $this->getName();
  }
}

$user = new User('Sylvano', 'Umbac');
// echo $user->getName();