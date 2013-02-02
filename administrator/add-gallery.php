<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>On Antique Row : Add Gallery</title>
<?php include 'includes/head.php'; ?>
</head>

<body>
<div class="container">
<div class="header">
<div class="header-left">
<a href="dashboard.php"><img src="cms-images/onantiquerow-cms-logo.jpg" style="float:left;" title="" /></a>
<div class="text-button" style="float:right; margin-top:50px;"><a href="http://www.onantiquerow.com" target="_blank">View Website</a></div>
</div>
<div class="header-right">
<div class="profile-box">
<a href="admin-profile.php"><img src="cms-images/user-profile-img.jpg" title="User" /></a>
<a href="admin-profile.php"><h4>On Antique Row</h4></a>
<p><a href="admin-profile.php">Profile</a></p><br/>
<button>Logout</button>
</div>
</div>
</div>
<div class="clear"></div>
<?php include 'includes/cms-menu.php'; ?>
<div class="clear"></div>

<div class="content">
<div class="clear"></div>
<div class="dashboard-button clearfix"><a href="galleries.php"><img src="cms-images/back-to-galleries.png"  /><br/>Manage<br/>Galleries</a></div>
<div class="cms-heading">New Gallery</div>
<div class="clear"></div>
<div class="main-content">
<form>
<table width="1000" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Gallery Properties</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Gallery Name</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Gallery Alias</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Gallery Title</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Dealer / Designer Code</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Priority [For Sorting]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" width="150" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Gallery Display</td>
<td width="50">&nbsp;</td>
<td width="650" align="left">
<input type="checkbox" style="margin-left:25px; margin-right:10px;" />Active
<input type="checkbox" style="margin-left:25px; margin-right:10px;" />Featured
<input type="checkbox" style="margin-left:25px; margin-right:10px;" />Show in Sitemap
</td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Gallery Images</strong></td>
</tr>
<tr>
<td width="150" align="left" valign="top">Gallery Image 1</td>
<td width="25">&nbsp;</td>
<td width="800" align="left"><input type="file" name="category-banner" style="width:300px;" /><input type="checkbox" style="margin-left:25px; margin-right:10px;" />Gallery Cover Image
<br>Alt Text:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" style="width:300px;" />
<br>Description:&nbsp;&nbsp; <input type="text" style="width:300px;" />
</td>
</tr>
<hr />
<tr>
<td width="150" align="left" valign="top">Gallery Image 2</td>
<td width="25">&nbsp;</td>
<td width="800" align="left"><input type="file" name="category-banner" style="width:300px;" />
<br>Alt Text:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" style="width:300px;" />
<br>Description:&nbsp;&nbsp; <input type="text" style="width:300px;" />
</td>
</tr>
<tr>
<td width="150" align="left" valign="top">Gallery Image 3</td>
<td width="25">&nbsp;</td>
<td width="800" align="left"><input type="file" name="category-banner" style="width:300px;" />
<br>Alt Text:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" style="width:300px;" />
<br>Description:&nbsp;&nbsp; <input type="text" style="width:300px;" />
</td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Gallery SEO Properties</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Meta Title</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:600px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Meta Description</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea style="width:600px; height:50px;"></textarea></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Meta Keywords</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea style="width:600px; height:50px;"></textarea></td>
</tr>

<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Ads</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Ad Content on Dealer Page</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea style="width:600px; height:50px;"></textarea></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td width="300" align="left" valign="top">&nbsp;</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input class="grey-button" type="button" value="Save" />
&nbsp;&nbsp;&nbsp;&nbsp;<input class="grey-button" type="button" value="Cancel" />
</td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
</table> 
</form>
</div>
</div>
<div class="clear"></div>
<div class="container-wrapper">
  <?php include 'includes/footer.php'; ?>
</div>
</div>
</body>
</html>