<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Verify Students enrollments from Smart Programming. Students purchased premium courses or online and industrial trainings can verify their details by HR or Deepak Sir." />
    <meta name="keywords" content="verify students, enrollments, seminars, workshops, development, campus, placements, colleges, online classes, industrial training, free courses, premium courses, industrial trainings, chandigarh, mohali, internships" />

    <title>Javascript Frameworks</title>

    <link rel="icon" href="images/favicon.png" type="image/png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
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

                    <h3 class="text-center"> Places Where JavaScript Code Put</h3>
                    <hr />


                    <section class="mt-3">
                        <h3 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> JavaScript code places</h3>

                        <div class="ms-2">
                            <h4 class="notes-subheading">Remember some Points</h4>
                            <ul>
                                <li>The <strong>script</strong> tag specifies that we are using JavaScript. In a single page, we can insert any number of script tags.</li>
                                <li>Old JavaScript examples may use a type attribute: <code>script type="text/javascript"</code>. The type attribute is not required. JavaScript is the default scripting language in HTML.</li>
                                <li>The <strong>text/javascript</strong> is the content type that provides information to the browser about the data.</li>
                                <li>The <code>document.write()</code> function is used to display dynamic content through JavaScript. We will learn about the document object in detail later.</li>
                            </ul>
                        </div>

                        <p class="text-danger"><strong> There are primarily three places where you can put JavaScript code in an HTML document:</strong></p>

                        <ol>
                            <li>
                                <h4 class="notes-subheading">Inside the <code>&lt;head&gt;</code> section:</h4>
                                <strong>Pros:</strong>
                                <ul>
                                    <li>Scripts are loaded before the page content, ensuring they're ready when the page starts rendering.</li>
                                    <li>This can be useful for scripts that modify the DOM before it's fully loaded.</li>
                                </ul>

                                <strong>Cons:</strong>
                                <ul>
                                    <li>It can potentially slow down the initial page load, as the browser has to parse and execute the scripts before rendering the content.</li>
                                </ul>

                                <strong>Syntax:</strong>
                                <pre class="mt-3"><code class="language-html">&lt;!DOCTYPE html &gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt; JavaScript and HTML Example &lt;/title&gt;
    &lt;script&gt;
        function greet() {
            alert("Hello from the head!");
        }
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Displaying HTML Code on a Webpage &lt;/h1&gt;
    &lt;h1&gt;Welcome to the Page&lt;/h1&gt;
    &lt;button onclick="greet()"&gt;Click me&lt;/button&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>

                            </li>


                            <li>
                                <h4 class="notes-subheading mt-4">Inside the <code>&lt;body&gt;</code> section:</h4>
                                <strong>Pros:</strong>
                                <ul>
                                    <li>Scripts are loaded after the page content, which can improve perceived performance.</li>
                                    <li>This is ideal for scripts that modify the DOM after the page has loaded.</li>
                                </ul>

                                <strong>Cons:</strong>
                                <ul>
                                    <li>The page content may render before the scripts are executed, leading to a brief period of unstilled or non-functional elements.</li>
                                </ul>

                                <strong>Syntax:</strong>
                                <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;JavaScript in Head and Body&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Welcome to the Page&lt;/h1&gt;
    &lt;button onclick="saySomething()"&gt;Click me&lt;/button&gt;

    &lt;script&gt;
        function saySomething() {
            alert("I am calling from the body section");
        }
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
                            </li>

                            <li>
                                <h4 class="notes-subheading mt-4">External JavaScript</h4>
                                <ul>
                                    <li><strong>External JavaScript Files:</strong> It's generally recommended to keep JavaScript code in separate <code>.js</code> files and link them to your HTML file using the <code>script</code> tag. This improves code organization, maintainability, and performance.</li>
                                    <li><strong>Placement Based on Script Purpose:</strong>
                                        <ul>
                                            <li>Scripts that modify the DOM before page load (e.g., setting up event listeners, initializing variables) can be placed in the <code>head</code>.</li>
                                            <li>Scripts that interact with the DOM after the page has loaded (e.g., handling user input, updating content) should be placed in the <code>body</code>.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Performance Optimization:</strong>
                                        <ul>
                                            <li>Minify and compress JavaScript files to reduce file size and improve load times.</li>
                                            <li>Use asynchronous loading for non-critical scripts to avoid blocking the page rendering.</li>
                                            <li>Use External File (<code>.js</code> [External JavaScript])</li>
                                        </ul>
                                    </li>


                                </ul>
                            </li>

                        </ol>
                        <p><strong>note :</strong> By following these guidelines, you can effectively place JavaScript code in your HTML documents to create dynamic and interactive web pages.</p>
                    </section>

                    <hr>

                    <!-- Advantages and Disadvantages of External JavaScript -->
                    <section>

                        <h4 class="notes-heading"><i class="bi bi-brightness-low-fill"></i> Advantages and Disadvantages of External JavaScript</h4>

                        <h5 class="notes-subheading ms-3"><i class="bi bi-arrow-right"></i><strong> Advantages</strong></h5>

                        <ol class="ms-2">
                            <li><strong>Separation of Concerns</strong>:<ul>
                                    <li>External JavaScript files allow for the separation of HTML, CSS, and JavaScript. This improves code organization and makes it easier to maintain, especially for larger projects.</li>
                                </ul>
                            </li>
                            <li><strong>Reusability</strong>:
                                <ul>
                                    <li>You can reuse the same JavaScript file across multiple HTML pages, which reduces code duplication. This makes your project more modular and maintainable.</li>
                                </ul>
                            </li>
                            <li><strong>Faster Load Time</strong>:
                                <ul>
                                    <li>External JavaScript files can be cached by the browser, which leads to faster load times for subsequent page visits. The browser only needs to download the file once, reducing server load and improving performance.</li>
                                </ul>
                            </li>
                            <li><strong>Cleaner HTML Code</strong>:
                                <ul>
                                    <li>With JavaScript in separate files, HTML pages are cleaner and more readable. This separation ensures that HTML is focused on structure, CSS on styling, and JavaScript on behavior.</li>
                                </ul>
                            </li>
                            <li><strong>Better Debugging</strong>:
                                <ul>
                                    <li>External JavaScript files make debugging easier since errors are isolated to specific files. Developers can more easily track down issues without sifting through large amounts of HTML code.</li>
                                </ul>
                            </li>
                            <li><strong>Version Control</strong>:
                                <ul>
                                    <li>External JavaScript files are easier to manage with version control systems (like Git). This ensures that updates and modifications are tracked, making collaborative work more efficient.</li>
                                </ul>
                            </li>
                            <li><strong>Parallel Downloading</strong>:
                                <ul>
                                    <li>Browsers can download external JavaScript files in parallel, optimizing the loading of resources. This reduces blocking of HTML rendering, improving user experience.</li>
                                </ul>
                            </li>
                            <li><strong>Code Minification</strong>:
                                <ul>
                                    <li>External JavaScript files can be minified (compressed), which reduces file size and improves page loading times.</li>
                                </ul>
                            </li>
                            <li><strong>Improved Maintainability</strong>:
                                <ul>
                                    <li>With JavaScript in separate files, it’s easier for teams to collaborate. One developer can work on the HTML/CSS, while another can work on the JavaScript, leading to better productivity.</li>
                                </ul>
                            </li>
                            <li><strong>Security</strong>:
                                <ul>
                                    <li>By keeping JavaScript code in external files, it's easier to control access and manage permissions, reducing the risk of malicious code being injected directly into HTML files.</li>
                                </ul>
                            </li>
                        </ol>

                        <hr class="mt-3 mb-3">

                        <h5 class="notes-subheading ms-3"><i class="bi bi-arrow-right"></i><strong> Disadvantages</strong></h5>

                        <ol class="ms-2">
                            <li><strong>Initial Page Load Time</strong>:
                                <ul>
                                    <li>External JavaScript files need to be downloaded separately, which can increase the initial loading time of the webpage, especially if the file is large or if there are many external files.</li>
                                </ul>
                            </li>
                            <li><strong>Dependency on External Files</strong>:
                                <ul>
                                    <li>If the external JavaScript file is unavailable (due to network issues, server downtime, etc.), the functionality that relies on it won’t work. This can lead to a broken user experience.</li>
                                </ul>
                            </li>
                            <li><strong>Extra HTTP Requests</strong>:
                                <ul>
                                    <li>Each external JavaScript file requires an additional HTTP request to fetch the file. This can increase the number of requests and affect performance, especially when there are multiple external files.</li>
                                </ul>
                            </li>
                            <li><strong>Caching Issues</strong>:
                                <ul>
                                    <li>If the JavaScript file changes frequently, users may not get the updated version due to caching, unless the cache is cleared or versioning is properly handled (e.g., using cache-busting techniques).</li>
                                </ul>
                            </li>
                            <li><strong>Compatibility Issues</strong>:
                                <ul>
                                    <li>External JavaScript files may have compatibility issues with different browsers or devices, especially if they use features not supported across all platforms.</li>
                                </ul>
                            </li>
                            <li><strong>Potential Blocking of Rendering</strong>:
                                <ul>
                                    <li>If JavaScript files are loaded synchronously, they can block the rendering of the page until the script is fully downloaded and executed. This can lead to delays in page display.</li>
                                </ul>
                            </li>
                            <li><strong>Harder to Track Inline Errors</strong>:
                                <ul>
                                    <li>Errors in external JavaScript files might be harder to track compared to inline code, especially if the file is minified or obfuscated.</li>
                                </ul>
                            </li>
                            <li><strong>Increased Server Load</strong>:
                                <ul>
                                    <li>If the external JavaScript file is hosted on your server, it may increase the server load, especially if many users are accessing it simultaneously.</li>
                                </ul>
                            </li>
                            <li><strong>Network Dependency</strong>:
                                <ul>
                                    <li>Users with slower internet connections may experience delays when loading external JavaScript files, which can lead to a poor user experience, especially if the files are large.</li>
                                </ul>
                            </li>
                            <li><strong>SEO Concerns</strong>:
                                <ul>
                                    <li>JavaScript-heavy websites that rely heavily on external JavaScript may face SEO challenges, as search engine crawlers may have difficulty processing JavaScript content (though this has improved in recent years).</li>
                                </ul>
                            </li>
                        </ol>

                    </section>

                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 d-flex justify-content-start">

                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="history-of-java-by-deepak-smart-programming.html" class="btn btn-success">Next Topic <i class="bi bi-arrow-right-short"></i></a>
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
                                    <a href="core-java-free-course-by-deepak-smart-programming.html" class="footer-link">Core Java Free Course</a>
                                </li>
                                <li>
                                    <a href="advance-java-free-course-by-deepak-smart-programming.html" class="footer-link">Advance Java Free Course</a>
                                </li>
                                <li>
                                    <a href="spring-framework-free-course-by-deepak-smart-programming.html" class="footer-link">Spring Framework Free Course</a>
                                </li>
                                <li>
                                    <a href="springboot-framework-free-course-by-deepak-smart-programming.html" class="footer-link">Springboot Free Course</a>
                                </li>
                                <li>
                                    <a href="android-free-course-by-deepak-smart-programming.html" class="footer-link">Android Free Course</a>
                                </li>
                                <li>
                                    <a href="java-logical-questions-free-course-by-deepak-smart-programming.html" class="footer-link">Java Logical Questioning Free Course</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-12">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Core-Java-With-5-Projects" target="_blank" class="footer-link">Core Java Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Advance-Java" target="_blank" class="footer-link">Advance Java Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Spring-Framework" target="_blank" class="footer-link">Spring Framework Premium Course</a>
                                </li>
                                <li>
                                    <a href="https://courses.smartprogramming.in/learn/Spring-Boot-Framework" target="_blank" class="footer-link">Springboot Premium Course</a>
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
                        <a href="https://www.youtube.com/c/SmartProgramming" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://www.facebook.com/smartprogramming.india" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/smart_programming/" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://t.me/smart_programming_deepak" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-telegram"></i>
                        </a>
                        <a href="https://discord.gg/Up9dQ3gP6k" target="_blank" class="me-2 text-decoration-none">
                            <i class="bi bi-discord"></i>
                        </a>
                        <a href="https://whatsapp.com/channel/0029Va6n2Gs42Dckpa2T1U1i" target="_blank" class="me-2 text-decoration-none">
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