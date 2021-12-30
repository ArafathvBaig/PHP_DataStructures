<?php

include 'Node.php';

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to compute Circular Singly Linked List
 */
class CircularSinglyLinkedList
{
    public $head;
    public function __construct()
    {
        $this->head = null;
    }

    /**
     * Function to print the Elements of the list
     * Non Parameterized Function
     */
    public function printList()
    {
        $temp = $this->head;
        if ($temp != null) {
            echo "The list contains: ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }
}
$circularSinglyLinkedList = new CircularSinglyLinkedList();

//Add first node.
$first = new Node(10);
$circularSinglyLinkedList->head = $first;
$first->next = $circularSinglyLinkedList->head;

//Add second node.
$second = new Node(20);
$first->next = $second;
$second->next = $circularSinglyLinkedList->head;

//Add third node.
$third = new Node(30);
$second->next = $third;
$third->next = $circularSinglyLinkedList->head;

$circularSinglyLinkedList->printList();