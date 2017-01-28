<?php

namespace ZendBricks\BricksForum\Form;

use Zend\Form\Form;
use Zend\Form\Element\Text;
use Zend\Form\Element\Checkbox;
use Zend\Form\Element\Submit;

class ForumCategoryForm extends Form
{
    public function __construct() {
        parent::__construct('entry');
        $this->setAttribute('method', 'post');
        $this->setAttribute('class', 'panel-body');
        
        $name = new Text('name');
        $name->setLabel('category.name');
        $name->setAttribute('class', 'form-control');
        $this->add($name);
        
        $orderPriority = new Text('orderPriority');
        $orderPriority->setLabel('order.priority');
        $orderPriority->setAttribute('class', 'form-control');
        $orderPriority->setValue(0);
        $this->add($orderPriority);
        
        $internal = new Checkbox('internal');
        $internal->setLabel('internal');
        $internal->setAttribute('class', 'checkbox');
        $this->add($internal);
                
        $submit = new Submit('submit');
        $submit->setValue('create');
        $submit->setAttribute('class', 'btn btn-primary');
        $this->add($submit);
    }
}
