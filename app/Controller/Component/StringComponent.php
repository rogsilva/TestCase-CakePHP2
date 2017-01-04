<?php

class StringComponent extends Component
{
  public function removerAcentos($string)
  {
    return preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $string ) );
  }
}
