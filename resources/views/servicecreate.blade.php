<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="{{route('service.store')}}" method="POST">
        @csrf
        <label for="">Heading</label>
        <input type="text" name="service_heading" id="">
        <br>

        <label for="">Title</label>
        <input type="text" name="service_title">

        <br>

        <button type="submit">Submit</button>
    </form>

</body>

</html>