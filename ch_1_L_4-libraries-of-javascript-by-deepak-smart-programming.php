<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description"
        content="Verify Students enrollments from Smart Programming. Students purchased premium courses or online and industrial trainings can verify their details by HR or Deepak Sir." />
    <meta name="keywords"
        content="verify students, enrollments, seminars, workshops, development, campus, placements, colleges, online classes, industrial training, free courses, premium courses, industrial trainings, chandigarh, mohali, internships" />

    <title>Javascript Libraries</title>

    <link rel="icon" href="images/favicon.png" type="image/png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/themes/prism.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/themes/prism-tomorrow.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Top Bar -->
    <?php include 'top-bar.php'; ?>

    <!-- Navigation Bar -->
    <?php include 'navigation-bar.php'; ?>

    <div class="row">

        <div class="col-lg-3 col-12">
            <!-- left side navbar -->
            <?php include 'content-menu-bar.php'; ?>
        </div>



        <div class="col-lg-7 col-12">
            <div class="notes-content">
                <div class="notes-div">

                    <h3 class="text-center"> JavaScript Libraries</h3>
                    <hr />


                    <section class="mt-5">
                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr class="table-dark">
                                    <th>No</th>
                                    <th>Category</th>
                                    <th>Library Name</th>
                                    <th>Use Case / Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="5">1</td>
                                    <td rowspan="5"><strong>UI Libraries</strong></td>
                                    <td><strong>jQuery</strong></td>
                                    <td>A fast, small, and feature-rich library that simplifies HTML document traversal
                                        and manipulation, event handling, and Ajax interactions. Still used in legacy
                                        projects and simple DOM manipulation.</td>
                                </tr>
                                <tr>
                                    <td><strong>Lodash</strong></td>
                                    <td>A <strong>utility library</strong> that provides helpful functions for working
                                        with arrays, objects, and other data structures. Often used for simplifying and
                                        speeding up development.</td>
                                </tr>
                                <tr>
                                    <td><strong>D3.js</strong></td>
                                    <td>A powerful <strong>library for data visualization</strong> that helps create
                                        interactive, dynamic, and visually appealing charts, graphs, and data-driven
                                        documents.</td>
                                </tr>
                                <tr>
                                    <td><strong>Bootstrap</strong></td>
                                    <td>A <strong>CSS framework</strong> with <strong>pre-designed UI
                                            components</strong> (buttons, modals, carousels, etc.). Commonly paired with
                                        jQuery for dynamic features.</td>
                                </tr>
                                <tr>
                                    <td><strong>Tailwind CSS</strong></td>
                                    <td>A <strong>utility-first CSS framework</strong> for designing custom, responsive
                                        layouts with utility classes, promoting <strong>design consistency</strong>
                                        across apps.</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">2</td>
                                    <td rowspan="3"><strong>Data Manipulation</strong></td>
                                    <td><strong>Axios</strong></td>
                                    <td>A popular <strong>promise-based HTTP client</strong> for making requests to
                                        external APIs. Works in both browsers and Node.js environments.</td>
                                </tr>
                                <tr>
                                    <td><strong>Moment.js</strong></td>
                                    <td>A <strong>date and time manipulation library</strong> that makes parsing,
                                        validating, and formatting dates easier. It's now in maintenance mode, with
                                        <strong>Day.js</strong> as a lighter alternative.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Day.js</strong></td>
                                    <td>A <strong>lighter</strong> alternative to Moment.js for working with dates.
                                        <strong>Fast</strong> and <strong>immutable</strong>, ideal for date
                                        manipulation in JavaScript.
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2">3</td>
                                    <td rowspan="2"><strong>Charting & Visualization</strong></td>
                                    <td><strong>Chart.js</strong></td>
                                    <td>A simple <strong>charting library</strong> for creating various types of
                                        visualizations such as line, bar, radar, and pie charts. Works great with small
                                        datasets.</td>
                                </tr>
                                <tr>
                                    <td><strong>Highcharts</strong></td>
                                    <td>A <strong>data visualization library</strong> for creating interactive charts on
                                        web pages. It is <strong>feature-rich</strong> and widely used for advanced
                                        charting in both business and scientific applications.</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">4</td>
                                    <td rowspan="3"><strong>State Management</strong></td>
                                    <td><strong>Redux</strong></td>
                                    <td>A <strong>state management library</strong> often used with React. It allows you
                                        to manage the application’s state in a predictable way, using a
                                        <strong>unidirectional data flow</strong>.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>MobX</strong></td>
                                    <td>A <strong>state management</strong> library that uses
                                        <strong>observables</strong> and makes state changes easier and more efficient,
                                        often used in React apps.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Recoil</strong></td>
                                    <td>A <strong>state management library</strong> for React, designed for creating
                                        more <strong>flexible and scalable state architectures</strong> with an API
                                        similar to Redux but with simpler usage patterns.</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">5</td>
                                    <td rowspan="3"><strong>Animation</strong></td>
                                    <td><strong>GSAP (GreenSock Animation Platform)</strong></td>
                                    <td>A <strong>high-performance animation library</strong> used to create interactive
                                        animations for both web and mobile apps. Works with DOM elements, canvas, and
                                        SVGs.</td>
                                </tr>
                                <tr>
                                    <td><strong>Three.js</strong></td>
                                    <td>A library that makes <strong>3D graphics</strong> easy to implement on the web.
                                        It is based on WebGL and used for creating complex 3D scenes and animations.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Anime.js</strong></td>
                                    <td>A lightweight <strong>animation library</strong> for creating complex animations
                                        on DOM elements, SVGs, and JavaScript objects.</td>
                                </tr>
                                <tr>
                                    <td rowspan="3">6</td>
                                    <td rowspan="3"><strong>Testing</strong></td>
                                    <td><strong>Jest</strong></td>
                                    <td>A popular testing framework for <strong>unit testing</strong> JavaScript code.
                                        It works with any library or framework and offers powerful features like mocking
                                        and test coverage.</td>
                                </tr>
                                <tr>
                                    <td><strong>Mocha</strong></td>
                                    <td>A <strong>test framework</strong> that provides a flexible environment for
                                        running asynchronous tests with features like assertions, hooks, and reporters.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Chai</strong></td>
                                    <td>A <strong>BDD/TDD assertion library</strong> used in combination with Mocha for
                                        writing tests. Chai is often used with other testing libraries like Mocha or
                                        Jest.</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">7</td>
                                    <td rowspan="2"><strong>Utilities</strong></td>
                                    <td><strong>Underscore.js</strong></td>
                                    <td>A utility library that provides <strong>helper functions</strong> for working
                                        with collections, arrays, and functions. It’s similar to Lodash but has been
                                        largely superseded by Lodash.</td>
                                </tr>
                                <tr>
                                    <td><strong>Immutable.js</strong></td>
                                    <td>A library for creating <strong>immutable data structures</strong>. It provides
                                        collections that cannot be changed after creation, which is useful for
                                        predictable state management.</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">8</td>
                                    <td rowspan="2"><strong>Forms and Validation</strong></td>
                                    <td><strong>Formik</strong></td>
                                    <td>A library that simplifies <strong>form handling</strong> and validation in React
                                        applications. It provides a set of utilities for managing form state,
                                        validation, and submission.</td>
                                </tr>
                                <tr>
                                    <td><strong>Yup</strong></td>
                                    <td>A <strong>JavaScript schema validation library</strong> often used with Formik
                                        for validating input fields in forms (can also be used standalone).</td>
                                </tr>
                                <tr>
                                    <td rowspan="2">9</td>
                                    <td rowspan="2"><strong>Routing</strong></td>
                                    <td><strong>React Router</strong></td>
                                    <td>A library for handling <strong>routing</strong> in React applications. It allows
                                        for dynamic, declarative routing with <strong>nested routes</strong>,
                                        <strong>lazy loading</strong>, and <strong>stateful navigation</strong>.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Vue Router</strong></td>
                                    <td>The official router library for <strong>Vue.js</strong>, providing support for
                                        dynamic routing, nested routes, and lazy loading of components.</td>
                                </tr>
                            </tbody>
                        </table>

                    </section>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">

                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="history-of-java-by-deepak-smart-programming.html" class="btn btn-success">Next Topic <i
                            class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

        </div>

        <div class="col-md-2 col-12 bg-secondary">this is for advertisement</div>

    </div>

    <!-- Footer -->
    <div class="footer mt-4">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-4">
                    <h5 class="text-white">Menus</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html" class="footer-link">Home</a></li>
                        <li>
                            <a href="free-courses-by-smart-programming.html" class="footer-link">Free Courses</a>
                        </li>
                        <li>
                            <a href="premium-courses-by-smart-programming.html" class="footer-link">Premium Courses</a>
                        </li>
                        <li>
                            <a href="trainings-by-smart-programming.html" class="footer-link">Trainings</a>
                        </li>
                        <li>
                            <a href="development-by-smart-programming.html" class="footer-link">Development</a>
                        </li>
                        <li>
                            <a href="contact-smart-programming.html" class="footer-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <h5 class="text-white">
                        Useful links for Industrial Training in Chandigarh
                    </h5>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="core-java-free-course-by-deepak-smart-programming.html"
                                        class="footer-link">Core Java Free Course</a>
                                </li>
                                <li>
                                    <a href="advance-java-free-course-by-deepak-smart-programming.html"
                                        class="footer-link">Advance Java Free Course</a>
                                </li>
                                <li>
                                    <a href="spring-framework-free-course-by-deepak-smart-programming.html"
                                        class="footer-link">Spring Framework Free Course</a>
                                </li>
                                <li>
                                    <a href="springboot-framework-free-course-by-deepak-smart-programming.html"
                                        class="footer-link">Springboot Free Course</a>
                                </li>
                                <li>
                                    <a href="android-free-course-by-deepak-smart-programming.html"
                                        class="footer-link">Android Free Course</a>
                                </li>
                                <li>
                                    <a href="java-logical-questions-free-course-by-deepak-smart-programming.html"
                                        class="footer-link">Java Logical Questioning Free Course</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-12">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Core-Java-With-5-Projects"
                                        target="_blank" class="footer-link">Core Java Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Advance-Java" target="_blank"
                                        class="footer-link">Advance Java Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Spring-Framework" target="_blank"
                                        class="footer-link">Spring Framework Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Spring-Boot-Framework"
                                        target="_blank" class="footer-link">Springboot Premium Course</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class="col-md-8">
                    <footer>
                        <p>
                            &copy; 2024 Smart Programming, Chandigarh. All Rights Reserved.
                            <br />
                            <a href="privacy-policy.html" class="footer-link">Privacy Policy</a>
                            &nbsp; | &nbsp;
                            <a href="terms-of-service.html" class="footer-link">Terms Of Services</a>
                            &nbsp; | &nbsp;
                            <a href="cancellation-refund-policy.html" class="footer-link">Cancellation/Refund Policy</a>
                        </p>
                    </footer>
                </div>
                <div class="col-md-4">
                    <div class="social-icons">
                        <a href="https://www.youtube.com/c/SmartProgramming" target="_blank"
                            class="me-2 text-decoration-none">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://www.facebook.com/smartprogramming.india" target="_blank"
                            class="me-2 text-decoration-none">
                            <i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/smart_programming/" target="_blank"
                            class="me-2 text-decoration-none">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://t.me/smart_programming_deepak" target="_blank"
                            class="me-2 text-decoration-none">
                            <i class="bi bi-telegram"></i>
                        </a>
                        <a href="https://discord.gg/Up9dQ3gP6k" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-discord"></i>
                        </a>
                        <a href="https://whatsapp.com/channel/0029Va6n2Gs42Dckpa2T1U1i" target="_blank"
                            class="me-2 text-decoration-none">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document
            .getElementById("notes-hamburger-btn")
            .addEventListener("click", function() {
                document.getElementById("notes-sidebar").classList.toggle("active");
            });

        document
            .getElementById("notes-sidebar-close-btn")
            .addEventListener("click", function() {
                document.getElementById("notes-sidebar").classList.remove("active");
            });
    </script>

    <!-- Prism.js for Syntax Highlighting -->
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/prism.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.28.0/components/prism-java.min.js"></script>
</body>

</html>