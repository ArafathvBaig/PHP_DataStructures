<?php

include 'Node.php';

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to compute Singly Linked List
 */
class SinglyLinkedList
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
$singlyLinkedList = new SinglyLinkedList();

//Add first node.
$first = new Node(10);
$first->next = null;
$singlyLinkedList->head = $first;

//Add second node.
$second = new Node(20);
$second->next = null;
$first->next = $second;

//Add third node.
$third = new Node(30);
$third->next = null;
$second->next = $third;

$singlyLinkedList->printList();