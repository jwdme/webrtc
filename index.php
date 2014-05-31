<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WebRTC.jwd.me</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <style>
    body {
        margin-top: 60px;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/random">New Random Room</a>
                    </li>
                    <li><a href="/about">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h2>You</h2>
                <video height="300" id="localVideo"></video>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>Everyone Else</h2>
                <div id="remotesVideos"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="http://simplewebrtc.com/latest.js"></script>
    <script>
var webrtc = new SimpleWebRTC({
    // the id/element dom element that will hold "our" video
    localVideoEl: 'localVideo',
    // the id/element dom element that will hold remote videos
    remoteVideosEl: 'remotesVideos',
    // immediately ask for camera access
    autoRequestMedia: true
});

// we have to wait until it's ready
webrtc.on('readyToCall', function () {
  // you can name it anything
  webrtc.joinRoom('your awesome room name');
});
    </script>
</body>

</html>
