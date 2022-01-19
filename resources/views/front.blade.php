<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--============= Header part Start --=============-->
    <div class="full-wrapper header">
        <div class="wrapper">
            <div class="logo">
                <img src="images/logo.png" alt="logo">
            </div>
            <div class="menu">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">portfolio</a></li>
                    <li><a href="#">services</a></li>
                    <li><a href="#">journal</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <!--============= Header part End --=============-->

    <!--============= Banner part start --=============-->
    <div class="full-wrapper banner" style="background: url({{asset('img/'. $slider->image)}}); background-size:cover;">
        <div class="wrapper">
            <div class="banner-text">
                <h1>{{$slider->heading}}</h1>
                <h3>{{$slider->title}}</h3>
                <p>{{$slider->description}}</p>
            </div>
        </div>
    </div>
    <!--============= Banner  part End --=============-->

    <!--============= About  part start --=============-->
    <div class="full-wrapper">
        <div class="wrapper">
            <div class="about">
                <h2>{{$service->service_heading}}</h2>
                <h3>{{$service->service_title}}</h3>
            </div>
        </div>
    </div>
    <!--============= About  part End --=============-->

    <!--============= Service  part start --=============-->
    <div class="full-wrapper">
        <div class="wrapper">
            <div class="head">
                <h2>What services do I offer</h2>
            </div>
            <div class="service-main">
                <div class="service-item">
                    <img src="images/service1.jpg" alt="service1">
                    <h3>Landscape</h3>
                    <p>Curabitur blandit tempus porttitor. Duis mollis inceptos mollisest commodo luctus erat. </p>
                </div>
                <div class="service-item">
                    <img src="images/service1.jpg" alt="service1">
                    <h3>Landscape</h3>
                    <p>Curabitur blandit tempus porttitor. Duis mollis inceptos mollisest commodo luctus erat. </p>
                </div>
                <div class="service-item mr-none">
                    <img src="images/service1.jpg" alt="service1">
                    <h3>Landscape</h3>
                    <p>Curabitur blandit tempus porttitor. Duis mollis inceptos mollisest commodo luctus erat. </p>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
    <!--============= Service  part End --=============-->

    <!--============= Gallery  part Start --=============-->
    <div class="full-wrapper gal-bg">
        <div class="head head2">
            <h2>Latest ınstagram shots</h2>
        </div>
        <div class="gallery-main">
            <div class="gal-item">
                <img src="images/gal-1.jpg" alt="gal1">
            </div>
            <div class="gal-item">
                <img src="images/gal-1.jpg" alt="gal1">
            </div>
            <div class="gal-item">
                <img src="images/gal-1.jpg" alt="gal1">
            </div>
            <div class="gal-item">
                <img src="images/gal-1.jpg" alt="gal1">
            </div>
            <div class="clr"></div>
        </div>
        <div class="btn">
            <a href="#"><i class="fa fa-instagram"></i>Instagram page</a>
        </div>
    </div>
    <!--============= Gallery  part End --=============-->

    <!--============= Journal  part start --=============-->
    <div class="full-wrapper journal">
        <div class="wrapper">
            <div class="head head2 head3">
                <h2>From the Journal</h2>
            </div>
            <div class="journal-main">
                <div class="journal-item">
                    <h3>Pellentesque Malesuada Vulputate</h3>
                    <h4>21.04.2014 / Photography, Journal</h4>
                    <img src="images/journal1.jpg" alt="journal1">
                    <p>Curabitur blandit tempus porttitor. Duis at vollisky inceptos mollisestor commodo luctus erat. Morbi risus, porta consectetur vestibulum at eros.</p>
                    <div class="journal-btm">
                        <div class="btm-left">
                            <a href="#">Continue Reading</a>
                        </div>
                        <div class="btm-right">
                            <h5><i class="fa fa-heart-o"></i><span>35</span></h5>
                        </div>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="journal-item">
                    <h3>Pellentesque Malesuada Vulputate</h3>
                    <h4>21.04.2014 / Photography, Journal</h4>
                    <img src="images/journal1.jpg" alt="journal1">
                    <p>Curabitur blandit tempus porttitor. Duis at vollisky inceptos mollisestor commodo luctus erat. Morbi risus, porta consectetur vestibulum at eros.</p>
                    <div class="journal-btm">
                        <div class="btm-left">
                            <a href="#">Continue Reading</a>
                        </div>
                        <div class="btm-right">
                            <h5><i class="fa fa-heart-o"></i><span>35</span></h5>
                        </div>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="journal-item mr-none">
                    <h3>Pellentesque Malesuada Vulputate</h3>
                    <h4>21.04.2014 / Photography, Journal</h4>
                    <img src="images/journal1.jpg" alt="journal1">
                    <p>Curabitur blandit tempus porttitor. Duis at vollisky inceptos mollisestor commodo luctus erat. Morbi risus, porta consectetur vestibulum at eros.</p>
                    <div class="journal-btm">
                        <div class="btm-left">
                            <a href="#">Continue Reading</a>
                        </div>
                        <div class="btm-right">
                            <h5><i class="fa fa-heart-o"></i><span>35</span></h5>
                        </div>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
    <!--============= Journal  part End --=============-->

    <!--============= about n service  part Start --=============-->
    <div class="full-wrapper abser-main">
        <div class="wrapper">
            <div class="abser-left">
                <div class="head head2 head3">
                    <h2>From the Journal</h2>
                </div>
                <div>
                    <div class="abser-left-img">
                        <img src="images/about-img.jpg" alt="about-img">
                    </div>
                    <div class="abser-left-text">
                        <h4>Maecenas faucibus molli interdum. Cras mattis consectetur purus sitor amet sed donec malesuada ullamcorper odio.</h4>
                        <p>Curabitur blandit tempus porttitor. Vollisky inceptos mollisestor commodo luctus. Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vestibulum id ligulas semper. Cum sociis natoque penatibus et magnis maecenas. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac egestas eget quam.</p>
                    </div>
                </div>
            </div>
            <div class="abser-left mr-none">
                <div class="head head2 head3">
                    <h2>From the Journal</h2>
                </div>
                <div class="service-text-main">
                    <div class="text-icon">
                        <img src="images/icon.png" alt="cam-icon">
                    </div>
                    <div class="text-txt">
                        <h3>Photography</h3>
                        <p>Curabitur blandit tempus porttitor. Duis at vollisky inceptos mollisestor commodo luctus erat. Morbi risus, porta consectetur vestibulum at eros.</p>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="service-text-main">
                    <div class="text-icon">
                        <img src="images/icon.png" alt="cam-icon">
                    </div>
                    <div class="text-txt">
                        <h3>Photography</h3>
                        <p>Curabitur blandit tempus porttitor. Duis at vollisky inceptos mollisestor commodo luctus erat. Morbi risus, porta consectetur vestibulum at eros.</p>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="service-text-main">
                    <div class="text-icon">
                        <img src="images/icon.png" alt="cam-icon">
                    </div>
                    <div class="text-txt">
                        <h3>Photography</h3>
                        <p>Curabitur blandit tempus porttitor. Duis at vollisky inceptos mollisestor commodo luctus erat. Morbi risus, porta consectetur vestibulum at eros.</p>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <!--============= about n service  part End --=============-->

    <!--=============Footer part End --=============-->
    <div class="full-wrapper footer-bg">
        <div class="wrapper">
            <div class="footer-item">
                <div class="head">
                    <h2>From the Journal</h2>
                </div>
                <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. </p>
                <div class="address">
                    <div class="address-left">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="address-right">
                        <p>Moonshine Street No: 14/05
                            Light City, Jupiter</p>
                    </div>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <!--============= Footer  part End --=============-->






    <!--
   <div class="full-wrapper">
       <div class="wrapper"></div>
   </div>
-->


</body>

</html>