<?php 

function Categoryadd($category_root,$category_name,$category_alias,$category_title,$category_code,$category_order,$category_description_top,$category_description_bottom,$category_banner,$category_thumbnail,$category_meta_title,$category_meta_description,$category_meta_keywords,$category_status,$category_featured_status,$category_ad){
global $db;

$today=date("Y-m-d H:i:s");

		
						
								$sub_array = array(
										'category_root' 			      => $category_root,
										'category_name' 			      => $category_name,
										'category_alias' 			      => $category_alias,
										'category_title' 			      => $category_title,
										'category_code' 			      => $category_code,
										'category_order' 			      => $category_order,
										'category_description_top' 		  => $category_description_top,
										'category_description_bottom'     => $category_description_bottom,
									    'category_banner' 	              => $category_banner,	
										'category_thumbnail' 	          => $category_thumbnail,
										'category_meta_title' 	          => $category_meta_title,										
										'category_meta_description'       => $category_meta_description,
										'category_meta_keywords'          => $category_meta_keywords,
										'category_status'                 => $category_status,
										'category_featured_status'        => $category_featured_status,
										'category_ad'                     => $category_ad,
										'category_created_date' 	      => $today
											 );
								$sub_array = stripslashes_deep($sub_array);
								
								
								$db->insert('categories',$sub_array);
								header('Location:categories.php');
 }
 
 function Statuschange($id,$newstatus,$start){
 global $db;
$db->update('categories',"category_status= '".$newstatus."'","id=".$id);
header('Location:categories.php?start='.$start);

	
}
function Statusdelete($id,$start){
 global $db;
$db->update('categories',"category_status= '-1'","id=".$id);
header('Location:categories.php?start='.$start);

	
}
function Categoryedit($id,$start){
 global $db,$cat;
 $catres= "SELECT *  FROM  categories WHERE category_status!='-1' AND id='".$id."'"; 
 $cat= $db->getRow($catres);
 
 return $cat;
}
function Categoryupdate($category_root,$category_name,$category_alias,$category_title,$category_code,$category_order,$category_description_top,$category_description_bottom,$category_banner,$category_thumbnail,$category_meta_title,$category_meta_description,$category_meta_keywords,$category_status,$category_featured_status,$category_ad,$start,$id){
global $db;
$con.='';
if($category_banner!=''){
$con.=",category_banner='".$category_banner."'";
}
if($category_thumbnail!=''){
$con.=",category_thumbnail='".$category_thumbnail."'";
}
$db->update('categories',"category_root='".$category_root."',category_name='".$category_name."',category_alias='".$category_alias."',category_title='".$category_title."',category_code='".$category_code."',category_order='".$category_order."',category_description_top='".$category_description_top."',category_description_bottom='".$category_description_bottom."',category_meta_title='".$category_meta_title."',category_meta_description='".$category_meta_description."',category_meta_keywords='".$category_meta_keywords."',category_status='".$category_status."',category_featured_status='".$category_featured_status."',category_ad='".$category_ad."'$con","id=".$id);
header('Location:categories.php?start='.$start);
}


function Statusfeatured($id,$start,$statusfeatured){
 global $db;
$db->update('categories',"category_featured_status='".$statusfeatured."'","id=".$id);
header('Location:categories.php?start='.$start);

	
}
?>