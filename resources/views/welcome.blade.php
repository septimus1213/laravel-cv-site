<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Krisztián Kiss' CV</title>
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/3Dmodels.css') }}" rel="stylesheet" type="text/css" />

        <!-- Model-viewer -->
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Krisztián Kiss</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile mx-auto mb-2" src="{{ asset('assets/img/profile.jpg') }}" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#personalprojects">Personal projects</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#hackerrank">HackerRank</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#models">3D Models</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Krisztián
                        <span class="text-primary">Kiss</span>
                    </h1>
                    <div class="subheading mb-5">
                        +36202152722
                        <a href="mailto:kkrisz1112@gmail.com">kkrisz1112@gmail.com</a>
                    </div>
                    <p class="lead mb-5">I have experience in designing and developing software. I have carried out mulitple personal projects as a hobby.
                        In that time I was using and learning several different programming languages, frameworks and pipelines. I can learn and work with new concepts rather quickly.
                    </p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.linkedin.com/in/kriszti%C3%A1n-kiss-84531a246/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="https://github.com/septimus1213"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://www.hackerrank.com/kkrisz1112"><i class="fab fa-hackerrank"></i></a>
                        <a class="social-icon" href="https://play.google.com/store/apps/developer?id=Kriszti%C3%A1n+Kiss"><i class="fab fa-google-play"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="personalprojects">
                <div class="resume-section-content">
                    <h2 class="mb-5">Personal projects</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Icy Zig-Zag</h3>
                            <p>A small mobile game I made using the Unity Engine, C# scripting and Blender.
                                As the title suggests it's just a re-imagining of the "classic" ZigZag game.
                                During this project I learned about using animations in engines, the object pool pattern and the Whats and Hows
                                of publishing an app on Google Play.
                            </p>
                            <h4><i class="fab fa-google-play"></i><a href="https://play.google.com/store/apps/details?id=com.KrisztianKiss.IcyZigZag"> LINK</a></h4>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Scribo Disco</h3>
                            <p>A blog I made using a Bootstrap template, Python and the Flask framework. Users can register and then comment under posts. If users 
                                have admin right they can write and edit blog posts. User passwords are hashed and salted before saved in the database.
                                In this project I learned about database handling, the importance of hashing and the very basics of cybersecurity.
                            </p>
                            <h4><i class="fas fa-book"></i><a href="https://scribodisco.onrender.com/"> LINK</a></h4>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Other projects</h3>
                            <p>My other published works can be viewed on GitHub and my Google Play page. 
                            </p>
                            <h3><i class="fab fa-github-square"></i><a href="https://github.com/septimus1213"> GitHub</a></h3>
                            <br>
                            <h3><i class="fab fa-google-play"></i><a href="https://play.google.com/store/apps/developer?id=Kriszti%C3%A1n+Kiss"> GooglePlay</a></h3>
                        </div>
                    </div>
                    
                </div>
            </section>
            <hr class="m-0" />
            
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-python"></i></li>
                        <li class="list-inline-item"><i class="fab fa-unity"></i></li>
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-php"></i></li>
                        
                    </ul>
                    <div class="subheading mb-3">Other skills:</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="far fa-hand-point-right"></i></span>
                            Blender, 3D modelling and basic animations
                        </li>
                        <li>
                            <span class="fa-li"><i class="far fa-hand-point-right"></i></span>
                            Krita, image editing and drawing
                        </li>
                        <li>
                            <span class="fa-li"><i class="far fa-hand-point-right"></i></span>
                            Adobe Substance Painter, 3D texturing, painting
                        </li>
                        
                    </ul>
                </div>
            </section>
            <hr class="m-0" />


            <section class="resume-section" id="hackerrank">
                <div class="resume-section-content">
                    <h2 class="mb-5">HackerRank Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="far fa-hand-point-right"></i></span>
                            Python (Basic)
                        </li>
                        <li>
                            <span class="fa-li"><i class="far fa-hand-point-right"></i></span>
                            Problem Solving (Basic)
                        </li>
                        <li>
                            <span class="fa-li"><i class="far fa-hand-point-right"></i></span>
                            SQL (Basic)
                        </li>
                        <li>
                            <span class="fa-li"><i class="far fa-hand-point-right"></i></span>
                            Rest API (Intermediate)
                        </li>
                        
                    </ul>
                </div>
            </section>
            <hr class="m-0" />

            <section class="resume-section" id="models">
                <div class="resume-section-content">
                    <h2 class="mb-5">3D Models</h2>
                    <p>
                        A few models I made using Blender. The textures were painted in Adobe Substance Painter or with Krita and Blender
                        in-built shader editor.
                    </p>

                <div class="modelbox col-lg-4 col-md-6">

                    <?php
                        @include('switch.php');

                        $num = $_GET["num"] ?? 0;
                            if($num<0){
                                $num = 3;
                                }
                            elseif($num>3){
                                $num = 0;
                                }
                        $model = Change($num);    
                    ?>
    
                        <div class="modelbox2">
                        <model-viewer src="../assets/3D Objects/<?php echo $model?>" alt="model" disable-zoom auto-rotate camera-controls touch-action="pan-y"></model-viewer>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                            
                                <form action="/#models" method="get">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="num" value=<?php echo $num - 1;?>>
                                    <h3><li class="page-item"><input class="page-link" type="submit" value="Previous"></li></h3>
                                </form>
                                <br>
                                <form action="/#models" method="get">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="num" value=<?php echo $num + 1;?>>
                                    <h3><li class="page-item"><input class="page-link" type="submit" value="Next"></li></h3>
                                </form>
                            
                            </ul>
                        </nav>
                        <br>
                </div>
                    
                </div>
            </section>
            <hr class="m-0" />




        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        
    </body>
</html>