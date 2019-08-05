<?php
class LinkedList
{ //$l1 = 1, 2, 4 ; $l2 = 1, 3, 4

    function mergeTwoLists($l1, $l2) {
        $newNode = new ListNode();
        if($l1 === NULL) return $l2;
        if($l2 === NULL) return $l1;

        if($l1->val < $l2->val) {
            $l1->next = $this->mergeTwoLists($l1->next, $l2);
            return $l1;
        } else {
            $l2->next = $this->mergeTwoLists($l2->next, $l1);
            return $l2;
        }
    }

}
//class LinkedList {
//    private $_firstNode = NULL;
//    private $_totalNodes = 0;
//
//    public function insert($data) {
//        $newNode = new ListNode($data);
//
//        if ($this->_firstNode === NULL) {
//            $this->_firstNode = &$newNode;
//        } else {
//            $currentNode = $this->_firstNode;
//        while ($currentNode->next !== NULL) {
//            $currentNode = $currentNode->next;
//        }
//            $currentNode->next = $newNode;
//        }
//            $this->_totalNodes++;
//            return TRUE;
//        }
//
//public function display() {
//    echo "Total book titles: ".$this->_totalNodes."\n";
//    $currentNode = $this->_firstNode;
//    while ($currentNode !== NULL) {
//        echo $currentNode->data . " ";
//        $currentNode = $currentNode->next;
//    }
//}
//}