<!DOCTYPE html>
<html>
    <head>

    	<meta charset="utf-8" >
        <meta http-equiv="content-type" content="application/json">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>order</title>

        
		<script src="http://code.jquery.com/jquery-1.5.min.js"></script>
    </head>
    <body>

        <form method="post" action="">

            @csrf
            <label for="user_id">customer id:</label>
            <input type="text" id="user_id" name="user_id"><br><br>
            <label for="item"> select items:</label>
            <select name="products[]" title="products" id="products" multiple>
                @foreach($items as $item)

                     <option value="{{$item->id}}" id="item">
                        {{$item->id." ".$item->name." ".$item->option." $".$item->price}}
                     </option>
                     
                @endforeach
            </select>
            <input type="submit" value="Submit">
        </form>
            {{-- <input type="button" value="Add" id="Add"><br><br>
            <ol id="ol"></ol>
        <script>
            $("#Add").click( function() {
            console.log($("#products").val());
            $("#ol").append("<li>"+$("#products").text()+"</li>");              
                           });
        </script> --}}
   	</body>
</html>