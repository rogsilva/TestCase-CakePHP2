<?php

App::uses('ComponentCollection', 'Controller');
App::uses('StringComponent', 'Controller/Component');

class StringComponentTest extends CakeTestCase
{
  public $String = null;

  public function setUp()
  {
    $collection = new ComponentCollection();
    $this->String = new StringComponent($collection);
  }

  public function testRemoverAcento()
  {
    $this->assertEquals($this->String->removerAcentos('çéêíà'), 'ceeia');
    $this->assertEquals($this->String->removerAcentos('ççééããô'), 'cceeaao');
    $this->assertEquals($this->String->removerAcentos('$@#%&(ão)'), '$@#%&(ao)');
  }
}
