<?php

include 'C:\xampp\htdocs\PHP Programming\DataStructures\LinkedList\SinglyLinkedList\Node.php';

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
     * Function to add data into the list
     * Passing the data as parameter
     */
    public function insert($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        if ($this->head == null) {
            $this->head = $newNode;
            $newNode->next = $this->head;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != $this->head) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->next = $this->head;
        }
        //$newNode->next = $this->head;
    }

    /**
     * Function to add a data at first (head)
     * Passing data as parameter
     */
    public function insert_at_first($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        if ($this->head == null) {
            $this->head = $newNode;
            $newNode->next = $this->head;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != $this->head) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
        //$newNode->next = $this->head;
    }

    /**
     * Function to add a data at last
     * Passing data as parameter
     */
    public function insert_at_last($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        if ($this->head == null) {
            $this->head = $newNode;
            $newNode->next = $this->head;
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != $this->head) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
            $newNode->next = $this->head;
        }
        //$newNode->next = $this->head;
    }

    /**
     * Function to add a data at a given position
     * Passing data and position as parameters
     */
    public function insert_at_position($data, $position)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = null;
        $temp = $this->head;
        $noOfElements = 0;

        if ($temp != null) {
            $noOfElements++;
            $temp = $temp->next;
        }
        while ($temp != $this->head) {
            $noOfElements++;
            $temp = $temp->next;
        }

        if ($position < 1 || $position > ($noOfElements + 1)) {
            echo "\nInvalid Position.";
        } elseif ($position == 1) {
            if ($this->head == null) {
                $this->head = $newNode;
                $this->head->next = $this->head;
            } else {
                while ($temp->next != $this->head) {
                    $temp = $temp->next;
                }
                $newNode->next = $this->head;
                $this->head = $newNode;
                $temp->next = $this->head;
            }
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                $temp = $temp->next;
            }
            $newNode->next = $temp->next;
            $temp->next = $newNode;
        }
    }

    /**
     * Function to delete a data at first (head)
     * Non-Parameterized Function
     */
    public function delete_first()
    {
        if ($this->head != null) {
            if ($this->head->next == $this->head) {
                $this->head = null;
            } else {
                $temp = new Node();
                $temp = $this->head;
                while ($temp->next != $this->head) {
                    $temp = $temp->next;
                }
                $this->head = $this->head->next;
                $temp->next = $this->head;
            }
        }
    }

    /**
     * Function to delete a data at last
     * Non-Parameterized Function
     */
    public function delete_last()
    {
        if ($this->head != null) {
            if ($this->head->next == $this->head) {
                $this->head = null;
            } else {
                $temp = new Node();
                $temp = $this->head;
                while ($temp->next->next != $this->head) {
                    $temp = $temp->next;
                }
                $lastNode = $temp->next;
                $temp->next = $this->head;
                $lastNode = null;
            }
        }
    }

    /**
     * Function to delete a data at given position
     * Passing the Postiion as the Parameter
     */
    public function delete_at_position($position)
    {
        $nodeToDelete = $this->head;
        $temp = $this->head;
        $noOfElements = 0;

        if ($temp != null) {
            $noOfElements++;
            $temp = $temp->next;
        }
        while ($temp != $this->head) {
            $noOfElements++;
            $temp = $temp->next;
        }

        if ($position < 1 || $position > $noOfElements) {
            echo "\nInvalid Position.";
        } elseif ($position == 1) {
            if ($this->head->next == $this->head) {
                $this->head = null;
            } else {
                while ($temp->next != $this->head) {
                    $temp = $temp->next;
                }
                $this->head = $this->head->next;
                $temp->next = $this->head;
                $nodeToDelete = null;
            }
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                $temp = $temp->next;
            }
            $nodeToDelete = $temp->next;
            $temp->next = $temp->next->next;
            $nodeToDelete = null;
        }
    }

    /**
     * Function to search a data from the list
     * Passing the data as parameter
     */
    public function search($data)
    {
        $temp = new Node();
        $temp = $this->head;
        $found = 0;
        $i = 0;

        if ($temp != null) {
            while (true) {
                $i++;
                if ($temp->data == $data) {
                    $found++;
                    break;
                }
                $temp = $temp->next;
                if($temp == $this->head)
                {
                    break;
                }
            }
            if ($found == 1) {
                echo $data . " is found at index = " . $i . ".\n";
            } else {
                echo $data . " is not found in the list.\n";
            }
        } else {
            echo "The list is empty.\n";
        }
    }

    /**
     * Function to print the Elements of the list
     * Non Parameterized Function
     */
    public function printList()
    {
        $temp = new Node();
        $temp = $this->head;
        if ($temp != null) {
            echo "The list contains: ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
                if ($temp == $this->head) {
                    break;
                }
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }
}
$circularSinglyLinkedList = new CircularSinglyLinkedList();

$circularSinglyLinkedList->insert(10);
$circularSinglyLinkedList->insert(30);
$circularSinglyLinkedList->insert(50);
$circularSinglyLinkedList->printList();
$circularSinglyLinkedList->insert_at_position(20, 2);
$circularSinglyLinkedList->insert_at_position(40, 4);
$circularSinglyLinkedList->printList();
$circularSinglyLinkedList->insert_at_last(60);
$circularSinglyLinkedList->printList();
$circularSinglyLinkedList->insert_at_first(5);
$circularSinglyLinkedList->printList();
$circularSinglyLinkedList->delete_first();
$circularSinglyLinkedList->printList();
$circularSinglyLinkedList->delete_last();
$circularSinglyLinkedList->printList();
$circularSinglyLinkedList->insert_at_position(70, 3);
$circularSinglyLinkedList->printList();
$circularSinglyLinkedList->delete_at_position(3);
$circularSinglyLinkedList->printList();
$circularSinglyLinkedList->search(30);
$circularSinglyLinkedList->search(70);
