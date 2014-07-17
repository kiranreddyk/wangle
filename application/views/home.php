<?php

$this->load->view('header');
$this->load->view('sidebar_emp');




?>
<h1 class="message">Welcome<br><a class="hero-content"><?php echo $user;?></a></h1>
<br><br>
<?php echo $message; ?>



<?php
$this->load->view('footer');
?>