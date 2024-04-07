<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Resume Website Template Free Download</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Resume Website Template Free Download" name="keywords">
        <meta content="Resume Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="webpage/style.css" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <div class="wrapper">
            <div class="sidebar">
                <div class="sidebar-header">
                    <img src="webpage/img/post.png" alt="Image">
                </div>
                <div class="sidebar-content">
                    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">Navigation</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#header">Dashboard<i class="fa fa-home"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About<i class="fa fa-address-card"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#education">Education<i class="fa fa-address-card"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#experience">Experience<i class="fa fa-star"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#work">Work<i class="fa fa-file-archive"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact<i class="fa fa-envelope"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Log In<i class="fa fa-login"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="sidebar-footer">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="content">
                <!-- Header Start -->
                <div class="header" id="header">
                    <div class="content-inner">
                        <p>I'm</p>
                        <h1>Joshua Abordo</h1>
                        <h2></h2>
                        <div class="typed-text">Web Designer, Web Developer, Front End Developer, Apps Developer, Graphic Designer</div>
                    </div>
                </div>
                <!-- Header End -->
                
                <!-- Large Button Start -->
                <div class="large-btn">
                    <div class="content-inner">
                        <a class="btn" href="#"><i class="fa fa-download"></i>Resume</a>
                        <a class="btn" href="#"><i class="fa fa-hands-helping"></i>Hire Me</a>
                    </div>
                </div>
                <!-- Large Button End -->
                
                <!-- About Start -->
                <div class="about" id="about">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>About Me</h2>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-5">
                                <img src="webpage/img/post.png" alt="Image">
                            </div>
                            <div class="col-md-6 col-lg-7">
                                <p>
                                I am pursuing a bachelor of science in technology at MLG College of Learning, where I am in my third year of studies. With a passion for innovation and a keen interest in the ever-evolving landscape of IT, I am eager to learn and explore web development, graphic design, and programming.
                                </p>
                                <a class="btn" href="#">Hire Me</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="skills">
                                    @foreach($skill as $skills)
                                    <div class="skill-name">
                                        <p>{{ $skills->skill_name }}</p><p>{{ $skills->percent }}</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills->percent }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                @endforeach

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skills">
                                    <div class="skill-name">
                                        <p>Photoshop</p><p>25%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="skill-name">
                                        <p>Photography</p><p>25%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About End -->
                
                <!-- Education Start -->
                <div class="education" id="education">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Education</h2>
                        </div>
                        <div class="row align-items-center">
                        @foreach($education as $education)
                            <div class="col-md-5 mb-4">
                                <div class="edu-col">
                                    <span>{{$education->school_year}}</span>
                                    <h3>{{$education->school_name}}</h3>
                                    <p>{{$education->description}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>    
                <!-- Education Start -->
                
                <!-- Experience Start -->
                <div class="experience" id="experience">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Experience</h2>
                        </div>
                        <div class="row align-items-center">
                        @foreach($experience as $experience)
                            <div class="col-md-5 mb-5">
                                <div class="exp-col">
                                    <span>{{$experience->year}}</span>
                                    <h3>{{$experience->job_title}}</h3>
                                    <h4>{{$experience->company_name}}</h4>
                                    <h5>School Project</h5>
                                    <p>{{$experience->description}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Experience Start -->
                
                <!-- Portfolio Start -->
                <div class="work" id="work">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Work</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul id="work-flters">
                                    <li data-filter="*" class="filter-active">All</li>
                                    <li data-filter=".dig-pho">Photoshop</li>
                                    <li data-filter=".dig-phot">Photography</li>
                                </ul>
                            </div>
                        </div>
                            <div class="row work-container">
                                 @foreach($work as $works)
                                     <div class="col-lg-4 col-md-6 work-item web-des">
                                        <div class="work-wrap">
                                            <figure>
                                                <img src="{{ asset('storage/'. $works->picture) }}" class="img-fluid" alt="">
                                                    <a href="{{ asset('storage/'. $works->picture) }}" data-lightbox="work" data-title="{{ $works->title }}" class="link-preview" title="Preview"><i class="fa fa-eye"></i></a>
                                                    <a href="#" class="link-details" title="More Details"><i class="fa fa-link"></i></a>
                                                    <a class="work-title" href="#">{{ $works->title }} <span>{{ $works->type }}</span></a>
                                                </figure>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                <!-- Portfolio Start -->
                
                <!-- Contact Start -->
                <div class="contact" id="contact">
                    <div class="content-inner">
                        <div class="content-header">
                            <h2>Contact</h2>
                        </div>
                        <div class="row align-items-center">
                        @foreach($contact as $contact)
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <p><i class="fa fa-user"></i>{{$contact->name}}</p>
                                    <p><i class="fa fa-tag"></i>{{$contact->job_name}}</p>
                                    <p><i class="fa fa-envelope"></i><a href="mailto:info@example.com">{{$contact->email}}</a></p>
                                    <p><i class="fa fa-phone"></i><a href="tel:+1234567890">{{$contact->number}}</a></p>
                                    <p><i class="fa fa-map-marker"></i>{{$contact->address}}</p>
                                    <div class="social">
                                        <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                        <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                <div class="form">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" placeholder="Your Name" />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="email" class="form-control" placeholder="Your Email" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject" />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                        </div>
                                        <div><button class="btn" type="submit">Send Message</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact End -->
                
                <!-- Footer Start -->
                <div class="footer">
                    <div class="content-inner">
                        <div class="row align-items-center">
                            <div class="col-md-6    ">
                                <p>&copy; Copyright <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                            </div>
                            <div class="col-md-6">
                                <p>Powered by <a href="https://htmlcodex.com">HTML Codex</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Start -->
            </div>
        </div>
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        <script src="lib/typed/typed.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
