<!DOCTYPE html>
<html lang="en">
<head>
    <title>OsteoAI</title>
    <meta charset="utf-8"/>
    <meta name="author" content="OstioAI"/>
    <meta name="description" content="Med"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"/>

    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--suppress HtmlUnknownTarget -->
    <link rel="shortcut icon" type="image/png" href="assets/images/RedRose2.svg.png">
    <!--This is Heads-->
    @include('blade-scafolding.partials.headOsteo')
    @include('blade-scafolding.Loader.Loader')

</head>

<body>

@include('blade-scafolding.layout.RedirectsHome')
<div class="Box1">
    <div class="parentitem">
        <!--suppress HtmlUnknownTarget -->
        <img id="img1" src="/assets/images/other/logo.png" alt="MiniLogo"/>
    </div>
</div>

<div class="explain">
    <div class="logobox">
        <!--suppress HtmlUnknownTarget -->
        <img id="img2" src="/assets/images/other/OsteoAILogo.png" alt="Logo"/>
    </div>
</div>
<div class="bottompic">
    <!--suppress HtmlUnknownTarget -->
    <img id="img3" src="/assets/images/other/bottompic.png" alt="BottomPicture"/>
</div>
</body>

</html>