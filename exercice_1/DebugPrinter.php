<?php

include_once ('Debuggable.php');

class DebugPrinter
{
    public function print(Debuggable $object): self {
        echo '[DEBUG]  '.$object->debug().'<br>';

        return $this;
    }
}