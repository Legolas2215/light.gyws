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
    <section class="about-section bd-bottom  circle padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 xs-padding" style="margin-top: 50px;">
                    <div class="profile-wrap">
                        <img class="profile" src="https://gyws.org/gyws/assets/img/new_website_img/about/founder.jpg" alt="profile">
                        <h3> Mr. Mrinal Kanti Bhanja <span>Chairman, LiGHT</span></h3>
                        <!-- <p>There is a natural law, a Divine law that obliges you and me to believe the sufferings of the distressed and the destitute. A service for the poor is a supreme virtue and the great channel.</p> -->

                    </div>
                </div>
                <div class="col-md-8" style="text-align: justify;">
                    <h3> Chairman's Words</h3>
                    <p>
                        Gopali Youth Welfare Society was founded with a sole vision to involve the educated youth in social work. The idea was to make them aware of the situation in their surroundings and motivate them to work for it. Back in the 2000s, I used to notice how the students after getting education start aiming for lucrative jobs and work for Multi-National companies. I used to ask myself whether they actually know about what is going on in their surroundings, How one section of the society is still suffering while others are enjoying the luxury which life has to offer. I started the Gopali Youth Welfare Society with an aim to make them aware of these situations which are a bottleneck to the country's progress and help them use their creative brains for solving the nation's problems at the ground level.

                        We have been successful in motivating a pool of students from IIT Kharagpur & GYWS is a prime example of the untapped potential in the youth of the country. Through LiGHT, we aim to provide a similar platform to everybody across the country.</p>
                </div>
            </div>
        </div>
    </section><!-- /Causes Section -->


    <section class="about-section bd-bottom shape  padding">
        <div class="container">
        <h3> Founder's Words</h3>
            <div class="row">

                <div class="col-md-8" style="text-align: justify;">
                    
                    <p>
                        Gopali Youth Welfare Society has acted as a prime example of how involving the youth of the country into social work can not only help us solve the nation's social problem but also help us provide life-skills to the members involved. I personally am a product of this platform, and closely understands how providing a platform can change someone's life.

                        We at LiGHT are working very hard to deliver a similar platform to the future leaders of the country to come forward and carve the path to the Nation's Development. We are trying to achieve this by explicitly providing them with the skills required to solve these problems followed by an opportunity to get a flavor of social problem-solving at the grass-root level by getting involved with our initiatives or identify their own and work for it.

                        Our aim is to form a network of student-run centers like ours across the country so that whenever any student has an amazing idea about solving a problem, he or she should know exactly how to execute those.</p>
                </div>

                <div class="col-md-4 xs-padding">
                    <div class="profile-wrap">
                        <img class="profile" src="img/prerit.jpg" alt="profile">
                        <h3> Mr. Prerit Jain <span>Founder, LiGHT</span></h3>
                        <!-- <p>
                            There is a natural law, a Divine law that obliges you and me to believe the sufferings of the distressed and the destitute. A service for the poor is a supreme virtue and the great channel.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Causes Section -->




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
                    <li class="active" data-filter=".GeneralFAQs">General FAQs</li>
                    <li data-filter=".Volunteering">Volunteering</li>
                    <li data-filter=".Incentives">Incentives</li>
                    <li data-filter=".WorkProcess">Work Process</li>
                    <li data-filter=".SocialActivities">Social Activites</li>
                    <li data-filter=".FinanceandFunding">Finance and Funding</li>
                    <li data-filter=".CorporatePartnerships">Corporate Partnerships</li>
                </ul><!-- /.gallery filter -->
            </div>
            <div class="gallery-items row">
                <div class="col-lg-12 col-sm-12 single-item GeneralFAQs">
                    <div class="container">
                        <div class="row">
                            <!-- ***** FAQ Start ***** -->
                            <div class="col-md-10 offset-md-1">
                                <div class="faq" id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-1">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                                    <span class="badge">1</span>How is your network different from the one provided by NSS or AISSEC?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>"These platforms are generally focussed on providing the members-only with a Platform, We aim to deliver both the Platform, as well as necessary skills and mindset to the people so that they can solve social problems whenever they come across one. We also provide them opportunities in decision making part, which is certainly missing in the above platforms, People can take up their own initiatives once they are mature enough and work with us to enhance its impact at multiple parts of the India. " </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-2">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                                    <span class="badge">2</span> How was LiGHT formed? Who formed it and why?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>LiGHT is an expansion project of GYWS which was formed with the idea to reciprocate the model and learnings of GYWS and to provide a social platform to socially motivated youth of India. It was formed in 2017 by the then Head- Mr. Krushi Bandi , Governing Body Member- Mr. Suyash Yadav of GYWS under the guidance of our founder Mr. Mrinal Kanti Bhanja.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-3">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                                    <span class="badge">3</span>The problems are huge! Will my small contribution make a difference?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>It most certainly does. A small amount goes a long way. In fact, individuals’ contributions form almost 90 to 95% of our income. Taken together, it is these seemingly small contributions that collectively add up to a large amount needed to effect change. There are people all over who are concerned about the situation and who want to do something to change it. However, their own commitments and pressures do not allow them to go out and directly work with situation. LiGHT provides them the opportunity to help in whatever way they can. They can contribute their money, materials, time, or skills. When everybody comes together and pitches in, no task is impossible. This COLLECTIVE ACTION has an impact and brings about change. Every individual’s contribution is important. This is the fundamental principle on which LiGHT functions.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-4">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                                    <span class="badge">4</span> Are you a registered body?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Yes, Gopali Youth Welfare Society is registered under the West Bengal Societies Act. It is also registered for exemption under section 80 G, 12 A, 12AA and for foreign contributions- under FCRA.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-5">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                                    <span class="badge">5</span> Why did you choose so many objectives to work on? Why particularly those 8?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                            <div class="card-body">
                                                <p> The 8 objectives are derived from the broader set of SDG which we aim to cover in a cyclic order so that we focus on the all round development of the areas which we target.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-6">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                                    <span class="badge">6</span> What is LiGHT Spring Fest stall?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>LiGHT organizes a stall for promotion and for attracting college students, to work with us by helping us form a center at their college.</p>
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
                <div class="col-lg-12 col-sm-12 single-item WorkProcess">

                    <div class="container">
                        <div class="row">
                            <!-- ***** FAQ Start ***** -->

                            <div class="col-md-10 offset-md-1">
                                <div class="faq" id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-11">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="true" data-aria-controls="faqCollapse-11">
                                                    <span class="badge">1</span>what do you mean when you Autonomous centers?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>"By autonomous we mean, we will help students to build a team and working structure at their LiGHT center. Our aim is to prepare them for the time when they can carry out their action plans and help us with extending our reach to their areas. You will always be a part of our network and take help from us whenever required. Once you will be mature enough you can help us to expand further and be mentors for several other centers in your locality helping them to be autonomous." </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-12">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                                    <span class="badge">2</span> As most of the colleges under your umbrella are far away from your Headquarter, How do you manage the students working in the centres?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>
                                                The answer can be divided into two parts:
                                                Head Quarter node to Centre node Knowledge transfer
                                                Knowledge transfer in the member of the nodes
                                                We make plans at the HQ with the involvement of centres and distribute it to the Centre Coordinators.
                                                Then later the Centre Coordinators further distributes the plan and divides the work among the Core Team Members and the Volunteers.
                                                Now comes the distribution of plans among the centre nodes, Each of the teams at HQ node is assigned a certain number of centres and then the member of that team manages the centre. Distribution of knowledge is either through various groups formed or through calls or others means of communication. And often we have skype meetings with the centres which help us keep in contact with them and also regular contact is the key to management.
                                                The involvement of centres in the planning part help us to tackle the regional problems that the centres faced.
                                                Here is the hierarchy:
                                                _attach the images from the annual plan regarding the hierarchy_
                                                Hierarchy helps us to stream down the content easily and feedbacks are accessible easily, also the workflow is properly defined.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-13">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                                    <span class="badge">3</span>How will you ensure that the centers are autonomous after being a part of LiGHT?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>"A center will be considered autonomous when they have build their own action plan and are self sufficient to conduct those activities in their areas. They should be able produce proposals, build documentations, build working procedures, raise sufficient funds, publicize their work, etc."</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-14">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                                    <span class="badge">4</span>Do you prepare Annual Reports of LiGHT?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Yes, Annual Report for LiGHT is formed defining expenditure on every activity conducted and that year's progress.</p>
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
                <div class="col-lg-12 col-sm-12 single-item Incentives">

                    <div class="container">
                        <div class="row">
                            <!-- ***** FAQ Start ***** -->

                            <div class="col-md-10 offset-md-1">
                                <div class="faq" id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-21">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="true" data-aria-controls="faqCollapse-21">
                                                    <span class="badge">1</span>I have come into college to study and make my career. How being a part of this would help me accomplish my mission?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>You cannot succeed in this world by being a bookish worm. You need to learn how to face and solve real-life problems. You need to have skills to convince people, to manage people and to lead them in an activity. Your CG is not everything. In the end, what matters is the skills and LiGHT is a wonderful opportunity to develop one’s all-round personality. The experience certificate of working in a nation-wide NGO will help them in their higher studies applications as well as Jobs applications. The network will connect them with various other individuals, exposing them to a large number of people from different sets of mindsets and perspectives.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-22">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                                    <span class="badge">2</span> Will I get a certificate, if I volunteer with LiGHT?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>On request we will surely issue a certificate for the work and duration of time that a person volunteer with LiGHT on the tasks assigned by us. On the other hand we strongly discourage people from approaching us with requests from their friends, relatives, children, college kids wanting a certificate when they are not actually interested in working with us as a volunteer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-23">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-23" data-aria-expanded="false" data-aria-controls="faqCollapse-23">
                                                    <span class="badge">3</span>What is the motive for Annual Meet of LiGHT?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-23" class="collapse" aria-labelledby="faqHeading-23" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>"We have identified that there is always a need to meet physically and network with each other to work together. Also, physically meeting creates a much deeper impact than virtual sessions. We aim to have representatives from each of the centers and conduct an annual meeting where everyone gets to know each other in a much better manner." Apart from physically meeting and networking sessions, the objectives of this meet shall be as follows:
                                                    1. To show them how we work at IIT Kharagpur Chapter, and motivate them to develop a similar structure at their centers.
                                                    To allow them to meet with our founder, and advisory committee members.
                                                    To organize a skill development workshop where specific leadership, team management, event management skill should be focussed upon.
                                                    To guide them about other career opportunities in the field of Social work, and workshops on Social Entrepreneurship.
                                                    Workshop on Generalized framework for Social Problem Solving, that we use at GYWS.
                                                </p>
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
                <div class="col-lg-12 col-sm-12 single-item Volunteering">

                    <div class="container">
                        <div class="row">
                            <!-- ***** FAQ Start ***** -->

                            <div class="col-md-10 offset-md-1">
                                <div class="faq" id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-331">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="true" data-aria-controls="faqCollapse-31">
                                                    <span class="badge">1</span>How can I apply and what will be the selection procedure?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>For applying you can reach us through our website's Contact section. To say the least an interview will be taken and the main focus of the procedure would be to see your motivation towards your work.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-32">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="false" data-aria-controls="faqCollapse-32">
                                                    <span class="badge">2</span> What kind of skills are required to join LiGHT ?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>The most required skill is commitment towards your resposibilities would be appreciated if you have any documentaion, management and communication skills.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-33">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-33" data-aria-expanded="false" data-aria-controls="faqCollapse-33">
                                                    <span class="badge">3</span>Who can join LiGHT?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-33" class="collapse" aria-labelledby="faqHeading-33" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>You can join us in various ways, as collage student to form a new center at your collage, as a social worker to guide college students, teachers and alumns can join as a member of advisory committee, as a virtual volunteer or can collaborate with us if your NGO has similar vision as ours.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /Item-4 -->
            </div>
            <div class="gallery-items row">
                <div class="col-lg-12 col-sm-12 single-item SocialActivities">

                    <div class="container">
                        <div class="row">
                            <!-- ***** FAQ Start ***** -->

                            <div class="col-md-10 offset-md-1">
                                <div class="faq" id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-331">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="true" data-aria-controls="faqCollapse-31">
                                                    <span class="badge">1</span>How can I apply and what will be the selection procedure?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>For applying you can reach us through our website's Contact section. To say the least an interview will be taken and the main focus of the procedure would be to see your motivation towards your work.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-32">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="false" data-aria-controls="faqCollapse-32">
                                                    <span class="badge">2</span> What kind of skills are required to join LiGHT ?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>The most required skill is commitment towards your resposibilities would be appreciated if you have any documentaion, management and communication skills.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-33">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-33" data-aria-expanded="false" data-aria-controls="faqCollapse-33">
                                                    <span class="badge">3</span>Who can join LiGHT?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-33" class="collapse" aria-labelledby="faqHeading-33" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>You can join us in various ways, as collage student to form a new center at your collage, as a social worker to guide college students, teachers and alumns can join as a member of advisory committee, as a virtual volunteer or can collaborate with us if your NGO has similar vision as ours.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /Item-5 -->
            </div>
            <div class="gallery-items row">
                <div class="col-lg-12 col-sm-12 single-item FinanceandFunding">

                    <div class="container">
                        <div class="row">
                            <!-- ***** FAQ Start ***** -->

                            <div class="col-md-10 offset-md-1">
                                <div class="faq" id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-331">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="true" data-aria-controls="faqCollapse-31">
                                                    <span class="badge">1</span>Does LiGHT receive government funding?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>As an NGO (non-government organization), we do not receive any direct government funding allowing us to remain independent, making unbiased evaluations of government policies and programs. The government has also extended certain tax and duty exemptions to us, enabling us to minimize costs</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-32">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="false" data-aria-controls="faqCollapse-32">
                                                    <span class="badge">2</span> Is there any advantage to donating online?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Yes, when you donate online (Add the link of the donate now section here), you help us twice over, as it is the most cost-efficient channel of collecting funds for LiGHT.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-33">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-33" data-aria-expanded="false" data-aria-controls="faqCollapse-33">
                                                    <span class="badge">3</span>Is it very complicated to donate online?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-33" class="collapse" aria-labelledby="faqHeading-33" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Not at all. It's simple and safe method. Here is what you have to do to make a donation online the LiGHT site:
                                                Click on the "Donate Now" option.
                                                Decide the amount that you wish to donate towards any one of the causes or towards LiGHT’s work in general
                                                Confirm the amount and whether you would like to donate once to start with or make it a recurring donation
                                                Enter you personel details like name, mobile number, address, email address etc.
                                                Specify your mode of payment Choose between the Payment Gateway option and proceed
                                                Fill in your credit/debit card/Bank account details. You will get an immediate confirmation of your donation through an email with a donation number and instant receipt for your donation.
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-34">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-34" data-aria-expanded="false" data-aria-controls="faqCollapse-34">
                                                    <span class="badge">4</span> How safe is my personel information with LiGHT on the LiGHT site?

                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-34" class="collapse" aria-labelledby="faqHeading-34" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>We are committed to protecting your personal information with us. For more details, please do read our Privacy Policy.</p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-35">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-35" data-aria-expanded="false" data-aria-controls="faqCollapse-35">
                                                    <span class="badge">5</span> Are there any tax benefits for donating to LiGHT?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-35" data-parent="#accordion">
                                            <div class="card-body">
                                                <p> Donation to LiGHT (add link of Donate now) are exempt from 50% under section 80G of the Income Tax Act. Tax exemption is valid only in India.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-36">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-36" data-aria-expanded="false" data-aria-controls="faqCollapse-36">
                                                    <span class="badge">6</span> Will you send me the tax emeption certificate?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-36" class="collapse" aria-labelledby="faqHeading-36" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Certainly. While specifying the details of your donation, just mention that you wish to claim tax benefits. The tax exemption certificate will reach you by mail or if you want it through post, we will send you the certificate through post also.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-37">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-37" data-aria-expanded="false" data-aria-controls="faqCollapse-37">
                                                    <span class="badge">7</span>Can I donate to LiGHT from outside of India?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-37" class="collapse" aria-labelledby="faqHeading-37" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Yes, you can donate to LiGHT even if you are living outside of India. Please click here to donate online. (Insert the link of Donate Now option)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-37">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-37" data-aria-expanded="false" data-aria-controls="faqCollapse-37">
                                                    <span class="badge">8</span>Why do you need monetary support?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-37" class="collapse" aria-labelledby="faqHeading-37" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>The entire operation is a huge logistical exercise; where money is needed for expenses on transportation, storage space, and manpower for sorting, packing etc, office expenses and team salaries.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /Item-6 -->
            </div>
            <div class="gallery-items row">
                <div class="col-lg-12 col-sm-12 single-item Corporate Partnerships">

                    <div class="container">
                        <div class="row">
                            <!-- ***** FAQ Start ***** -->

                            <div class="col-md-10 offset-md-1">
                                <div class="faq" id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-331">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="true" data-aria-controls="faqCollapse-31">
                                                    <span class="badge">1</span>I work with a corporate and I want to talk to someone in your team about a partnership for CSR and other aspects. Who should I talk to?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>For corporate partnerships please write to Contact Us (Please add the link to the Contact Us Section here) from our LiGHT Team to further discuss.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-32">
                                            <div class="mb-0">
                                                <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="false" data-aria-controls="faqCollapse-32">
                                                    <span class="badge">2</span> I am writing on behalf of a corporate. We really like the work of LiGHT. How can we connect with your work?
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>"LiGHT has been working with national and MNC corporates from different sectors, for many years now."
                                                    As an organization you can connect with our work through
                                                    Co branded campaigns
                                                    CSR funded projects
                                                    Giving your surplus/2-3 months to expire inventory
                                                    your surplus office material like furniture/IT equipment
                                                    Matching grants to employee payroll giving
                                                    Engaging your Employees
                                                    special campaigns involving employees in giving campaigns motivating your teams to contribute their surplus material.
                                                    Sessions and visits to sensitise teams about rural issues or value of our objectives with LiGHT.
                                                    Payroll Giving – employees can support LiGHT work with payroll giving on a regular basis or for its disaster releif and rehab work.
                                                    Connect with some innovative giving ideas like RISE and all
                                                    To know more about corporate engagement please write to CONTACT US (Drop the link of contact us section here).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /Item-7 -->
            </div>
        </div>
    </section><!-- /Our Network Section --

    <?php include 'include/footer.php'; ?>