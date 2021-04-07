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
            <input type="text" id="user_id" name="user_id" value="{{$order[0]->user_id}}"><br><br>
                    {{--  <ol>
                @foreach($order as $item)
                    <li>{{$item->products->name}}</li>

                @endforeach
                    </ol> --}}
            <label for="item"> select items:</label>
            <select name="products[]" title="products" id="products" multiple>
                @foreach($products as $p)
                    
                     <option value="{{$p->id}}">{{$p->name." ".$p->option." $".$p->price}}
                     </option>

                @endforeach
            </select><br><br>
            
            <input type="submit" value="update">
        </form>

        <form method="post" action="../{{$order[0]->id}}">
            @method('DELETE')

            <input type="submit" value="Cancel and Delete">
        </form>
		
   	</body>
</html>