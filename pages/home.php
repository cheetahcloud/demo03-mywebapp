<?php
echo '<section id="cta" class="wrapper style3">
<h2>Hello. Welcome in the Cloud Native World! :)</h2>';
?>
<?php
echo '<ul class="actions">
<li><a href="#" class="button big">'.getenv("VCAP_APP_PORT").'</a></li>
</ul>
</section>';
?>
<?php
//include("twitter.php");
?>