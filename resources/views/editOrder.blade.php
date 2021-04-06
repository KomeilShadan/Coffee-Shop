<!DOCTYPE html>
<html>
    <head>

    	<meta charset="utf-8" >
        <meta http-equiv="content-type" content="application/json">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>edit order</title>

        
    </head>
    <body>

        <form method="post" action="">
            @method('PUT')
            @csrf
            <label for="user_id">customer id:</label>
            <input type="text" id="user_id" name="user_id"><br><br>
                    {{--  <ol>
                @foreach($order as $item)
                    <li>{{$item->products->name}}</li>

                @endforeach
                    </ol> --}}
            <label for="item"> select items:</label>
            <select id="item" name="item">
                @foreach($items as $item)
                     <option value="{{$item->id}}">{{$item->name." ".$item->option." $".$item->price}}
                     </option>
                @endforeach
            </select><br><br>
            <input type="button" value="Cancel">
            <input type="submit" value="update">
        </form>
		
   	</body>
</html>