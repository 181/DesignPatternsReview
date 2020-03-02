<?php
namespace DesignPatterns\Structural\Proxy;

class LabDoor implements Door
{
    public function open() {
      echo "Opening lab door";
    }

    public function close() {
      echo "Closing lab door";
    }
}