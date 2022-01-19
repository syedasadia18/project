<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Heading</label>
        <input type="text" name="heading">
        <br>
        <label for="">Title</label>
        <input type="text" name="title">
        <br>
        <label for="">Description</label>
        <input type="text" name="description">
        <br>
        <input type="file" name="image">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>