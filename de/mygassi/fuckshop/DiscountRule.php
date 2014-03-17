<?php
/*
 A discount-rule has 
	a title,
	a description,
	frontend related odd bull 
	a rule 
		"price is greater than" or
		"customer is of group" or 
		"customer is a first timer" or such

	a rule gets applied
		clerk-typed switch with different calculations 
		oda?

'''
	ja wie würdest du denn das machen?
	ich meine, wie, wie sollte das gehen, du eierhals?
	ja aufschreiben, oder?
	ja, wenn, wenn der kunde 20% bekommt beim ersten mal dann, dann, dann halt 
	apply so; im Discount; 
	switch(ruleType){
		case "CUSTOMER_FIRST_TIMER"
			price = price -15;
		
	}
	oda?
	woher soll ich wissen, was die von mir wollen ja?
'''

*/
class DiscountRule
{
	public $title;
	public $desc;
	public $rule;

	public function __construct($title, $desc, $type)
	{
		$this->title = $title;
		$this->desc = $desc;
		$this->type = $type;
	}
}
