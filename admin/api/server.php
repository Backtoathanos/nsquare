<?php 
	session_start();
	include_once("db.php");

	class nsquareAPI extends DATABASE{
		public function nsquare_set_category($catname, $token){
			$nsquare='';
			$nsquare_getqry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_category` WHERE `nsquare_category_title`='".mysqli_real_escape_string($this->nsquare_db, $catname)."'
			");
			if(mysqli_num_rows($nsquare_getqry)>0){
				$nsquare=$catname." is already in record.";
			}else{
				$nsquare_setqry=mysqli_query($this->nsquare_db, "
					INSERT INTO `nsquare_category`(
					    `nsquare_category_title`,
					    `nsquare_category_status`,
					    `nsquare_category_createdate`,
					    `nsquare_category_created_by`
					)
					VALUES(
						'".mysqli_real_escape_string($this->nsquare_db, $catname)."',
						'1',
						NOW(),
						'".mysqli_real_escape_string($this->nsquare_db, $token)."'
					)
				");
				if($nsquare_setqry){
					$nsquare="success";
				}else{
					$nsquare="not saved";
				}
			}
			return $nsquare;
		}

		// call city
		public function nsquare_get_city(){
			$nsquare=array();
			$nsquare_getqry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_city`
				ORDER BY `nsquare_city_title` ASC
			");
			if(mysqli_num_rows($nsquare_getqry)>0){
				foreach($nsquare_getqry as $nsquare_row){
					$nsquare[]=$nsquare_row;
				}
			}else{
			}
			return $nsquare;
		}

		//call state
		public function nsquare_get_state(){
			$nsquare=array();
			$nsquare_getqry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_state`
				ORDER BY `nsquare_state_title` ASC
			");
			if(mysqli_num_rows($nsquare_getqry)>0){
				foreach($nsquare_getqry as $nsquare_row){
					$nsquare[]=$nsquare_row;
				}
			}else{
			}
			return $nsquare;
		}

		// call category
		public function nsquare_get_category(){
			$nsquare=array();
			$nsquare_getqry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_category`
				INNER JOIN `nsquare_user` ON `nsquare_category_created_by`=`nsquare_user_id` 
				ORDER BY `nsquare_category_title` ASC
			");
			if(mysqli_num_rows($nsquare_getqry)>0){
				foreach($nsquare_getqry as $nsquare_row){
					$nsquare[]=$nsquare_row;
				}
			}else{
			}
			return $nsquare;
		}

		// delete category
		public function nsquare_delete_category($cat_id){
			$nsquare='';
			// $nsquare_getcatqry=mysqli_query($this->nsquare_db, "
			// 	SELECT * FROM `nsquare_category` WHERE `nsquare_category_id`='".mysqli_real_escape_string($this->nsquare_db, $cat_id)."'
			// ");
			$nsquare_getproqry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_product` WHERE `nsquare_product_cat_id`='".mysqli_real_escape_string($this->nsquare_db, $cat_id)."'
			");
			if(mysqli_num_rows($nsquare_getproqry)>0){
				$nsquare='This category is linked. Please remove this category from products first.';
			}else{
				$nsquare_deleteproqry=mysqli_query($this->nsquare_db, "
					DELETE FROM `nsquare_category` WHERE `nsquare_category_id`='".mysqli_real_escape_string($this->nsquare_db, $cat_id)."'
				");
				if($nsquare_deleteproqry){
					$nsquare='success';
				}else{
					$nsquare='error';
				}
			}
			return $nsquare;
		}

		// edit category name
		public function nsquare_edit_category($cat_id, $cat_name, $cat_status){
			$nsquare='';
			$nsquare_deleteproqry=mysqli_query($this->nsquare_db, "
				UPDATE `nsquare_category` 
				SET 
					`nsquare_category_title`='".mysqli_real_escape_string($this->nsquare_db, $cat_name)."', 
					`nsquare_category_status`='".mysqli_real_escape_string($this->nsquare_db, $cat_status)."' 
				WHERE 
					`nsquare_category_id`='".mysqli_real_escape_string($this->nsquare_db, $cat_id)."'
			");
			if($nsquare_deleteproqry){
				$nsquare='success';
			}else{
				$nsquare='error';
			}
			return $nsquare;
		}

		// call category list
		public function nsquare_call_category_list(){
			$nsquare=array();
			$nsquare_qry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_category` WHERE `nsquare_category_status`='1' ORDER BY `nsquare_category_title` ASC
			");
			foreach($nsquare_qry as $nsquare_row){
				$nsquare[]=$nsquare_row;
			}
			return $nsquare;
		}

		// call product
		public function nsquare_call_product(){
			$nsquare=array();
			$nsquare_qry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_product`
				LEFT JOIN `nsquare_user` 
				ON `nsquare_product_created_by`=`nsquare_user_id` 
				LEFT JOIN `nsquare_category` 
				ON `nsquare_product_cat_id`=`nsquare_category_id` 
				LEFT JOIN `nsquare_product_img` 
				ON `nsquare_product_landing_img_id`=`nsquare_product_img_id` 
				WHERE `nsquare_product_status`='1'
			");
			foreach($nsquare_qry as $nsquare_row){
				$nsquare[]=$nsquare_row;
			}
			return $nsquare;
		}

		// save product
		public function nsquare_save_product($token, $product_name, $product_image, $product_category, $product_color, $product_size, $product_type, $product_init_price){
			$nsquare='';
			$nsquare_get_qry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_product` WHERE `nsquare_product_title`='".mysqli_real_escape_string($this->nsquare_db, $product_name)."' AND `nsquare_product_cat_id`='".mysqli_real_escape_string($this->nsquare_db, $product_category)."'
			");
			if(mysqli_num_rows($nsquare_get_qry)>0){
				$nsquare = 'This product already in our record.';
			}else{
				$nsquare_set_qry=mysqli_query($this->nsquare_db, "
					INSERT INTO `nsquare_product`(
						`nsquare_product_title`,
						`nsquare_product_cat_id`,
						`nsquare_product_landing_img_id`,
						`nsquare_product_color`,
						`nsquare_product_size`,
						`nsquare_product_type`,
						`nsquare_product_init_price`,
						`nsquare_product_status`,
						`nsquare_product_createdate`,
						`nsquare_product_created_by`
					) VALUES (
						'".mysqli_real_escape_string($this->nsquare_db, $product_name)."',
						'".mysqli_real_escape_string($this->nsquare_db, $product_category)."',
						'".mysqli_real_escape_string($this->nsquare_db, $product_image)."',
						'".mysqli_real_escape_string($this->nsquare_db, $product_color)."',
						'".mysqli_real_escape_string($this->nsquare_db, $product_size)."',
						'".mysqli_real_escape_string($this->nsquare_db, $product_type)."',
						'".mysqli_real_escape_string($this->nsquare_db, $product_init_price)."',
						'1',
						NOW(),
						'".mysqli_real_escape_string($this->nsquare_db, $token)."'
					)
				");
				if($nsquare_set_qry){
					$nsquare_get_qry=mysqli_query($this->nsquare_db, "
						SELECT `nsquare_product_id` 
						FROM `nsquare_product` 
						WHERE `nsquare_product_created_by`='".mysqli_real_escape_string($this->nsquare_db, $token)."'
						ORDER BY `nsquare_product_id` DESC LIMIT 0,1
					");
					$pd_id=0;
					foreach($nsquare_get_qry as $row){
						$pd_id=$row['nsquare_product_id'];
					}
					$nsquare_set_imgqry=mysqli_query($this->nsquare_db, "
						INSERT INTO `nsquare_product_img`(
						    `nsquare_product_img_pd_id`,
						    `nsquare_product_img_title`,
						    `nsquare_product_img_status`,
						    `nsquare_product_img_createdate`,
						    `nsquare_product_img_createdby`
						)VALUES(
							'".mysqli_real_escape_string($this->nsquare_db, $pd_id)."',
							'".mysqli_real_escape_string($this->nsquare_db, $product_image)."',
							'1',
							NOW(),
							'".mysqli_real_escape_string($this->nsquare_db, $token)."'
						)
					");
					if($nsquare_set_imgqry){
						$nsquare_get_imgqry=mysqli_query($this->nsquare_db, "
							SELECT `nsquare_product_img_id` 
							FROM `nsquare_product_img` 
							WHERE `nsquare_product_img_pd_id`='".mysqli_real_escape_string($this->nsquare_db, $pd_id)."'
						");
						$pdimg_id=0;
						foreach($nsquare_get_imgqry as $nsquare_get_imgrow){
							$pdimg_id=$nsquare_get_imgrow['nsquare_product_img_id'];
						}

						$nsquare_update_qry=mysqli_query($this->nsquare_db, "
							UPDATE `nsquare_product` 
							SET `nsquare_product_landing_img_id`='".mysqli_real_escape_string($this->nsquare_db, $pdimg_id)."' 
							WHERE `nsquare_product_id`='".mysqli_real_escape_string($this->nsquare_db, $pd_id)."'
						");

						if($nsquare_update_qry){
							$nsquare='success';
						}else{
							$nsquare='error';
						}
					}else{
						$nsquare = 'error';
					}
				}else{
					$nsquare = 'error';
				}
			}
			return $nsquare;
		}

		// delete product
		public function nsquare_delete_product($product_id){
			$nsquare='';
			// $nsquare_getcatqry=mysqli_query($this->nsquare_db, "
			// 	SELECT * FROM `nsquare_category` WHERE `nsquare_category_id`='".mysqli_real_escape_string($this->nsquare_db, $cat_id)."'
			// ");
			$nsquare_getproqry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_purchase_items` WHERE `nsquare_purchase_items_product_id`='".mysqli_real_escape_string($this->nsquare_db, $product_id)."'
			");
			if(mysqli_num_rows($nsquare_getproqry)>0){
				$nsquare='This product is purchase. You can not remove this product.';
			}else{
				$nsquare_deleteproqry=mysqli_query($this->nsquare_db, "
					DELETE FROM `nsquare_product` WHERE `nsquare_product_id`='".mysqli_real_escape_string($this->nsquare_db, $product_id)."'
				");
				if($nsquare_deleteproqry){
					$nsquare='success';
				}else{
					$nsquare='error';
				}
			}
			return $nsquare;
		}		

		// call vendor
		public function nsquare_call_vendor(){
			$nsquare=array();
			$nsquare_qry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_vendor`
				INNER JOIN `nsquare_user` 
				ON `nsquare_vendor_created_by`=`nsquare_user_id` 
				INNER JOIN `nsquare_state` 
				ON `nsquare_vendor_state`=`nsquare_state_id`  
				INNER JOIN `nsquare_city` 
				ON `nsquare_vendor_city`=`nsquare_city_id` 
				WHERE `nsquare_vendor_status`='1'
			");
			foreach($nsquare_qry as $nsquare_row){
				$nsquare[]=$nsquare_row;
			}
			return $nsquare;
		}

		// save vendor
		public function nsquare_save_vendor($token, $name, $contact, $email, $address, $city, $state, $pincode){
			$nsquare='';
			$nsquare_get_qry=mysqli_query($this->nsquare_db, "
				SELECT `nsquare_vendor_id` FROM `nsquare_vendor` WHERE `nsquare_vendor_cont`='".mysqli_real_escape_string($this->nsquare_db, $contact)."' OR `nsquare_vendor_email`='".mysqli_real_escape_string($this->nsquare_db, $email)."'
			");
			if(mysqli_num_rows($nsquare_get_qry)>0){
				$nsquare = 'This vendor already in our record.';
			}else{
				$nsquare_set_qry=mysqli_query($this->nsquare_db, "
					INSERT INTO `nsquare_vendor`(
					    `nsquare_vendor_title`,
					    `nsquare_vendor_cont`,
					    `nsquare_vendor_email`,
					    `nsquare_vendor_address`,
					    `nsquare_vendor_state`,
					    `nsquare_vendor_city`,
					    `nsquare_vendor_pincode`,
					    `nsquare_vendor_status`,
					    `nsquare_vendor_createdate`,
					    `nsquare_vendor_created_by`
					) VALUES (
						'".mysqli_real_escape_string($this->nsquare_db, $name)."',
						'".mysqli_real_escape_string($this->nsquare_db, $contact)."',
						'".mysqli_real_escape_string($this->nsquare_db, $email)."',
						'".mysqli_real_escape_string($this->nsquare_db, $address)."',
						'".mysqli_real_escape_string($this->nsquare_db, $state)."',
						'".mysqli_real_escape_string($this->nsquare_db, $city)."',
						'".mysqli_real_escape_string($this->nsquare_db, $pincode)."',
						'1',
						NOW(),
						'".mysqli_real_escape_string($this->nsquare_db, $token)."'
					)
				");
				if($nsquare_set_qry){
					$nsquare = 'success';
				}else{
					$nsquare = 'error';
				}
			}
			return $nsquare;
		}

		// delete vendor
		public function nsquare_delete_vendor($vendor_id){
			$nsquare='';
			// $nsquare_getcatqry=mysqli_query($this->nsquare_db, "
			// 	SELECT * FROM `nsquare_category` WHERE `nsquare_category_id`='".mysqli_real_escape_string($this->nsquare_db, $cat_id)."'
			// ");
			$nsquare_getproqry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_purchase` WHERE `nsquare_purchase_vendor_id`='".mysqli_real_escape_string($this->nsquare_db, $vendor_id)."'
			");
			if(mysqli_num_rows($nsquare_getproqry)>0){
				$nsquare='This vendor is in purchase. You can not remove this vendor.';
			}else{
				$nsquare_deleteproqry=mysqli_query($this->nsquare_db, "
					DELETE FROM `nsquare_vendor` WHERE `nsquare_vendor_id`='".mysqli_real_escape_string($this->nsquare_db, $vendor_id)."'
				");
				if($nsquare_deleteproqry){
					$nsquare='success';
				}else{
					$nsquare='error';
				}
			}
			return $nsquare;
		}

		// call customer
		public function nsquare_call_customer(){
			$nsquare=array();
			$nsquare_qry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_customer`
				INNER JOIN `nsquare_state` 
				ON `nsquare_customer_state`=`nsquare_state_id`  
				INNER JOIN `nsquare_city` 
				ON `nsquare_customer_city`=`nsquare_city_id` 
				WHERE `nsquare_customer_status`='1'
			");
			foreach($nsquare_qry as $nsquare_row){
				$nsquare[]=$nsquare_row;
			}
			return $nsquare;
		}

		// save customer
		public function nsquare_save_customer($token, $name, $contact, $email, $address, $city, $state, $pincode){
			$nsquare='';
			$nsquare_get_qry=mysqli_query($this->nsquare_db, "
				SELECT `nsquare_customer_id` FROM `nsquare_customer` WHERE `nsquare_customer_cont`='".mysqli_real_escape_string($this->nsquare_db, $contact)."'
			");
			if(mysqli_num_rows($nsquare_get_qry)>0){
				$nsquare = 'This customer already in our record.';
			}else{
				$nsquare_set_qry=mysqli_query($this->nsquare_db, "
					INSERT INTO `nsquare_customer`(
					    `nsquare_customer_title`,
					    `nsquare_customer_cont`,
					    `nsquare_customer_email`,
					    `nsquare_customer_address`,
					    `nsquare_customer_state`,
					    `nsquare_customer_city`,
					    `nsquare_customer_pincode`,
					    `nsquare_customer_password`,
					    `nsquare_customer_status`,
					    `nsquare_customer_createdate`
					) VALUES (
						'".mysqli_real_escape_string($this->nsquare_db, $name)."',
						'".mysqli_real_escape_string($this->nsquare_db, $contact)."',
						'".mysqli_real_escape_string($this->nsquare_db, $email)."',
						'".mysqli_real_escape_string($this->nsquare_db, $address)."',
						'".mysqli_real_escape_string($this->nsquare_db, $state)."',
						'".mysqli_real_escape_string($this->nsquare_db, $city)."',
						'".mysqli_real_escape_string($this->nsquare_db, $pincode)."',
						'".mysqli_real_escape_string($this->nsquare_db, $contact)."',
						'1',
						NOW()
					)
				");
				if($nsquare_set_qry){
					$nsquare = 'success';
				}else{
					$nsquare = 'error';
				}
			}
			return $nsquare;
		}

		// delete customer
		public function nsquare_delete_customer($customer_id){
			$nsquare='';
			// $nsquare_getcatqry=mysqli_query($this->nsquare_db, "
			// 	SELECT * FROM `nsquare_category` WHERE `nsquare_category_id`='".mysqli_real_escape_string($this->nsquare_db, $cat_id)."'
			// ");
			$nsquare_getproqry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_sale` WHERE `nsquare_sale_customer_id`='".mysqli_real_escape_string($this->nsquare_db, $customer_id)."'
			");
			if(mysqli_num_rows($nsquare_getproqry)>0){
				$nsquare='This vendor is in purchase. You can not remove this vendor.';
			}else{
				$nsquare_deleteproqry=mysqli_query($this->nsquare_db, "
					DELETE FROM `nsquare_customer` WHERE `nsquare_customer_id`='".mysqli_real_escape_string($this->nsquare_db, $customer_id)."'
				");
				if($nsquare_deleteproqry){
					$nsquare='success';
				}else{
					$nsquare='error';
				}
			}
			return $nsquare;
		}

		// search product
		public function nsquare_search_product($pd_name){
			$nsquare=array();
			$nsquare_qry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_product`
				INNER JOIN `nsquare_category` 
				ON `nsquare_product_cat_id`=`nsquare_category_id` 
				INNER JOIN `nsquare_product_img` 
				ON `nsquare_product_landing_img_id`=`nsquare_product_img_id` 
				WHERE `nsquare_product_status`='1' AND 
				(
					`nsquare_product_title` REGEXP '".mysqli_real_escape_string($this->nsquare_db, $pd_name)."' OR 
					`nsquare_category_title` REGEXP '".mysqli_real_escape_string($this->nsquare_db, $pd_name)."'
				)
			");
			foreach($nsquare_qry as $nsquare_row){
				$nsquare[]=$nsquare_row;
			}
			return $nsquare;
		}

		// call purchase cart
		public function nsquare_call_purchase_cart(){
			$nsquare=array();
			foreach($_SESSION['purchase_cart_sess'] as $keys => $values){
				$nsquare_qry=mysqli_query($this->nsquare_db, "
					SELECT 
						`nsquare_product_title`,
						`nsquare_product_color`
					FROM `nsquare_product`
					WHERE `nsquare_product_status`='1' 
					AND `nsquare_product_id`='".mysqli_real_escape_string($this->nsquare_db, $values['product_id'])."'
					ORDER BY `nsquare_product_title` ASC
				");
				foreach($nsquare_qry as $nsquare_row){
					$nsquare[]=$nsquare_row;
				}
				$nsquare[$keys]['id']=$values['product_id'];
				$nsquare[$keys]['quantity']=number_format($values['product_qty'], 2);
				$nsquare[$keys]['price']=number_format($values['product_price'], 2);
			}
			return $nsquare;
		}

		// save purchase
		public function nsquare_save_purchase($token, $vendor_id, $recipet_no, $recipet_date, $termsandc){
			$nsquare='';
			$nsquare_set_qry=mysqli_query($this->nsquare_db, "
				INSERT INTO `nsquare_purchase`(
				    `nsquare_purchase_date`,
				    `nsquare_purchase_vendor_id`,
				    `nsquare_purchase_recepno`,
				    `nsquare_purchase_recepdate`,
				    `nsquare_purchase_tandc`,
				    `nsquare_purchase_status`,
				    `nsquare_purchase_createdate`,
				    `nsquare_purchase_createdby`
				) VALUES (
					NOW(),
					'".mysqli_real_escape_string($this->nsquare_db, $vendor_id)."',
					'".mysqli_real_escape_string($this->nsquare_db, $recipet_no)."',
					'".mysqli_real_escape_string($this->nsquare_db, $recipet_date)."',
					'".mysqli_real_escape_string($this->nsquare_db, $termsandc)."',
					'1',
					NOW(),
					'".mysqli_real_escape_string($this->nsquare_db, $token)."'
				)
			");
					
			if($nsquare_set_qry){
				$nsquare_get_qry=mysqli_query($this->nsquare_db, "
					SELECT `nsquare_purchase_id` FROM `nsquare_purchase` ORDER BY `nsquare_purchase_id` DESC LIMIT 0,1
				");
				$purchase_id='';
				foreach($nsquare_get_qry as $row){
					$purchase_id=$row['nsquare_purchase_id'];
				}
				foreach($_SESSION['purchase_cart_sess'] as $keys => $values){
					$nsquare_set_itemsqry=mysqli_query($this->nsquare_db, "
						INSERT INTO `nsquare_purchase_items`(
						    `nsquare_purchase_items_purchase_id`,
						    `nsquare_purchase_items_product_id`,
						    `nsquare_purchase_items_product_qty`,
						    `nsquare_purchase_items_product_price`,
						    `nsquare_purchase_items_product_createdate`,
						    `nsquare_purchase_items_product_status`,
						    `nsquare_purchase_items_product_createdby`
						) VALUES (
							'".mysqli_real_escape_string($this->nsquare_db, $purchase_id)."',
							'".mysqli_real_escape_string($this->nsquare_db, $values['product_id'])."',
							'".mysqli_real_escape_string($this->nsquare_db, $values['product_qty'])."',
							'".mysqli_real_escape_string($this->nsquare_db, $values['product_price'])."',
							NOW(),
							'1',
							'".mysqli_real_escape_string($this->nsquare_db, $token)."'
						)
					");
				}
				if($nsquare_set_itemsqry){
					unset($_SESSION['purchase_cart_sess']);
					$nsquare = 'success';
				}else{
					$nsquare = 'error';
				}
			}else{
				$nsquare = 'error';
			}
			return $nsquare;
		}

		// call purchase
		public function nsquare_call_purchase(){
			$nsquare=array();
			$nsquare_qry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_purchase`
				INNER JOIN `nsquare_vendor` 
				ON `nsquare_purchase_vendor_id`=`nsquare_vendor_id` 
				INNER JOIN `nsquare_user` 
				ON `nsquare_purchase_createdby`=`nsquare_user_id` 
				WHERE `nsquare_purchase_status`='1'
			");
			foreach($nsquare_qry as $keys => $nsquare_row){
				$nsquare[]=$nsquare_row;
				$nsquare_items_qry=mysqli_query($this->nsquare_db, "
					SELECT * FROM `nsquare_purchase_items`
					WHERE `nsquare_purchase_items_purchase_id`='".$nsquare_row['nsquare_purchase_id']."'
				");
				$total_items_amt=0;
				foreach($nsquare_items_qry as $nsquare_items_row){
					$total=$nsquare_items_row['nsquare_purchase_items_product_qty'] * $nsquare_items_row['nsquare_purchase_items_product_price'];
					$total_items_amt+=$total;
				}
				$nsquare[$keys]['purchase_amt']=number_format($total_items_amt, 2);
				$nsquare_paid_qry=mysqli_query($this->nsquare_db, "
					SELECT * FROM `nsquare_purchase_payment`
					WHERE `nsquare_purchase_payment_purchase_id`='".$nsquare_row['nsquare_purchase_id']."'
				");
				$total_paid_amt=0;
				foreach($nsquare_paid_qry as $nsquare_items_row){
					$total=$nsquare_items_row['nsquare_purchase_payment_amount'];
					$total_paid_amt+=$total;
				}
				$total_dues=$total_items_amt - $total_paid_amt;
				$nsquare[$keys]['paid_amt']=number_format($total_paid_amt, 2);
				$nsquare[$keys]['dues']=number_format($total_dues, 2);
			}
			return $nsquare;
		}

		// save purchase payment
		public function nsquare_save_purchase_payment($token, $purchase_id, $purchase_type, $purchase_amount){
			$nsquare='';
			$nsquare_items_qry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_purchase_items`
				WHERE `nsquare_purchase_items_purchase_id`='".mysqli_real_escape_string($this->nsquare_db, $purchase_id)."'
			");
			$total_items_amt=0;
			foreach($nsquare_items_qry as $nsquare_items_row){
				$total=$nsquare_items_row['nsquare_purchase_items_product_qty'] * $nsquare_items_row['nsquare_purchase_items_product_price'];
				$total_items_amt+=$total;
			}

			$nsquare_paid_qry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_purchase_payment`
				WHERE `nsquare_purchase_payment_purchase_id`='".mysqli_real_escape_string($this->nsquare_db, $purchase_id)."'
			");
			$total_paid_amt=0;
			foreach($nsquare_paid_qry as $nsquare_items_row){
				$total=$nsquare_items_row['nsquare_purchase_payment_amount'];
				$total_paid_amt+=$total;
			}
			$dues=$total_items_amt - $total_paid_amt;
			if($purchase_amount>$total_items_amt){
				$nsquare = 'Invalid amount.';
			}elseif($purchase_amount>$dues){
				$nsquare = 'Invalid amount.';
			}else{
				$nsquare_set_qry=mysqli_query($this->nsquare_db, "
					INSERT INTO `nsquare_purchase_payment`(
					    `nsquare_purchase_payment_purchase_id`,
					    `nsquare_purchase_payment_amount`,
					    `nsquare_purchase_payment_type`,
					    `nsquare_purchase_payment_status`,
					    `nsquare_purchase_payment_createdate`,
					    `nsquare_purchase_payment_createdby`
					) VALUES (
						'".mysqli_real_escape_string($this->nsquare_db, $purchase_id)."',
						'".mysqli_real_escape_string($this->nsquare_db, $purchase_amount)."',
						'".mysqli_real_escape_string($this->nsquare_db, $purchase_type)."',
						'1',
						NOW(),
						'".mysqli_real_escape_string($this->nsquare_db, $token)."'
					)
				");
				if($nsquare_set_qry){
					$nsquare = 'success';
				}else{
					$nsquare = 'error';
				}
			}
			return $nsquare;
		} 

		// delete purchase 
		public function nsquare_delete_purchase($purchase_id){
			$nsquare='';
			$nsquare_deleteproqry=mysqli_query($this->nsquare_db, "
				DELETE FROM `nsquare_purchase_payment` WHERE `nsquare_purchase_payment_purchase_id`='".mysqli_real_escape_string($this->nsquare_db, $purchase_id)."'
			");$nsquare_deleteproqry=mysqli_query($this->nsquare_db, "
				DELETE FROM `nsquare_purchase_items` WHERE `nsquare_purchase_items_purchase_id`='".mysqli_real_escape_string($this->nsquare_db, $purchase_id)."'
			");
			$nsquare_deleteproqry=mysqli_query($this->nsquare_db, "
				DELETE FROM `nsquare_purchase` WHERE `nsquare_purchase_id`='".mysqli_real_escape_string($this->nsquare_db, $purchase_id)."'
			");
			if($nsquare_deleteproqry){
				$nsquare='success';
			}else{
				$nsquare='error';
			}
			return $nsquare;
		}

		// call purchase
		public function nsquare_call_purchase_rec($purchase_id){
			$nsquare=array();
			$nsquare_qry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_purchase_items`
				INNER JOIN `nsquare_product`
				ON `nsquare_purchase_items_product_id`=`nsquare_product_id`
				WHERE `nsquare_purchase_items_purchase_id`='".mysqli_real_escape_string($this->nsquare_db, $purchase_id)."'
			");
			foreach($nsquare_qry as $keys => $nsquare_row){
				$nsquare[]=$nsquare_row;
			}
			return $nsquare;
		}

		// call sale cart
		public function nsquare_call_sale_cart(){
			$nsquare=array();
			foreach($_SESSION['sale_cart_sess'] as $keys => $values){
				$nsquare_qry=mysqli_query($this->nsquare_db, "
					SELECT 
						`nsquare_product_title`,
						`nsquare_product_color`
					FROM `nsquare_product`
					WHERE `nsquare_product_status`='1' 
					AND `nsquare_product_id`='".mysqli_real_escape_string($this->nsquare_db, $values['product_id'])."'
					ORDER BY `nsquare_product_title` ASC
				");
				foreach($nsquare_qry as $nsquare_row){
					$nsquare[]=$nsquare_row;
				}
				$nsquare[$keys]['id']=$values['product_id'];
				$nsquare[$keys]['quantity']=number_format($values['product_qty'], 2);
				$nsquare[$keys]['price']=number_format($values['product_price'], 2);
			}
			return $nsquare;
		}

		// save sale
		public function nsquare_save_sale($token, $customer_id, $termsandc){
			$nsquare='';
			$nsquare_set_qry=mysqli_query($this->nsquare_db, "
				INSERT INTO `nsquare_sale`(
				    `nsquare_sale_date`,
				    `nsquare_sale_customer_id`,
				    `nsquare_sale_ordertype`,
				    `nsquare_sale_status_orderid`,
				    `nsquare_sale_tandc`,
				    `nsquare_sale_status`,
				    `nsquare_sale_createdate`,
				    `nsquare_sale_createdby`
				) VALUES (
					NOW(),
					'".mysqli_real_escape_string($this->nsquare_db, $customer_id)."',
					'Offline',
					'0',
					'".mysqli_real_escape_string($this->nsquare_db, $termsandc)."',
					'1',
					NOW(),
					'".mysqli_real_escape_string($this->nsquare_db, $token)."'
				)
			");
					
			if($nsquare_set_qry){
				$nsquare_get_qry=mysqli_query($this->nsquare_db, "
					SELECT `nsquare_sale_id` FROM `nsquare_sale` ORDER BY `nsquare_sale_id` DESC LIMIT 0,1
				");
				$sale_id=0;
				foreach($nsquare_get_qry as $row){
					$sale_id=$row['nsquare_sale_id'];
				}
				foreach($_SESSION['sale_cart_sess'] as $keys => $values){
					$nsquare_get_pprateqry=mysqli_query($this->nsquare_db, "
						SELECT `nsquare_product_init_price` FROM `nsquare_product` WHERE `nsquare_product_id`='".mysqli_real_escape_string($this->nsquare_db, $values['product_id'])."'
					");
					$pro_purchase_price=0;
					foreach($nsquare_get_pprateqry as $row){
						$pro_purchase_price=$row['nsquare_product_init_price'];
					}

					$nsquare_set_itemsqry=mysqli_query($this->nsquare_db, "
						INSERT INTO `nsquare_sale_items`(
						    `nsquare_sale_items_sale_id`,
						    `nsquare_sale_items_product_id`,
						    `nsquare_sale_items_product_qty`,
						    `nsquare_sale_items_product_purchase_price`,
						    `nsquare_sale_items_product_price`,
						    `nsquare_sale_items_product_createdate`,
						    `nsquare_sale_items_product_status`,
						    `nsquare_sale_items_product_createdby`
						) VALUES (
							'".mysqli_real_escape_string($this->nsquare_db, $sale_id)."',
							'".mysqli_real_escape_string($this->nsquare_db, $values['product_id'])."',
							'".mysqli_real_escape_string($this->nsquare_db, $values['product_qty'])."',
							'".mysqli_real_escape_string($this->nsquare_db, $pro_purchase_price)."',
							'".mysqli_real_escape_string($this->nsquare_db, $values['product_price'])."',
							NOW(),
							'1',
							'".mysqli_real_escape_string($this->nsquare_db, $token)."'
						)
					");
				}
				if($nsquare_set_itemsqry){
					unset($_SESSION['sale_cart_sess']);
					$nsquare = 'success';
				}else{
					$nsquare = 'error';
				}
			}else{
				$nsquare = 'error';
			}
			return $nsquare;
		}

		// call sale
		public function nsquare_call_sale(){
			$nsquare=array();
			$nsquare_qry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_sale`
				INNER JOIN `nsquare_customer` 
				ON `nsquare_sale_customer_id`=`nsquare_customer_id` 
				INNER JOIN `nsquare_user` 
				ON `nsquare_sale_createdby`=`nsquare_user_id` 
				WHERE `nsquare_sale_status`='1'
			");
			foreach($nsquare_qry as $keys => $nsquare_row){
				$nsquare[]=$nsquare_row;
				$nsquare_items_qry=mysqli_query($this->nsquare_db, "
					SELECT * FROM `nsquare_sale_items`
					WHERE `nsquare_sale_items_sale_id`='".$nsquare_row['nsquare_sale_id']."'
				");
				$total_items_amt=0;
				foreach($nsquare_items_qry as $nsquare_items_row){
					$total=$nsquare_items_row['nsquare_sale_items_product_qty'] * $nsquare_items_row['nsquare_sale_items_product_price'];
					$total_items_amt+=$total;
				}
				$nsquare[$keys]['purchase_amt']=number_format($total_items_amt, 2);
				$nsquare_paid_qry=mysqli_query($this->nsquare_db, "
					SELECT * FROM `nsquare_sale_payment`
					WHERE `nsquare_sale_payment_sale_id`='".$nsquare_row['nsquare_sale_id']."'
				");
				$total_paid_amt=0;
				foreach($nsquare_paid_qry as $nsquare_items_row){
					$total=$nsquare_items_row['nsquare_sale_payment_amount'];
					$total_paid_amt+=$total;
				}
				$total_dues=$total_items_amt - $total_paid_amt;
				$nsquare[$keys]['paid_amt']=number_format($total_paid_amt, 2);
				$nsquare[$keys]['dues']=number_format($total_dues, 2);
			}
			return $nsquare;
		}

		// save sale payment
		public function nsquare_save_sale_payment($token, $sale_id, $sale_type, $sale_amount){
			$nsquare='';
			$nsquare_items_qry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_sale_items`
				WHERE `nsquare_sale_items_sale_id`='".mysqli_real_escape_string($this->nsquare_db, $sale_id)."'
			");
			$total_items_amt=0;
			foreach($nsquare_items_qry as $nsquare_items_row){
				$total=$nsquare_items_row['nsquare_sale_items_product_qty'] * $nsquare_items_row['nsquare_sale_items_product_price'];
				$total_items_amt+=$total;
			}

			$nsquare_paid_qry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_sale_payment`
				WHERE `nsquare_sale_payment_sale_id`='".mysqli_real_escape_string($this->nsquare_db, $sale_id)."'
			");
			$total_paid_amt=0;
			foreach($nsquare_paid_qry as $nsquare_items_row){
				$total=$nsquare_items_row['nsquare_sale_payment_amount'];
				$total_paid_amt+=$total;
			}
			$dues=$total_items_amt - $total_paid_amt;
			if($sale_amount>$total_items_amt){
				$nsquare = 'Invalid amount.';
			}elseif($sale_amount>$dues){
				$nsquare = 'Invalid amount.';
			}else{
				$nsquare_set_qry=mysqli_query($this->nsquare_db, "
					INSERT INTO `nsquare_sale_payment`(
					    `nsquare_sale_payment_sale_id`,
					    `nsquare_sale_payment_amount`,
					    `nsquare_sale_payment_type`,
					    `nsquare_sale_payment_status`,
					    `nsquare_sale_payment_createdate`,
					    `nsquare_sale_payment_createdby`
					) VALUES (
						'".mysqli_real_escape_string($this->nsquare_db, $sale_id)."',
						'".mysqli_real_escape_string($this->nsquare_db, $sale_amount)."',
						'".mysqli_real_escape_string($this->nsquare_db, $sale_type)."',
						'1',
						NOW(),
						'".mysqli_real_escape_string($this->nsquare_db, $token)."'
					)
				");
				if($nsquare_set_qry){
					$nsquare = 'success';
				}else{
					$nsquare = 'error';
				}
			}
			return $nsquare;
		} 

		// delete sale 
		public function nsquare_delete_sale($sale_id){
			$nsquare='';
			$nsquare_deleteproqry=mysqli_query($this->nsquare_db, "
				DELETE FROM `nsquare_sale_payment` WHERE `nsquare_sale_payment_sale_id`='".mysqli_real_escape_string($this->nsquare_db, $sale_id)."'
			");$nsquare_deleteproqry=mysqli_query($this->nsquare_db, "
				DELETE FROM `nsquare_sale_items` WHERE `nsquare_sale_items_sale_id`='".mysqli_real_escape_string($this->nsquare_db, $sale_id)."'
			");
			$nsquare_deleteproqry=mysqli_query($this->nsquare_db, "
				DELETE FROM `nsquare_sale` WHERE `nsquare_sale_id`='".mysqli_real_escape_string($this->nsquare_db, $sale_id)."'
			");
			if($nsquare_deleteproqry){
				$nsquare='success';
			}else{
				$nsquare='error';
			}
			return $nsquare;
		}

		// call sale
		public function nsquare_call_sale_rec($sale_id){
			$nsquare=array();
			$nsquare_qry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_sale_items`
				INNER JOIN `nsquare_product`
				ON `nsquare_sale_items_product_id`=`nsquare_product_id`
				WHERE `nsquare_sale_items_sale_id`='".mysqli_real_escape_string($this->nsquare_db, $sale_id)."'
			");
			foreach($nsquare_qry as $keys => $nsquare_row){
				$nsquare[]=$nsquare_row;
			}
			return $nsquare;
		}

		// call inventory
		public function nsquare_call_inventory(){
			$nsquare=array();
			$nsquare_qry=mysqli_query($this->nsquare_db, "
				SELECT *
				FROM `nsquare_product`
				WHERE `nsquare_product_status`='1' 
			");
			foreach($nsquare_qry as $key => $row){
				$nsquare[]=$row;
				$purchase_qty=0;
				$nsquare_p_qry=mysqli_query($this->nsquare_db, "SELECT `nsquare_purchase_items_product_qty` FROM `nsquare_purchase_items` WHERE `nsquare_purchase_items_product_id`='".$row['nsquare_product_id']."'");
				foreach($nsquare_p_qry as $nsquare_p_row){
					$purchase_qty+=$nsquare_p_row['nsquare_purchase_items_product_qty'];
				}
				$nsquare[$key]['purchase_qty']=$purchase_qty;

				$sold_qty=0;
				$nsquare_s_qry=mysqli_query($this->nsquare_db, "SELECT `nsquare_sale_items_product_qty` FROM `nsquare_sale_items` WHERE `nsquare_sale_items_product_id`='".$row['nsquare_product_id']."'");
				foreach($nsquare_s_qry as $nsquare_s_row){
					$sold_qty+=$nsquare_s_row['nsquare_sale_items_product_qty'];
				}
				$nsquare[$key]['sold_qty']=$sold_qty;
				$nsquare[$key]['stock']=$purchase_qty - $sold_qty;
			}
			return $nsquare;
		}

		public function nsquare_call_summary(){
			$nsquare=array();
			$nsquare_purchaseqry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_purchase_items`
			");
			$purchase_amt=0;
			foreach($nsquare_purchaseqry as $nsquare_purchaserow){
				$purchase_amt+=$nsquare_purchaserow['nsquare_purchase_items_product_qty'] * $nsquare_purchaserow['nsquare_purchase_items_product_price'];
			}

			$nsquare_saleqry=mysqli_query($this->nsquare_db, "
				SELECT * FROM `nsquare_sale_items`
			");
			$sale_amt=0;
			$sale_purchase_amt=0;
			foreach($nsquare_saleqry as $nsquare_salerow){
				$sale_amt+=$nsquare_salerow['nsquare_sale_items_product_qty'] * $nsquare_salerow['nsquare_sale_items_product_price'];
				$sale_purchase_amt+=$nsquare_salerow['nsquare_sale_items_product_qty'] * $nsquare_salerow['nsquare_sale_items_product_purchase_price'];
			}
			$profit=$sale_amt - $sale_purchase_amt;
			$nsquare['purchase_amt']=number_format($purchase_amt, 2);
			$nsquare['sale_amt']=number_format($sale_amt, 2);
			$nsquare['purchase_sale_amt']=number_format($sale_purchase_amt, 2);
			$nsquare['profit']=number_format($profit, 2);
			return $nsquare;
		}
	}

	// call city & status 
	if(isset($_POST['call_city_status'])){
		$out=array();
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$obj2_nsquare=new nsquareAPI();
			$city=$obj_nsquare->nsquare_get_city();
			$state=$obj_nsquare->nsquare_get_state();
			$out=array(
				'city' => $city,
				'state' => $state
			);
		}
		echo json_encode($out);
	}

	// set category object
	if(isset($_POST['set_category'])){
		$out='';
		$token = $_POST['Token'];
		$catname = $_POST['cat_name'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_set_category($catname, $token);
		}
		echo json_encode($out);
		// echo $out;
	}

	// get category object
	if(isset($_POST['get_category'])){
		$out='';
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_get_category();
		}
		echo json_encode($out);
	}

	// delete category object
	if(isset($_POST['delete_category'])){
		$out='';
		$cat_id = $_POST['cat_id'];
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_delete_category($cat_id);
		}
		echo json_encode($out);
		// echo $out;
	}

	// edit category object
	if(isset($_POST['edit_category'])){
		$out='';
		$cat_id = $_POST['cat_id'];
		$cat_name = $_POST['cat_name'];
		$cat_status = $_POST['cat_status'];
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_edit_category($cat_id, $cat_name, $cat_status);
		}
		echo json_encode($out);
		// echo $out;
	}

	/*--------------------------------Object Product -----------------------------------------*/
	// call category
	if(isset($_POST['call_category_list'])){
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_call_category_list();
		}
		echo json_encode($out);
		// echo $out;
	}

	// call product
	if(isset($_POST['call_product'])){
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_call_product();
		}
		echo json_encode($out);
		// echo $out;
	}

	// save product 
	if(isset($_POST['set_product'])){
		$out='';
		$product_name = $_POST['product-name'];
		$product_category = $_POST['product-category'];
		$product_color = $_POST['product-color'];
		$product_size = $_POST['product-size'];
		$product_type = $_POST['product-type'];
		$product_init_price = $_POST['product-init-price'];

		$product_image=$_FILES['product-image']['name'];
		$product_imagetmpname=$_FILES['product-image']['tmp_name'];

		$token = $_POST['set_product'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_save_product($token, $product_name, $product_image, $product_category, $product_color, $product_size, $product_type, $product_init_price);
			if($out == "success"){	
				$assemble=move_uploaded_file($product_imagetmpname, "../product_img/".$product_image);
				if($assemble){
					$out= "success";
				}else{
					$out= "Product Uploaded Successfully but Except Images!!!";
				}
			}else{
				echo $out;
			}
		}
		// echo json_encode($out);
		echo $out;
	}

	// delete product
	if(isset($_POST['delete_product'])){
		$out='';
		$product_id = $_POST['product_id'];
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_delete_product($product_id);
		}
		echo json_encode($out);
		// echo $out;
	}

	/*--------------------------------Object vendor -----------------------------------------*/
	// call vendor
	if(isset($_POST['call_vendor'])){
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_call_vendor();
		}
		echo json_encode($out);
		// echo $out;
	}

	// set vendor
	if(isset($_POST['set_vendor'])){
		$name=$_POST['name'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$pincode=$_POST['pincode'];

		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_save_vendor($token, $name, $contact, $email, $address, $city, $state, $pincode);

		}
		// echo json_encode($out);
		echo $out;
	}

	// delete vendor
	if(isset($_POST['delete_vendor'])){
		$out='';
		$token = $_POST['Token'];
		$vendor_id = $_POST['vendor_id'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_delete_vendor($vendor_id);
		}
		echo json_encode($out);
		// echo $out;
	}

	/*--------------------------------Object customer -----------------------------------------*/
	// call customer	
	if(isset($_POST['call_customer'])){
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_call_customer();
		}
		echo json_encode($out);
		// echo $out;
	}

	// set customer
	if(isset($_POST['set_customer'])){
		$out='';
		$name=$_POST['name'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$pincode=$_POST['pincode'];

		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_save_customer($token, $name, $contact, $email, $address, $city, $state, $pincode);

		}
		// echo json_encode($out);
		echo $out;
	}

	// delete customer
	if(isset($_POST['delete_customer'])){
		$out='';
		$token = $_POST['Token'];
		$customer_id = $_POST['customer_id'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_delete_customer($customer_id);
		}
		echo json_encode($out);
		// echo $out;
	}

	/*--------------------------------Object purchase -----------------------------------------*/
	// search product
	if(isset($_POST['search_product'])){
		$out='';
		$token = $_POST['Token'];
		$pd_name=$_POST['pd_name'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_search_product($pd_name);
		}
		echo json_encode($out);
		// echo $out;
	}

	// add product to purchase cart
	if(isset($_POST['add_pro_purchase_cart'])){
		$out='';
		$token = $_POST['Token'];
		$product_id=$_POST['product_id'];
		$product_qty=$_POST['product_qty'];
		$product_price=$_POST['product_price'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			if(isset($_SESSION["purchase_cart_sess"])) {  
				$is_available = 0;  
				foreach($_SESSION["purchase_cart_sess"] as $keys => $values) {  
					if($_SESSION["purchase_cart_sess"][$keys]['product_id'] == $_POST["product_id"]) {  
						$is_available++;  
						$_SESSION["purchase_cart_sess"][$keys]['product_qty'] = $_SESSION["purchase_cart_sess"][$keys]['product_qty'] + $_POST["product_qty"];  
						$out="Item Cart Quantity Increased!!!!!!";
					}  
				}  
			    if($is_available < 1) {  
			    	$item_array = array(  
			    	     'product_id'             	=>     $_POST["product_id"],  
			    	     'product_qty'           	=>     $_POST["product_qty"],  
			    	     'product_price'           	=>     $_POST["product_price"]
			    	);  
			    	$_SESSION["purchase_cart_sess"][] = $item_array;  
			    	$out="Item Added to Purchase Cart!!!";
			    }  
			}else{  
				$item_array = array(  
				    'product_id'             	=>     $_POST["product_id"],  
			    	'product_qty'           	=>     $_POST["product_qty"],  
			    	'product_price'          	=>     $_POST["product_price"]
				);   
				$_SESSION["purchase_cart_sess"][] = $item_array;  
				$out="Purchase Cart Created & Item Added to Purchase Cart!!!";
			}  
		}
		echo json_encode($out);
		// echo $out;
	}

	// call load product purchase cart
	if(isset($_POST['load_purchase_product'])){
		$out='';
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}elseif(empty($_SESSION["purchase_cart_sess"])){
			$out='empty';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_call_purchase_cart();
		}
		echo json_encode($out);
		// echo $out;
	}

	// delete product from purchase cart
	if(isset($_POST['delete_pro_purchase_cart'])){ 
		foreach($_SESSION["purchase_cart_sess"] as $keys => $values){  
			if($values["product_id"] == $_POST["product_id"]){  
				unset($_SESSION["purchase_cart_sess"][$keys]);
			}  
		}  
		$out="Product Removed!!!"; 
		echo json_encode($out); 
	}

	// save purchase
	if(isset($_POST['add_purchase_save'])){
		$vendor_id=$_POST['vendor_id'];
		$recipet_no=$_POST['recipet_no'];
		$recipet_date=$_POST['recipet_date'];
		$termsandc=$_POST['termsandc'];

		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}elseif(empty($_SESSION['purchase_cart_sess'])){
			$out='empty';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_save_purchase($token, $vendor_id, $recipet_no, $recipet_date, $termsandc);

		}
		echo json_encode($out);
		// echo $out;
	}
	
	// call purchase
	if(isset($_POST['load_purchase'])){
		$out='';

		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_call_purchase();

		}
		echo json_encode($out);
		// echo $out;
	}

	// purchase payment save
	if(isset($_POST['set_purchase_payment'])){
		$out='';
		$purchase_id=$_POST['purchase_id'];
		$purchase_type=$_POST['purchase_type'];
		$purchase_amount=$_POST['purchase_amount'];

		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_save_purchase_payment($token, $purchase_id, $purchase_type, $purchase_amount);

		}
		echo json_encode($out);
		// echo $out;
	}

	// delete purchase
	if(isset($_POST['delete_purchase'])){
		$out='';
		$token = $_POST['Token'];
		$purchase_id = $_POST['purchase_id'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_delete_purchase($purchase_id);
		}
		echo json_encode($out);
		// echo $out;
	}

	// call purchase
	if(isset($_POST['call_purchase'])){
		$out='';
		$purchase_id=$_POST['purchase_id'];
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_call_purchase_rec($purchase_id);

		}
		echo json_encode($out);
		// echo $out;
	}
	
	/*--------------------------------Object sale -----------------------------------------*/
	// call load product purchase cart
	if(isset($_POST['load_sale_product'])){
		$out='';
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}elseif(empty($_SESSION["sale_cart_sess"])){
			$out='empty';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_call_sale_cart();
		}
		echo json_encode($out);
		// echo $out;
	}

	// add product to purchase cart
	if(isset($_POST['add_pro_sale_cart'])){
		$out='';
		$token = $_POST['Token'];
		$product_id=$_POST['product_id'];
		$product_qty=$_POST['product_qty'];
		$product_price=$_POST['product_price'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			if(isset($_SESSION["sale_cart_sess"])) {  
				$is_available = 0;  
				foreach($_SESSION["sale_cart_sess"] as $keys => $values) {  
					if($_SESSION["sale_cart_sess"][$keys]['product_id'] == $_POST["product_id"]) {  
						$is_available++;  
						$_SESSION["sale_cart_sess"][$keys]['product_qty'] = $_SESSION["sale_cart_sess"][$keys]['product_qty'] + $_POST["product_qty"];  
						$out="Item Cart Quantity Increased!!!!!!";
					}  
				}  
			    if($is_available < 1) {  
			    	$item_array = array(  
			    	     'product_id'             	=>     $_POST["product_id"],  
			    	     'product_qty'           	=>     $_POST["product_qty"],  
			    	     'product_price'           	=>     $_POST["product_price"]
			    	);  
			    	$_SESSION["sale_cart_sess"][] = $item_array;  
			    	$out="Item Added to sale Cart!!!";
			    }  
			}else{  
				$item_array = array(  
				    'product_id'             	=>     $_POST["product_id"],  
			    	'product_qty'           	=>     $_POST["product_qty"],  
			    	'product_price'          	=>     $_POST["product_price"]
				);   
				$_SESSION["sale_cart_sess"][] = $item_array;  
				$out="Sale Cart Created & Item Added to sale Cart!!!";
			}  
		}
		echo json_encode($out);
		// echo $out;
	}

	// delete product from purchase cart
	if(isset($_POST['delete_pro_sale_cart'])){ 
		foreach($_SESSION["sale_cart_sess"] as $keys => $values){  
			if($values["product_id"] == $_POST["product_id"]){  
				unset($_SESSION["sale_cart_sess"][$keys]);
			}  
		}  
		$out="Product Removed!!!"; 
		echo json_encode($out); 
	}

	// save sale
	if(isset($_POST['add_sale_save'])){
		$customer_id=$_POST['customer_id'];
		$termsandc=$_POST['termsandc'];

		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}elseif(empty($_SESSION['sale_cart_sess'])){
			$out='empty';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_save_sale($token, $customer_id, $termsandc);

		}
		echo json_encode($out);
		// echo $out;
	}

	// call purchase
	if(isset($_POST['load_sale'])){
		$out='';

		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_call_sale();

		}
		echo json_encode($out);
		// echo $out;
	}
	
	// sale payment save
	if(isset($_POST['set_sale_payment'])){
		$out='';
		$sale_id=$_POST['sale_id'];
		$sale_type=$_POST['sale_type'];
		$sale_amount=$_POST['sale_amount'];

		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_save_sale_payment($token, $sale_id, $sale_type, $sale_amount);

		}
		echo json_encode($out);
		// echo $out;
	}

	// delete purchase
	if(isset($_POST['delete_sale'])){
		$out='';
		$token = $_POST['Token'];
		$sale_id = $_POST['sale_id'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_delete_sale($sale_id);
		}
		echo json_encode($out);
		// echo $out;
	}

	// call purchase
	if(isset($_POST['call_sale'])){
		$out='';
		$sale_id=$_POST['sale_id'];
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_call_sale_rec($sale_id);

		}
		echo json_encode($out);
		// echo $out;
	}

	/*--------------------------------Object inventory -----------------------------------------*/
	// call inventory
	if(isset($_POST['get_inventory'])){
		$out='';
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_call_inventory();

		}
		echo json_encode($out);
		// echo $out;
	}

	/*--------------------------------Object dashboard -----------------------------------------*/
	// call inventory
	if(isset($_POST['get_summary'])){
		$out='';
		$token = $_POST['Token'];
		if(empty($token)){
			$out='InvalidToken';
		}else{
			$obj_nsquare=new nsquareAPI();
			$out=$obj_nsquare->nsquare_call_summary();

		}
		echo json_encode($out);
		// echo $out;
	}


?>