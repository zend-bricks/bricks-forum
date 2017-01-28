<?php

namespace ZendBricks\BricksForum\Form;

use Zend\Form\Form;
use Zend\Form\Element\Text;
use Zend\Form\Element\Select;
use Zend\Form\Element\Submit;

class ForumForm extends Form
{
    public function __construct(array $categories) {
        parent::__construct('entry');
        $this->setAttribute('method', 'post');
        $this->setAttribute('class', 'panel-body');
        
        $name = new Text('name');
        $name->setLabel('name');
        $name->setAttribute('class', 'form-control');
        $this->add($name);
        
        $description = new Text('description');
        $description->setLabel('description');
        $description->setAttribute('class', 'form-control');
        $this->add($description);
        
        $category = new Select('category');
        $category->setLabel('category');
        $category->setAttribute('class', 'form-control');
        $this->add($category);
        
        $orderPriority = new Text('orderPriority');
        $orderPriority->setLabel('order.priority');
        $orderPriority->setAttribute('class', 'form-control');
        $orderPriority->setValue(0);
        $this->add($orderPriority);
                
        $submit = new Submit('submit');
        $submit->setValue('create');
        $submit->setAttribute('class', 'btn btn-primary');
        $this->add($submit);
    }
}
