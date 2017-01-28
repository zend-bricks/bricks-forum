<?php

namespace ZendBricks\BricksUser\Api;

interface UserApiInterface {
    const SERVICE_NAME = 'BricksForumApi';
    
    public function createCategory(array $values);
    
    public function editCategory($id, array $values);
    
    public function deleteCategory($id);
    
    public function createForum($categoryId, array $values);
    
    public function editForum($id, array $values);
    
    public function deleteForum($id);
    
    public function createThread($forumId, array $values);
    
    public function answer($threadId, array $values);
    
    public function subAnswer($postId, array $values);

    public function editPost($postId, array $values);
    
    public function deletePost($postId);
}
