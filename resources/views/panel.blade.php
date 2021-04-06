<!DOCTYPE html>
<html>
    <head>

    	<meta charset="utf-8" >
        <meta http-equiv="content-type" content="application/json">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>coffee-shop panel</title>

        <style>
        	.vertical-menu a {
 
			  display: block;
			  text-decoration: none;
			}
        </style>
    </head>
    <body>

		<div class="vertical-menu">
		  <a href="/api/menu">View Menu</a>
		  <a href="/api/order">Order</a>
		  <a href="/api/order/{{$order->id}}">View Order</a>
		</div>

   	</body>
</html>
