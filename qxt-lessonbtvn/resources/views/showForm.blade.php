<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{assest('assest/css/bootstap.min.css')}}">
    <title>{{$title}}</title>
</head>
<body>
      <div class = " container">
        <div clas ="alert alert-infor text-centre">
            {{$title}}
        </div>
        <form action="" method= "post" >
            <div class="form-control">
                <label for="address">Gmail:</label>
                <input type="text" name="name" id="name_id" placeholder="nhap gmail ...">
            </div>
            <div class="form-control">
                <label for="name_id">Ten: </label>
                <input type="text" name="name" id="name_id" placeholder="nhap Ten ...">
            </div>
            <div class="form-control">
                <button type="submit" class="btn btn-primary">Gui</button>
            </div>
        </form>
      </div>
</body>
<script src="{{assest('assest/js/bootstap.min.css')}}" ></script>
</html>