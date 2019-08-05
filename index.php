<?php
require 'listNode.php';
require 'linkedList.php';
require 'recursion.php';
$c = new ListNode(3, new ListNode(2, new ListNode(1)));
    while($c!=null) {
        echo $c->val."\n";
        $c= $c->next;
    }
    die();
