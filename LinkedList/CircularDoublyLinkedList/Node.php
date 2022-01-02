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
    public $prev;
    function __construct()
    {
        $this->data = 0;
        $this->next = null;
        $this->prev = null;
    }
}
