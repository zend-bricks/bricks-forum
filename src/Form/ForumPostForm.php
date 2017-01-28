<?php

namespace ZendBricks\BricksForum\Form;

use Zend\Form\Form;
use Zend\Form\Element\Text;
use Zend\Form\Element\Textarea;
use Zend\Form\Element\Submit;

class ForumPostForm extends Form
{
    public function __construct($titleRequired = false) {
        parent::__construct('entry');
        $this->setAttribute('method', 'post');
        $this->setAttribute('class', 'panel-body');
        
        $title = new Text('title');
        $title->setLabel('title');
        $title->setAttribute('class', 'form-control');
        $this->add($title);
        
        $content = new Textarea('content');
        $content->setLabel('content');
        $this->add($content);
                
        $submit = new Submit('submit');
        $submit->setValue('save');
        $submit->setAttribute('class', 'btn btn-primary');
        $this->add($submit);
    }
}
