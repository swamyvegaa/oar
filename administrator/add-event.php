<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>On Antique Row : Add Event</title>
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
<div class="dashboard-button clearfix"><a href="events.php"><img src="cms-images/back-to-events.png"  /><br/>Manage<br/>Events</a></div>
<div class="cms-heading">New Event</div>
<div class="clear"></div>
<div class="main-content">
<form>
<table width="1000" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Event Details</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Name</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>

<tr>
<td width="300" align="left" valign="top">Event Alias [For URL]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Title</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Start Date</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:100px;" /> 
&nbsp;&nbsp;&nbsp;Time: <input type="text" style="width:50px;" /> To <input type="text" style="width:50px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event End Date</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:100px;" /> 
&nbsp;&nbsp;&nbsp;Time: <input type="text" style="width:50px;" /> To <input type="text" style="width:50px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Venue</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Address</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event City</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event State</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Country</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event ZIP Code</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Contact Person</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Phone</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Fax</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Toll-Free</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Email</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Website</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="text" style="width:400px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Description</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><textarea style="width:600px; height:100px;"></textarea></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Display</td>
<td width="50">&nbsp;</td>
<td width="650" align="left">
<input type="checkbox" style="margin-left:25px; margin-right:10px;" />Active
<input type="checkbox" style="margin-left:25px; margin-right:10px;" />Featured
<input type="checkbox" style="margin-left:25px; margin-right:10px;" />Show in Sitemap
</td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Event Images</strong></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Banner [Size]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="file" name="category-banner" style="width:300px;" /></td>
</tr>
<tr>
<td width="300" align="left" valign="top">Event Thumbnail [Size]</td>
<td width="50">&nbsp;</td>
<td width="650" align="left"><input type="file" name="category-banner" style="width:300px;" /></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3" bgcolor="#eaeaea"><strong>Event SEO Properties</strong></td>
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
<td width="300" align="left" valign="top">Ad Content on Event Page</td>
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