<?php include 'include/head.php'; ?>

<body>
    <?php include 'include/header.php'; ?>
    <style>
        * {
            box-sizing: border-box;
        }

        .book-section {
            height: 100vh;
            width: 100%;
            padding: 40px 0;
            text-align: center;
        }

        .book-section>.container {
            height: 400px;
            width: 500px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2%;
            margin-bottom: 30px;
            perspective: 1200px;
        }

        .container>.right {
            position: absolute;
            height: 100%;
            width: 50%;
            transition: 0.7s ease-in-out;
            transform-style: preserve-3d;
        }

        .book-section>.container>.right {
            right: 0;
            transform-origin: left;
            border-radius: 10px 0 0 10px;
        }

        .right>figure.front,
        .right>figure.back {
            margin: 0;
            height: 100%;
            width: 100%;
            position: absolute;
            left: 0;
            top: 0;
            background-size: 200%;
            background-repeat: no-repeat;
            backface-visibility: hidden;
            background-color: white;
            overflow: hidden;
        }

        .right>figure.front {
            background-position: right;
            border-radius: 0 10px 10px 0;
            box-shadow: 2px 2px 15px -2px rgba(0, 0, 0, 0.2);
        }

        .right>figure.back {
            background-position: left;
            border-radius: 10px 0 0 10px;
            box-shadow: -2px 2px 15px -2px rgba(0, 0, 0, 0.2);
            transform: rotateY(180deg);
        }

        .flip {
            transform: rotateY(-180deg);
        }

        .flip::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            z-index: 10;
            width: 100%;
            height: 100%;
            border-radius: 0 10px 10px 0;
            background-color: rgba(0, 0, 0, 0.1);
        }

        .book-section>button {
            border: 2px solid #ef9f00;
            background-color: transparent;
            color: #ef9f00;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
            transition: 0.3s ease-in-out;
        }

        .book-section>button:focus,
        .book-section>button:active {
            outline: none;
        }

        .book-section>p {
            color: rgba(0, 0, 0, 0.7);
            font-family: calibri;
            font-size: 24px;
        }

        .book-section>p>a {
            text-decoration: none;
            color: #ef9f00;
        }

        .book-section>button:hover {
            background-color: #ef9f00;
            color: #fff;
        }

        .front#cover,
        .back#back-cover {
            background-color: #ffcb63;
            font-family: calibri;
            text-align: left;
            padding: 0 30px;
        }

        .front#cover h1 {
            color: #fff;
        }

        .front#cover p {
            color: rgba(0, 0, 0, 0.8);
            font-size: 14px;
        }

        h1.the-heading {
            font-size: 28px;
            padding-top: 100px;
        }

        .img-width img {
            width: 100%;
        }

        p.book-p {
            text-align: left;
            padding: 10px;
        }
    </style>

    <div class="header-height"></div>

    <div class="pager-header">
        <div class="container">
            <div class="page-content">
                <h2>About Us</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </div>
        </div>
    </div><!-- /Page Header -->

    <section class="about-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="row about-wrap">
                <!-- <div class="col-md-6 xs-padding">
                        <div class="about-image">
                            <img src="img/about.png" alt="about image">
                        </div>
                    </div> -->
                <div class="col-md- xs-padding">
                    <div class="about-content">
                        <h2 style="text-align: center">Our Motivation</h2>

                        <p>Back in 2004, Our Founder and President Mr. Mrinal Kanti Bhanja noticed a <bold>very common problem</bold>: “About how the youth of our country are ignorant of the social problems that exist in our country”. He identified <bold>two major bottlenecks</bold> about why youth lacked social commitment: <bold>Firstly</bold>, the social problems aren’t portrayed well in the <bold>bookish knowledge</bold> which people gain through the curriculum and hence are generally unaware of the real scenario at the grass-root level. It can only be understood by real-life experiences by encountering these problems. <bold>Secondly</bold>, even if they are well aware of the real-world scenarios there was a <bold>lack of platform or proper guidance & a team of like-minded people</bold> to execute their ideas regarding existing social problems. This gap could only be filled through early exposure to these social problems. We have to motivate the youth of our country to consider these bottlenecks in our country’s progress as their own problems and provide them with a platform to execute their solutions and develop problem-solving skills. The zeal to fill this gap became the cause of the birth of the Gopali Youth Welfare Society. <br>
                            <bold>A total student-run organization</bold> started back in 2004, We are now managing a school for underprivliged children of their own, providing quality education to more than <bold>250 underprivileged students</bold> from the areas in and around Kharagpur. We also conduct skill development programs like tailoring, computer training, etc, and have many other small initiatives with an annual budget of around <bold>30+ Lakhs</bold> managed solely by a group of students from IIT Kharagpur. After the success of strategies and plans of the Gopali Youth Welfare Society (GYWS) near the area of IIT Kharagpur ,the society planned to reciprocate similar models of social upliftment throughout the nation so as to create a greater impact by spreading knowledge and experience gained through such long journey of social service and hence came up with the initiative named LIGHT to reach to masses all over India.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
    <!-- <section class="promo-section-2 padding bd-bottom ">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Our Story</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="https://www.pngkey.com/png/full/873-8730101_established-professionals-circle-handshake-icon.png" alt="prmo icon" style="height: 50px;">
                        <h3>Established</h3>
                        <p>Established in 2002 with a mission to improve the living standards of the people of Gopali like villages.</p>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="https://www.pngkey.com/png/full/127-1277532_middle-school-education-icon-too-busy-to-be.png" alt="prmo icon" style="height: 50px;">
                        <h3>Stepped into Education</h3>
                        <p>Embarked in an education program Jagriti Vidya Mandir in a rented building, focused upon providing quality education.</p>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="https://icon-library.com/images/light-bulb-icon-transparent/light-bulb-icon-transparent-6.jpg" alt="prmo icon" style="height: 50px;">
                        <h3>Light</h3>
                        <p>GYWS came up with the initiative named LiGHT to reach masses all over India, to reciprocate similar models of social upliftment throughout the nation.</p>

                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- /Promo Section -->

    <!-- <section class="promo-section-2 padding bd-bottom ">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="https://www.pngkey.com/png/full/73-730394_admin-approved-user-registration-user-registration-icon-png.png" alt="prmo icon" style="height: 50px;">
                        <h3>Registered</h3>
                        <p>Registered under the West Bengal Societies Registration Act of 1961.</p>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="https://static.thenounproject.com/png/3965105-200.png" alt="prmo icon" style="height: 50px;">
                        <h3>JVM Foundation</h3>
                        <p>2 acres of land was purchased, and the foundation of Jagriti Vidya Mandir was laid. </p>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="promo-content">
                        <img src="https://cdn-icons-png.flaticon.com/512/569/569225.png" alt="prmo icon" style="height: 50px;">
                        <h3>Hostel Construction</h3>
                        <p>Hostel Construction to provide learning environment to deprived children, begin in Jagriti Vidya Mandi.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    -->

    <section class="about-section bd-bottom  circle padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <img class="profile" src="https://gyws.org/gyws/assets/img/new_website_img/about/founder.jpg" alt="profile">
                        <h3> Mr. Mrinal Kanti Bhanja <span>President (Gopali Youth Welfare Society)</span></h3>
                        <!-- <p>There is a natural law, a Divine law that obliges you and me to believe the sufferings of the distressed and the destitute. A service for the poor is a supreme virtue and the great channel.</p> -->

                    </div>
                </div>
                <div class="col-md-8" style="text-align: justify;">
                    <h3> Founder's Message</h3>
                    <p>
                        Gopali Youth Welfare Society was founded with a sole vision to involve the educated youth in social work. The idea was to make them aware of the situation in their surroundings and motivate them to work for it. Back in the 2000s, I used to notice how the students after getting education start aiming for lucrative jobs and work for Multi-National companies. I used to ask myself whether they actually know about what is going on in their surroundings, How one section of the society is still suffering while others are enjoying the luxury which life has to offer. I started the Gopali Youth Welfare Society with an aim to make them aware of these situations which are a bottleneck to the country's progress and help them use their creative brains for solving the nation's problems at the ground level.

                        We have been successful in motivating a pool of students from IIT Kharagpur & GYWS is a prime example of the untapped potential in the youth of the country. Through LiGHT, we aim to provide a similar platform to everybody across the country.</p>


                </div>
            </div>
        </div>
    </section><!-- /Causes Section -->


    <section class="about-section bd-bottom shape  padding">
        <div class="container">
            <div class="row">

                <div class="col-md-8" style="text-align: justify;">
                    <h3> CEO's Words</h3>
                    <p>
                        Gopali Youth Welfare Society has acted as a prime example of how involving the youth of the country into social work can not only help us solve the nation's social problem but also help us provide life-skills to the members involved. I personally am a product of this platform, and closely understands how providing a platform can change someone's life.

                        We at LiGHT are working very hard to deliver a similar platform to the future leaders of the country to come forward and carve the path to the Nation's Development. We are trying to achieve this by explicitly providing them with the skills required to solve these problems followed by an opportunity to get a flavor of social problem-solving at the grass-root level by getting involved with our initiatives or identify their own and work for it.

                        Our aim is to form a network of student-run centers like ours across the country so that whenever any student has an amazing idea about solving a problem, he or she should know exactly how to execute those.</p>
                </div>

                <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <img class="profile" src="https://gyws.org/gyws/assets/img/new_website_img/about/founder.jpg" alt="profile">
                        <h3> Mr. Prerit Jain <span>CEO (Gopali Youth Welfare Society)</span></h3>
                        <!-- <p>
                            There is a natural law, a Divine law that obliges you and me to believe the sufferings of the distressed and the destitute. A service for the poor is a supreme virtue and the great channel.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Causes Section -->


    <section class="promo-section-2 padding bd-bottom">
        <div class="container-fluid">
            <div class="section-heading text-center mb-40">
                <h2>Mission & Vision</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div><!-- /Section Heading -->
            <div class="row">
                <div class="col-md-6 mission">
                    <h3>VISION</h3>
                    <p>We aim to build a <bold>network of autonomous student-run centers</bold> across India, to <bold>provide them with a platform</bold> for ensuring the <bold>fulfillment of Sustainable Development Goals</bold> for the weaker sections of the Society. </p>
                </div>
                <div class="col-md-6 mission1">
                    <center>
                        <img src="https://gyws.org/gyws/assets/img/new_website_img/about/mission.png" alt="">
                    </center>
                </div>

                <div class="col-md-6 mission1">
                    <center>
                        <img src="https://gyws.org/gyws/assets/img/new_website_img/about/vision.png" alt="">
                    </center>
                </div>
                <div class="col-md-6 mission2">
                    <h3>MISSION</h3>
                    <p>
                        <bold>LiGHT</bold> exist to deliver Gopali Youth Welfare Society's learnings, expertise & experience to involve Youth in social problem solving to the youth throughout the nation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="team-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h2>Members</h2>
                <span class="heading-border"></span>
                <p>Help today because tomorrow you may be the one who <br> needs more helping!</p>
            </div>
            <div class="team-wrapper row">
                <div class="col-lg-12 sm-padding">
                    <div class="team-wrap row">
                        <div class="col-md-4 xs-padding">
                            <div class="team-details">
                                <img src="https://gyws.org/gyws/assets/img/new_website_img/about/founder.jpg" alt="team">
                                <div class="hover">
                                    <h3>Mr. Mrinal Kanti Bhanja <span>President</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 xs-padding">
                            <div class="team-details">
                                <img src="https://gyws.org/gyws/assets/img/new_website_img/about/Pradyun%20D.jpg" alt="team">
                                <div class="hover">
                                    <h3>Pradyun D <span> General Secretary</span></h3>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 xs-padding">
                            <div class="team-details">
                                <img src="https://gyws.org/gyws/assets/img/new_website_img/about/Tanishka%20Agarwal.jpg" alt="team">
                                <div class="hover">
                                    <h3>Tanishka Agarwal <span>Vice President</span></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="gallery-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="faq-title text-center pb-3">
                <h2>FAQ</h2>
            </div>
            <div class="row">
                <ul class="gallery-filter align-center mb-30">
                    <!-- <li class="active" data-filter="*">All</li>  -->
                    <li class="active" data-filter=".branding">Aashayien</li>
                    <li data-filter=".design">Sports day</li>
                    <li data-filter=".wordpress">Republic Day</li>
                    <li data-filter=".marketing">KTJ Visit</li>
                </ul><!-- /.gallery filter -->
            </div>
            <div class="gallery-items row">
                <div class="col-lg-12 col-sm-12 single-item branding">
                    <div class="container">
                        <div class="row">
                            <!-- ***** FAQ Start ***** -->
                            <div class="col-md-10 offset-md-1">
                                <div class="faq" id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-1">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                                    <span class="badge">1</span>What is Lorem Ipsum?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-2">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                                    <span class="badge">2</span> Where does it come from?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-3">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                                    <span class="badge">3</span>Why do we use it?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-4">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                                    <span class="badge">4</span> Where can I get some?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-5">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                                    <span class="badge">5</span> What is Lorem Ipsum?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                            <div class="card-body">
                                                <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-6">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                                    <span class="badge">6</span> Where does it come from?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-7">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                                    <span class="badge">7</span> Why do we use it?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /Item-1 -->
            </div>
            <div class="gallery-items row">
                <div class="col-lg-12 col-sm-12 single-item marketing">

                    <div class="container">
                        <div class="row">
                            <!-- ***** FAQ Start ***** -->

                            <div class="col-md-10 offset-md-1">
                                <div class="faq" id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-11">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="true" data-aria-controls="faqCollapse-11">
                                                    <span class="badge">1</span>What is Lorem Ipsum?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-12">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                                    <span class="badge">2</span> Where does it come from?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-13">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                                    <span class="badge">3</span>Why do we use it?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-14">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                                    <span class="badge">4</span> Where can I get some?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-15">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-15" data-aria-expanded="false" data-aria-controls="faqCollapse-15">
                                                    <span class="badge">5</span> What is Lorem Ipsum?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-15" class="collapse" aria-labelledby="faqHeading-15" data-parent="#accordion">
                                            <div class="card-body">
                                                <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-16">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-16" data-aria-expanded="false" data-aria-controls="faqCollapse-16">
                                                    <span class="badge">6</span> Where does it come from?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-16" class="collapse" aria-labelledby="faqHeading-16" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-17">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-17" data-aria-expanded="false" data-aria-controls="faqCollapse-17">
                                                    <span class="badge">7</span> Why do we use it?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-17" class="collapse" aria-labelledby="faqHeading-17" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /Item-2 -->
            </div>
            <div class="gallery-items row">
                <div class="col-lg-12 col-sm-12 single-item wordpress">

                    <div class="container">
                        <div class="row">
                            <!-- ***** FAQ Start ***** -->

                            <div class="col-md-10 offset-md-1">
                                <div class="faq" id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-21">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="true" data-aria-controls="faqCollapse-21">
                                                    <span class="badge">1</span>What is Lorem Ipsum?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-22">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                                    <span class="badge">2</span> Where does it come from?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-23">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-23" data-aria-expanded="false" data-aria-controls="faqCollapse-23">
                                                    <span class="badge">3</span>Why do we use it?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-23" class="collapse" aria-labelledby="faqHeading-23" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-24">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                                    <span class="badge">4</span> Where can I get some?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-25">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-25" data-aria-expanded="false" data-aria-controls="faqCollapse-25">
                                                    <span class="badge">5</span> What is Lorem Ipsum?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-25" class="collapse" aria-labelledby="faqHeading-25" data-parent="#accordion">
                                            <div class="card-body">
                                                <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-26">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-26" data-aria-expanded="false" data-aria-controls="faqCollapse-26">
                                                    <span class="badge">6</span> Where does it come from?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-26" class="collapse" aria-labelledby="faqHeading-26" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-27">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-27" data-aria-expanded="false" data-aria-controls="faqCollapse-27">
                                                    <span class="badge">7</span> Why do we use it?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-27" class="collapse" aria-labelledby="faqHeading-27" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /Item-3 -->
            </div>
            <div class="gallery-items row">
                <div class="col-lg-12 col-sm-12 single-item design">

                    <div class="container">
                        <div class="row">
                            <!-- ***** FAQ Start ***** -->

                            <div class="col-md-10 offset-md-1">
                                <div class="faq" id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-331">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="true" data-aria-controls="faqCollapse-31">
                                                    <span class="badge">1</span>What is Lorem Ipsum?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-32">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="false" data-aria-controls="faqCollapse-32">
                                                    <span class="badge">2</span> Where does it come from?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-33">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-33" data-aria-expanded="false" data-aria-controls="faqCollapse-33">
                                                    <span class="badge">3</span>Why do we use it?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-33" class="collapse" aria-labelledby="faqHeading-33" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-34">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-34" data-aria-expanded="false" data-aria-controls="faqCollapse-34">
                                                    <span class="badge">4</span> Where can I get some?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-34" class="collapse" aria-labelledby="faqHeading-34" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-35">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-35" data-aria-expanded="false" data-aria-controls="faqCollapse-35">
                                                    <span class="badge">5</span> What is Lorem Ipsum?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-35" data-parent="#accordion">
                                            <div class="card-body">
                                                <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-36">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-36" data-aria-expanded="false" data-aria-controls="faqCollapse-36">
                                                    <span class="badge">6</span> Where does it come from?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-36" class="collapse" aria-labelledby="faqHeading-36" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-37">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-37" data-aria-expanded="false" data-aria-controls="faqCollapse-37">
                                                    <span class="badge">7</span> Why do we use it?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-37" class="collapse" aria-labelledby="faqHeading-37" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /Item-4 -->
            </div>
        </div>
    </section><!-- /Our Network Section -->

    <?php include 'include/footer.php'; ?>