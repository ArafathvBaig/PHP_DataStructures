<?php

include 'Node.php';

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Queue Problem
 */
class Queue
{
    public $head;
    public $tail;
    public $count;

    public function __construct()
    {
        $this->head;
        $this->tail;
        $this->count;
    }

    /**
     * Function to add new element
     * Passing value as parameter
     */
    public function enqueue($value)
    {
        $newNode = new Node($value);
        //if queue is empty add node to head
        if ($this->head == NULL) {
            $this->head = $newNode;
        } else {
            //Add node at the end
            $this->tail->next = $newNode;
        }
        $this->count++;
        $this->tail = $newNode;
    }
    
    /**
     * Function to delete element from queue
     * Using FIFO method to delete 
     */ 
    public function dequeue()
    {
        if ($this->head == NULL) {
            echo "Queue is Empty\n";
            return -1;
        } else {
            $temp = $this->head;
            $this->head = $this->head->next;
            $this->count--;
            return $temp->data;
        }
    }

    /**
     * Function 
     */
    public function peek()
    {
        if ($this->head == NULL) {
            echo "The queue is empty\n";
            return -1;
        }
        return $this->head->data;
    }

    /**
     * Function to calculate the size of a queue
     * returns the size, which is count
     */
    public function size()
    {
        return $this->count;
    }

    /**
     * Function to check the Queue is empty or not
     * Returns a boolean value
     */
    public function isEmpty()
    {
        if ($this->head == NULL) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Function to print the elements of the queue
     */
    public function printQueue()
    {
        $list = $this->head;
        if ($list != null) {
            while ($list != null) {
                echo $list->data . " ";
                $list = $list->next;
            }
        }
    }
}

$queue = new Queue();
$queue->enqueue(10);
$queue->enqueue(25);
$queue->enqueue(13);
$queue->enqueue(54);
$queue->enqueue(2);
echo "Data inside Queue:: ";
$queue->printQueue();
echo "\nSize Of Queue is : " . $queue->count;
echo "\nHead of the Queue is : " . $queue->peek();
echo "\nDeleted element is : " . $queue->dequeue();
echo "\nSize of Queue is : " . $queue->size();
echo "\nHead of the Queue is : " . $queue->peek();
echo "\nData inside Queue:: ";
$queue->printQueue();
