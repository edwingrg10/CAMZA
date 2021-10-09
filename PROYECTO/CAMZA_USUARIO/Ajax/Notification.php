<?php

require_once '../Config/UFunction.php';
$UDF_call = new UFunction();

$select_status = $UDF_call->select_order_limit('notification', 'n_id', 10);

?>
    <b style="margin-left: 180px;">Notificaciones</b>
    <?php if($select_status){ foreach($select_status as $se_noti){ ?>
    <div class="dropdown-item" >
        <p style="font-size: 16px;"><b><?php echo $se_noti['n_sub']; ?></b></p>
        <p style="margin-top: -40px;"><?php echo $se_noti['n_msg']; ?></p>
    </div>
    <?php }} ?>
