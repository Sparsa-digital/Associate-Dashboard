<?php
	class OrderController extends CommonController
	{
		function __construct()
		{
			parent::__construct();
			$this -> modelObj = new OrderModel();
			$this->getorder = $this->getOrder();
			$this->gettotalpageno = $this->gettotalpageno();
		}
		
		function getOrder(){
		 
		// $qry="SELECT or.*,u.first_name,o.offersName FROM tbl_order or,tbl_user u, tbl_offers o WHERE or.userId=u.Id and or.offerId=o.Id and or.status=1 order by or.cr_date desc LIMIT 0 , 20";
		  $qry="SELECT * FROM tbl_order where status!=2 order by cr_date desc LIMIT 0 , 20";
		  return $result = $this->modelObj->fetchRows($qry);
		}
		
		function gettotalpageno(){
		  $qry = "SELECT * FROM tbl_order where status!=2";
		  return $result = $this->modelObj->numRows($qry);
		}
	}
	?>