<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>On Antique Row : Events</title>
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

<div class="dashboard-button clearfix"><a href="add-event.php"><img src="cms-images/add.png"  /><br/>Create New<br/>Event</a></div>
<div class="clear"></div>
<div class="cms-heading">Events</div>
<div class="clear"></div>
<div class="main-content">
<table>
<thead>
<tr>
<th width="50"><input class="check-all" type="checkbox" /></th>
<th width="500" align="left">Event Name</th>
<th width="100" align="right">Start Date</th>
<th width="100" align="right">End Date</th>
<th width="50" align="center">Featured</th>
<th width="200" align="center">Action</th>
</tr>
</thead>
<tr  class="alt-row">
  <td align="center" valign="middle"><input class="check-all" type="checkbox" /></td>
  <td><img src="cms-images/event.png" style="margin-right:10px;"  /><a href="#">Antiques Show</a></td>
  <td align="right"><a href="#">01-01-2013</a></td>
  <td align="right"><a href="#">01-05-2013</a></td>
  <td align="center" valign="middle"><input class="check-all" type="checkbox" /></td>
  <td align="center" valign="middle">
  <a href="#"><img src="cms-images/active.png" style="margin:0px 5px 0px 5px;" alt="Active" title="Active"/></a>&nbsp;
  <a href="#"><img src="cms-images/edit.png" style="margin:0px 5px 0px 5px;" alt="Edit" title="Edit"/></a>&nbsp;
  <a href="#"><img src="cms-images/delete.png" style="margin:0px 5px 0px 5px;" alt="Delete" title="Delete"/></a>&nbsp;
  <a href="#" target="_blank"><img src="cms-images/view.png" style="margin:0px 5px 0px 5px;" alt="View" title="View"/></a>&nbsp;
  </td>
</tr>
<tr>
  <td align="center" valign="middle"><input class="check-all" type="checkbox" /></td>
  <td><img src="cms-images/event.png" style="margin-right:10px;"  /><a href="#">Antiques Exhibition</a></td>
  <td align="right"><a href="#">01-26-2013</a></td>
  <td align="right"><a href="#">01-31-2013</a></td>
  <td align="center" valign="middle"><input class="check-all" type="checkbox" /></td>
  <td align="center" valign="middle">
  <a href="#"><img src="cms-images/active.png" style="margin:0px 5px 0px 5px;" alt="Active" title="Active"/></a>&nbsp;
  <a href="#"><img src="cms-images/edit.png" style="margin:0px 5px 0px 5px;" alt="Edit" title="Edit"/></a>&nbsp;
  <a href="#"><img src="cms-images/delete.png" style="margin:0px 5px 0px 5px;" alt="Delete" title="Delete"/></a>&nbsp;
  <a href="#" target="_blank"><img src="cms-images/view.png" style="margin:0px 5px 0px 5px;" alt="View" title="View"/></a>&nbsp;
  </td>
</tr>


</table>
</div>
</div>
<div class="pagination" align="center">
<span>Page 1 of 20</span>
<a rel="nofollow" href="#">« First</a>
<a rel="nofollow" href="#">‹ Previous</a>
<span class="current">1</span>
<a class="inactive" rel="nofollow" href="#">2</a>
<a class="inactive" rel="nofollow" href="#">3</a>
<a class="inactive" rel="nofollow" href="#">4</a>
<a class="inactive" rel="nofollow" href="#">5</a>
<a href="#page/5">Next ›</a>
<a rel="nofollow" href="#">Last »</a>
</div>
<div class="clear"></div>
<div class="container-wrapper">
  <?php include 'includes/footer.php'; ?>
</div>
</div>
</body>
</html>