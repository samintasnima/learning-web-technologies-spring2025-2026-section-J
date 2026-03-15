var price = 1000;
var qtyInput = document.getElementById("qty");
qtyInput.addEventListener("input", calculateTotal);
function calculateTotal(){ 
var qty = qtyInput.value;    
if(qty < 0){
   alert("Quantity cannot be negative");
   qtyInput.value = 0;
   qty = 0;
    }
 var total = price * qty;
 document.getElementById("total").value = total;
if(total > 1000){
   alert("Congratulations! You are eligible for a gift coupon.");
    }
}