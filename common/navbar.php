<?php
function active_page($pagename)
{
    $url = explode("/", $_SERVER['REQUEST_URI']);
    if ($pagename == end($url)) {
        echo "active";
    } else {
        echo "";
    }
}
?>
<div class="container-fluid text-primary pt-3 pb-1 d-lg-flex d-md-flex d-none top-bar">
    <div class="container pb-2">
        <div class="d-flex align-items-center justify-content-between flex-md-row flex-lg-row flex-column">
            <div class="d-flex align-items-center" data-aos="slide-right" data-aos-duration="500">
                <i class="bi bi-telephone-inbound fs-5"></i>
                <div class="ms-3">
                    <p class="mb-0">+91-970 545 4000</p>
                </div>
            </div>
            <div class="d-flex align-items-center" data-aos="slide-right" data-aos-duration="1500">
                <i class="bi bi-geo-alt fs-5"></i>
                <div class="ms-3">
                    <p class="mb-0">Mehdipatnam, Hyderabad</p>
                </div>
            </div>
            <div class="d-none d-lg-flex" data-aos="slide-right" data-aos-duration="2500">
                <a class="btn-social d-flex align-items-center justify-content-center ms-2"
                    href="https://twitter.com/ambrits" target="_blank"><i class="bi bi-twitter"></i></a>
                <a class="btn-social d-flex align-items-center justify-content-center ms-2"
                    href="https://www.facebook.com/ambrits/" target="_blank"><i class="bi bi-facebook"></i></a>
                <a class="btn-social d-flex align-items-center justify-content-center ms-2"
                    href="https://www.instagram.com/ambrits.in" target="_blank"><i class="bi bi-instagram"></i></a>
                <a class="btn-social d-flex align-items-center justify-content-center ms-2"
                    href="https://www.youtube.com/c/ambrits" target="_blank"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-white sticky-top shadow">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
            <a href="index.php" class="navbar-brand">
                <img src="assets/images/ambrits.png" class="img-fluid" alt="Ambrits">
            </a>
            <button type="button" class="navbar-toggler me-0 collapsed" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                <div class="navbar-nav ms-auto">
                    <a href="index.php" class="nav-item nav-link <?php active_page("index.php"); ?>">Home</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                        <div class="dropdown-menu bg-light m-0">
                            <ul>
                                <li>
                                    <a href="about-us.php"
                                        class="dropdown-item <?php active_page("about-us.php"); ?>">About Institute</a>
                                </li>
                                <li>
                                    <a href="about-rasshadahmed.php"
                                        class="dropdown-item <?php active_page("about-rasshadahmed.php"); ?>">About
                                        Rasshad
                                        Ahmed</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Courses</a>
                        <div class="dropdown-menu bg-light m-0">
                            <ul>
                                <li>
                                    <a href="ielts-academic.php"
                                        class="dropdown-item <?php active_page("ielts-academic.php"); ?>">IELTS
                                        Academic/General</a>
                                </li>
                                <li>
                                    <a href="ielts-fast-track.php"
                                        class="dropdown-item <?php active_page("ielts-fast-track.php"); ?>">IELTS
                                        Fast-Track</a>
                                </li>
                                <li>
                                    <a href="pte.php" class="dropdown-item <?php active_page("pte.php"); ?>">PTE</a>
                                </li>
                                <li>
                                    <a href="pte-fast-track.php"
                                        class="dropdown-item <?php active_page("pte-fast-track.php"); ?>">PTE
                                        Fast-Track</a>
                                </li>
                                <li>
                                    <a href="pte-online.php"
                                        class="dropdown-item <?php active_page("pte-online.php"); ?>">PTE
                                        Online</a>
                                </li>
                                <li>
                                    <a href="duolingo.php"
                                        class="dropdown-item <?php active_page("duolingo.php"); ?>">Duolingo</a>
                                </li>
                                <li>
                                    <a href="learn-english.php"
                                        class="dropdown-item <?php active_page("learn-english.php"); ?>">Learn
                                        English (Beginners)</a>
                                </li>
                                <li>
                                    <a href="spoken-english.php"
                                        class="dropdown-item <?php active_page("spoken-english.php"); ?>">Spoken
                                        English</a>
                                </li>
                                <li>
                                    <a href="english-speaking-course.php"
                                        class="dropdown-item <?php active_page("english-speaking-course.php"); ?>">English
                                        Speaking Course</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Achievements</a>
                        <div class="dropdown-menu bg-light m-0">
                            <ul>
                                <li>
                                    <a href="our-certifications.php"
                                        class="dropdown-item <?php active_page("our-certifications.php"); ?>">Our
                                        Certifications</a>
                                </li>
                                <li>
                                    <a href="our-results.php"
                                        class="dropdown-item <?php active_page("our-results.php"); ?>">Our Results</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="gallery.php" class="nav-item nav-link ">Gallery</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Contact</a>
                        <div class="dropdown-menu bg-light m-0">
                            <ul>
                                <li>
                                    <a href="slot-booking.php"
                                        class="dropdown-item <?php active_page("slot-booking.php"); ?>">Slot Booking</a>
                                </li>
                                <li>
                                    <a href="contact-us.php"
                                        class="dropdown-item <?php active_page("contact-us.php"); ?>">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>