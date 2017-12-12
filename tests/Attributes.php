<?php

namespace Solid\Html;

class AttributeTest extends  \PHPUnit\Framework\TestCase
{
    public function testCriarAtributosHtmlParaTags()
    {
        $attributes = new Attributes([
          'class'=> 'btn btn-default',
          'data-modal'=> '#login',
          'id'=>'login'
        ]);

        $this->assertEquals('class="btn btn-default" data-modal="#login" id="login"',$attributes);
    }
}
