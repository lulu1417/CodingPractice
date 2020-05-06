<?php
require 'ListNode.php';
$l1 = new ListNode(1 );
$l2 = new ListNode(2, $l1 );
$l1->next = $l2; //[1,2,1]
foreach ($l1 as $node){
    echo $node->val;
    $node = $node->next;
}
