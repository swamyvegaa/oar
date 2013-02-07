<?php

function browser_info($agent=null) {
	$known = array('msie', 'firefox', 'safari', 'webkit', 'opera', 'netscape',
	'konqueror', 'gecko');
	$agent = strtolower($agent ? $agent : $_SERVER['HTTP_USER_AGENT']);
	$pattern = '#(?<browser>' . join('|', $known) .
	')[/ ]+(?<version>[0-9]+(?:\.[0-9]+)?)#';
	if (!preg_match_all($pattern, $agent, $matches)) return array();
	$i = count($matches['browser'])-1;
	$b_info[0] = $matches['browser'][$i];
	$b_info[1] = $matches['version'][$i];
	return $b_info;
}

//check the administratorlogin
function checkadminlogin(){
	if (!isset($_SESSION['doc']['admin_user']) || $_SESSION['doc']['admin_user'] == "" ) {
		header('location:index.php?action=invalidlogin');
		exit;
	}
}
function checkuserlogin(){
	if (!isset($_SESSION['dpcleaning']['user_id'] ) || $_SESSION['dpcleaning']['user_id'] == "" ) {
		header("location:login.php?action=invalidlogin");
		exit;
	}
}

function GetPagingStart($totRec) {
	
	global $start, $q_limit;
	if ( isset($start) && $start > 0 ){
		if($start >= $totRec) {
			$start = $start - $q_limit;
			$url_argmnts = $_SERVER['QUERY_STRING'];
			$args = explode("&",$url_argmnts);
			foreach($args as $arg) {
				if($arg!="") {
					$ele = explode("=",$arg);
					if($ele[0] == "start") {
						$tmparr[] = "start=$start";
					} else {
						$tmparr[] = $arg;
					}
				}
			}
			$newargs = implode("&",$tmparr);
			header("Location:?$newargs");
			exit;
		}
	} else {
		$start = 0;
	}
}

function runQuery($sql){
	return mysql_query($sql);
}
function sqlnumber($sql){
	$rs_qury   = mysql_query($sql);
    return mysql_num_rows($rs_qury);
}

function getarrayassoc($sql_qury){
	$rs_qury   = @mysql_query($sql_qury);
    if (@mysql_num_rows($rs_qury)>=1){
		return @mysql_fetch_assoc($rs_qury);
	}
  return null;
}

function getamultiassoc($sql_qury){
	$arraydata = array();
	$rs_qury   = @mysql_query($sql_qury);
	if (@mysql_num_rows($rs_qury)>0){
		while ($data = @mysql_fetch_assoc($rs_qury)){
			$arraydata[] = $data;
		}
		return $arraydata;
	}
   return null;
}

function registerglobal() {

		$args = func_get_args();

		while (list(,$key) = each ($args)) {

			if (isset($_GET[$key])) $value = $_GET[$key];
			if (isset($_POST[$key])) $value = $_POST[$key];
			if (isset($_FILES[$key])) $value = $_FILES[$key];

			if (isset($value)) {

				if (!ini_get ('magic_quotes_gpc')) {

					if (!is_array($value))
						$value = addslashes($value);
					else
						$value = slasharray($value);
				}

				$GLOBALS[$key] = $value;
				unset($value);
			}
		}
	}

function slasharray ($a) {

		while (list($k,$v) = each($a)) {

			if (!is_array($v))
				$a[$k] = addslashes($v);
			else
				$a[$k] = slasharray($v);
		}
		reset ($a);
		return ($a);
	}

//word wrap function
function utf8_wordwrap($str,$width=75,$break="\n", $cut=false){
	return utf8_encode(wordwrap(utf8_decode($str), $width, $break, $cut));
}

/**
* Random generate Password
*/
function get_rand_id($length = 4) {  
   if ($length>0){
	   $rand_id = "";
	   for($i=1; $i<=$length; $i++) {
		   do {
			   mt_srand((double)microtime() * 1000000);
			   $num = mt_rand(48,122);  
		   }while (($num > 57 && $num < 65) || ($num > 90 && $num < 97) );  
					$rand_id .= chr($num);  
	   }  
   }  
 return $rand_id;  
}  

function stripslashes_deep($value)
{
$value = is_array($value) ?
array_map('stripslashes_deep', $value) :
stripslashes($value);

return $value;
}


//mony format
function AmountFormat($amount = '0', $symbal = '') {
	$amount = round($amount,2);
	$sign = '';
	if ( substr($amount, 0, 1) == '-'){
		$sign = '-';
		$amount = substr($amount, 1);
	}
	if($symbal == " ") {		// If you want the format without any symbol then pass space, ie: " "
		$amount = $sign . number_format($amount, 2,'.','');
	} else {
		$amount = $sign . $symbal . number_format($amount, 2);
	}
	return $amount;
}

//Disply Functions for debuggging

function array_print($name = array(), $dieaction = null ){
	echo "<pre>";
	print_r($name);
	echo "</pre>";
	if ( isset($dieaction)&&($dieaction) != null ) {
		die;
	}
}

/*************for thumbnail display**********/
function thumbimage($imgsrc, $thumbsize = "100", $alt = "Image", $title = "Image" ) {
	if (file_exists($imgsrc)) {
		list($width, $height ) = getimagesize($imgsrc);
	
		$imgratio = $width/$height;
	if ( $imgratio > 1 ) {
		$newwidth  = $thumbsize;
		$newheight = $thumbsize/$imgratio;
	}else {
		$newheight = $thumbsize;
		$newwidth  = $thumbsize*$imgratio;
	}
	 return '<img src="' . $imgsrc . '" width="' . $newwidth . '" height="' . $newheight . '"  alt="' . $alt . '" border="0" title="' . $title . '" >';
	}
	else {
		echo "No Image";
	}
	
 }
/***********eof**********/

/**
* Pagination
*/
function paginateexte($start, $limit, $total, $otherParams='') {
	
	if ($otherParams!=''){
		$otherParams = $otherParams;
	}
	$allPages	 = ceil($total/$limit);
	$currentPage = floor($start/$limit) + 1;
	$pagination  = "";
	if ($allPages>10) {
		$maxPages = ($allPages>9) ? 9 : $allPages;

		if ($allPages>9) {
			if ($currentPage>=1&&$currentPage<=$allPages) {
				$pagination .= ($currentPage>4) ? "<td> ... </td>" : " ";
				$minPages    = ($currentPage>4) ? $currentPage : 5;
				$maxPages    = ($currentPage<$allPages-4) ? $currentPage : $allPages - 4;

				for($i = $minPages-4; $i<$maxPages+5; $i++) {
					$pagination .= ($i == $currentPage) ? "<td >".$i."</td>" : "<td><a href=\"".$otherParams."&start=".(($i-1)*$limit)."\">".$i."</a></td>";
				}
				$pagination .= ($currentPage<$allPages-4) ? "<td> ...</td> " : " ";
			} else {
				$pagination .= "<td>...</td> ";
			}
		}
	} else {
		for($i=1; $i<$allPages+1; $i++) {
			$pagination .= ($i==$currentPage) ? "<td><span class='current'>".$i."</span></td>" : "<td><a  href=\"" . $otherParams."&start=" . (($i-1)*$limit)."\">" . $i . "</a></td>";
		}
	}

	if ($currentPage>1){ 
		$pagination = "<td><a  href=\"" . $otherParams . "&start=0 \"><strong>&laquo;</strong> First</a></td><td><a  href=\"". $otherParams . "&start=" . (($currentPage-2)*$limit)."\"><strong >&laquo;</strong> Previous</a></td>" . $pagination;
	}
	if ($currentPage<$allPages){
		
		$pagination .= "<td><a  href=\"". $otherParams . "&start=" . ($currentPage*$limit)."\">Next <strong>&raquo;</strong></a></td><td><a  href=\"". $otherParams . "&start=" . (($allPages-1)*$limit)."\">Last <strong>&raquo;</strong></a></td>";
	}

	echo "<table align=\"center\" class=\"boxPagination\"><tr>".$pagination."</tr></table>";
}
	
/***********datediff**********/
function date_difference($earlierDate, $laterDate) {
	//returns an array of numeric values representing days, hours, minutes & seconds respectively
	$ret = array('days'=>0, 'hours'=>0, 'minutes'=>0, 'seconds'=>0);
	$totalsec = strtotime($laterDate) - strtotime($earlierDate);

	if ($totalsec >= 86400) {
		$ret['days'] = floor($totalsec/86400);
		$totalsec = $totalsec % 86400;
	}
	if ($totalsec >= 3600) {
		$ret['hours'] = floor($totalsec/3600);
		$totalsec = $totalsec % 3600;
	}
	if ($totalsec >= 60) {
		$ret['minutes'] = floor($totalsec/60);
	}
	$ret['seconds'] = $totalsec % 60;
	return $ret;
}

function func_date_conversion($date_format_source, $date_format_destiny, $date_str){
/*
	To Convert Any Date Format to any other Date Format
	Use Like:
		$date_format_source = 'Y-m-d H:i';
		$date_format_destiny = 'd/m/Y H:i A';
		echo func_date_conversion( $df_src, $df_des, '10/11/2008 03:34 PM');
*/
	$base_format     = split('[:/.\ \-]', $date_format_source);
	$date_str_parts = split('[:/.\ \-]', $date_str );
	
	$date_elements = array();
	
	$p_keys = array_keys( $base_format );
	foreach ( $p_keys as $p_key )
	{
		if ( !empty( $date_str_parts[$p_key] ))
		{
			$date_elements[$base_format[$p_key]] = $date_str_parts[$p_key];
		}
		else
			return false;
	}
	
	if (array_key_exists('M', $date_elements)) {
		$Mtom = array(
			"Jan" => "01",
			"Feb" => "02",
			"Mar" => "03",
			"Apr" => "04",
			"May" => "05",
			"Jun" => "06",
			"Jul" => "07",
			"Aug" => "08",
			"Sep" => "09",
			"Oct" => "10",
			"Nov" => "11",
			"Dec" => "12",
		);
		$date_elements['m']=$Mtom[$date_elements['M']];
	}
	
	$dummy_ts = mktime($date_elements['H'], $date_elements['i'], $date_elements['s'], $date_elements['m'], $date_elements['d'], $date_elements['Y'] );
	
	return date( $date_format_destiny, $dummy_ts );
}
//==========================
//	File extension
//=====================
function fileextension($filename) { 
	$path_info = pathinfo($filename);
	return $path_info['extension'];
} 
//===================
//	File name
//==================
function filename($filename) {
	$path_info = pathinfo($filename);
	return $path_info['filename'];
}
function uploadanyfile($fieldname, $path="", $newname=false) {
	
	
	if ($path=="")
		 $path = dirname(__FILE__)."/";
	/*
	if ($allowed=="")
		$allowed = array('image/gif','image/pjpeg','image/jpeg','image/png',);
	if ($max_size=="")
		$max_size = 9999999;
	*/
	$upload_error = array();
	$upldfile = "";
	if($fieldname != "")
	 $upldfile = $_FILES[$fieldname];
		
	if($newname) {
		$newname = filename($upldfile['name'])."_".date("YmdHis").rand(5, 15).".".fileextension($upldfile['name']);
	}
		
	if (isset($upldfile) && $upldfile!="")
	{ 
		if (is_uploaded_file($upldfile['tmp_name'])) 
		{ 
			/*if ($upldfile['size'] < $max_size) 
			{ 
				if (in_array($upldfile['type'], $allowed)) 
				{ */
					if (!file_exists($path.$newname)) 
					{ 
						if ( move_uploaded_file($upldfile['tmp_name'], $path.$newname)) 
						{ 
							chmod($path.$newname, 0777);
							$returnstr = $newname;
						}else{ 
							$html_output = 'Upload failed!<br>'; 
							if(!is_writeable($path)) 
							{ 
								$upload_error[] = 'The Directory "'.$path.'" must be writeable!'; 
							}else{ 
								$upload_error[] = "An unknown error ocurred.";       
							} 
						}
					}else{ 
						$upload_error[] = "The file already exists."; 
					}
				/*}else{ 
					$upload_error = "Wrong file type provided.";
				}
			}else{
				$upload_error = "The file is too big.";
			}*/
		}else{
			$upload_error[] = "Some error occured in uploading the file.";
		}
	}else{
		$upload_error[] = "No file is found to be uploaded.";
	}
	if(count($upload_error) >= 1 ) {
		return $upload_error;
		
	} else {
		return $returnstr;
	}
}
function mandatatory(){
  echo '<span style="color:#D31515; font-size:15px; font-weight:bold;" >* </span>';
}

function displayimage($imgsrc, $thumbsize = "100", $alt = "", $title = "" ){
	if (file_exists($imgsrc)) {
	list($width, $height ) = getimagesize($imgsrc);
	$imgratio = $width/$height;
		if ($imgratio>1) {
			$newwidth = $thumbsize;
			$newheight = $thumbsize/$imgratio;
		}else {
			$newheight = $thumbsize;
			$newwidth = $thumbsize*$imgratio;
		}
	return '<img src="' . $imgsrc . '" width="' . $newwidth . '" height="' . $newheight . '" alt="' . $alt . '" border="0" title="' . $title . '" >';
	} else {
	return '<i>Image</i>';
	}
}
function RemoveDateFromFilename($filename, $separator="_") {
	$file_ext = fileextension($filename);
	$file_name = filename($filename);
	
	$exp_arr = explode($separator,$file_name);
	unset($exp_arr[ count($exp_arr)-1 ]);
	$org_file_name = implode($separator,$exp_arr);
	return $org_file_name.".".$file_ext;
}
/***********************************************
**	Used to force download any file by passing the full path of the file for download
**	Use Like 
**	echo ForceDownloadFile("documents/application.pdf");
************************************************/
function ForceDownloadFile($filepath) {
	$extn = fileextension($filepath);
	$flnm = filename($filepath);
	$downloadfl = $flnm.".".$extn;
	$downloadfl = RemoveDateFromFilename($downloadfl);
	$len = @filesize($filepath);
 	header("Content-type: application/$extn");
	header("Content-Disposition: attachment; filename=$downloadfl");
	header("Content-Length: $len");
	@readfile($filepath);
	exit;
}

function Adminlogin($username,$pwd){
global $db;
 $sel_admins = "SELECT * FROM users  WHERE 	username = '" . $username . "' AND password = '" . md5($pwd). "' AND status = '1' AND type = 'admin '";
 $admin_info = $db->getRow($sel_admins);
 
 
            if( count( $admin_info) > 0){
            $_SESSION['aor'][$admin_info['type']]['admin_user'] = $admin_info['username'];
			$_SESSION['aor'][$admin_info['type']]['admin_name'] = $admin_info['name'];  			
			$_SESSION['aor'][$admin_info['type']]['admin_id']   = $admin_info['id'];
			$_SESSION['aor'][$admin_info['type']]['type'] = $admin_info['type'];
			$out1 = ob_get_contents();
			var_dump($out1);
			header('Location:dashboard.php');
			}else {
			header("Location: index.php");
			}
		
}


function Dealerlogin($username,$pwd){
global $db;
 $sel_dealer = "SELECT * FROM dealers  WHERE dealer_login_email = '" . $username . "' AND dealer_pwd = '" . md5($pwd). "' AND dealer_status = '1'";
 echo $sel_dealer;
 //exit;
 $admin_info = $db->getRow($sel_dealer);
 
 
            if( count( $admin_info) > 0){
            $_SESSION['dealer_login_email'] = $admin_info['dealer_login_email'];
			$_SESSION['dealer_name'] = $admin_info['dealer_name'];  			
			$_SESSION['dealer_id'] = $admin_info['id'];
			//$_SESSION['aor'][$admin_info['type']]['type'] = $admin_info['type'];
			$out1 = ob_get_contents();
			var_dump($out1);
			header('Location:profile.php');
			}else {
			header("Location: index.php");
			}
		
}



function Checklogin(){

if($_SESSION['aor']['admin']['admin_id']==''){
header("Location:index.php");
}


}

function CheckDealerlogin(){


if($_SESSION['dealer_login_email']==''){

//echo "hai";exit;
header("Location:index.php");
}


}
?>