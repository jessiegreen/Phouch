<?php
/**
 * Phouch\Phouch
 * @author Dustin Moorman <dustin.moorman@gmail.com>
 * The Phouch object is sort of like the "Entity Manager" in
 * Doctrine 2. It is responsible for pushing Phouch\Model's to
 * persistence.
 *
 * Note: Top level classes in Phouch\Phouch are instantiator
 * classes for more complex objects, ie - facades that safely
 * create a class based on how you will use it.
 */

namespace Phouch;

class Phouch {
  public function save(){}
  public function drop(){}
  public function create(){}
}