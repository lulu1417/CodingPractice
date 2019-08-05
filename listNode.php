<?php
class ListNode {
    public $val;
    public $next = NULL;
    public function __construct(int $val,ListNode $node=null) { // =null -> default value, if !parameter, then set as null
        $this->val = $val;
        $this->next = $node;
    }
}
