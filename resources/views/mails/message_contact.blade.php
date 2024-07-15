<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <br>
    <br>
    <div class="container2">

        <div class="card" style="border:1px rgb(217, 217, 217) solid;box-shadow: 3px 3px 3px rgb(213, 212, 211);padding: 40px;border-radius: 10px;max-width: 800px;margin:auto">
                <div class="" style="display:flex;align-items:center;justify-content:center">
                    <div class="form-inline ">
                        <img style="width:60px;" class="mr-2" src="{{$message->embed(asset('public\images\logos\Icono-p.png'))}}" alt="">
                        <img style="width:110px;" src="{{$message->embed(asset('public\images\logos\letras-negras.png'))}}" alt="">
                    </div>
                </div>
            <h1 class="" style="color:black">Message sent from Master Painting Web</h1>
            <p style="font-size:17px" class="m-0"><span class=" font-600" style="font-weight: 600;color:rgb(4, 172, 184)">Sender's email:</span>
                {{$data['email']}}
            </p>

            <p style="color:black;font-size:17px" class="">
                <span class="font-600" style="font-weight: 600;color:rgb(4, 172, 184)">Message:</span>
                {{$data['message']}}
            </p>
            <br>
            <div class="" style="text-align:center">
                <a href="{{url('/')}}" class="btn btn-primary" style="background:rgb(48,150,225);color: white;padding: 10px;border-radius: 5px;margin: auto;font-size: 15px;text-decoration:none">Go to Master Painting Web</a>
            </div>

            <br>
            <p class="" style="text-align:center;line-height:1;font-size:13px;color:black">
                Do not reply to this message. If you want to contact the sender, check your email at the top of this message, and write a new one.
            </p>

        </div>

    </div>
</body>
</html>
