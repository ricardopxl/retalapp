	<center><table cellpadding="8" cellspacing="0" style="background:#ffffff;width:100%!important;margin:0;padding:0" border="0"><tbody><tr>
<td valign="top">
<table cellpadding="0" cellspacing="0" style="border-radius:4px;border:1px #53B6CF solid" border="0" align="center"><tbody><tr><td colspan="3" height="6"></td></tr><tr style="line-height:0px"><td width="100%" style="font-size:0px" align="center" height="1">
<img width="120px" style="max-height:73px;width:120px" alt="" src="<?php echo Yii::app()->request->getBaseUrl(true)."/img/logo.png"?>"></td></tr><tr><td><table cellpadding="0" cellspacing="0" style="line-height:25px" border="0" align="center">
<tbody><tr><td colspan="3" height="30"></td></tr><tr><td width="36"></td>
<td width="454" align="left" style="color: #7f8c8d;border-collapse:collapse;font-size:11pt;font-family:'Open Sans',Arial,Verdana,Tahoma,'Sans Serif';max-width:454px" valign="top">
<?php echo $body?>
<br>

<?php if(isset($url)):?>
<center><a style="border-radius:3px;color:white;font-size:15px;padding:14px 7px 14px 7px;max-width:200px;font-family:'Open Sans','lucida grande','Segoe UI',arial,verdana,'lucida sans unicode',tahoma,sans-serif;border:1px #53B6CF solid;text-align:center;text-decoration:none;width:200px;margin:6px auto;display:block;background-color:#53B6CF" href="<?php echo $url?>" target="_blank"><?php echo $label?></a></center>
<?php endif;?>
<br>
Cordialmente <br>
- Equipo <?php echo Yii::app()->name;?>
<?php if(!empty($spam)):?>
<br>
	<a style="color: #53B6CF;text-decoration: none;" href="<?php echo Yii::app()->createAbsoluteUrl("/site/unsubscribe",array("key"=>Yii::app()->security->encrypt($spam)));?>">No recibir mas correos</a> |
	<a style="color: #53B6CF;text-decoration: none;" href="<?php echo Yii::app()->createAbsoluteUrl("/site/spam",array("key"=>Yii::app()->security->encrypt($spam)));?>">Marcar esto como spam</a>
<?php endif;?>
</td>
<td width="36"></td>
</tr><tr><td colspan="3" height="36"></td></tr></tbody></table></td></tr></tbody></table><table cellpadding="0" cellspacing="0" align="center" border="0"><tbody><tr><td height="10"></td></tr>

<tr>
	<td style="padding:0;border-collapse:collapse">
<table cellpadding="0" cellspacing="0" align="center" border="0">
	<tbody>
		<tr style="color:#a8b9c6;font-size:11px;font-family:'Open Sans','Lucida Grande','Segoe UI',Arial,Verdana,'Lucida Sans Unicode',Tahoma,'Sans Serif'">
			<td width="300" align="left"></td>
			<td width="228" align="right" style="color:#53B6CF;text-align:right">© 2014 <a style="text-decoration: none;color:#53B6CF;" href="<?php echo Yii::app()->createAbsoluteUrl('/')?>" target="_blank" style="color:#53B6CF;"><?php echo Yii::app()->createAbsoluteUrl('/')?></a></td>
		</tr>
	</tbody>
</table>

	</td>
</tr>
</tbody></table></td></tr></tbody></table></center>