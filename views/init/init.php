<?php
	require "db.php";
	function add_product($name,$metal,$insert,$gender,$type,$producer,$price_buy,$calc,$price_sell,$profit,$count,$size,$weight_full,$weight_metals,$weight_inserts,$carat_inserts){
		$product=R::dispense('products');//продукты
		$product->name=$name;

		$product->metal_1=$metal[1];
		$product->metal_2=$metal[2];
		$product->metal_3=$metal[3];
		$product->metal_4=$metal[4];
		$product->metal_5=$metal[5];

		$product->insert_1=$insert[1];
		$product->insert_2=$insert[2];
		$product->insert_3=$insert[3];
		$product->insert_4=$insert[4];
		$product->insert_5=$insert[5];

		foreach ($metal as $key => $value) {
			if($value!='none'){
				$metal=R::findOne('metals','name = ?',array($value));
				if(!isset($metal->weight)){
					$metal=R::dispense('metals');
					$metal->name=$value;
					$metal->weight=0;
				}
				$metal->weight+=$weight_metals[$value]*$count;
				$metal->count_unical++;
				$metal->count_total+=$count;
				$metal->count_available+=$count;
				$metal->count_sold+=$count_sold;
				$metal->weight_sold+=0.1;
				$metal->weight_available+=$weight_metals[$value]*$count;
				// R::store($metal);
			}
		}

		foreach ($insert as $key => $value) {
			if($value!='none'){
				$insert=R::findOne('inserts','name = ?',array($value));
				if(!isset($insert->weight)){
					$insert=R::dispense('inserts');
					$insert->name=$value;
				}
				$insert->weight+=$weight_inserts[$value]*$count;
				$insert->carat+=$carat_inserts[$value]*$count;
				$insert->count_unical++;
				$insert->count_total+=$count;
				$insert->count_available+=$count;
				$insert->count_sold+=$count_sold;
				$insert->weight_sold+=0.1;
				$insert->weight_available+=$weight_inserts[$value]*$count;
				// R::store($insert);
			}
		}

		$product->gender=$gender;
		$gen=R::dispense('genders');
		$gen->name=$gender;
		$gen->count_unical++;
		$gen->count_total+=$count;
		$gen->count_sold=0;
		$gen->count_available+=$count;
		// R::store($gen);

		$product->type=$type;
		$category=R::dispense('categories');
		$category->name=$type;
		$category->count_unical++;
		$category->count_total+=$count;
		$category->count_sold=0;
		$category->count_available+=$count;
		R::store($category);

		$product->producer=$producer;

		$product->price_buy=$price_buy;
		if($calc=='profit'){
			$product->profit=$profit;
			$product->price_sell=$product->price_buy*$product->profit;
		}
		elseif($calc=='price'){
			$product->price_sell=$price_sell;
			$product->profit=$product->price_sell/$product->price_buy;
		}
		$product->profit_sum=$product->price_sell-$product->price_buy;
		$product->count_total=3;
		$product->count_available=2;
		$product->count_sold=1;

		$product->size=$size;
		$size_s=R::dispense('sizes');
		$size_s->name=$size;
		$size_s->type=$type;
		$size_s->count+=$count;
		// R::store($size_s);
		$product->weight_full=$weight_full;
		$product->weight_metals=json_encode($weight_metals);
		$product->weight_inserts=json_encode($weight_inserts);
		$product->carat_inserts=json_encode($carat_inserts);
		// R::store($product);
	}

	function add_seller($name,$group,$product_id){
		$user=R::dispense('sellers');//покупатели и администраторы
		$user->name=$name;
		$user->group=$group;
        $user->date=date("d.m.Y (H:i:s)", time());
        $user->day=date("d", time());
        $user->month=date("m", time());
        $user->year=date("Y", time());

		$user->count_available=2;
		$user->count_unical++;
		$user->count_sold=1;

		$transaction=R::dispense('buys');
		$transaction->username=$name;
		$transaction->product_id=$product_id;
		$transaction->product_name=R::findOne('products','id = ?',array($product_id))->name;
		$transaction->product_price=R::findOne('products','id = ?',array($product_id))->price_buy;
		$transaction->count=R::findOne('products','id = ?',array($product_id))->count;
        $transaction->date=date("d.m.Y (H:i:s)", time());
        $transaction->day=date("d", time());
        $transaction->month=date("m", time());
        $transaction->year=date("Y", time());
		$user->count_total+=$transaction->count;
		$user->total_price+=$transaction->product_price*$transaction->count;
        R::store($transaction);


		$user->count_transactions+=R::count('buys','username = ?',array($name));

		R::store($user);
	}

	function add_user($name,$group,$login,$password,$product_id){
		$user=R::dispense('users');//покупатели и администраторы
		$user->name=$name;
		$user->group=$group;
		$user->key='afiotc7o6acbSn89n3cn';
		$user->login=$login;
		$user->password=$password;
        $user->date=date("d.m.Y (H:i:s)", time());
        $user->day=date("d", time());
        $user->month=date("m", time());
        $user->year=date("Y", time());

		$transaction=R::dispense('sells');
		$transaction->username=$name;
		$transaction->product_id=$product_id;
		$transaction->product_name=R::findOne('products','id = ?',array($product_id))->name;
		$transaction->product_price=R::findOne('products','id = ?',array($product_id))->price_sell;
		$transaction->count=1;
        $transaction->date=date("d.m.Y (H:i:s)", time());
        $transaction->day=date("d", time());
        $transaction->month=date("m", time());
        $transaction->year=date("Y", time());
		$user->total_price+=$transaction->product_price;
        R::store($transaction);

		$user->count_transactions=R::count('sells','username = ?',array($name));

		R::store($user);
	}
	//product
	$name='Кольцо из золота и платины с бриллиантом и жемчугом';

	$metal[1]='Золото';
	$metal[2]='Платина';
	$metal[3]='none';
	$metal[4]='none';
	$metal[5]='none';

	$insert[1]='Бриллиант';
	$insert[2]='Жемчуг';
	$insert[3]='none';
	$insert[4]='none';
	$insert[5]='none';

	$gender='Женщины';
	$type='Кольца';
	$producer='Ювелирная фабрика Litvinenko';

	$price_buy=5000;
	$profit=2;
	$price_sell=10000;
	$count=3;

	$size=17.5;
	$weight_full=2.9;
	$weight_metals=['Золото' => 1.5,'Платина' => 1];
	$weight_inserts=['Бриллиант' => 0.2,'Жемчуг' => 0.2];
	$carat_inserts=['Бриллиант' => 1,'Жемчуг' => 1];
	//end product
	add_product($name,$metal,$insert,$gender,$type,$producer,$price_buy,'profit',$price_sell,$profit,$count,$size,$weight_full,$weight_metals,$weight_inserts,$carat_inserts);



	//user
	$name='Александр Марченко';
	$group='admin';
	$login='admin';
	$password='admin';
	$product_id=1;
    //end user
	// add_user($name,$group,$login,$password,$product_id,$product_name,$product_price,$date);


	

	//seller
	$name='Ювелирная фабрика Litvinenko';
	$group='own';
	$product_id=1;
	//end seller
	// add_seller($name,$group,$product_id);


	
	// $seller=R::dispence('sellers');//Поставщик
	// $sell=R::dispence('allsells');//транзакции продажи
	// $buy=R::dispence('allbuys');//транзакции закупки
?>