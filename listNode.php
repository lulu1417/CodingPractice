<?php
class ListNode {
    public $val;
    public $next = NULL;
    public function __construct(int $val,ListNode $node=null) { // ?__?
        $this->val = $val;
        $this->next = $node;
    }
}