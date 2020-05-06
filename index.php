<?php
require 'listNode.php';
require 'linkedList.php';
$l1 = new ListNode(1, new ListNode(8));
$l2 = new ListNode(2, new ListNode(4, new ListNode(5)));
$linklist = new LinkedList;
$current = $linklist->mergeTwoLists($l1, $l2);
while ($current !== null){
    echo $current->val.",";
    $current = $current->next;
}
