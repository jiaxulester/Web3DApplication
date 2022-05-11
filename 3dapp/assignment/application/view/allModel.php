<!doctype html>
<html lang="en">

<head id="top">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Modle</title>

    <!-- CSS and JS and Font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../application/css/custom.css">
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
</head>

<body id="fanta-theme">
    <!-- header -->
    <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
        <!-- Logo and navigation bar -->
        <div class="container">
            <div class="logo">
                <a class="navbar-brand" href="home">
                    <h1>1</h1>
                    <h1>oca</h1>
                    <h2>Cola</h2>
                    <h3>Journey</h3>
                    <p>Refreshing the world, one story at a time</p>
                </a>
            </div>
            <!-- 3-bar icon -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <!-- END Logo and navigation bar -->


        <!-- Links to other pages -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a id="navFanta" class="nav-link" href="allModel" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Fanta Model" data-content="3D Apps is a final year and postgraduate module ...">Model</a>
                </li>
                <li class="nav-item">
                    <a id="navAbout" class="nav-link" href="about" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About My Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                </li>
            </ul>
        </div>
        <!-- END Links to other pages -->
    </nav>
    <br>
    <!-- END header -->

    <!-- Main contents -->
    <div class="container-fluid main_contents">

        <!-- 3D Model -->
        <div class="row">
            <div class="col-sm-3 cardLeft">
                <div class="card text-right">
                    <div class="card-header">
                        DESCRIPTION
                    </div>
                    <div class="DES_heading">
                        NAME: <div id="name"></div>
                    </div>
                    <br>
                    <div class="DES_heading">
                        INFO: <div id="info"></div>
                    </div>
                    <br>
                    <div class="DES_heading">
                        INGREDIENTS: <div id="ingredients"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-left">
                    <div class="card-bodymodel">
                        <div>
                            <h1 class="'card-title" id="modelTitle"></h1>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary active" id="fantaX3d">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Fanta
                                </label>
                                <label class="btn btn-secondary" id="spriteX3d">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Sprite
                                </label>
                                <label class="btn btn-secondary" id="oasisX3d">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Oasis
                                </label>
                            </div>
                        </div>
                        <div class="model3D">
                            <x3d id="wire">
                                <scene>
                                    <inline id="x3dUrl" nameSpaceName="model" mapDEFToID="true"></inline>
                                </scene>
                            </x3d>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card text-left cardRight">
                    <div class="card-header">
                        CONTROL DESK
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Camera Views
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" onclick="Front();">Front</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" onclick="Back();">Back</a>
                            <a class="dropdown-item" href="#" onclick="Left();">Left</a>
                            <a class="dropdown-item" href="#" onclick="Right();">Right</a>
                            <a class="dropdown-item" href="#" onclick="Top();">Top</a>
                            <a class="dropdown-item" href="#" onclick="Bottom();">Bottom</a>
                        </div>
                    </div>
                    <br>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Animation
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" onclick="spin();">Rot-X</a>
                            <a class="dropdown-item" href="#">Rot-Y</a>
                            <a class="dropdown-item" href="#">Rot-Z</a>
                            <a class="dropdown-item" href="#" onclick="stopRotation();">Stop</a>
                        </div>
                    </div>
                    <br>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Render
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Polygon</a>
                            <a class="dropdown-item" href="#" onclick="wireFrame();">Wireframe</a>
                            <a class="dropdown-item" href="#">Vertex</a>
                        </div>
                    </div>
                    <br>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Lights
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" onclick="defaultLight();">Default</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" onclick="omniLight();">Onmi On/Off</a>
                            <a class="dropdown-item" href="#" onclick="targetLight();">Target On/Off</a>
                            <a class="dropdown-item" href="#" onclick="headlight();">Headlight On/Off</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END 3DModel -->

        <!-- GalleryImg -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                        GALLERY
                    </div>
                    <div class="text-center galleryImg">
                        <img id="gallery-img0" width="360" height="360">
                        <img id="gallery-img1" width="360" height="360">
                        <img id="gallery-img2" width="360" height="360">
                        <img id="gallery-img3" width="360" height="360">
                        <img id="gallery-img4" width="360" height="360">
                    </div>
                </div>
            </div>
        </div>
        <!-- END GalleryImg -->

        <!-- Video -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                        More Video
                    </div>
                    <iframe id="fantaVideo" src="https://youtube.com/embed/a5R6MwTlEf4">
                    </iframe>
                    <iframe id="spriteVideo" src="https://youtube.com/embed/QeSL7_ZNe9k" style="display:none;">
                    </iframe>
                    <iframe id="oasisVideo" src="https://youtube.com/embed/9yC9TV0Fcn4" style="display:none;">
                    </iframe>
                </div>
            </div>
        </div>
        <!--END Video -->
    </div>
    <!-- END Main contents -->


    <!-- Footer -->
    <br>
    <nav class="navbar navbar-expand-sm footer" id="footer">
        <div class="container-fluid">
            <div class="navbar-text float-left copyright">
                <p>
                    <span class="align-baseline">&copy 2022 Mobile Web 3D Application</span> |
                    <a href="javascript:changeLook()">Restyle</a>
                    <a href="javascript:changeBack()">Reset</a>
                </p>
            </div>
            <div class="navbar-text float-right social">
                <a href="#"><i class="fab fa-facebook-square fa-2x" style="font-size: 30px; color: blue;"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x" style="font-size: 30px; color: skyblue;"></i></a>
                <a href="#"><i class="fab fa-google-plus fa-2x" style="font-size: 30px; color: green;"></i></a>
                <a href="https://github.com/jiaxulester/Web3DApplication/tree/main/3dapp/assignment"><i class="fab fa-github-square fa-2x" style="font-size: 30px; color: grey;"></i></a>
            </div>
        </div>
    </nav>
    <!-- Footer END -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="../application/js/fontawesom.js" crossorigin="anonymous"></script>
    <script src="../application/js/custom.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ef29cbc6e8.js" crossorigin="anonymous"></script>
    <script type='text/javascript' src='../application/js/x3dom.js'></script>
    <script type='text/javascript' src="../application/js/swap_restyle.js"></script>
    <script src="../application/js/get3dModels.js"></script>
    <script src="../application/js/modellnteractions.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>