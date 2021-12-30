<?php

include 'Node.php';

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to compute Doubly Linked List
 */
class DoublyLinkedList
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
$doublyLinkedList = new DoublyLinkedList();

//Add first node.
$first = new Node(10);
$doublyLinkedList->head = $first;
$first->next = $doublyLinkedList->head;
$doublyLinkedList->head->prev = $first;

//Add second node.
$second = new Node(20);
$second->prev = $first;
$first->next = $second;
$second->next = $doublyLinkedList->head;
$doublyLinkedList->head->prev = $second;

//Add third node.
$third = new Node(30);
$third->prev = $second;
$second->next = $third;
$third->next = $doublyLinkedList->head;
$doublyLinkedList->head->prev = $third;

$doublyLinkedList->printList();
