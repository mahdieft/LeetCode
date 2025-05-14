<?php

class TreeNode
{
    public int $val;
    public TreeNode|null $left;
    public TreeNode|null $right;

    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class Solution
{
    function invertTree(TreeNode|null $root): TreeNode|null
    {
        if (!$root) {
            return null;
        }

        $temp_node = $root->left;
        $root->left = $root->right;
        $root->right = $temp_node;

        $this->invertTree($root->left);
        $this->invertTree($root->right);
        return $root;
    }
}
