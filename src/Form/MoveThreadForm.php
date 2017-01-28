<?php

namespace ZendBricks\BricksForum\Form;

use Zend\Form\Form;
use Zend\Form\Element\Select;
use Zend\Form\Element\Submit;

class MoveThreadForm extends Form
{
    public function __construct(array $forums) {
        parent::__construct('entry');
        $this->setAttribute('method', 'post');
        $this->setAttribute('class', 'panel-body');
        
        $forum = new Select('forum');
        $forum->setLabel('forum');
        $forum->setAttribute('class', 'form-control');
        $this->add($forum);
                
        $submit = new Submit('submit');
        $submit->setValue('create');
        $submit->setAttribute('class', 'btn btn-primary');
        $this->add($submit);
    }
}
