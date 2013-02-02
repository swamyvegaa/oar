<?php 
function Pageadd($page_name,$page_alias,$page_title,$page_order,$page_content,$page_banner,$page_meta_title,$page_meta_description,$page_meta_keywords,$page_status,$page_status_sitemap,$page_ad){
global $db;

$today=date("Y-m-d H:i:s");

		
						
								$sub_array = array(
										'page_name' 			  => $page_name,
										'page_alias' 			  => $page_alias,
										'page_title' 			  => $page_title,
										'page_order' 			  => $page_order,
										'page_content' 			  => $page_content,
										'page_banner' 			  => $page_banner,
										'page_meta_title' 		  => $page_meta_title,
										'page_meta_description'   => $page_meta_description,
									    'page_meta_keywords' 	  => $page_meta_keywords,	
										'page_status' 	          => $page_status,
										'page_status' 	          => $page_status,										
										'page_status_sitemap'     => $page_status_sitemap,
										'page_ad'                 => $page_ad,
										'page_created_date' 	  => $today
											 );
								$sub_array = stripslashes_deep($sub_array);
								$db->insert('pages',$sub_array);
								header('Location:pages.php');
								

 
 }
function Pagelist(){

 global $db,$q_limit,$start ,$no_row;
 
 $q_limit     = 100;
 if ( !isset($_REQUEST['start']) ){
	$start = 0;
}else{
$start=$_REQUEST['start'];
}
 $pagelist = "SELECT * FROM pages WHERE page_status!='-1' ORDER BY id DESC LIMIT ".$start.", ".$q_limit."";
 $pagelist_c = "SELECT * FROM pages WHERE page_status!='-1'";
 $pagelist = $db->getRows($pagelist);
 $no_row = sqlnumber($pagelist_c);
 
 return $pagelist;
}

function Statuschange($id,$newstatus,$start){
 global $db;
$db->update(pages,"page_status= '".$newstatus."'","id=".$id);
header('Location:pages.php?start='.$start);

	
}

function Statusdelete($id,$start){
 global $db;
$db->update('pages',"page_status= '-1'","id=".$id);
header('Location:pages.php?start='.$start);

	
}

function Pageedit($id,$start){
 global $db,$cat;
 $catres= "SELECT *  FROM  pages WHERE page_status!='-1' AND id='".$id."'"; 
 $cat= $db->getRow($catres);
 
 return $cat;
}
function Pageupdate($page_name,$page_alias,$page_title,$page_order,$page_content,$page_banner,$page_meta_title,$page_meta_description,$page_meta_keywords,$page_status,$page_status_sitemap,$page_ad,$start,$id){
global $db;
$con.='';
if($page_banner!=''){
$con.=",page_banner='".$page_banner."'";
}

$db->update('pages',"page_name='".$page_name."',page_alias='".$page_alias."',page_order='".$page_order."',page_content='".$page_content."',page_meta_title='".$page_meta_title."',page_meta_description='".$page_meta_description."',page_meta_keywords='".$page_meta_keywords."',page_status='".$page_status."',page_status_sitemap='".$page_status_sitemap."',page_ad='".$page_ad."'$con","id=".$id);
header('Location:pages.php?start='.$start);
}
?>