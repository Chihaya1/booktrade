<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet"  href="../../../css/styles.css" type="text/css">

	<title>Mero Kitab</title>
</head>
<body>
    <header>
        <div class="header-top">
            <div class="row d-flex">
                <div class="col-md-4 logo-wrapper">
                    <a href="{{url('/home')}}"><img src="/img/logo.png" alt="logo" class="logo" /></a>
                </div>
                <div class="col-md-5 search-form">
                    <div class="input-group mt-1">
                        <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <span class=""><i class="fa fa-search" aria-hidden="false"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 scart">
                    <a href="{{route('cart.index')}}">
                    <i class="fa fa-shopping-cart"></i>
                    Cart
                    <span>{{Cart::count()}}</span>
                </div> 
                
                
                <div class="col-md-6">
                    <nav class="navbar navbar-expand-sm header-list mt-2 justify-content-end pr-5">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/home')}}">Home</a>
                            </li>
                            
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="order.php">Order Book</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('deposits.create')}}">Deposit Book</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('donates.create')}}">Donation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/login')}}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/sells/create')}}">Sell</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/admin')}}">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/about')}}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contacts.create')}}">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
<!-- navigation -->
<div class="row no-gutters">
		<div class="col-md-2">
            @include('admin.partials.nav')
			
        </div>
        <div class= "col-md-9 offset-md-1" >
            <h3 class="text-left mt-5">Payment Information</h3>
            <!-- "{{route('payment.store')}}" -->
            <script src="https://js.stripe.com/v2/"></script>

            <form action="{{route('payment.store')}}" method="post" id="payment-form">
                @csrf
                    <div class="form-group col-md-6">
                        <label>
                            <span>Card Number</span>
                            <input type="text" size="20" data-stripe="number">
                        </label>
                    </div>

                    <div class="form-group col-md-6">
                        <label>
                            <span>Expiration (MM/YY)</span>
                            <input type="text" size="2" data-stripe="exp_month">
                            <span> / </span>
                            <input type="text" size="2" data-stripe="exp_year">
                        </label>
                    </div>

                    <div class="form-group col-md-6">
                        <label>
                            <span>CVC</span>
                            <input type="text" size="4" data-stripe="cvc">
                        </label>
                    </div>

                <button>Submit Payment</button>
            </form> <br><br>      
        </div>
</div>
<footer class="page-footer font-small teal pt-4">

<!-- Footer Text -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-10 mt-md-0 mt-5">

      <div class="social">
        <h2 class= font-weight-bold text-uppercase mb-4 ml-4><b>Follow Us</b></h2>
                  <!-- Instagram -->
                  <a href="https://www.instagram.com" target="blank" class="fa fa-instagram social"></a>
                                      
                                      
                  <!-- Twitter -->
                  <a href="https://www.twitter.com" target="blank" class="fa fa-twitter social"></a>
              
                  <!-- Gmail-->
              
                  <a href="https://www.gmail.com" target="blank" class="fa fa-envelope social"></a>

      </div>
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="https://Merokitab.com/"> Merokitab</a> 
      </div>
    
    </div>

      
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-2 mb-md-0 ">

      <!-- Content -->
      <p>
          Mero Kitab<br>
          Province No.3<br>
          <strong>Address:</strong> Bouddha,Kathmandu<br>
          <strong>Email:</strong>Merokitab@gmail.com<br>	
      </p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Text -->

</footer>
<script>
// Create a Stripe client.
// Note: this merchant has been set up for demo purposes.
var stripe = Stripe('pk_test_51H0We1CWFMj9d4XPz7fT59zWuotFBw9DVCZZjsxUHoJ5GYDPurUUlRE7p06RtvPjr0sEISqG5bwbHEWnMbdemFlx00Gtk3BSFN');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    },
    ':-webkit-autofill': {
      color: '#32325d',
    },
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a',
    ':-webkit-autofill': {
      color: '#fa755a',
    },
  }
};

// Create an instance of the iban Element.
var iban = elements.create('iban', {
  style: style,
  supportedCountries: ['SEPA'],
});

// Add an instance of the iban Element into the `iban-element` <div>.
iban.mount('#iban-element');

var errorMessage = document.getElementById('error-message');
var bankName = document.getElementById('bank-name');

iban.on('change', function(event) {
  // Handle real-time validation errors from the iban Element.
  if (event.error) {
    errorMessage.textContent = event.error.message;
    errorMessage.classList.add('visible');
  } else {
    errorMessage.classList.remove('visible');
  }

  // Display bank name corresponding to IBAN, if available.
  if (event.bankName) {
    bankName.textContent = event.bankName;
    bankName.classList.add('visible');
  } else {
    bankName.classList.remove('visible');
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  showLoading();

  var sourceData = {
    type: 'sepa_debit',
    currency: 'eur',
    owner: {
      name: document.querySelector('input[name="name"]').value,
      email: document.querySelector('input[name="email"]').value,
    },
    mandate: {
      // Automatically send a mandate notification email to your customer
      // once the source is charged.
      notification_method: 'email',
    }
  };

  // Call `stripe.createSource` with the iban Element and additional options.
  stripe.createSource(iban, sourceData).then(function(result) {
    if (result.error) {
      // Inform the customer that there was an error.
      errorMessage.textContent = result.error.message;
      errorMessage.classList.add('visible');
      stopLoading();
    } else {
      // Send the Source to your server to create a charge.
      errorMessage.classList.remove('visible');
      stripeSourceHandler(result.source);
    }
  });
});
</script>
</body>
</html>