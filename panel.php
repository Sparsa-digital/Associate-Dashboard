<html>
<head>
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		}
	html, body	{
		height: 100%;
		}
	body{
		background: #fff;
		color: #4F4F4F;
		font-family: Verdana, Geneva, sans-serif;
		font-size: 11px;
		line-height: 0;
		}
	.wrapper{
		width:100%;
	} 
	.toppanel{background:#F63;width:100%;height:40px;line-height:40px;} 
	.toppaneltxt{color:#fff;font-size:16px;}  
	.container{width:98%;margin:0 auto;}
	.labletxt{font-size:14px;}
	.hint{font-size:12px;}
    </style>
</head>
<body>
<?php 
if(isset($_POST['submit']) && $_POST['submit']!='')
{
	//echo "Post form";
}
?>
	<div class="wrapper">
    <form name="configform" id="configform" method="post">
    		<table class="toppanel"><tr><td colspan="2" class="toppaneltxt">Power Panel Configuration</td></tr></table>
    		<table cellpadding="3" cellspacing="10">
            	<tr><td colspan="4">1 : Local configuration Setup</td></tr>
            	<tr>
                	<td>&nbsp;</td>
                	<td>Admin Folder path :</td>
                    <td><input type="text" name="folderpath" id="folderpath" value="" style="width:200px;height:25px;line-height:25px;border:1px solid;"/></td>
                    <td class="hint">(Hint : folder1/folder2)</td>
                </tr>
            	<tr>
                	<td>&nbsp;</td>
                	<td>Host :</td>
                    <td><input type="text" name="host" id="host" value="" style="width:200px;height:25px;line-height:25px;border:1px solid;"/></td>
                    <td class="hint">(Hint : use databse host name)</td>
                </tr>
            	<tr>
                	<td>&nbsp;</td>
                	<td>Database :</td>
                    <td><input type="text" name="database" id="database" value="" style="width:200px;height:25px;line-height:25px;border:1px solid;"/></td>
                    <td class="hint">(Hint : use databse name)</td>
                </tr>
            	<tr>
                	<td>&nbsp;</td>
                	<td>Database User :</td>
                    <td><input type="text" name="databaseuser" id="databaseuser" value="" style="width:200px;height:25px;line-height:25px;border:1px solid;"/></td>
                    <td class="hint">(Hint : use database user name)</td>
                </tr>
            	<tr>
                	<td>&nbsp;</td>
                	<td>Database Password :</td>
                    <td><input type="text" name="databasepassword" id="databasepassword" value="" style="width:200px;height:25px;line-height:25px;border:1px solid;"/></td>
                    <td class="hint">(Hint : use database password)</td>
				</tr>
				<tr><td colspan="4">&nbsp;</td></tr>
            	<tr><td colspan="4">2 : Online configuration Setup</td></tr>
            	<tr>
                	<td>&nbsp;</td>
                	<td>Server Root path :</td>
                    <td><input type="text" name="rootpath" id="rootpath" value="" style="width:200px;height:25px;line-height:25px;border:1px solid;"/></td>
                    <td class="hint">(Hint : if you have already know root path than fill this field otherwise leave it blank. "<?=$_SERVER['DOCUMENT_ROOT']?>")</td>
                </tr>
            	<tr>
                	<td>&nbsp;</td>
                	<td>Admin Folder path :</td>
                    <td><input type="text" name="folderpath" id="folderpath" value="" style="width:200px;height:25px;line-height:25px;border:1px solid;"/></td>
                    <td class="hint">(Hint : folder1/folder2)</td>
                </tr>
            	<tr>
                	<td>&nbsp;</td>
                	<td>Host :</td>
                    <td><input type="text" name="host" id="host" value="" style="width:200px;height:25px;line-height:25px;border:1px solid;"/></td>
                    <td class="hint">(Hint : use databse host name)</td>
                </tr>
            	<tr>
                	<td>&nbsp;</td>
                	<td>Database :</td>
                    <td><input type="text" name="database" id="database" value="" style="width:200px;height:25px;line-height:25px;border:1px solid;"/></td>
                    <td class="hint">(Hint : use databse name)</td>
                </tr>
            	<tr>
                	<td>&nbsp;</td>
                	<td>Database User :</td>
                    <td><input type="text" name="databaseuser" id="databaseuser" value="" style="width:200px;height:25px;line-height:25px;border:1px solid;"/></td>
                    <td class="hint">(Hint : use database user name)</td>
                </tr>
            	<tr>
                	<td>&nbsp;</td>
                	<td>Database Password :</td>
                    <td><input type="text" name="databasepassword" id="databasepassword" value="" style="width:200px;height:25px;line-height:25px;border:1px solid;"/></td>
                    <td class="hint">(Hint : use database password)</td>
				</tr>
				<tr><td colspan="4">&nbsp;</td></tr>
                <tr><td colspan="4" align="center"><input type="submit" name="submit" value="Save Configuration" /></td></tr>

            </table>
            </form>
    </div>
            
</body>
</html>
