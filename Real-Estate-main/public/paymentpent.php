<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_DUHXaQcH8wN9T9", // Enter the Key ID generated from the Dashboard
    "amount": "1100000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Ganpati Residence PentHouse",
    "description": "Test Transaction",
    "image": "https://cdn.homedsgn.com/wp-content/uploads/2016/07/Three-Level-Penthouse-01-850x567.jpg",
    "handler": function (response){
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature)
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>