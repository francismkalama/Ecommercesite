var stripe = Stripe('pk_test_lnPmUscUdrkX1TrbEgy1VBGF');
// var elements = stripe.elements();
// stripe.createToken('bank_account', {
//   name: 'US',
//   currency: 'usd',
//   routing_number: '110000000',
//   account_number: '000123456789',
//   account_holder_name: 'Jenny Rosen',
//   account_holder_type: 'individual',
// }).then(function(result) {
//   // Handle result.error or result.token
// });

var $form = $('#checkout_form');

$form.submit(function(event){
	$('#charge_error').addClass('hidden');
	$form.find('button').prop('disabled', true);
stripe.card.createToken({
  name: $('#cardname').val(),
  cvc: $('#cvc').val(),
  exp_month: $('#expmonth').val(),
  exp_year: $('#expyear').val(),
  account_number: $('#cardnumber').val(),
},stripeResponseHandler);
return false;

})

function stripeResponseHandler(status, response){
	alert(5);
	if (response.error) {
		$('#charge_error').removeClass('hidden');
		$('#charge_error').text(response.error.message);
		$form.find('button').prop('disabled', false);
	}else{
		var $token = response.id;
		$form.append($('<input type="hidden" name="stripeToken" />').val(token));
		form.get(0).submit();

	}

}


