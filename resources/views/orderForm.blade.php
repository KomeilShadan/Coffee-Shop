<!DOCTYPE html>
<html>
    <head>

    	<meta charset="utf-8" >
        <meta http-equiv="content-type" content="application/json">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>order</title>

        
    </head>
    <body>

        <form>
            @csrf
            <label for="user_id">customer id:</label>
            <input type="text" id="user_id" name="user_id"><br><br>
            <label for="item"> select items:</label>
            <select id="item" name="item">
                @foreach($items as $item)
                     <option value="{{$item->id}}">{{$item->name." ".$item->option}}</option>
                @endforeach
            </select>
            <input type="button" value="Add" onclick="@php

               echo '<div>'.request()->get('item.value').'</div>'
            @endphp"><br><br>
            <input type="submit" value="Submit">
        </form>
		
   	</body>
</html>