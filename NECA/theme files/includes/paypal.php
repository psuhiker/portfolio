<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>

    var CREATE_PAYMENT_URL = "<create_payment_url>";
    var EXECUTE_PAYMENT_URL = "<execute_payment_url>";

	paypal.Button.render({
		env: 'production',
		//env: 'sandbox',
		client: {
			sandbox: 'AY1g1MroqreItNU8dKckR3wcUldyUODWST5Is0ww5z0DUjHt2FO7MQeGMJ1HNeHrBSlkgP6QA22m_uf9',
			production: 'AamEnyX67fNMathIm04c8WBKPsvaytrUmi0q3HKNPPjftYzEx9gWGZx9Ypi6P8s5tNplVTYlylEdAuQ0'
		},
		commit: true,
		style: {
			size: 'responsive',
			color: 'blue',
			shape: 'rect',
			label: 'pay',
			fundingicons: true,
			taglin: false
		},
		//funding: {
		//    allowed: [ paypal.FUNDING.CARD ],
		//},
		payment: function(data, actions) {
			return actions.payment.create({
				payment: {
					transactions: [
						{
							amount: { total: '<?php echo $display_price; ?>', currency: 'USD' },
							description: '<?php echo $display_description; ?>',
						}
					],
				}
			});
		},
		onAuthorize: function(data, actions) {
			return actions.payment.execute().then(function() {
				window.location = '<?php echo $redirect_url; ?>';
			});
		}
	}, 
	'#paypal-button');
	
</script>