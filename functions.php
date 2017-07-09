<?php
function get_alerts(){
    if(isset($_SESSION['alerts'])) {
        $alerts = $_SESSION['alerts'];
        $to_ret = "<scr" . "ipt>Materialize.toast('$alerts', 2000);</script>";
        unset($_SESSION['alerts']);
        return $to_ret;
    }
    else
        return "";
}

function require_admin(){
	if(!$_SESSION['admin']){
		header("Location: controller.php?action=show_admin_login");
	}
}
?>