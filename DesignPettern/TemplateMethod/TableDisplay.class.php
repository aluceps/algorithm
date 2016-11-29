<?php
class TableDisplay extends AbstractDisplay {
  protected function displayHeader() {
    echo '<table border="1" cellpadding="2" cellspacing="2">';
  }

  protected function displayBody() {
    foreach ($this->getData() as $k => $v) {
      echo '<tr>';
      echo '<th>'.$k.'</th>';
      echo '<td>'.$v.'</td>';
      echo '<tr>';
    }
  }

  protected function displayFooter() {
    echo '</table>';
  }
}
