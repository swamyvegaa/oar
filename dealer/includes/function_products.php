<?php 


function Productadd($product_dealer,$product_categoryPrimary,$product_category,$product_name,$product_alias,$product_title,$product_code,$product_cost_price,$product_sale_price,$product_call_for_fee,$product_offer_price,$product_period,$product_origin,$product_condition,$product_height,$product_width,$product_depth,$product_weight,$product_shipping_price,$product_free_shipping,$product_instock_qty,$product_overview,$product_description,$product_additional_information,$product_status,$product_sold,$product_featured,$product_on_hold,$product_new_arrival,$product_coming_soon,$product_priority,$product_primary_image,$product_secondary_image,$product_meta_title,$product_meta_description,$product_meta_keywords,$product_ad){
global $db;
$product_categoryArr= explode(",",$product_category);
$product_categoryEle = $product_categoryPrimary;
$product_categoryEle2 = $product_category;

$today=date("Y-m-d H:i:s");						
								$sub_array = array(
										'product_dealer' 			       => $product_dealer,	
'product_primary_category'    =>  		$product_categoryEle,		
'product_secodary_category'    =>  		$product_categoryEle2,								

										'product_name' 			           => $product_name,
										'product_alias' 			       => $product_alias,										
										'product_title' 		           => $product_title,
										'product_code'                     => $product_code,
									    'product_cost_price' 	           => $product_cost_price,	
										'product_sale_price' 	           => $product_sale_price,
										'product_call_for_fee' 	           => $product_call_for_fee,
										'product_offer_price' 	           => $product_offer_price,										
										'product_period'                   => $product_period,
										'product_origin'                   => $product_origin,
										'product_condition'                => $product_condition,
										'product_height'                   => $product_height,
										'product_width'                    => $product_width,
										'product_depth' 			       => $product_depth,
										'product_weight' 			       => $product_weight,
										'product_shipping_price' 		   => $product_shipping_price,
										'product_free_shipping' 		   => $product_free_shipping,
										'product_instock_qty' 			   => $product_instock_qty,
										'product_overview' 			       => $product_overview,
										'product_description' 	           => $product_description,
										'product_additional_information'   => $product_additional_information,
									    'product_status' 	           => $product_status,	
										'product_sold' 	                   => $product_sold,
										'product_featured' 	               => $product_featured,										
										'product_on_hold'                  => $product_on_hold,
										'product_new_arrival'              => $product_new_arrival,
										'product_coming_soon'              => $product_coming_soon,
										'product_priority'                 => $product_priority,
										'product_primary_image'            => $product_primary_image,
										'product_meta_title'               => $product_meta_title,
										'product_meta_description'         => $product_meta_description,
										'product_meta_keywords'            => $product_meta_keywords,
										'product_ad'                       => $product_ad,
										'product_status'			       =>'1',     					
										'product_created_date' 	           => $today
											 );
								$sub_array = stripslashes_deep($sub_array);
								
								 $product_id=$db->insert('products',$sub_array);
								 
								$product_secondary_images= explode(",",$product_secondary_image);
								if(count($product_secondary_image)>0){
								foreach($product_secondary_images as $product_secondary_image_th){
								if($product_secondary_image_th!='images/products/thumb'){
								$sub_array = array(
										'product_id' 			         => $product_id,
										'product_secondary_image' 		 => $product_secondary_image_th);
										
								 $sub_array = stripslashes_deep($sub_array);
								
								 $ids=$db->insert('product_secondary_images',$sub_array);
										}
										}
									}	
									

									//$product_category= explode(",",$product_category);

									
									if(count($product_category)>0){
								foreach($product_category as $product_category_id){
								$sub_array = array(
										'product_id' 			      => $product_id,
										'product_category_id' 		 => $product_category_id);
										
								 $sub_array = stripslashes_deep($sub_array);
								

								// $id=$db->insert('product_category',$sub_array);

										
										}
									}	
									
								header('Location:products.php');
 }
 
 function Statuschange($id,$newstatus,$start){
 global $db;
$db->update('products',"product_status= '".$newstatus."'","id=".$id);
header('Location:products.php?start='.$start);

	
}
function Statusdelete($id,$start){
 global $db;
$db->update('products',"product_status= '-1'","id=".$id);
header('Location:products.php?start='.$start);

	
}
function Productedit($id,$start){
 global $db,$product_category_ids;
 $produc= "SELECT *  FROM  products WHERE product_status!='-1' AND id='".$id."'"; 
 $produc= $db->getRow($produc);
 
 //$product_category_ids= "SELECT *  FROM  product_category WHERE  product_id='".$id."'"; 
 //$product_category_ids= $db->getRows($product_category_ids);
 //foreach($product_category_ids as $cat_id){
 //$catgory_id[]=$cat_id['product_category_id'];
 //}
// $product_category_ids=$catgory_id;

 return $produc;
}
function Productupdate($product_dealer,$product_categoryPrimary,$product_category,$product_name,$product_alias,$product_title,$product_code,$product_cost_price,$product_sale_price,$product_call_for_fee,$product_offer_price,$product_period,$product_origin,$product_condition,$product_height,$product_width,$product_depth,$product_weight,$product_shipping_price,$product_free_shipping,$product_instock_qty,$product_overview,$product_description,$product_additional_information,$product_status,$product_sold,$product_featured,$product_on_hold,$product_new_arrival,$product_coming_soon,$product_priority,$product_primary_image,$product_secondary_image,$product_meta_title,$product_meta_description,$product_meta_keywords,$product_ad,$start,$id){
global $db;
@$con.='';
$product_id=$id;
if($product_primary_image!=''){
@$con.=",product_primary_image='".$product_primary_image."'";
}


   mysql_query("DELETE FROM product_category WHERE product_id=".$id);
   
	$product_secondary_images= explode(",",$product_secondary_image);
								if(count($product_secondary_image)>0){
								foreach($product_secondary_images as $product_secondary_image_th){
								if($product_secondary_image_th!='images/products/thumb/'){
								$sub_array = array(
										'product_id' 			         => $product_id,
										'product_secondary_image' 		 => $product_secondary_image_th);
										
								 $sub_array = stripslashes_deep($sub_array);
								
								 $ids=$db->insert('product_secondary_images',$sub_array);
										}
										}
									}	
									
									$product_category= explode(",",$product_category);
									
									if(count($product_category)>0){
								foreach($product_category as $product_category_id){
								$sub_array = array(
										'product_id' 			      => $product_id,
										'product_category_id' 		 => $product_category_id);
										
								 $sub_array = stripslashes_deep($sub_array);
								
							//	 $id=$db->insert('product_category',$sub_array);
										
										}
									}	
									
									


$db->update('products',"product_dealer='".$product_dealer."',product_primary_category='".$product_categoryPrimary."',product_secodary_category='".$product_category."',product_name='".$product_name."',product_alias='".$product_alias."',product_title='".$product_title."',product_code='".$product_code."',product_cost_price='".$product_cost_price."',product_sale_price='".$product_sale_price."',product_call_for_fee='".$product_call_for_fee."',product_offer_price='".$product_offer_price."',product_period='".$product_period."',product_origin='".$product_origin."',product_condition='".$product_condition."',product_height='".$product_height."',product_width='".$product_width."',product_depth='".$product_depth."',product_weight='".$product_weight."',product_shipping_price='".$product_shipping_price."',product_free_shipping='".$product_free_shipping."',product_instock_qty='".$product_instock_qty."',product_overview='".$product_overview."',product_description='".$product_description."',product_additional_information='".$product_additional_information."',product_status='".$product_status."',product_sold='".$product_sold."',product_featured='".$product_featured."',product_on_hold='".$product_on_hold."',product_new_arrival='".$product_new_arrival."',product_coming_soon='".$product_coming_soon."',product_priority='".$product_priority."',product_meta_title='".$product_meta_title."',product_meta_description='".$product_meta_description."',product_meta_keywords='".$product_meta_keywords."',product_ad='".$product_ad."'$con","id=".$product_id);
header('Location:products.php?start='.$start);
}
function Statusfeatured($id,$start,$statusdealer){
 global $db;
$db->update('products',"product_featured='".$statusdealer."'","id=".$id);
header('Location:products.php?start='.$start);

	
}
function Statussold($id,$start,$statusdealer){
 global $db;
$db->update('products',"product_sold='".$statusdealer."'","id=".$id);
header('Location:products.php?start='.$start);

	
}

function StatusHoldFn($id,$start,$statusHold){
 global $db;
$db->update('products',"product_on_hold='".$statusHold."'","id=".$id);
header('Location:products.php?start='.$start);

	
}

?>