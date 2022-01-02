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
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }
    }

    /**
     * Function to add a data at first (head)
     * Passing data as parameter
     */
    public function insert_at_first($data)
    {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = $this->head;
        $this->head = $newNode;
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
        } else {
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }
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

        if ($position < 1) {
            echo "\nPosition shoult be >= 1.";
        } elseif ($position == 1) {
            $newNode->next = $this->head;
            $this->head = $newNode;
        } else {
            $temp = new Node();
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }
            if ($temp != null) {
                $newNode->next = $temp->next;
                $temp->next = $newNode;
            } else {
                echo "\nThe Previous node is null.";
            }
        }
    }

    /**
     * Function to delete a data at first (head)
     * Non-Parameterized Function
     */
    public function delete_first()
    {
        if ($this->head != null) {
            if ($this->head->next == null) {
                $this->head = null;
            } else {
                $temp = new Node();
                $temp = $this->head;
                $this->head = $this->head->next;
                $temp = null;
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
            if ($this->head->next == null) {
                $this->head = null;
            } else {
                $temp = new Node();
                $temp = $this->head;
                while($temp->next->next != null)
                {
                    $temp = $temp->next;
                }
                $lastNode = $temp->next;
                $temp->next = null;
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
        if($position<1)
        {
            echo "\nPosition should be >=1.";
        }
        elseif($position==1 && $this->head != null)
        {
            $nodeToDelete = $this->head;
            $this->head = $this->head->next;
            $nodeToDelete = null;
        }else{
            $temp = new Node();
            $temp = $this->head;
            for($i=1;$i<$position-1;$i++)
            {
                if($temp!=null)
                {
                    $temp = $temp->next;
                }
            }
            if($temp !=null && $temp->next != null)
            {
                $nodeToDelete = $temp->next;
                $temp->next = $temp->next->next;
                $nodeToDelete = null;
            } else {
                echo "\nThe Node is already Null.";
            }
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
            while ($temp != null) {
                $i++;
                if ($temp->data == $data) {
                    $found++;
                    break;
                }
                $temp = $temp->next;
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
            }
            echo "\n";
        } else {
            echo "The list is empty.\n";
        }
    }
}
$singlyLinkedList = new SinglyLinkedList();

$singlyLinkedList->insert(10);
$singlyLinkedList->insert(30);
$singlyLinkedList->insert(50);
$singlyLinkedList->printList();
$singlyLinkedList->insert_at_position(20, 2);
$singlyLinkedList->insert_at_position(40, 4);
$singlyLinkedList->printList();
$singlyLinkedList->insert_at_last(60);
$singlyLinkedList->printList();
$singlyLinkedList->insert_at_first(5);
$singlyLinkedList->printList();
$singlyLinkedList->delete_first();
$singlyLinkedList->printList();
$singlyLinkedList->delete_last();
$singlyLinkedList->printList();
$singlyLinkedList->insert_at_position(70, 3);
$singlyLinkedList->printList();
$singlyLinkedList->delete_at_position(3);
$singlyLinkedList->printList();
$singlyLinkedList->search(30);
$singlyLinkedList->search(70);

