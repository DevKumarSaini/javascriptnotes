<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description"
        content="Verify Students enrollments from Smart Programming. Students purchased premium courses or online and industrial trainings can verify their details by HR or Deepak Sir." />
    <meta name="keywords"
        content="verify students, enrollments, seminars, workshops, development, campus, placements, colleges, online classes, industrial training, free courses, premium courses, industrial trainings, chandigarh, mohali, internships" />

    <title>Javascript Frameworks</title>

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

                    <h3 class="text-center"> JavaScript Frameworks</h3>
                    <hr />


                    <section class="mt-5">
                        <h3 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Frameworks of JavaScript</h3>

                        <!-- JavaScript Frameworks Table -->
                        <table class="table table-bordered table-hover table-striped mt-3">
                            <thead>
                                <tr class="table-dark">
                                    <th>No</th>
                                    <th><strong>Framework</strong></th>
                                    <th><strong>Category</strong></th>
                                    <th><strong>Usage Case</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><strong>React</strong></td>
                                    <td>Front-End (UI)</td>
                                    <td>React is used for building dynamic and high-performance user interfaces,
                                        especially in Single Page Applications (SPA). It is component-based, making code
                                        reuse efficient and scalable.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><strong>Next.js</strong></td>
                                    <td>Front-End (SSR/SSG)</td>
                                    <td>Built on top of React, Next.js is ideal for server-side rendering (SSR) and
                                        static site generation (SSG). It’s used for creating fast, SEO-friendly web
                                        applications.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><strong>Gatsby.js</strong></td>
                                    <td>Front-End (Static Site Generation)</td>
                                    <td>A React-based framework for generating fast, static websites that are
                                        SEO-friendly. It’s great for building blogs, portfolios, and e-commerce sites.
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><strong>Remix</strong></td>
                                    <td>Front-End (Full-Stack SSR/SPA)</td>
                                    <td>Remix enhances React’s capabilities for data fetching and routing, focusing on
                                        improving user experience with better server-side rendering and caching.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><strong>Vue.js</strong></td>
                                    <td>Front-End (UI)</td>
                                    <td>Vue.js is used for building SPAs with a simpler syntax than React. It’s a
                                        progressive framework that can also be integrated into existing projects. It’s
                                        popular for its ease of use.</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><strong>Nuxt.js</strong></td>
                                    <td>Front-End (SSR/SSG)</td>
                                    <td>Based on Vue.js, Nuxt.js enables server-side rendering (SSR) and static site
                                        generation (SSG), allowing developers to build fast, SEO-optimized web apps.
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><strong>Svelte</strong></td>
                                    <td>Front-End (UI/SSG)</td>
                                    <td>Svelte is a unique framework where the work is done at compile time rather than
                                        runtime. It generates highly optimized vanilla JavaScript for fast, lightweight
                                        applications.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><strong>Angular JS</strong></td>
                                    <td>Front-End (UI)</td>
                                    <td>Angular is a full-featured, robust framework for building complex,
                                        enterprise-scale SPAs. It includes everything from routing to state management.
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><strong>Ember.js</strong></td>
                                    <td>Front-End (UI)</td>
                                    <td>Ember is used for building ambitious web applications. It provides a highly
                                        opinionated framework with strong conventions, making development fast and
                                        predictable.</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td><strong>Backbone.js</strong></td>
                                    <td>Front-End (MVC)</td>
                                    <td>Backbone.js is used for building lightweight SPAs by providing minimal
                                        structure, including models with key-value binding and custom events.</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td><strong>Alpine.js</strong></td>
                                    <td>Front-End (UI)</td>
                                    <td>Alpine.js is a lightweight, minimal framework that adds interactivity to
                                        websites with small, declarative snippets. It is used as a simpler alternative
                                        to React and Vue.</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td><strong>Lit</strong></td>
                                    <td>Front-End (UI)</td>
                                    <td>Lit is used for building fast and lightweight web components. It provides
                                        simple, reusable components with a minimal API, ideal for web applications that
                                        need high performance.</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td><strong>Mithril.js</strong></td>
                                    <td>Front-End (UI)</td>
                                    <td>Mithril is a small, fast framework used for building SPAs and progressive web
                                        apps (PWAs). It offers high performance with a minimalistic API for rapid
                                        development.</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td><strong>Preact</strong></td>
                                    <td>Front-End (UI)</td>
                                    <td>Preact is a lightweight alternative to React with a similar API. It is used when
                                        performance is critical and a smaller bundle size is needed.</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td><strong>Stimulus</strong></td>
                                    <td>Front-End (UI)</td>
                                    <td>Stimulus is used for adding JavaScript behavior to server-rendered HTML. It
                                        pairs well with server-side frameworks and is great for adding small interactive
                                        features.</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td><strong>Vuex</strong></td>
                                    <td>Front-End (State Management)</td>
                                    <td>Vuex is a state management library for Vue.js used to manage and centralize the
                                        state of an application. It’s ideal for managing state in larger Vue.js
                                        applications.</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td><strong>Quasar</strong></td>
                                    <td>Full-Stack (Cross-Platform)</td>
                                    <td>A framework built on <strong>Vue.js</strong> for building <strong>cross-platform
                                            applications</strong> (Web, Electron, Cordova, and more). It has built-in UI
                                        components and tools to accelerate development.</td>
                                </tr>
                                <td>18</td>
                                <td><strong>Meteor.js</strong></td>
                                <td>Full-Stack (Web & Mobile)</td>
                                <td>A <strong>full-stack framework</strong> for building web and mobile apps in pure
                                    JavaScript. Meteor includes features like live data sync between client and
                                    server, and rapid development.</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td><strong>Nuxt.js</strong></td>
                                    <td>Front-End (SSR/SSG)</td>
                                    <td>A <strong>Vue.js-based framework</strong> similar to Next.js but for Vue. It
                                        provides <strong>SSR</strong> and is optimized for building <strong>universal
                                            apps</strong> (apps that run on both server and client).</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td><strong>Quasar</strong></td>
                                    <td>Full-Stack (Cross-Platform)</td>
                                    <td>A framework built on <strong>Vue.js</strong> for building <strong>cross-platform
                                            applications</strong> (Web, Electron, Cordova, and more). It has built-in UI
                                        components and tools to accelerate development.</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td><strong>Redux</strong></td>
                                    <td>Front-End (State Management)</td>
                                    <td>Redux is a state management library used with React for predictable state
                                        management in large applications. It’s often paired with React for complex data
                                        flows.</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td><strong>MobX</strong></td>
                                    <td>Front-End (State Management)</td>
                                    <td>MobX is a state management library that provides automatic, reactive updates to
                                        UI components. It’s popular in React-based applications for its simplicity and
                                        efficiency.</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td><strong>RxJS</strong></td>
                                    <td>Front-End (Reactive Programming)</td>
                                    <td>RxJS is used for handling asynchronous data streams using Observables. It’s
                                        useful in scenarios requiring complex event handling and data streams.</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td><strong>Apollo Client</strong></td>
                                    <td>Front-End (Data Fetching/GraphQL)</td>
                                    <td>Apollo Client is a popular choice for managing GraphQL data in React, Vue, or
                                        Angular apps. It simplifies data fetching and state management in apps using
                                        GraphQL APIs.</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td><strong>Firebase</strong></td>
                                    <td>Full-Stack (Backend-as-a-Service)</td>
                                    <td>Firebase provides backend services like authentication, real-time databases, and
                                        hosting. It’s popular for building full-stack applications with minimal backend
                                        setup.</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td><strong>Express.js</strong></td>
                                    <td>Back-End (API/Server)</td>
                                    <td>Express is a minimal and flexible Node.js web application framework used to
                                        build RESTful APIs and web servers quickly, often serving as the backend for
                                        JavaScript front-end frameworks.</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td><strong>Koa.js</strong></td>
                                    <td>Back-End (API/Server)</td>
                                    <td>Koa is a lightweight, modular Node.js framework created by the team behind
                                        Express. It provides a more modern approach to building APIs with async/await
                                        support.</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td><strong>NestJS</strong></td>
                                    <td>Back-End (API/Server)</td>
                                    <td>NestJS is a full-stack, modular Node.js framework built with TypeScript that
                                        provides powerful tools for building scalable and maintainable server-side
                                        applications.</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td><strong>Hapi.js</strong></td>
                                    <td>Back-End (API/Server)</td>
                                    <td>Hapi is a powerful and flexible framework for building APIs. It’s known for its
                                        configuration-driven approach and is used for building large-scale applications.
                                    </td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td><strong>LoopBack</strong></td>
                                    <td>Back-End (API/Server)</td>
                                    <td>LoopBack is an extensible framework for building REST APIs. It simplifies
                                        connecting apps to databases and other data sources, and is often used for
                                        building APIs in enterprise systems.</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td><strong>Socket.io</strong></td>
                                    <td>Real-Time (WebSocket)</td>
                                    <td>Socket.io is used for adding real-time bi-directional communication between
                                        clients and servers. It's essential for building real-time apps like chat
                                        applications, notifications, etc.</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td><strong>Electron</strong></td>
                                    <td>Desktop (Cross-Platform)</td>
                                    <td>Electron is used to build cross-platform desktop applications using web
                                        technologies (HTML, CSS, JavaScript). It packages web apps into native desktop
                                        applications for Windows, macOS, and Linux.</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td><strong>React Native</strong></td>
                                    <td>Mobile (Cross-Platform)</td>
                                    <td>React Native is used for building cross-platform mobile apps for iOS and Android
                                        using JavaScript and React. It allows code reuse across platforms with
                                        near-native performance.</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td><strong>Ionic</strong></td>
                                    <td>Mobile (Cross-Platform)</td>
                                    <td>Ionic is a framework for building mobile apps using web technologies like HTML,
                                        CSS, and JavaScript. It provides tools to create native-like mobile apps for iOS
                                        and Android.</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td><strong>Cordova</strong></td>
                                    <td>Mobile (Cross-Platform)</td>
                                    <td>Apache Cordova allows the creation of mobile applications using web technologies
                                        and deploys them as native apps on iOS, Android, and other platforms.</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td><strong>PhoneGap</strong></td>
                                    <td>Mobile (Cross-Platform)</td>
                                    <td>PhoneGap, built on top of Apache Cordova, is used to build mobile applications
                                        using HTML, CSS, and JavaScript. It's aimed at web developers transitioning to
                                        mobile development.</td>
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