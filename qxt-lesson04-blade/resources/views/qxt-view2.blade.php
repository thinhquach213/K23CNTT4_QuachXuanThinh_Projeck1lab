<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if statement</title>
</head>
<body>
    <h1> #if statement</h1>
    @verbatim
        <pre>
            @if (count($array)===1)
                I have element!
            @endif(count($array)>1)
                I have multipe element!
            @else
                I don't have element!
            @endif
        </pre>
    @andverbatim
    <h1> mang:{{$array}}</h1>
    @if (count($array)===1)
    I have element!
    @endif(count($array)>1)
    I have multipe element!
    @else
    I don't have element!
     @endif
</body>
</html>