<?php
require_once 'AbstractDisplay.class.php';

class ListDisplay extends AbstractDisplay {
  protected function displayHeader() {
    echo '<dl>';
  }

  protected function displayBody() {
    foreach ($this->getData() as $k => $v) {
      echo '<dt>Item '.$k.'</dt>';
      echo '<dd>'.$v.'</dd>';
    }
  }

  protected function displayFooter() {
    echo '</dl>';
  }
}
