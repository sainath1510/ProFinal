var price=0;
var puri_qty=0;
var idli_qty=0;
var wada_qty=0;
var dosa_qty=0;
var bonda_qty=0;
var chickenbiryani_qty=0;
var vegbiryani_qty=0;
var chickennoodles_qty=0;
var chickenfriedrice_qty=0;
var vegnoodles_qty=0;
var manchuriannoodles_qty=0;
var vegfriedrice_qty=0;
var vegmanchurian_qty=0;
var eggnoodles_qty=0;
var eggfriedrice_qty=0;
var manchurianrice_qty=0;
var meals_qty=0;
var coke_qty=0;
var puri_cost=0;
var idli_cost=0;
var wada_cost=0;
var dosa_cost=0;
var bonda_cost=0;
var chickenbiryani_cost=0;
var vegbiryani_cost=0;
var chickennoodles_cost=0;
var chickenfriedrice_cost=0;
var vegnoodles_cost=0;
var manchuriannoodles_cost=0;
var vegfriedrice_cost=0;
var vegmanchurian_cost=0;
var eggnoodles_cost=0;
var eggfriedrice_cost=0;
var manchurianrice_cost=0;
var meals_cost=0;
var coke_cost=0;
function decrement(id1,costid,item){
    var qty=parseInt(document.getElementById(id1).innerHTML);
    if(qty>0){
    qty-=1;
    document.getElementById(id1).innerHTML=qty;
    
    var cost=parseInt(document.getElementById(costid).innerHTML);
	if(item=='puri'){
		puri_qty=puri_qty-1;
		puri_cost=puri_cost-(cost);
	 price=price+cost;
	}
	if(item=='idli')
	{
		idli_qty=idli_qty-1;
		idli_cost=idli_cost-(cost);
		price=price+cost;
	}
	if(item=='wada')
	{
		wada_qty=wada_qty-1;
		wada_cost=wada_cost-(cost);
		price=price+cost;
	}
	if(item=='dosa')
	{
		dosa_qty=dosa_qty-1;
		dosa_cost=dosa_cost-(cost);
		price=price+cost;
	}
	if(item=='bonda')
	{
		bonda_qty=bonda_qty-1;
		bonda_cost=bonda_cost-(cost);
		price=price+cost;
	}
	if(item=='chickenbiryani')
	{
		chickenbiryani_qty=chickenbiryani_qty-1;
		chickenbiryani_cost=chickenbiryani_cost-(cost);
		price=price+cost;
	}
	if(item=='vegbiryani')
	{
		vegbiryani_qty=vegbiryani_qty-1;
		vegbiryani_cost=vegbiryani_cost+(cost);
		price=price+cost;

	}
	if(item=='chickennoodles')
	{
		chickennoodles_qty=chickennoodles_qty-1;
		chickennoodles_cost=chickennoodles_cost+(cost);
		price=price+cost;
	}
	if(item=='chickenfriedrice')
	{
		chickenfriedrice_qty=chickenfriedrice_qty-1;
		chickenfriedrice_cost=chickenfriedrice_cost-(cost);
		price=price+cost;
	}
	if(item=='vegnoodles')
	{
		vegnoodles_qty=vegnoodles_qty-1;
		vegnoodles_cost=vegnoodles_cost-(cost);
		price=price+cost;
	}
	if(item=='manchuriannoodles')
	{
		manchuriannoodles_qty=manchuriannoodles_qty-1;
		manchuriannoodles_cost=manchuriannoodles_cost-(cost);
		price=price+cost;
	}
	if(item=='vegfriedrice')
	{
		vegfriedrice_qty=vegfriedrice_qty-1;
		vegfriedrice_cost=vegfriedrice_cost-(cost);
		price=price+vegfriedrice_cost;
	}
	if(item=='vegmanchurian')
	{
		vegmanchurian_qty=vegmanchurian_qty-1;
		vegmanchurian_cost=vegmanchurian_cost-(cost);
		price=price+cost;
	}
	if(item=='eggnoodles')
	{
		eggnoodles_qty=eggnoodles_qty-1;
		eggnoodles_cost=eggnoodles_cost-(cost);
		price=price+cost;

	}
	if(item=='eggfriedrice')
	{
		eggfriedrice_qty=eggfriedrice_qty-1;
		eggfriedrice_cost=eggfriedrice_cost-(cost);
		price=price+cost;

	}
	if(item=='manchurianrice')
	{
		manchurianrice_qty=manchurianrice_qty-1;
		manchurianrice_cost=manchurianrice_cost-(cost);
		price=price+cost;
	}
	if(item=='meals')
	{
		meals_qty=meals_qty-1;
		meals_cost=meals_cost-(cost);
		price=price+cost;
	}
	if(item=='coke')
	{
		coke_qty=coke_qty-1;
		coke_cost=coke_cost-(cost);
		price=price+cost;
	}
}
}

function increment(id1,costid,item){
    var qty=parseInt(document.getElementById(id1).innerHTML);
    qty+=1;
    document.getElementById(id1).innerHTML=qty;

	var cost=parseInt(document.getElementById(costid).innerHTML);
	if(item=='puri'){
		puri_qty=puri_qty+1;
		puri_cost=puri_cost+(cost);
		price=price+cost;
		

	}
	if(item=='idli'){
		
		idli_qty=idli_qty+1;
		idli_cost=idli_cost+(cost);
		price=price+cost;
		
	}
	if(item=='wada')
	{
		wada_qty=wada_qty+1;
		wada_cost=wada_cost+(cost);
		price=price+wada_cost;
	}
	if(item=='dosa')
	{
		dosa_qty=dosa_qty+1;
		dosa_cost=dosa_cost+(cost);
		price=price+cost;
	}
	if(item=='bonda')
	{
		bonda_qty=bonda_qty+1;
		bonda_cost=bonda_cost+(cost);
		price=price+cost;

	}
	if(item=='chickenbiryani')
	{
		chickenbiryani_qty=chickenbiryani_qty+1;
		chickenbiryani_cost=chickenbiryani_cost+(cost);
		price=price+cost;
	}
	if(item=='vegbiryani')
	{
		vegbiryani_qty=vegbiryani_qty+1;
		vegbiryani_cost=vegbiryani_cost+(cost);
		price=price+cost;

	}
	if(item=='chickennoodles')
	{
		chickennoodles_qty=chickennoodles_qty+1;
		chickennoodles_cost=chickennoodles_cost+(cost);
		price=price+cost;
	}
	if(item=='chickenfriedrice')
	{
		chickenfriedrice_qty=chickenfriedrice_qty+1;
		chickenfriedrice_cost=chickenfriedrice_cost+(cost);
		price=price+cost;
	}
	if(item=='vegnoodles')
	{
		vegnoodles_qty=vegnoodles_qty+1;
		vegnoodles_cost=vegnoodles_cost+(cost);
		price=price+cost;
	}
	if(item=='manchuriannoodles')
	{
		manchuriannoodles_qty=manchuriannoodles_qty+1;
		manchuriannoodles_cost=manchuriannoodles_cost+(cost);
		price=price+cost;
	}
	if(item=='vegfriedrice')
	{
		vegfriedrice_qty=vegfriedrice_qty+1;
		vegfriedrice_cost=vegfriedrice_cost+(cost);
		price=price+cost;
	}
	if(item=='vegmanchurian')
	{
		vegmanchurian_qty=vegmanchurian_qty+1;
		vegmanchurian_cost=vegmanchurian_cost+(cost);
		price=price+cost;
	}
	if(item=='eggnoodles')
	{
		eggnoodles_qty=eggnoodles_qty+1;
		eggnoodles_cost=eggnoodles_cost+(cost);
		price=price+cost;

	}
	if(item=='eggfriedrice')
	{
		eggfriedrice_qty=eggfriedrice_qty+1;
		eggfriedrice_cost=eggfriedrice_cost+(cost);
		price=price+cost;

	}
	if(item=='manchurianrice')
	{
		manchurianrice_qty=manchurianrice_qty+1;
		manchurianrice_cost=manchurianrice_cost+(cost);
		price=price+cost;
	}
	if(item=='meals')
	{
		meals_qty=meals_qty+1;
		meals_cost=meals_cost+(cost);
		price=price+cost;
	}
	if(item=='coke')
	{
		coke_qty=coke_qty+1;
		coke_cost=coke_cost+(cost);
		price=price+cost;
	}
	

	}

function cost(){
	if(price!=0){
	document.write("<html><body><table  border=\"1\"style=\"margin:auto\"><tr><th>Item name       </th><th>    Quantity</th><th>  cost</th></tr>");
	if(puri_qty>0)
	{
	document.write("<tr><td>Puri  </td><td>"   +puri_qty+"</td><td>"  +puri_cost+"</td></tr>");
	
	
    }
    if(idli_qty>0)
	{
	document.write("<tr><td>Idli  </td><td>"  +idli_qty+"</td><td>"  +idli_cost+"</td></tr>");
	
	
	
    }
    if(wada_qty>0)
	{
	document.write("<tr><td>Wada  </td><td>"  +wada_qty+"</td><td>"  +wada_cost+"</td></tr>");
	
	
	
    }
    if(dosa_qty>0)
	{
	document.write("<tr><td>Dosa</td><td>" +dosa_qty+"</td><td>"+dosa_cost+"</td></tr>");
	
    }
    if(bonda_qty>0)
	{
	document.write("<tr><td>Bonda</td><td>" +bonda_qty+"</td><td>"+bonda_cost+"</td></tr>");
	
    }
    if(chickenbiryani_qty>0)
	{
	document.write("<tr><td>Chicken Biryani  </td><td>"   +chickenbiryani_qty+"</td><td>"   +chickenbiryani_cost+"</td>");
	
    }
    if(vegbiryani_qty>0)
	{
	document.write("<tr><td>Veg Biryani  </td><td>"   +vegbiryani_qty+"</td><td>"  +vegbiryani_cost+"</td>");
	
    }
    if(chickennoodles_qty>0)
	{
	document.write("<tr><td>chicken Noodles  </td><td>"   +chickennoodles_qty+"</td><td>"  +chickennoodles_cost+"</td>");
	
    }
    if(chickenfriedrice_qty>0)
	{
	document.write("<tr><td>Chicken Friedrice  </td><td>"   +chickenfriedrice_qty+"</td><td>"  +chickenfriedrice_cost+"</td>");
	
    }
    if(vegnoodles_qty>0)
	{
	document.write("<tr><td>Veg Noodles  </td><td>"   +vegnoodles_qty+"</td><td>"   +vegnoodles_cost+"</td>");
	
    }
    if(manchuriannoodles_qty>0)
	{
	document.write("<tr><td>Manchurian Noodles  </td><td>"  +manchuriannoodles_qty+"</td><td>"   +manchuriannoodles_cost+"</td>");
	
    }
 if(vegfriedrice_qty>0)
	{
	document.write("<tr><td>Veg Friedrice  </td><td>"  +vegfriedrice_qty+"</td><td>"  +vegfriedrice_cost+"</td>");
	
    }
    if(vegmanchurian_qty>0)
	{
	document.write("<tr><td>Veg Manchuria  </td><td>"   +vegmanchurian_qty+"</td><td>"  +vegmanchurian_cost+"</td>");
	
    }
    if(eggnoodles_qty>0)
	{
	document.write("<tr><td>Egg Noodles  </td><td>"   +eggnoodles_qty+"</td><td>"  +eggnoodles_cost+"</td>");
	
    }
    if(eggfriedrice_qty>0)
	{
	document.write("<tr><td>Egg Friedrice  </td><td>"  +eggfriedrice_qty+"</td><td>"  +eggfriedrice_cost+"</td>");
	
    }
    if(manchurianrice_qty>0)
	{
	document.write("<tr><td>Manchuria Rice  </td><td>"   +manchurianrice_qty+"</td><td>"  +manchurianrice_cost+"</td>");
	
    }
    if(meals_qty>0)
	{
	document.write("<tr><td>Meals  </td><td>"  +meals_qty+"</td><td>"  +meals_cost+"</td>");
	
    }
    if(coke_qty>0)
	{
	document.write("<tr><td>Coke  </td><td>"  +coke_qty+"</td><td>"  +coke_cost+"</td>");
	
    }

    document.write("<tr><td colspan=\"3\">  TOTAL BILL = "+price+"</td></tr>");
    document.write("</table></body></html>");
    document.write("<b><em style=\"margin-left: 650px; margin-top:20px;\">Your Order is Placed Successfully</em></b><br>");
    document.write("<b><em style=\"margin-left: 650px; margin-top:20px;\">Thank You</em><b>");
}

else{
	document.write("<b><em style=\"margin-left: 650px; margin-top:20px; color:'red';\">Please select items</em><b>");
}

}