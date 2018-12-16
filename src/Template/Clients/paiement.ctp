<?= $this->layout='hi'?>
<?= $this->Html->css('styles') ?>
<?= $this->Html->css('demo') ?>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script type="text/javascript">
	var getHttpRequest = function(){

	var httpRequest = false;

	if (window.XMLHttpRequest){
		httpRequest = new XMLHttpRequest();
		if (httpRequest.overrideMimeType){
			httpRequest.overrideMimeType('text/xml');
		}
	}
	else if (window.ActiveXObject){
		try{
			httpRequest = new ActiveXObject("Msxml2.XMLHTTP");

		}catch (e) {
			try{
				httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
			}catch (e){}
		}
	}
	if (!httpRequest) {
		alert('Abondand');
		return false;
	}


	return httpRequest;
}
</script>

<script>
		// Render the PayPal button
		paypal.Button.render({
		// Set your environment
		env: 'sandbox', // sandbox | production

		// Specify the style of the button
		style: {

		  layout: 'horizontal',  // horizontal | vertical
		  size:   'responsive',    // medium | large | responsive
		  shape:  'rect',      // pill | rect
		  color:  'gold'       // gold | blue | silver | white | black
		},


		funding: {
		  allowed: [
		    paypal.FUNDING.CARD,
		    paypal.FUNDING.CREDIT
		  ],
		  disallowed: []
		},

		// Enable Pay Now checkout flow (optional)
		commit: true,

		// PayPal Client IDs - replace with your own
		// Create a PayPal app: https://developer.paypal.com/developer/applications/create
		client: {
		  sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
		  production: '<insert production client id>'
		},

		payment: function (data, actions) {
		  return actions.payment.create({
		    payment: {
		      transactions: [
		        {
		          amount: {
		            total: '40.00',
		            currency: 'USD'
		          }
		        }
		      ]
		    }
		  });
		},

		onAuthorize: function (data, actions) {
		  return actions.payment.execute()
		    .then(function () {
		      window.alert('Payment Complete!');
		      var httpRequest = getHttpRequest()
				httpRequest.onreadystatechange = function (){
					if (httpRequest.readyState === 4){
					}	
				}
				httpRequest.open('GET','/montage_moi/clients/payer?mois=12&id='+<?= '\''.$this->request->session()->read('Auth.User.id').'\'' ?>,true)
				httpRequest.send()
		    });
		}
		}, '#paypal-button-container0');
</script>
<script>
		// Render the PayPal button
		paypal.Button.render({
		// Set your environment
		env: 'sandbox', // sandbox | production

		// Specify the style of the button
		style: {
		  layout: 'horizontal',  // horizontal | vertical
		  size:   'responsive',    // medium | large | responsive
		  shape:  'rect',      // pill | rect
		  color:  'gold'       // gold | blue | silver | white | black
		},

		// Specify allowed and disallowed funding sources
		//
		// Options:
		// - paypal.FUNDING.CARD
		// - paypal.FUNDING.CREDIT
		// - paypal.FUNDING.ELV
		funding: {
		  allowed: [
		    paypal.FUNDING.CARD,
		    paypal.FUNDING.CREDIT
		  ],
		  disallowed: []
		},

		// Enable Pay Now checkout flow (optional)
		commit: true,

		// PayPal Client IDs - replace with your own
		// Create a PayPal app: https://developer.paypal.com/developer/applications/create
		client: {
		  sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
		  production: '<insert production client id>'
		},

		payment: function (data, actions) {
		  return actions.payment.create({
		    payment: {
		      transactions: [
		        {
		          amount: {
		            total: '25.00',
		            currency: 'USD'
		          }
		        }
		      ]
		    }
		  });
		},

		onAuthorize: function (data, actions) {
		return actions.payment.execute()
			.then(function () {
			    window.alert('Payment Complete!');
			    var httpRequest = getHttpRequest()
				httpRequest.onreadystatechange = function (){
					if (httpRequest.readyState === 4){
					}	
				}
				httpRequest.open('GET','/montage_moi/clients/payer?mois=6&id='+<?= '\''.$this->request->session()->read('Auth.User.id').'\'' ?>,true)
				httpRequest.send()
			    });
			}
		}, '#paypal-button-container1');
</script>
<script>
		// Render the PayPal button
		paypal.Button.render({
		// Set your environment
		env: 'sandbox', // sandbox | production

		// Specify the style of the button
		style: {
		  layout: 'horizontal',  // horizontal | vertical
		  size:   'responsive',    // medium | large | responsive
		  shape:  'rect',      // pill | rect
		  color:  'gold'       // gold | blue | silver | white | black
		},

		// Specify allowed and disallowed funding sources
		//
		// Options:
		// - paypal.FUNDING.CARD
		// - paypal.FUNDING.CREDIT
		// - paypal.FUNDING.ELV
		funding: {
		  allowed: [
		    paypal.FUNDING.CARD,
		    paypal.FUNDING.CREDIT
		  ],
		  disallowed: []
		},

		// Enable Pay Now checkout flow (optional)
		commit: true,

		// PayPal Client IDs - replace with your own
		// Create a PayPal app: https://developer.paypal.com/developer/applications/create
		client: {
		  sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
		  production: '<insert production client id>'
		},

		payment: function (data, actions) {
		  return actions.payment.create({
		    payment: {
		      transactions: [
		        {
		          amount: {
		            total: '15.00',
		            currency: 'USD'
		          }
		        }
		      ]
		    }
		  });
		},

		onAuthorize: function (data, actions) {
		  return actions.payment.execute()
		    .then(function () {
		      window.alert('Payment Complete!');
		      var httpRequest = getHttpRequest()
				httpRequest.onreadystatechange = function (){
					if (httpRequest.readyState === 4){
					}	
				}
				httpRequest.open('GET','/montage_moi/clients/payer?mois=3&id='+<?= '\''.$this->request->session()->read('Auth.User.id').'\'' ?>,true)
				httpRequest.send()
		    });
		}
		}, '#paypal-button-container2');
</script>
<script>
		// Render the PayPal button
		paypal.Button.render({
		// Set your environment
		env: 'sandbox', // sandbox | production

		// Specify the style of the button
		style: {
		  layout: 'horizontal',  // horizontal | vertical
		  size:   'responsive',    // medium | large | responsive
		  shape:  'rect',      // pill | rect
		  color:  'gold'       // gold | blue | silver | white | black
		},

		// Specify allowed and disallowed funding sources
		//
		// Options:
		// - paypal.FUNDING.CARD
		// - paypal.FUNDING.CREDIT
		// - paypal.FUNDING.ELV
		funding: {
		  allowed: [
		    paypal.FUNDING.CARD,
		    paypal.FUNDING.CREDIT
		  ],
		  disallowed: []
		},

		// Enable Pay Now checkout flow (optional)
		commit: true,

		// PayPal Client IDs - replace with your own
		// Create a PayPal app: https://developer.paypal.com/developer/applications/create
		client: {
		  sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
		  production: '<insert production client id>'
		},

		payment: function (data, actions) {
		  return actions.payment.create({
		    payment: {
		      transactions: [
		        {
		          amount: {
		            total: '10.00',
		            currency: 'USD'
		          }
		        }
		      ]
		    }
		  });
		},

		onAuthorize: function (data, actions) {
		  return actions.payment.execute()
		    .then(function () {
		      window.alert('Payment Complete!');
		      var httpRequest = getHttpRequest()
				httpRequest.onreadystatechange = function (){
					if (httpRequest.readyState === 4){
					}	
				}
				httpRequest.open('GET','/montage_moi/clients/payer?mois=1&id='+<?= '\''.$this->request->session()->read('Auth.User.id').'\'' ?>,true)
				httpRequest.send()
		    });
		}
		}, '#paypal-button-container3');
</script>

<div class="container"  >
			<!-- <!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <span class="right">
                   
                        <strong><?php echo $this->Html->link('Back to the Home page', '/',['class'=>'download-btn']) ?></strong>
                    

                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
				<h1><span></span>Subscribe now!  </h1>
            </header>       
     <!-- start header here-->
	<header style="width: 100%; margin-left: 160px;">
		<div id="fdw-pricing-table" style="width: 100%;">
   			 <div class="plan plan1">
       			 <div class="header">12 MONTHS</div>
       			 <div class="price">$400</div>  
              
       			 <ul>
         		  	<li><b>All</b> templates</li>
          		 	<li><b>Download</b> your work</li>
					<li><b>Unlimited</b> videos</li>
					<li id="paypal-button-container0" ></li>			
       			 </ul>
       			 <!-- <div id="paypal-button-container0" style="width: 200PX;"></div> -->	
                
   			 </div>
   			<div class="plan plan2 popular-plan">
       			 <div class="header">6 MONTHS</div>
       			 <div class="price">$250</div>
       
       			 <ul>
         		     <li><b>All</b> templates</li>
          		     <li><b>Download</b> your work</li>
           		     <li><b>Unlimited</b> videos</li>			
         	     </ul>
        		 <div id="paypal-button-container1"></div> 	
           
  			</div>
   		    <div class="plan plan3">
      			 <div class="header">3 MONTHS</div>
       			 <div class="price">$150</div>
        
       			 <ul>
       			    <li><b>All</b> templates</li>
            		<li><b>Download</b> your work</li>
          		    <li><b>Unlimited</b> videos</li>			
      		     </ul>
       			<div id="paypal-button-container2"></div>
   			 </div>

    		<div class="plan plan4">
       			 <div class="header">1 MONTH</div>
        		 <div class="price">$100</div>
       			 <ul>
          			<li><b>Limited</b> templates</li>
            		<li><b>Download</b> your work</li>
           		    <li><b>Limited</b> videos</li>			
       			 </ul>
        		<div id="paypal-button-container3"></div>

   			 </div> 	
		</div>
	</header><!-- end header -->
    
</div>

<strong><?php echo $this->Html->link('next', '/clients/profil',['class'=>'download-btn']) ?></strong>