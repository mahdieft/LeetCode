<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */

class Solution
{

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function checkTree(TreeNode $root): bool
    {
        return $root->val === $root->left->val + $root->right->val;
    }
}
