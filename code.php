<?php
/**
   Dummy Code Class
*/

class Code{
 
 private $content = '';
 private $lang = '';

 public function __construct($lang="php", $content="<?php"){
   $this->lang = $lang;
   $this->content = $content;

 }

}
