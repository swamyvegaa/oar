<?php 
function Statusdelete($id,$start){
 global $db;
$db->update('products',"product_status= '-1'","id=".$id);
header('Location:products.php?start='.$start);

	
}
function Statusfeatured($id,$start,$statusdealer){
 global $db;
$db->update('products',"product_featured='".$statusdealer."'","id=".$id);
header('Location:dealers.php?start='.$start);

	
}

function Productupdate($product_dealer,$product_category,$product_name,$product_alias,$product_title,$product_code,$product_cost_price,$product_sale_price,$product_call_for_fee,$product_offer_price,$product_period,$product_origin,$product_condition,$product_height,$product_width,$product_depth,$product_weight,$product_shipping_price,$product_free_shipping,$product_instock_qty,$product_overview,$product_description,$product_additional_information,$product_available,$product_sold,$product_featured,$product_on_sale,$product_new_arrival,$product_coming_soon,$product_priority,$product_primary_image,$product_secondary_image,$product_meta_title,$product_meta_description,$product_meta_keywords,$product_ad,$start,$id){
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
								if($product_secondary_image_th!='/images/products/thumb/'){
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
								
								 $id=$db->insert('product_category',$sub_array);
										
										}
									}	
									
									


$db->update('products',"product_dealer='".$product_dealer."',product_name='".$product_name."',product_alias='".$product_alias."',product_title='".$product_title."',product_code='".$product_code."',product_cost_price='".$product_cost_price."',product_sale_price='".$product_sale_price."',product_call_for_fee='".$product_call_for_fee."',product_offer_price='".$product_offer_price."',product_period='".$product_period."',product_origin='".$product_origin."',product_condition='".$product_condition."',product_height='".$product_height."',product_width='".$product_width."',product_depth='".$product_depth."',product_weight='".$product_weight."',product_shipping_price='".$product_shipping_price."',product_free_shipping='".$product_free_shipping."',product_instock_qty='".$product_instock_qty."',product_overview='".$product_overview."',product_description='".$product_description."',product_additional_information='".$product_additional_information."',product_available='".$product_available."',product_sold='".$product_sold."',product_featured='".$product_featured."',product_on_sale='".$product_on_sale."',product_new_arrival='".$product_new_arrival."',product_coming_soon='".$product_coming_soon."',product_priority='".$product_priority."',product_meta_title='".$product_meta_title."',product_meta_description='".$product_meta_description."',product_meta_keywords='".$product_meta_keywords."',product_ad='".$product_ad."'$con","id=".$product_id);
header('Location:products.php?start='.$start);
}


?>