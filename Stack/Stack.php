<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Stack Problem
 */
class Stack
{
    public $stack = array();

    /**
     * Function to insert the elements into stack
     * Passing data as a parameter
     */
    public function push($data)
    {
        array_unshift($this->stack, $data);
    }

    /**
     * Removes top element from a stack
     * Follows LIFO method for deletion 
     */
    public function pop()
    {
        if (empty($this->stack)) {
            echo "Stack is empty";
        } else {
            return array_shift($this->stack);
        }
    }

    /**
     * Function to Display the elements of the stack
     * Passing array as a parameter
     */
    public function display()
    {
        for ($i = 0; $i < count($this->stack); $i++) {
            echo $this->stack[$i] . " ";
        }
    }
}

$stack = new Stack();

echo "Popped Elements:: ";
$stack->push(1);
$stack->push(2);
echo $stack->pop() . " ";
$stack->push(3);
$stack->push(4);
$stack->push(5);
echo $stack->pop() . " ";
echo $stack->pop();
echo "\nCurrent Elements in stack are:: ";
$stack->display();
