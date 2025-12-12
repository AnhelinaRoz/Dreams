<?php

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/itc-slider.css">
    <!-- JavaScript -->
    <!--    <script src="assets/itc-slider.js?--><?php //=date("Y-m-d H:i:s")
                                                    ?><!--" defer></script>-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <script src="dist/jquery.paroller.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">

    <link rel="stylesheet" href="css/variable.css?<?= date("Y-m-d H:i:s") ?>">
    <link rel="stylesheet" href="css/css.css?<?= date("Y-m-d H:i:s") ?>">
    <link rel="stylesheet" href="css/style.css?<?= date("Y-m-d H:i:s") ?>">
    <link rel="stylesheet" href="assets/style.css?<?= date("Y-m-d H:i:s") ?>">
    <title>Dream Marketing</title>
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0"><!-- CSS -->

</head>

<body class="body">
    <script>
        let get = "<?= $_GET["block"] ?>"
        console.log(get)
    </script>
    <header id="home">

        <div class="canvas_background_wrapper">
            <canvas class="paints canvas_background" width="11" height="122"></canvas>
        </div>
        <?php include("components/header.php") ?>
        <!--    <div class="header_nav">-->
        <!--        <p>Marketing agency</p>-->
        <!--        <div class="language">-->
        <!--            <img src="res/language.svg" alt=""onclick="open_language(this)">-->
        <!---->
        <!--            <ul>-->
        <!--                <li><a href="index.php?language=1">RU</a></li>-->
        <!--                <li><a href="index.php?language=2">ENG</a></li>-->
        <!--                <li><a href="index.php?language=3">FR</a></li>-->
        <!--            </ul>-->
        <!--        </div>-->
        <!--        <ul class="spisok">-->
        <!---->
        <!--            <li><a href="#home">--><?php //=translate($query_main,"home");
                                                ?><!--</a></li>-->
        <!--            <li><a href="#information">--><?php //=translate($query_main,"about us");
                                                        ?><!--</a></li>-->
        <!--            <li><a href="#about">--><?php //=translate($query_main,"services");
                                                ?><!--</a></li>-->
        <!--            <li><a href="#blogy">--><?php //=translate($query_main,"blog");
                                                ?><!--</a></li>-->
        <!--            <li><a href="#contact">--><?php //=translate($query_main,"contact us");
                                                    ?><!--</a></li>-->
        <!--        </ul>-->
        <!---->
        <!---->
        <!---->
        <!---->
        <!---->
        <!--        <div class="burger" onclick="openBurger(this)">-->
        <!--            <div class="line"></div>-->
        <!--            <div class="line"></div>-->
        <!--            <div class="line"></div>-->
        <!--            <div class="burgerContent hideBlock">-->
        <!--                <ul>-->
        <!--                    <li><a href="#home">HOME</a></li>-->
        <!--                    <li><a href="#information">ABOUT US</a></li>-->
        <!--                    <li><a href="#about">SERVICES</a></li>-->
        <!--                    <li><a href="#blogy">BLOG</a></li>-->
        <!--                    <li><a href="#contact">CONTACT US</a></li>-->
        <!--                </ul>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <div class="text">
            <h1 class="moving-gradient">Dreams</h1>
        </div>
        <div class="scroll">
            <p class="pc"><a href="#about">scroll to discover</a></p>
            <p class="mobile"><a href="#about">tap to discover</a></p>
        </div>
    </header>



    <div id="information" class="about-us-block">
        <h2 class="title2">About Us</h2>
        <p>sad</p>
    </div>
    <div class="our_services">
<h2>Our Services</h2>
<div class="list">
    <div class="cyber">
        <h3>Cyber Security</h3>
        <ul>
            <li>Cybersecurity Strategy and Implementation</li>
            <li>Threat Detection and Incident Response</li>
            <li>Compliance Management (GDPR, CCPA, etc.)</li>
            <li>Identity and Access Management</li>
            <li>Risk Management and Assessment</li>
            <li>Security Operations Center (SOC) Services</li>
        </ul>
    </div>
    <div class="Government">
        <h3>Government & Community Solutions</h3>
        <ul>
            <li>E-Government Platforms and Citizen Portals</li>
            <li>National Identity and Registration Systems</li>
            <li>Inter-Ministerial Communication Systems</li>
            <li>Public Service Delivery Platforms</li>
            <li>Community Engagement Applications</li>
            <li>Emergency Response and Management Systems</li>
        </ul>
    </div>
    <div class="Digitalization">
        <h3>Process Digitalization</h3>
        <ul>
            <li>Workflow Automation and Optimization</li>
            <li>Document Management Systems</li>
            <li>Digital Archive Solutions</li>
            <li>Inter-Agency Process Integration</li>
            <li>Approval and Authorization Systems</li>
            <li>Audit Trail and Compliance Tracking</li>
        </ul>
    </div>
    <div class="Business">
        <h3>Business Solutions</h3>
        <ul>
            <li>Enterprise Resource Planning (ERP)</li>
            <li>Financial Management Systems</li>
            <li>Human Resource Management Systems</li>
            <li>Supply Chain and Procurement Platforms</li>
            <li>Business Intelligence and Analytics</li>
            <li>Performance Management Dashboards</li>
        </ul>
    </div>
    <div class="Website">
        <h3>Website Development</h3>
        <ul>
            <li>Secure Government-Grade Architecture</li>
            <li>AI-Integrated Web Platforms</li>
            <li>Advanced Data Encryption and Privacy Compliance</li>
            <li>Intelligent Content Management Systems (CMS)</li>
            <li>Scalable, Resilient, and Multilingual Web Solutions</li>
        </ul>
    </div>
    <div class="Mobile">
        <h3>Mobile App Development</h3>
        <ul>
            <li>Citizen Service Applications</li>
            <li>Government Employee Mobile Solutions</li>
            <li>Emergency Alert and Response Apps</li>
            <li>Public Reporting and Feedback Systems</li>
            <li>Secure Authentication and Access</li>
            <li>Cross-Platform Development (iOS, Android)</li>
        </ul>
    </div>
    <div class="AI">
        <h3>AI Services</h3>
        <ul>
            <li>Intelligent Document Processing</li>
            <li>Predictive Analytics for Decision Support</li>
            <li>Chatbots and Virtual Assistants</li>
            <li>Data Analysis and Pattern Recognition</li>
            <li>Automated Citizen Service Enhancement</li>
            <li>Ethical AI Governance and Frameworks</li>
        </ul>
    </div>
</div>
    </div>
<div class="prices">
    <h2>Our prices</h2>
    <div class="text_prices">
        <p>At Digital Dreams, we don’t believe in one-size-fits-all solutions — and the same applies to pricing.</p>
        <p>Every project we undertake is fully customized, shaped by its complexity, scale, and security requirements.</p>
        <p>We work with clients who value precision, confidentiality, and long-term digital stability — and our pricing reflects the level of expertise, innovation, and accountability we bring to every engagement.</p>
        <p>Whether it’s a national digital infrastructure, a secure AI-driven platform, or an enterprise transformation project, our team develops a tailored proposal based on your specific goals and environment.</p>
        <p>No templates. No shortcuts. Just excellence — engineered for you.</p>
    </div>
</div>
<section class="approach-section">
        <div class="approach-header">
            <p class="approach-title">Our Approach</p>
            <h2 class="approach-subtitle">Outstanding precision in every engagement</h2>
        </div>

        <ol class="approach-list">
            <li class="approach-item">
                <span class="approach-number">1 · DISCOVERY</span>
                <div class="approach-content">
                    <p>We don't start with solutions—we start with understanding. Our security-cleared consultants conduct comprehensive assessments of your existing infrastructure, regulatory requirements, threat landscape, and ministerial objectives. This isn't a checkbox exercise. It's forensic analysis that uncovers vulnerabilities, bottlenecks, and opportunities that will define the entire engagement. We align all stakeholders—from IT directors to permanent secretaries—ensuring everyone understands the current state and the stakes involved.</p>
                </div>
            </li>

            <li class="approach-item">
                <span class="approach-number">2 · STRATEGIC DEFINITION</span>
                <div class="approach-content">
                    <p>Based on discovery findings, we define clear, measurable objectives that align technology with governance priorities. Whether modernizing inter-ministerial communications, establishing national digital identity systems, or hardening cybersecurity postures—we establish success criteria before writing a single line of code. These aren't vanity metrics. They're operationally significant targets tied to citizen outcomes, efficiency gains, and threat reduction.</p>
                </div>
            </li>

            <li class="approach-item">
                <span class="approach-number">3 · ARCHITECTURE & ESTIMATION</span>
                <div class="approach-content">
                    <p>This is where precision meets reality. We map the complete technical terrain: infrastructure requirements, security protocols, integration points, team composition, development timelines, and total investment. Our estimates aren't aspirational—they're grounded in decades of government technology deployments. We account for regulatory approval cycles, security clearances, penetration testing, and the political realities of ministerial projects. You'll know exactly what you're committing to.</p>
                </div>
            </li>

            <li class="approach-item">
                <span class="approach-number">4 · SECURE DEVELOPMENT</span>
                <div class="approach-content">
                    <p>We build what we commit to. Cross-functional teams execute using security-first development frameworks, continuous integration pipelines, and zero-trust architecture principles. Every sprint undergoes security review. Every integration is penetration tested. Every deployment is redundant. This is where we separate from traditional IT vendors—we don't just deliver functionality, we deliver fortress-grade systems that will withstand nation-state level threats.</p>
                </div>
            </li>

            <li class="approach-item">
                <span class="approach-number">5 · RIGOROUS TESTING</span>
                <div class="approach-content">
                    <p>Before any system reaches production, it faces the same scrutiny as critical national infrastructure. Automated security scans, manual penetration testing, load simulations at population scale, accessibility audits, compliance verification. We break systems intentionally to find weaknesses before threat actors do. Our testing protocols exceed industry standards because government systems demand it.</p>
                </div>
            </li>

            <li class="approach-item">
                <span class="approach-number">6 · DEPLOYMENT & VALIDATION</span>
                <div class="approach-content">
                    <p>Launch isn't the finish line—it's the beginning of operational validation. We deploy in phases, monitoring system performance, user adoption, and security postures in real-time. We conduct load testing at national scale, validate disaster recovery procedures, and verify compliance with every applicable regulation. Only when systems prove resilient under production conditions do we consider deployment complete.</p>
                </div>
            </li>

            <li class="approach-item">
                <span class="approach-number">7 · KNOWLEDGE TRANSFER</span>
                <div class="approach-content">
                    <p>Your team inherits complete operational control. Comprehensive documentation, hands-on training, architectural walkthroughs, and security protocol briefings ensure your staff can maintain and operate systems independently. We don't create dependencies—we build capacity. Your sovereignty includes technical sovereignty.</p>
                </div>
            </li>

            <li class="approach-item">
                <span class="approach-number">8 · CONTINUOUS EVOLUTION</span>
                <div class="approach-content">
                    <p>Government technology requirements evolve. Threat actors adapt. Citizen expectations rise. We don't abandon projects post-launch—we refine them. Continuous monitoring identifies performance bottlenecks. Usage analytics reveal optimization opportunities. Threat intelligence updates security protocols. We treat every deployment as a living system requiring ongoing evolution, not a static product.</p>
                </div>
            </li>

            <li class="approach-item">
                <span class="approach-number">9 · TRANSPARENT ACCOUNTABILITY</span>
                <div class="approach-content">
                    <p>Every stakeholder receives reporting calibrated to their needs. Ministers see citizen impact metrics and strategic progress. IT directors see system performance and security postures. Finance sees budget adherence and ROI calculations. You'll always know what we're doing, why it matters, how it's performing, and what comes next. No surprises. No excuses. Complete transparency.</p>
                </div>
            </li>
        </ol>

        <div class="approach-footer">
            <p class="approach-footer-text">
                This is how government technology should be delivered. Digital Dreams doesn't cut corners, doesn't compromise on security, and doesn't leave projects half-finished. Our approach demands more time, more expertise, and more investment than typical IT vendors—because the systems we build can't afford to fail.
            </p>
        </div>
    </section>

    <div id="blogy" class="blog blog2">
        <div class="container">
            <h2 class="title2">Blog</h2>
            <div class="your-slider sponsor-list2">
                <div class="card">
                    <a href="blog.php?theme=understanding">
                        <div class="img"><img src="audience.webp" alt=""></div>
                        <div class="text">
                            <p class="date">March 28, 2023</p>
                            <h3>Understanding Your Target Audience: Tips and Strategies</h3>
                        </div>
                    </a>
                </div>

                <div class="card">
                    <a href="blog.php?theme=power">
                        <div class="img"><img src="targetaudience.webp" alt=""></div>
                        <div class="text">
                            <p class="date">March 23, 2023</p>
                            <h3>The Power of Personalization: Tips for Customizing Your Website to Your Target Audience</h3>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="blog.php?theme=strategy">
                        <div class="img"><img src="blogstr.jpeg" alt=""></div>
                        <div class="text">
                            <p class="date">February 20, 2023 </p>
                            <h3>How to Create an Effective Blog Strategy for Your Website</h3>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="blog.php?theme=storytelling">
                        <div class="img"><img src="storytelling.png" alt=""></div>
                        <div class="text">
                            <p class="date">January 18, 2023 </p>
                            <h3>The Power of Storytelling in Website Content: How to Engage Your Audience and Build Connections</h3>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="blog.php?theme=multilingual">
                        <div class="img"><img src="multilingual.jpeg" alt=""></div>
                        <div class="text">
                            <p class="date">January 1, 2023 </p>
                            <h3>The Benefits and Challenges of Creating a Multilingual Website</h3>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="blog.php?theme=productivity">
                        <div class="img"><img src="productivity.png" alt=""></div>
                        <div class="text">
                            <p class="date">December 27, 2022</p>
                            <h3>10 Ways to Boost Your Productivity at Work</h3>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <style>
        .your-slider .img {
            height: 233px;
            width: 100%;
        }

        .your-slider .img img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .your-slider .card {
            padding: 35px 20px;
        }

        .slick-list {
            padding: 0 15px;
        }

        .your-slider .slick-prev:before,
        .your-slider .slick-next:before {
            color: #383737;
            font-size: 40px;
            content: '>';
        }

        .your-slider .slick-prev:before {
            content: '<';
        }
    </style>
    <!--<div class="blog-block">-->
    <!--    <h2>Blog</h2>-->
    <!--    <ul>-->
    <!--        <li>-->
    <!--            <a href="#">-->
    <!--                <img src="audience.webp" alt="">-->
    <!--                <h3>Understanding Your Target Audience: Tips and Strategies</h3>-->
    <!--                <span class="date">January 1, 2023</span>-->
    <!--            </a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--            <a href="#">-->
    <!--                <img src="article2.jpg" alt="">-->
    <!--                <h3>Article 2</h3>-->
    <!--                <span class="date">February 15, 2023</span>-->
    <!--            </a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--            <a href="#">-->
    <!--                <img src="article3.jpg" alt="">-->
    <!--                <h3>Article 3</h3>-->
    <!--                <span class="date">March 28, 2023</span>-->
    <!--            </a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--            <a href="#">-->
    <!--                <img src="article4.jpg" alt="">-->
    <!--                <h3>Article 4</h3>-->
    <!--                <span class="date">April 12, 2023</span>-->
    <!--            </a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--            <a href="#">-->
    <!--                <img src="article5.jpg" alt="">-->
    <!--                <h3>Article 5</h3>-->
    <!--                <span class="date">May 20, 2023</span>-->
    <!--            </a>-->
    <!--        </li>-->
    <!--    </ul>-->
    <!--</div>-->


    <div id="contact" class="RequestAProposal">
        <!--    <div class="canvas_background_wrapper">-->
        <!--&lt;!&ndash;        <canvas class="paints canvas_background" width="11" height="122"></canvas>&ndash;&gt;-->
        <!--    </div>-->
        <div class="scroll">
            <p></p>
        </div>
        <h2>REQUEST A PROPOSAL</h2>
        <form class="" action="mailer.php" method="post">
            <input name="email" placeholder="Your E-mail" type="email">
            <input name="name" placeholder="Your name" type="text">
            <textarea name="text" placeholder="Tell us your goal!" rows="8" cols="80"></textarea>
            <div class="button">
                <button type="submit" name="button">Send</button>
            </div>
        </form>
    </div>
    <footer>
        <div class="logo">
            <p class="moving-gradient">Dreams</p>
        </div>
        <div class="inf">

            <h3>DIGITAL DREAMS AGENCY</h3>
            <ul>
                <li>Geneva, Switzerland</li>
                <li>+41799399629</li>
                <li>info@dreamsagency.net</li>
            </ul>
        </div>
    </footer>


    <script src="js/js.js"></script>
    <script src="js/addon.js?<?= date("Y-m-d H:i:s") ?>"></script>
    <script src="js/parallax.js"></script>
    <script src="js/scrolling.js?<?= date("Y-m-d H:i:s") ?>"> </script>
    <!-- Scripts -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- jQuery -->

    <!--paroller.js-->
    <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/extra.js?<?= date("Y-m-d H:i:s") ?>"></script>
    <script src="assets/main.js?<?= date("Y-m-d H:i:s") ?>"></script>
    <script src="js/js2.js?<?= date("Y-m-d H:i:s") ?>"> </script>
    <script src="js/library_controls.js?<?= date("Y-m-d H:i:s") ?>"> </script>
    <script>
        $(document)
            .ready(function() {
                //initialize paroller.js
                $('[data-paroller-factor]').paroller();
                //initialize paroller.js and set options for elements with .paroller class
                $('.paroller-example').paroller({
                    factorXs: 0.1,
                    factorSm: 0.1,
                    factorMd: -0.4,
                    factorLg: -0.5,
                    factorXl: -0.6,
                    factor: -0.4,
                    type: 'foreground',
                    direction: 'horizontal',
                    transition: 'transform .3s ease-out'
                });
            });
    </script>

</body>

</html>