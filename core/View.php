<?php

class View {
   
   private $template;
   private $layout;
   private array $data;
   
   public function __construct($template, $data = [], $layout = 'base.html.php') {
      $this->template = $template;
      $this->layout = $layout;
      $this->data = $data;
   }

   public function render() {
      extract($this->data);
      ob_start();
      include '../template/' . $this->template;
      $content = ob_get_clean(); // recupere tout de ob_start à ob_get_clean
                                 // ob_end_flush() recupere et fait l'echo aussi
      include '../template/' . $this->layout;
   }

}