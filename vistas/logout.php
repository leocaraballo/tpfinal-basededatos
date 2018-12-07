<?php
if(isset($_SESSION["user"])){

session_destroy();
//header("Location: /tpfinal-basededatos/index.php");
?>
<script type="text/javascript">window.location=
"/tpfinal-basededatos/index.php";</script>
<?php 
}
?>
