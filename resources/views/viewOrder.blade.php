<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" >
        <meta http-equiv="content-type" content="application/json">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>view order</title>

        
    </head>
    <body>

        <form method="post" action="">
            @method('DELETE')
            <a href="edit/{{$order->id}}"><input type="button" value="Edit"></a>
            <input type="submit" value="Cancel">
        </form>
        
    </body>
</html>