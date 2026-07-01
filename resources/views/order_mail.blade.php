<!DOCTYPE html>
<html lang="ar" dir='rtl' >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body class="">
       <ul>
           <li> name : {{ $data['name'] }} </li>
           <li> email : {{ $data['email'] }} </li>
           <li> phone : {{ $data['phone'] }} </li>
           <li> product : {{ $product->name }} </li>
           <li> quantity : {{ $data['quantity'] }} </li>
           <li> message : {{ $data['message'] }} </li>
       </ul>
    </body>
</html>
