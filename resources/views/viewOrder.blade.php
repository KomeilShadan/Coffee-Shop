<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" >
        <meta http-equiv="content-type" content="application/json">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>view order</title>

        
    </head>
    <body>
        <h1> user orders </h1>

        <ul>click to edit
        @foreach($orders as $order)

            <li>
            <a href="/api/order/edit/{{ $order->id }}">    

             {{ $order->id}} 
             
            </a>
            </li>

        @endforeach 
        </ul>
    </body>
</html>