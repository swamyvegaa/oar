<?php 

function Dealeradd($dealer_name,$dealer_code,$dealer_login_email,$dealer_pwd,$dealer_order,$dealer_status,$dealer_featured,$dealer_show_in_sitemap,$dealer_store_name,$dealer_alias,$dealer_title,$dealer_address1,$dealer_address2,$dealer_address3,$dealer_city,$dealer_state,$dealer_country,$dealer_zip_code,$dealer_phone,$dealer_fax,$dealer_toll_free,$dealer_email,$dealer_website,$dealer_description_top,$dealer_description_bottom,$dealer_banner,$dealer_thumbnail,$dealer_icon,$dealer_meta_title,$dealer_meta_description,$dealer_meta_keywords,$dealer_ad){
global $db;

$today=date("Y-m-d H:i:s");

		
						
								$sub_array = array(
										'dealer_name' 			      => $dealer_name,
										'dealer_code' 			      => $dealer_code,
										'dealer_login_email'		  => $dealer_login_email,
										'dealer_pwd' 			      => md5($dealer_pwd),
										'dealer_order' 			      => $dealer_order,										
										'dealer_status' 		      => $dealer_status,
										'dealer_featured'             => $dealer_featured,
									    'dealer_show_in_sitemap' 	  => $dealer_show_in_sitemap,	
										'dealer_store_name' 	      => $dealer_store_name,
										'dealer_alias' 	              => $dealer_alias,
										'dealer_title' 	              => $dealer_title,										
										'dealer_address1'             => $dealer_address1,
										'dealer_address2'             => $dealer_address2,
										'dealer_address3'             => $dealer_address3,
										'dealer_city'                 => $dealer_city,
										'dealer_state'                => $dealer_state,
										'dealer_country' 			  => $dealer_country,
										'dealer_zip_code' 			  => $dealer_zip_code,
										'dealer_phone' 			      => $dealer_phone,
										'dealer_fax' 			      => $dealer_fax,
										'dealer_toll_free' 			  => $dealer_toll_free,
										'dealer_email'				  => $dealer_email,
										'dealer_website' 			  => $dealer_website,
										'dealer_description_top' 	  => $dealer_description_top,
										'dealer_description_bottom'   => $dealer_description_bottom,
									    'dealer_banner' 	          => $dealer_banner,	
										'dealer_thumbnail' 	          => $dealer_thumbnail,
										'dealer_icon' 	              => $dealer_icon,										
										'dealer_meta_title'           => $dealer_meta_title,
										'dealer_meta_description'     => $dealer_meta_description,
										'dealer_meta_keywords'        => $dealer_meta_keywords,
										'dealer_ad'                   => $dealer_ad,										
										'dealer_created_date' 	      => $today
											 );
								$sub_array = stripslashes_deep($sub_array);
								
								
								$db->insert('dealers',$sub_array);
								header('Location:dealers.php');
 }
 
 function Statuschange($id,$newstatus,$start){
 global $db;
$db->update('dealers',"dealer_status= '".$newstatus."'","id=".$id);
header('Location:dealers.php?start='.$start);

	
}
function Statusdelete($id,$start){
 global $db;
$db->update('dealers',"dealer_status= '-1'","id=".$id);
header('Location:dealers.php?start='.$start);

	
}
function Dealeredit($id,$start){
 global $db,$deares;
 $deares= "SELECT *  FROM  dealers WHERE dealer_status!='-1' AND id='".$id."'"; 
 $dealer= $db->getRow($deares);
 
 return $dealer;
}
function Delearupdate($dealer_name,$dealer_code,$dealer_login_email,$dealer_pwd,$dealer_order,$dealer_status,$dealer_featured,$dealer_show_in_sitemap,$dealer_store_name,$dealer_alias,$dealer_title,$dealer_address1,$dealer_address2,$dealer_address3,$dealer_city,$dealer_state,$dealer_country,$dealer_zip_code,$dealer_phone,$dealer_fax,$dealer_toll_free,$dealer_email,$dealer_website,$dealer_description_top,$dealer_description_bottom,$dealer_banner,$dealer_thumbnail,$dealer_icon,$dealer_meta_title,$dealer_meta_description,$dealer_meta_keywords,$dealer_ad,$start,$id){
global $db;  
$dealer_pwd = md5($dealer_pwd);
$con='';
if($dealer_banner!=''){
$con.=",dealer_banner='".$dealer_banner."'";
}
if($dealer_thumbnail!=''){
$con.=",dealer_thumbnail='".$dealer_thumbnail."'";
}
if($dealer_icon!=''){
$con.=",dealer_icon='".$dealer_icon."'";
}
//echo $query="dealer_name='".$dealer_name."',dealer_code='".$dealer_code."',dealer_login_email='".$dealer_login_email."',dealer_order='".$dealer_order."',dealer_pwd='".$dealer_pwd."',dealer_status='".$dealer_status."',dealer_featured='".$dealer_featured."',dealer_show_in_sitemap='".$dealer_show_in_sitemap."',dealer_store_name='".$dealer_store_name."',dealer_alias='".$dealer_alias."',dealer_title='".$dealer_title."',dealer_address1='".$dealer_address1."',dealer_address2='".$dealer_address2."',dealer_address3='".$dealer_address3."',dealer_city='".$dealer_city."',dealer_state='".$dealer_state."',dealer_country='".$dealer_country."',dealer_zip_code='".$dealer_zip_code."',dealer_phone='".$dealer_phone."',dealer_fax='".$dealer_fax."',dealer_toll_free='".$dealer_toll_free."',dealer_email='".$dealer_email."',dealer_website='".$dealer_website."',dealer_description_top='".$dealer_description_top."',dealer_description_bottom='".$dealer_description_bottom."',dealer_meta_title='".$dealer_meta_title."',dealer_meta_description='".$dealer_meta_description."',dealer_meta_keywords='".$dealer_meta_keywords."',dealer_ad='".$dealer_ad."'$con","id=".$id;
//exit;
$db->update('dealers',"dealer_name='".$dealer_name."',dealer_code='".$dealer_code."',dealer_login_email='".$dealer_login_email."',dealer_order='".$dealer_order."',dealer_pwd='".$dealer_pwd."',dealer_status='".$dealer_status."',dealer_featured='".$dealer_featured."',dealer_show_in_sitemap='".$dealer_show_in_sitemap."',dealer_store_name='".$dealer_store_name."',dealer_alias='".$dealer_alias."',dealer_title='".$dealer_title."',dealer_address1='".$dealer_address1."',dealer_address2='".$dealer_address2."',dealer_address3='".$dealer_address3."',dealer_city='".$dealer_city."',dealer_state='".$dealer_state."',dealer_country='".$dealer_country."',dealer_zip_code='".$dealer_zip_code."',dealer_phone='".$dealer_phone."',dealer_fax='".$dealer_fax."',dealer_toll_free='".$dealer_toll_free."',dealer_email='".$dealer_email."',dealer_website='".$dealer_website."',dealer_description_top='".$dealer_description_top."',dealer_description_bottom='".$dealer_description_bottom."',dealer_meta_title='".$dealer_meta_title."',dealer_meta_description='".$dealer_meta_description."',dealer_meta_keywords='".$dealer_meta_keywords."',dealer_ad='".$dealer_ad."'$con","id=".$id);
header('Location:dealers.php?start='.$start);
}
function Statusdealer($id,$start,$statusdealer){
 global $db;
$db->update('dealers',"dealer_featured='".$statusdealer."'","id=".$id);
header('Location:dealers.php?start='.$start);

	
}
?>