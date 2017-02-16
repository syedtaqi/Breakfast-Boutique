//a - form name

function validateOrder(a)

{
 var numbers=/^[0-9]+$/;
 var valerr=""
 
 document.getElementById('error').innerHTML = valerr;


  //Must order at least one item 

 if (fvalue(a,"item1") == 0 && fvalue(a,"item2") == 0)

    {
	 valerr= valerr+" You must order at least one item!";
    }

 //Values must be numeric

 if (numbers.test(fvalue(a,"item1")) == false || numbers.test(fvalue(a,"item2")) == false)

    {
     valerr=valerr+" Enter a number!";
    }
	
//Display validation errors and exit
  if (valerr!="")
  {
     document.getElementById('error').innerHTML = valerr;
	 return false;
  }
  
//Final confirmation before sending to server for processing

 var confirm_txn
 confirme_txn="Do you wish to proceed with your order?"
 
 var r=confirm(confirme_txn);
 
  if (r==false)
   {
	return false
   }
 
  var confirm_txn
 confirme_txn="Did you remember to order a breakfast for your teacher?"

 var r=confirm(confirme_txn);

 if (r==false)
   {
	return false
   }

}



//Returns the form c's d field value
function fvalue(c,d)

{
  var x;
  x=document.forms[c][d].value;
  return x;
}

