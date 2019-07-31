<?php
 require 'merge.php';
 $res = new Merge;
 $l1 = '1->2->4';
 $l2 = '1->3->4';
 var_dump($res->mergeTwoLists($l1, $l2));
