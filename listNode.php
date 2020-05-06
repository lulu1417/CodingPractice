<?php

class ListNode
{
    public $val;
    public $next = NULL;

    public function __construct(int $val, ListNode $node = null)
    {
        $this->val = $val;
        $this->next = $node;
    }
}
