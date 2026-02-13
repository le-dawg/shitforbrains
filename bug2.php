<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<style type="text/css">
div{margin: 0 auto; padding:0; box-sizing: border-box; -moz-box-sizing: border-box;}
input{padding:0; box-sizing: border-box; -moz-box-sizing: border-box;}
textarea{padding:0; box-sizing: border-box; -moz-box-sizing: border-box;}
.con_2{float:left; color:#000000; width:100%; height:100%; margin: 0 auto; padding:0;}
.firmanavn{color:#000000; height:20px; font-size:12px; font-family:Arial; text-transform:uppercase; font-weight:bold; margin: 0 auto; padding:0;}
.menu_op{width:16.7%; height:20px; background-color:#cccccc; float:left; text-align:left; margin: 0 auto; padding:0;}
.in{background-color:#AAE3E8; font-weight: bold; width:100%; height:100%; border:0px;}
</style>
</head>
<! ø !>
<div id="top" style="height:580px;">
<div id="top" style="width:100%; height:32px; background-color:#FF5555; float:center; border-bottom:2px solid black; font-size:25px; text-align:center;"><b>Version oversigt og Bug list</b></div>
<center><p>
Under opbygning her kommer en online udgave af min bug liste<br>
<p>
                <div style="text-align:center; width:880px; height:30px; border:2px solid black;">
			<div class="con_2" style="height:100%;">
		                    <div style="width:20%; height:100%; background-color:lightblue; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">
                                         <div class="firmanavn">PROorder</div>
                                    </div>
		                    <div style="width:20%; height:100%; background-color:#FFF775; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">
                                         <div class="firmanavn">PROservice</div>
                                    </div>
		                    <div style="width:20%; height:100%; background-color:#EB75FF; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">
                                         <div class="firmanavn">PROteknik</div>
                                    </div>
		                    <div style="width:20%; height:100%; background-color:#FFFFFF; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">
                                         <div class="firmanavn">igang</div>
                                    </div>
		                    <div style="width:20%; height:100%; background-color:#57FF4E; float:left; text-align:left; padding:0; margin:0 auto">
                                         <div class="firmanavn">afsluttet</div>
                                    </div>
                               </div>
		</div><p>
		<?PHP $result  = mysqli_query($conn, "SELECT * FROM bug ORDER by i_type ASC, ret ASC, status DESC, i_ver ASC");
                      while($row = mysqli_fetch_assoc($result)) { 
                      $type = $row['i_type']; 
                      $ret = $row['ret']; 
                      if ($type == 'Order') {?>
                <div style="text-align:center; width:880px; height:90px; border:2px solid black;">
		          <div style="width:100%; height:100%; background-color:#ffffff; float:center; border:2px solid black; text-align:center; margin: 0 auto; padding:0;">
                               <div class="con_2" style="border-bottom:2px solid black; height:40%;">
		                    <div style="width:100%; height:100%; background-color:lightblue; float:left; border-right:0px solid black; text-align:left; padding:0; margin:0 auto">
                                         <div class="firmanavn"><?php echo ''.$row['beskriv'].''; ?></div>
                                    </div>
                               </div><br style="clear:both">
<?php if($ret == 'JA'){ ?>
                               <div class="con_2" style="height:60%;">
		                    <div style="width:25%; height:100%; background-color:#57FF4E; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Type:<br>
                                         <div class="firmanavn"><?php echo ''.$row['i_type'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#57FF4E; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Ver.<br>
                                         <div class="firmanavn"><?php echo ''.$row['i_ver'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#57FF4E; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Rapportet af<br>
                                         <div class="firmanavn"><?php echo ''.$row['rapp_af'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#57FF4E; float:left; text-align:left; padding:0; margin:0 auto">Status<br>
                                         <div class="firmanavn"><?php echo ''.$row['status'].''; ?></div>
                                    </div>
                               </div><br style="clear:both">
<?php } else { ?>
                               <div class="con_2" style="height:60%;">
		                    <div style="width:25%; height:100%; background-color:#ffffff; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Type:<br>
                                         <div class="firmanavn"><?php echo ''.$row['i_type'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#ffffff; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Ver.<br>
                                         <div class="firmanavn"><?php echo ''.$row['i_ver'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#ffffff; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Rapportet af<br>
                                         <div class="firmanavn"><?php echo ''.$row['rapp_af'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#ffffff; float:left; text-align:left; padding:0; margin:0 auto">Status<br>
                                         <div class="firmanavn"><?php echo ''.$row['status'].''; ?></div>
                                    </div>
                               </div><br style="clear:both">
<?php } ?>
                          </div>
                </div><br style="clear:both">		
<?php
} if ($type == 'Service') {?>
                <div style="text-align:center; width:880px; height:90px;">
		          <div style="width:100%; height:100%; background-color:#ffffff; float:center; border:2px solid black; text-align:center; margin: 0 auto; padding:0;">
                               <div class="con_2" style="border-bottom:2px solid black; height:40%;">
		                    <div style="width:100%; height:100%; background-color:#FFF775; float:left; border-right:0px solid black; text-align:left; padding:0; margin:0 auto">
                                         <div class="firmanavn"><?php echo ''.$row['beskriv'].''; ?></div>
                                    </div>
                               </div><br style="clear:both">
<?php if($ret == 'JA'){ ?>
                               <div class="con_2" style="height:60%;">
		                    <div style="width:25%; height:100%; background-color:#57FF4E; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Type:<br>
                                         <div class="firmanavn"><?php echo ''.$row['i_type'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#57FF4E; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Ver.<br>
                                         <div class="firmanavn"><?php echo ''.$row['i_ver'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#57FF4E; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Rapportet af<br>
                                         <div class="firmanavn"><?php echo ''.$row['rapp_af'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#57FF4E; float:left; text-align:left; padding:0; margin:0 auto">Status<br>
                                         <div class="firmanavn"><?php echo ''.$row['status'].''; ?></div>
                                    </div>
                               </div><br style="clear:both">
<?php } else { ?>
                               <div class="con_2" style="height:60%;">
		                    <div style="width:25%; height:100%; background-color:#ffffff; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Type:<br>
                                         <div class="firmanavn"><?php echo ''.$row['i_type'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#ffffff; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Ver.<br>
                                         <div class="firmanavn"><?php echo ''.$row['i_ver'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#ffffff; float:left; border-right:2px solid black;text-align:left; padding:0; margin:0 auto">Rapportet af<br>
                                         <div class="firmanavn"><?php echo ''.$row['rapp_af'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#ffffff; float:left; text-align:left; padding:0; margin:0 auto">Status<br>
                                         <div class="firmanavn"><?php echo ''.$row['status'].''; ?></div>
                                    </div>
                               </div><br style="clear:both">
<?php } ?>
                          </div>
                </div><br style="clear:both">		
<?php
} if ($type == 'Teknik') {?>
                <div style="text-align:center; width:880px; height:90px;">
                          <form method="post" action="" onsubmit="return v(this)">
		          <div style="width:100%; height:100%; background-color:#ffffff; float:center; border:2px solid black; text-align:center; margin: 0 auto; padding:0;">
                               <div class="con_2" style="border-bottom:2px solid black; height:40%;">
		                    <div style="width:100%; height:100%; background-color:#EB75FF; float:left; border-right:0px solid black; text-align:left; padding:0; margin:0 auto">
                                         <div class="firmanavn"><?php echo ''.$row['beskriv'].''; ?></div>
                                    </div>
                               </div><br style="clear:both">
<?php if($ret == 'JA'){ ?>
                               <div class="con_2" style="height:60%;">
		                    <div style="width:25%; height:100%; background-color:#57FF4E; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Type:<br>
                                         <div class="firmanavn"><?php echo ''.$row['i_type'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#57FF4E; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Ver.<br>
                                         <div class="firmanavn"><?php echo ''.$row['i_ver'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#57FF4E; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Rapportet af<br>
                                         <div class="firmanavn"><?php echo ''.$row['rapp_af'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#57FF4E; float:left; text-align:left; padding:0; margin:0 auto">Status<br>
                                         <div class="firmanavn"><?php echo ''.$row['status'].''; ?></div>
                                    </div>
                               </div><br style="clear:both">
<?php } else { ?>
                               <div class="con_2" style="height:60%;">
		                    <div style="width:25%; height:100%; background-color:#ffffff; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Type:<br>
                                         <div class="firmanavn"><?php echo ''.$row['i_type'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#ffffff; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Ver.<br>
                                         <div class="firmanavn"><?php echo ''.$row['i_ver'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#ffffff; float:left; border-right:2px solid black; text-align:left; padding:0; margin:0 auto">Rapportet af<br>
                                         <div class="firmanavn"><?php echo ''.$row['rapp_af'].''; ?></div>
                                    </div>
		                    <div style="width:25%; height:100%; background-color:#ffffff; float:left; text-align:left; padding:0; margin:0 auto">Status<br>
                                         <div class="firmanavn"><?php echo ''.$row['status'].''; ?></div>
                                    </div>
                               </div><br style="clear:both">
<?php } ?>
                          </div>
                </div><br style="clear:both">	
<?php
}
}
?>
</div>
<p><p>