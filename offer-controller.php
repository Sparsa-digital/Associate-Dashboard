<?php
	class OfferController extends CommonController
	{
		function __construct()
		{
			parent::__construct();
			$this -> modelObj = new OfferModel();
			$this->getoffer = $this->getOffer();
			$this->gettotalpageno = $this->gettotalpageno();
		}
		
		function getOffer(){
		//$qry="SELECT o.* c.title FROM tbl_offers as o,tbl_category as c where o.categoryId==c.id and status!=2 order by cr_date desc LIMIT 0 , 20";
		  $qry="SELECT o.*,c.title FROM tbl_category c,tbl_offers o WHERE o.status != 2 and c.status!=2 and o.categoryId=c.Id  order by o.cr_date desc LIMIT 0 , 20";
		  return $result = $this->modelObj->fetchRows($qry);
		}
		
		function gettotalpageno(){
		  $qry = "SELECT o.*,c.title  FROM tbl_category c,tbl_offers o WHERE o.status != 2 and c.status!=2 and o.categoryId=c.Id";
		  return $result = $this->modelObj->numRows($qry);
		}
	}
	?>