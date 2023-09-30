<?php 
class Cart 
{
	function cart_content_pay()
	{
		if(isset($_SESSION['cart'])) 
		{
			$cart=$_SESSION['cart'];
			return $cart;
		}
		return NULL;
	}
	function cart_content()
	{
		if(isset($_SESSION['cart'])) 
		{
			$cart=$_SESSION['cart'];
			return $cart;
		}
		return NULL;
	}
	function cart_insert($data)
	{
		if (!isset($_SESSION['cart'])) 
		{
			$row_cart[]=$data;
			$_SESSION['cart']=$row_cart;
		}
		else
		{
			$cart=$this->cart_content();
			if ($this->cart_check_product($data)==true) 
			{
				$cart=$this->cart_update_qty($cart,$data);
			}
			else
			{
			
				$cart[]=$data;
			}
			$_SESSION['cart']=$cart;
		}
	}
	function cart_check_product($data)
	{
		$cart=$this->cart_content();
		foreach ($cart as $item) 
		{
			if ($item['id']==$data['id']) 
			{
				return true;
			}
		}
		return false;
	}
	function cart_update_qty($cart,$data)
	{
		foreach ($cart as $key=>$item) 
		{
			if ($item['id']==$data['id']) 
			{
				$cart[$key]['qty']+=$data['qty'];
			}
			
		}
		return $cart;
	}
	function cart_update($data)
	{
		$cart=$this->cart_content();
		foreach($cart as $key=>$item) 
		{
			if($item['id']==$data[$key]['id']) 
			{
				if($data[$key]['qty']==0)
				{
					$this->cart_delete($item['id']);
				}
				else
				{
					$cart[$key]['qty']=$data[$key]['qty'];
				}
			}
		}
			$_SESSION['cart']=$cart;
		}
	function cart_total()
	{
		if (!isset($_SESSION['cart'])) 
		{
			return 0;
		}
		else
		{
			$cart=$_SESSION['cart'];
			return count($cart);
		}
	}
	function cart_total_all_product()
	{
	if(!isset($_SESSION['cart']))
		{
			return 0;
		}
		else
		{
			$cart = $_SESSION['cart'];
			$number=0;
			foreach($cart as $item)
				{
					$number+=$item['qty'];
				}
			return $number;
		}
	}	
	function cart_delete($id=null)
	{
		if ($id==null) 
		{
			unset($_SESSION['cart']);
		}
		else
		{
			$cart=$this->cart_content();
			if ($cart!=null) 
			{
				foreach ($cart as $key => $item) 
				{
					if ($item['id']==$id) 
					{
						unset($cart[$key]);
					}
				}
			}
			$_SESSION['cart']=$cart;
		}
	}
}
 ?>