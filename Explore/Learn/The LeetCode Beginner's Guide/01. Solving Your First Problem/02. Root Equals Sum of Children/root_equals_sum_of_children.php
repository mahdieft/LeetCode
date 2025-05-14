<?php

class TreeNode
{
    public int $val;
    public TreeNode $left;
    public TreeNode $right;

    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class Solution
{
    function checkTree(TreeNode $root): bool
    {
        return $root->val === $root->left->val + $root->right->val;
    }
}
