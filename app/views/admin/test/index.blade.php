@extends('layouts.admin')

@section('content')

<h1>Sign Up</h1>

<h4>Testing Data</h4>
<strong>Email</strong> : suhairi81@gmail.com <br />
<strong>Card Number</strong> : 4242 4242 4242 4242 <br />
<strong>MM/YY </strong>  : 01/15 <br />
<strong>CVC  </strong> : 123
<br /><br />
<form action="" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_VbJAhEMvAUyvxNduElklaTra"
    data-amount="900"
    data-name="MADA"
    data-description="Monthly Subsscription"
    data-image="images/mada.jpg">
  </script>
</form>

@stop

