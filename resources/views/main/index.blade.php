@extends('../template')
@section('title')
    {{$title}}
@endsection
@section('content')
    <!-- Full screen section -->
    <section class="full-screen fw-main-row" style="background-image: url(http://placehold.it/2650x900);">
        <div class="fw-container centered-container tar">
            <div class="container tar fw-col-xs-12 fw-col-sm-6 fw-col-md-5">
                <h2 class="h1"><span class="blue-color">Helping You</span><br>Stay Happy One</h2>
                <p>Check Out Our Services!</p>
                <a href="{{ url('public/assets/main') }}/javascript:void(0);" class="button-style1"><span>CHECK OUT</span></a><a href="{{ url('public/assets/main') }}/javascript:void(0);" class="button-style1 dark"><span>more info</span></a>
            </div>
        </div>
    </section>
    <!-- END Full screen section -->
    <!-- Category items -->
    <section class="fw-main-row pt45 pb20">
        <div class="fw-container">
            <h2 class="heading-decor pb20">Our Directions</h2>
            <div class="fw-row">
                <div class="fw-col-sm-4">
                    <!-- Category item -->
                    <div class="category-item" style="background-image: url(http://placehold.it/500x500)">
                        <div class="centered-container">
                            <a href="{{ url('public/assets/main') }}/private-clinic.html" class="button-style2 white big"><span>PRIVATE CLINIC</span></a>
                        </div>
                    </div>
                    <!-- END Category item -->
                </div>
                <div class="fw-col-sm-4">
                    <!-- Category item -->
                    <div class="category-item" style="background-image: url(http://placehold.it/500x500)">
                        <div class="centered-container">
                            <a href="{{ url('public/assets/main') }}/plastic-surgery.html" class="button-style2 white big"><span>PLASTIC SURGERY</span></a>
                        </div>
                    </div>
                    <!-- END Category item -->
                </div>
                <div class="fw-col-sm-4">
                    <!-- Category item -->
                    <div class="category-item" style="background-image: url(http://placehold.it/500x500)">
                        <div class="centered-container">
                            <a href="{{ url('public/assets/main') }}/dental.html" class="button-style2 white big"><span>DENTAL</span></a>
                        </div>
                    </div>
                    <!-- END Category item -->
                </div>
            </div>
        </div>
    </section>
    <!-- END Category items -->
    <section class="fw-main-row dark-bg pt20" style="background-image: url(http://placehold.it/1980x800)">
        <div class="fw-container">
            <h2 class="heading-decor pb20">Our Directions</h2>
            <!-- Team carousel -->
            <section class="team-carousel">
                <!-- Team item -->
                <div class="team-item">
                    <div class="image"><a href="{{ url('public/assets/main') }}/doctor-personal-page.html"><img src="http://placehold.it/370x270" alt="Dr. Mark Lowson"></a></div>
                    <div class="name">
                        <h4>Dr. Mark Lowson</h4>
                        <span>therapist</span>
                    </div>
                    <div class="timetable">
                        <div class="item">
                            <div class="label">Monday-Friday</div>
                            <div class="value">8:00 - 17:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Saturday</div>
                            <div class="value">10:00 - 16:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Sunday</div>
                            <div class="value">12:00 - 14:00</div>
                        </div>
                    </div>
                    <a href="{{ url('public/assets/main') }}/doctor-personal-page.html" class="button-style2"><span>read profile</span></a>
                </div>
                <!-- END Team item -->
                <!-- Team item -->
                <div class="team-item">
                    <div class="image"><a href="{{ url('public/assets/main') }}/doctor-personal-page.html"><img src="http://placehold.it/370x270" alt="Dr. Lara Crow"></a></div>
                    <div class="name">
                        <h4>Dr. Lara Crow</h4>
                        <span>Nurse</span>
                    </div>
                    <div class="timetable">
                        <div class="item">
                            <div class="label">Monday-Friday</div>
                            <div class="value">8:00 - 17:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Saturday</div>
                            <div class="value">10:00 - 16:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Sunday</div>
                            <div class="value">12:00 - 14:00</div>
                        </div>
                    </div>
                    <a href="{{ url('public/assets/main') }}/doctor-personal-page.html" class="button-style2"><span>read profile</span></a>
                </div>
                <!-- END Team item -->
                <!-- Team item -->
                <div class="team-item">
                    <div class="image"><a href="{{ url('public/assets/main') }}/doctor-personal-page.html"><img src="http://placehold.it/370x270" alt="Dr. Marketa Brown"></a></div>
                    <div class="name">
                        <h4>Dr. Marketa Brown</h4>
                        <span>therapist</span>
                    </div>
                    <div class="timetable">
                        <div class="item">
                            <div class="label">Monday-Friday</div>
                            <div class="value">8:00 - 17:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Saturday</div>
                            <div class="value">10:00 - 16:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Sunday</div>
                            <div class="value">12:00 - 14:00</div>
                        </div>
                    </div>
                    <a href="{{ url('public/assets/main') }}/doctor-personal-page.html" class="button-style2"><span>read profile</span></a>
                </div>
                <!-- END Team item -->
                <!-- Team item -->
                <div class="team-item">
                    <div class="image"><a href="{{ url('public/assets/main') }}/doctor-personal-page.html"><img src="http://placehold.it/370x270" alt="Dr. Mark Lowson"></a></div>
                    <div class="name">
                        <h4>Dr. Mark Lowson</h4>
                        <span>therapist</span>
                    </div>
                    <div class="timetable">
                        <div class="item">
                            <div class="label">Monday-Friday</div>
                            <div class="value">8:00 - 17:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Saturday</div>
                            <div class="value">10:00 - 16:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Sunday</div>
                            <div class="value">12:00 - 14:00</div>
                        </div>
                    </div>
                    <a href="{{ url('public/assets/main') }}/doctor-personal-page.html" class="button-style2"><span>read profile</span></a>
                </div>
                <!-- END Team item -->
                <!-- Team item -->
                <div class="team-item">
                    <div class="image"><a href="{{ url('public/assets/main') }}/doctor-personal-page.html"><img src="http://placehold.it/370x270" alt="Dr. Lara Crow"></a></div>
                    <div class="name">
                        <h4>Dr. Lara Crow</h4>
                        <span>Nurse</span>
                    </div>
                    <div class="timetable">
                        <div class="item">
                            <div class="label">Monday-Friday</div>
                            <div class="value">8:00 - 17:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Saturday</div>
                            <div class="value">10:00 - 16:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Sunday</div>
                            <div class="value">12:00 - 14:00</div>
                        </div>
                    </div>
                    <a href="{{ url('public/assets/main') }}/doctor-personal-page.html" class="button-style2"><span>read profile</span></a>
                </div>
                <!-- END Team item -->
                <!-- Team item -->
                <div class="team-item">
                    <div class="image"><a href="{{ url('public/assets/main') }}/doctor-personal-page.html"><img src="http://placehold.it/370x270" alt="Dr. Marketa Brown"></a></div>
                    <div class="name">
                        <h4>Dr. Marketa Brown</h4>
                        <span>therapist</span>
                    </div>
                    <div class="timetable">
                        <div class="item">
                            <div class="label">Monday-Friday</div>
                            <div class="value">8:00 - 17:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Saturday</div>
                            <div class="value">10:00 - 16:00</div>
                        </div>
                        <div class="item">
                            <div class="label">Sunday</div>
                            <div class="value">12:00 - 14:00</div>
                        </div>
                    </div>
                    <a href="{{ url('public/assets/main') }}/doctor-personal-page.html" class="button-style2"><span>read profile</span></a>
                </div>
                <!-- END Team item -->
            </section>
            <!-- END Team carousel -->
        </div>
    </section>
    <section class="fw-main-row pt40 pb40">
        <div class="fw-container">
            <h2 class="heading-decor pb35">Our Services</h2>
            <div class="fw-row">
                <!-- Icon box -->
                <div class="fw-col-sm-6 icon-box-item">
                    <div class="icon medical-icon med-icon-stethoscope"></div>
                    <div class="text">
                        <div class="h4">Therapiya</div>
                        <p>Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website</p>
                    </div>
                </div>
                <!-- END Icon box -->
                <!-- Icon box -->
                <div class="fw-col-sm-6 icon-box-item">
                    <div class="icon medical-icon med-icon-drugs-3"></div>
                    <div class="text">
                        <div class="h4">Pharmocology</div>
                        <p>Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website</p>
                    </div>
                </div>
                <!-- END Icon box -->
            </div>
            <div class="fw-row">
                <!-- Icon box -->
                <div class="fw-col-sm-6 icon-box-item">
                    <div class="icon medical-icon med-icon-premolar"></div>
                    <div class="text">
                        <div class="h4">Dentistry</div>
                        <p>Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website</p>
                    </div>
                </div>
                <!-- END Icon box -->
                <!-- Icon box -->
                <div class="fw-col-sm-6 icon-box-item">
                    <div class="icon medical-icon med-icon-cardiogram-2"></div>
                    <div class="text">
                        <div class="h4">Cardiology</div>
                        <p>Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website</p>
                    </div>
                </div>
                <!-- END Icon box -->
            </div>
            <div class="fw-row">
                <!-- Icon box -->
                <div class="fw-col-sm-6 icon-box-item">
                    <div class="icon medical-icon med-icon-virus"></div>
                    <div class="text">
                        <div class="h4">Virusology</div>
                        <p>Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website</p>
                    </div>
                </div>
                <!-- END Icon box -->
                <!-- Icon box -->
                <div class="fw-col-sm-6 icon-box-item">
                    <div class="icon medical-icon med-icon-eye"></div>
                    <div class="text">
                        <div class="h4">Eye Surgery</div>
                        <p>Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website</p>
                    </div>
                </div>
                <!-- END Icon box -->
            </div>
        </div>
    </section>
    <section class="fw-main-row dark-bg pt35 pb20" style="background-image: url(http://placehold.it/1980x350)">
        <div class="fw-container">
            <div class="fw-row">
                <!-- Icon box style 2 -->
                <div class="fw-col-xs-6 fw-col-sm-6 fw-col-md-3 icon-box2-item">
                    <div class="icon medical-icon med-icon-cardiogram"></div>
                    <span>over</span>
                    <div class="number animateNumber" data-num="180">180</div>
                    <h4>saved hearts</h4>
                </div>
                <!-- END Icon box style 2 -->
                <!-- Icon box style 2 -->
                <div class="fw-col-xs-6 fw-col-sm-6 fw-col-md-3 icon-box2-item">
                    <div class="icon medical-icon med-icon-premolar-2"></div>
                    <span>over</span>
                    <div class="number animateNumber" data-num="2568">2568</div>
                    <h4>saved tooth</h4>
                </div>
                <!-- END Icon box style 2 -->
                <!-- Icon box style 2 -->
                <div class="fw-col-xs-6 fw-col-sm-6 fw-col-md-3 icon-box2-item">
                    <div class="icon medical-icon med-icon-lungs"></div>
                    <span>over</span>
                    <div class="number animateNumber" data-num="112">112</div>
                    <h4>saved lungs</h4>
                </div>
                <!-- END Icon box style 2 -->
                <!-- Icon box style 2 -->
                <div class="fw-col-xs-6 fw-col-sm-6 fw-col-md-3 icon-box2-item">
                    <div class="icon medical-icon med-icon-stomach"></div>
                    <span>over</span>
                    <div class="number animateNumber" data-num="235">235</div>
                    <h4>saved stomaches</h4>
                </div>
                <!-- END Icon box style 2 -->
            </div>
        </div>
    </section>
    <section class="fw-main-row pt40">
        <div class="fw-container">
            <h2 class="heading-decor pb20">Latest from blog</h2>
            <div class="fw-row">
                <!-- Blog item -->
                <div class="blog-item fw-col-md-4">
                    <div class="fw-row">
                        <div class="image fw-col-sm-5 fw-col-md-12"><a href="{{ url('public/assets/main') }}/blog-post.html"><img src="http://placehold.it/370x270" alt="New investigations"></a></div>
                        <div class="fw-col-sm-7 fw-col-md-12">
                            <h4><a href="{{ url('public/assets/main') }}/blog-post.html">New investigations</a></h4>
                            <div class="post-date">29/07/2016</div>
                            <p>Praesent tincidunt molestie libero mollis porta. Faucibus leo, ac aliquet magna. Vivamus ullamcorper mollis leo, at sagittis mi pellentesque quis.</p>
                            <a href="{{ url('public/assets/main') }}/blog-post.html" class="button-style2 gray min">read more</a>
                        </div>
                    </div>
                </div>
                <!-- END Blog item -->
                <!-- Blog item -->
                <div class="blog-item fw-col-md-4">
                    <div class="fw-row">
                        <div class="image fw-col-sm-5 fw-col-md-12"><a href="{{ url('public/assets/main') }}/blog-post.html"><img src="http://placehold.it/370x270" alt="Your Health"></a></div>
                        <div class="fw-col-sm-7 fw-col-md-12">
                            <h4><a href="{{ url('public/assets/main') }}/blog-post.html">Your Health</a></h4>
                            <div class="post-date">29/07/2016</div>
                            <p>Praesent tincidunt molestie libero mollis porta. Faucibus leo, ac aliquet magna. Vivamus ullamcorper mollis leo, at sagittis mi pellentesque quis.</p>
                            <a href="{{ url('public/assets/main') }}/blog-post.html" class="button-style2 gray min">read more</a>
                        </div>
                    </div>
                </div>
                <!-- END Blog item -->
                <!-- Blog item -->
                <div class="blog-item fw-col-md-4">
                    <div class="fw-row">
                        <div class="image fw-col-sm-5 fw-col-md-12"><a href="{{ url('public/assets/main') }}/blog-post.html"><img src="http://placehold.it/370x270" alt="Researches"></a></div>
                        <div class="fw-col-sm-7 fw-col-md-12">
                            <h4><a href="{{ url('public/assets/main') }}/blog-post.html">Researches</a></h4>
                            <div class="post-date">29/07/2016</div>
                            <p>Praesent tincidunt molestie libero mollis porta. Faucibus leo, ac aliquet magna. Vivamus ullamcorper mollis leo, at sagittis mi pellentesque quis.</p>
                            <a href="{{ url('public/assets/main') }}/blog-post.html" class="button-style2 gray min">read more</a>
                        </div>
                    </div>
                </div>
                <!-- END Blog item -->
            </div>
        </div>
    </section>
@endsection