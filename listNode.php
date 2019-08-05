<?php
class ListNode {
    public $val;
    public $next = NULL;
    public function __construct(int $val,ListNode $node=null) { // =null -> default value
        $this->val = $val;
        $this->next = $node;
    }
}
