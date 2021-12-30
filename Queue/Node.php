<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Node having data and next
 */
class Node
{
    public $data;
    public $next;
    public function __construct($value)
    {
        $this->data = $value;
        $this->next = NULL;
    }
}
