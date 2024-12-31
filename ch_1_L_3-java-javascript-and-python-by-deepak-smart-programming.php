<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description"
        content="Verify Students enrollments from Smart Programming. Students purchased premium courses or online and industrial trainings can verify their details by HR or Deepak Sir." />
    <meta name="keywords"
        content="verify students, enrollments, seminars, workshops, development, campus, placements, colleges, online classes, industrial training, free courses, premium courses, industrial trainings, chandigarh, mohali, internships" />

    <title>Differences</title>

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

                    <h3 class="text-center">Difference Between Java / JavaScript / Python</h3>
                    <hr />

                    <!-- General information of both three languages -->
                    <section>
                        <h4 class="notes-heading mt-3"><i class="bi bi-brightness-low-fill"></i>Differentiation between Java / JavaScript / Python
                        </h4>

                        <ul>
                            <li><strong>Java, JavaScript, and Python</strong>  are three of the most popular programming
                            languages, each with its own strengths and weaknesses. Comparing these languages can help
                            you make informed decisions about which one to use for your projects and deepen your
                            understanding of programming concepts.</li>
                            <li>Comparing these languages, you can gain insights into their differences in
                            syntax, performance, and use cases. This knowledge will help you choose the right tool for
                            the job and write more efficient and effective code. Additionally, understanding the
                            strengths and weaknesses of each language can broaden your programming horizons and make you
                            a more versatile developer.</li>
                        </ul>

                    </section>

                    <!-- Difference between Java / JavaScript / Python -->
                    <section class="mt-4">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr class="table-dark">
                                    <th>No</th>
                                    <th>Aspect</th>
                                    <th>Java</th>
                                    <th>JavaScript</th>
                                    <th>Python</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><strong>Type System</strong> <strong></strong></td>
                                    <td><strong>Statically Typed: </strong> Variables must be declared with a type,
                                        which helps catch errors at compile time.</td>
                                    <td><strong>Dynamically Typed: </strong> Variables are not explicitly typed, which
                                        allows for more flexibility but can lead to runtime errors.</td>
                                    <td><strong>Dynamically Typed: </strong> Like JavaScript, Python does not require
                                        explicit type declarations.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><strong>Syntax</strong> </td>
                                    <td><strong>Strict and Verbose: </strong> Requires explicit declarations for
                                        classes, methods, and variables. Syntax is often seen as rigid but encourages
                                        clarity and structure. </td>
                                    <td><strong>Flexible, C-style Syntax: </strong> Can be written in multiple styles.
                                        Supports both functional and object-oriented programming. Syntax is more
                                        lenient, leading to possible inconsistencies.</td>
                                    <td><strong>Clean and Readable: </strong> Python emphasizes code readability with
                                        indentation-based structure (no curly braces), making it an excellent choice for
                                        beginners.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><strong>Compilation and Execution</strong> </td>
                                    <td><strong>Compiled to Bytecode: </strong> Java code is compiled into bytecode and
                                        runs on the Java Virtual Machine (JVM), allowing cross-platform compatibility
                                        (write once, run anywhere).</td>
                                    <td><strong>Interpreted (or JIT-compiled in modern engines): </strong> JavaScript is
                                        interpreted by web browsers or runtime environments like Node.js, allowing
                                        immediate execution. </td>
                                    <td><strong>Interpreted: </strong> Python code is interpreted line by line, which
                                        can slow down execution. This makes debugging easier but may affect performance.
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><strong>Memory Management</strong> </td>
                                    <td><strong>Automatic Garbage Collection (via JVM): </strong> Java uses automatic
                                        garbage collection, which cleans up unused objects to prevent memory leaks.</td>
                                    <td><strong>Automatic Garbage Collection: </strong> JavaScript’s garbage collector
                                        works similarly to Java’s, cleaning up objects when they are no longer in use.
                                    </td>
                                    <td><strong>Automatic Garbage Collection: </strong> Python uses a garbage collector
                                        (based on reference counting and cyclic garbage collection) to manage memory
                                        automatically.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><strong>Performance</strong> </td>
                                    <td><strong>High Performance: </strong> Java typically has better performance than
                                        JavaScript or Python, thanks to the JVM optimization and ahead-of-time (AOT)
                                        compilation.</td>
                                    <td><strong>Moderate Performance: </strong> JavaScript is optimized for web
                                        performance, but being interpreted can be slower than compiled languages.
                                        However, JIT compilation (V8 engine in Chrome, Node.js) improves speed.</td>
                                    <td><strong>Lower Performance: </strong> Python’s performance lags behind Java and
                                        JavaScript, especially in CPU-bound tasks due to being interpreted and having a
                                        Global Interpreter Lock (GIL).</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><strong>Paradigm</strong> </td>
                                    <td><strong>Object-Oriented </strong>(with support for imperative, concurrent
                                        programming): Java is known for being strictly object-oriented, with every piece
                                        of code being inside a class. It also supports multithreading.</td>
                                    <td><strong>Multi-paradigm: </strong>JavaScript supports imperative, functional, and
                                        event-driven programming. It’s primarily used for asynchronous, event-based
                                        operations, especially in web development.</td>
                                    <td><strong>Multi-paradigm: </strong>Python supports object-oriented, imperative,
                                        and functional programming. It is known for its readability and ease of use in
                                        all paradigms. </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><strong>Asynchronous Programming</strong> </td>
                                    <td><strong>Limited (Thread-based concurrency): </strong> Java’s support for
                                        asynchronous programming is based on multi-threading, which is complex to manage
                                        and resource-intensive. </td>
                                    <td><strong>First-class async support: </strong> JavaScript is built around
                                        asynchronous operations using callbacks, promises, and async/await. It handles
                                        IO-bound tasks efficiently in single-threaded environments.</td>
                                    <td><strong>Strong Async Support: </strong> Python introduced asyncio in recent
                                        versions to handle asynchronous programming, but its Global Interpreter Lock
                                        (GIL) restricts true parallelism.</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><strong>Error Handling</strong> </td>
                                    <td><strong>Try-Catch: </strong> Java uses a traditional try-catch block for
                                        handling exceptions, promoting structured error handling. Java’s checked
                                        exceptions require explicit handling of certain exceptions.</td>
                                    <td><strong>Try-Catch: </strong> JavaScript uses a similar try-catch mechanism for
                                        exception handling. However, unlike Java, JavaScript does not have checked
                                        exceptions.</td>
                                    <td><strong>Try-Except: </strong> Python uses a more concise try-except block for
                                        error handling. Exceptions in Python are unchecked (no need to declare or catch
                                        them explicitly).</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><strong>Libraries and Frameworks</strong> </td>
                                    <td><strong>Large Ecosystem: </strong> Java has a rich ecosystem of libraries and
                                        frameworks such as Spring, Hibernate, and JavaFX for different applications,
                                        from web apps to enterprise solutions.</td>
                                    <td><strong>Extensive Ecosystem: </strong> JavaScript is used for both front-end
                                        (React, Angular, Vue.js) and back-end (Node.js, Express). Libraries like D3.js
                                        for data visualization are also widely used.</td>
                                    <td><strong>Massive Ecosystem: </strong> Python has a rich collection of libraries
                                        for data science (Pandas, NumPy), machine learning (TensorFlow, PyTorch), web
                                        development (Django, Flask), and more.</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td><strong>Use Cases</strong> </td>
                                    <td><strong>Enterprise Applications, Android: </strong> Java is the go-to language
                                        for large-scale enterprise applications, Android development, and systems
                                        requiring high concurrency.</td>
                                    <td><strong>Web Development (Frontend and Backend): </strong> JavaScript is the
                                        dominant language for web development, powering both client-side (browsers) and
                                        server-side (Node.js) applications.</td>
                                    <td><strong>Web Development, Data Science, Scripting: </strong> Python is popular
                                        for web development, data science, automation, and machine learning. It’s known
                                        for its ease of use and versatility.</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td><strong>Database Integration</strong> </td>
                                    <td><strong>JDBC: </strong> Java integrates with databases using JDBC (Java Database
                                        Connectivity),enabling interaction with relational databases. Java also has ORMs
                                        like Hibernate.</td>
                                    <td><strong>AJAX, REST APIs: </strong> JavaScript communicates with databases via
                                        APIs, AJAX calls (in browsers), or Node.js-based solutions like Sequelize for
                                        relational databases. </td>
                                    <td><strong>ORM (SQLAlchemy, Django ORM): </strong> Python uses ORMs like SQLAlchemy
                                        (for relational databases) and Django ORM to connect with and manage databases
                                        in a higher-level, more Python way.</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td><strong>Popularity</strong> </td>
                                    <td><strong>Widely Used in Enterprise: </strong> Java has strong usage in large
                                        companies and corporations, especially for enterprise applications, financial
                                        systems, and Android development.</td>
                                    <td><strong>Highly Popular in Web Development: </strong> JavaScript is one of the
                                        most widely used languages in web development, both on the client and server
                                        side (Node.js).</td>
                                    <td><strong>Popular for Beginners, Data Science: </strong> Python is immensely
                                        popular in education and beginner programming, especially for data science,
                                        automation, and web development.</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td><strong>Object-Oriented Features</strong> </td>
                                    <td><strong>Strict Object-Oriented: </strong> Java follows strict object-oriented
                                        principles; everything is a class, and inheritance, polymorphism, and
                                        encapsulation are core concepts.</td>
                                    <td><strong>Object-Oriented and Functional: </strong> JavaScript allows the use of
                                        both object-oriented and functional programming. Functions are first-class
                                        objects and can be passed around as arguments.</td>
                                    <td><strong>Supports OOP and Procedural: </strong> Python supports object-oriented
                                        principles and allows procedural and functional programming. It’s more flexible
                                        than Java in this regard.</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td><strong>Cross-Platform Compatibility</strong> </td>
                                    <td><strong>Cross-Platform (JVM-based): </strong> Java programs run on any system
                                        that has a JVM installed. This makes Java a "write once, run anywhere" language.
                                    </td>
                                    <td><strong>Cross-Platform (Browsers/Node.js): </strong> JavaScript runs in any
                                        modern browser and in environments like Node.js. It’s also supported on mobile
                                        via frameworks like React Native.</td>
                                    <td><strong>Cross-Platform: </strong> Python is available on multiple platforms
                                        (Windows, Linux,macOS), and can be packaged into standalone executables or run
                                        on any machine with a Python interpreter.</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td><strong>Security</strong> </td>
                                    <td><strong>High Security Features: </strong> Java provides robust security features
                                        like bytecode verification, security managers, and access control mechanisms.
                                        It’s used in sensitive and enterprise applications.</td>
                                    <td><strong>Security Depends on Environment: </strong> JavaScript security is often
                                        dependent on the browser or the Node.js environment. Cross-site scripting (XSS)
                                        is a major concern in web apps.</td>
                                    <td><strong>Security Libraries Available: </strong> Python includes libraries for
                                        cryptography, but it is not inherently focused on security. It depends on
                                        third-party libraries for secure applications.</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td><strong>Web Development</strong> </td>
                                    <td><strong>Limited (Server-Side): </strong> Java is used for web development on the
                                        server side (e.g., Java EE, Spring). It’s not commonly used for client-side
                                        scripting.</td>
                                    <td><strong>Essential for Web Development: </strong> JavaScript is the main language
                                        for client-side web development (DOM manipulation, event handling) and
                                        server-side scripting with Node.js.</td>
                                    <td><strong>Popular for Backend Development: </strong> Python has frameworks like
                                        Django and Flask for server-side web development but is less often used for
                                        client-side scripting compared to JavaScript.</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td><strong>Mobile Development</strong> </td>
                                    <td><strong>Android Development: </strong> Java is the primary language for Android
                                        development (though Kotlin is increasingly being adopted).</td>
                                    <td><strong>Hybrid Mobile Development: </strong> JavaScript can be used for mobile
                                        apps via frameworks like React Native or Ionic, though it's more common in web
                                        apps.</td>
                                    <td><strong>imited Mobile Development: </strong> LPython can be used for mobile
                                        development through frameworks like Kivy and BeeWare, but it’s not a primary
                                        language for mobile apps.</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td><strong>Multithreading/Concurrency</strong> </td>
                                    <td><strong>Native Threading Support: </strong> Java supports native
                                        multi-threading, allowing true parallel execution of code, which is beneficial
                                        for CPU-bound tasks.</td>
                                    <td><strong>Single-Threaded with Event Loop: </strong> JavaScript is traditionally
                                        single-threaded but uses an event loop for handling asynchronous tasks
                                        efficiently.</td>
                                    <td><strong>Limited by GIL:</strong> Python has native threading support, but the
                                        Global Interpreter Lock (GIL) limits true multi-core parallelism in CPU-bound
                                        tasks. It’s more effective for IO-bound operations.</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td><strong>Function Support</strong> </td>
                                    <td><strong>Methods in Classes: </strong> Functions are always part of classes
                                        (methods), and Java follows a strict object-oriented approach where functions
                                        are encapsulated in objects.</td>
                                    <td><strong>First-Class Functions: </strong> JavaScript treats functions as
                                        first-class objects that can be assigned to variables, passed as arguments, and
                                        returned from other functions.</td>
                                    <td><strong>Functions: </strong> Python treats functions as first-class objects,
                                        allowing them to be assigned to variables, passed as arguments, and returned
                                        from other functions.</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td><strong>Learning Curve</strong> </td>
                                    <td><strong>Steep Learning Curve: </strong> Java’s strict syntax, verbosity, and
                                        object-oriented nature can be overwhelming for beginners. It requires
                                        understanding of concepts like classes, objects, and memory management.</td>
                                    <td><strong>Moderate Learning Curve: </strong> JavaScript is relatively easy to
                                        learn, especially for web developers, but mastering asynchronous programming and
                                        the intricacies of the DOM can take time.</td>
                                    <td><strong>Beginner-Friendly: </strong> Python is famous for its simplicity,
                                        readability, and beginner-friendly syntax, making it one of the easiest
                                        languages for newcomers to learn.</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td><strong>Community Support</strong> </td>
                                    <td><strong>Large Enterprise Community: </strong> Java has a massive and
                                        well-established community, particularly in enterprise software, Android
                                        development, and large-scale systems.</td>
                                    <td><strong>Massive Web Developer Community: </strong> JavaScript has one of the
                                        largest communities, especially among front-end and web developers. It’s also
                                        growing rapidly on the server side (via Node.js).</td>
                                    <td><strong>Strong Community in Data Science and AI: </strong> Python’s community is
                                        large and growing, particularly among data scientists, researchers, and
                                        developers working on AI/ML projects.</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td><strong>Execution Speed</strong> </td>
                                    <td><strong>Faster Than Interpreted Languages: </strong> Java’s performance is
                                        generally better than interpreted languages (e.g., Python) because it compiles
                                        to bytecode that runs on the JVM, optimizing execution.</td>
                                    <td><strong>Moderate Speed: </strong> JavaScript is optimized for web tasks and is
                                        generally fast for browser-based and server-side scripting but slower than Java
                                        for CPU-bound operations.</td>
                                    <td><strong>Slower Execution Speed: </strong> Python’s performance lags behind both
                                        Java and JavaScript, as it is interpreted and often used in more high-level
                                        applications. Python is slower in CPU-bound tasks.</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td><strong>Deployment</strong> </td>
                                    <td><strong>JAR, WAR Files: </strong> Java applications are packaged into JAR (Java
                                        Archive) files or WAR (Web Archive) files for deployment. These can be run on
                                        any system with a JVM installed.</td>
                                    <td><strong>Deployed as Scripts in Browser/Server: </strong> JavaScript code runs
                                        directly in browsers or Node.js, so there’s no need for a build process.
                                        Deployment is straightforward for web apps.</td>
                                    <td><strong>Scripts and Executables: </strong> Python code can be deployed as
                                        scripts on a server, or packaged into standalone executables using tools like
                                        PyInstaller.</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td><strong>Debugging and Profiling</strong> </td>
                                    <td><strong>Robust Debuggers: </strong> Java has excellent support for debugging
                                        with IDEs like IntelliJ IDEA, Eclipse, and NetBeans. It offers advanced
                                        profiling tools for performance analysis.</td>
                                    <td><strong>Browser Developer Tools: </strong> JavaScript debugging is mainly done
                                        in browser developer tools (e.g., Chrome DevTools), which offer excellent
                                        features for inspecting and debugging web applications.</td>
                                    <td><strong>Interactive Debugging: </strong> Python’s built-in debugger (pdb) allows
                                        for easy stepping through code, and tools like PyCharm offer advanced debugging
                                        and profiling features.</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td><strong>Versioning and Compatibility</strong> </td>
                                    <td><strong>Backward Compatibility: </strong> Java places a high emphasis on
                                        backward compatibility. Older versions of Java code tend to work in newer JVMs.
                                    </td>
                                    <td><strong>ECMAScript Standards: </strong> JavaScript evolves rapidly (ES6, ES7,
                                        etc.), but older versions of browsers may not support the latest syntax or
                                        features.</td>
                                    <td><strong>Backward Compatibility: </strong> Python has generally maintained
                                        backward compatibility (especially Python 2.x to 3.x transition). However,
                                        Python 2 is now deprecated.</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td><strong>Security Vulnerabilities</strong> </td>
                                    <td><strong>Less Frequent: </strong> Java is generally considered secure, and major
                                        security flaws are often patched quickly. Java has strong security APIs for
                                        encryption and data integrity.</td>
                                    <td><strong>More Vulnerable (due to Client-Side): </strong> JavaScript can be
                                        vulnerable to issues like Cross-Site Scripting (XSS), Cross-Site Request Forgery
                                        (CSRF), and other web security threats.</td>
                                    <td><strong>Security Libraries Available: </strong> Python has good support for
                                        encryption and secure data handling but requires extra libraries for secure
                                        programming. Security issues tend to arise from third-party libraries.</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td><strong>Type System Flexibility</strong> </td>
                                    <td><strong>Less Flexible: </strong> Java’s type system is strictly enforced, which
                                        reduces runtime errors but can make the language less flexible.</td>
                                    <td><strong>Flexible Type System: </strong> JavaScript’s dynamic nature allows more
                                        flexibility, but it also opens the door for potential runtime type errors.</td>
                                    <td><strong>Less Restrictive: </strong> Python is dynamically typed, making it more
                                        flexible than Java. However, the absence of type checking can lead to runtime
                                        errors in large applications.</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td><strong>Popular IDEs/Editors</strong> </td>
                                    <td><strong>IntelliJ IDEA, Eclipse, NetBeans: </strong> Java has highly optimized
                                        IDEs for enterprise applications, debugging, and project management.</td>
                                    <td><strong>VS Code, Sublime Text, WebStorm: </strong> JavaScript benefits from a
                                        wide array of lightweight and powerful editors, especially for front-end and
                                        full-stack development.</td>
                                    <td><strong>PyCharm, VS Code, Jupyter: </strong> Python’s IDEs like PyCharm are
                                        popular for web and data science work. Jupyter Notebooks are especially useful
                                        for data analysis and machine learning projects.</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td><strong>Learning Resources</strong> </td>
                                    <td><strong>Good Documentation and Enterprise Support: </strong> Java has a wealth
                                        of learning resources, particularly in the enterprise and Android development
                                        domains.</td>
                                    <td><strong>Abundant Web and Framework Resources: </strong> JavaScript is
                                        well-documented for both front-end and back-end development, and many online
                                        tutorials are available. </td>
                                    <td><strong>Extensive Educational Resources: </strong> Python has extensive
                                        tutorials, courses, and resources, especially for data science, machine
                                        learning, and AI. It’s the language of choice in many educational settings.</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td><strong>Code Readability</strong> </td>
                                    <td><strong>Less Readable: </strong> Java’s verbosity and syntax can make it harder
                                        to read and write for beginners, especially compared to Python.</td>
                                    <td><strong>Readable but Flexible: </strong> JavaScript is fairly readable, but its
                                        flexibility can lead to inconsistencies, especially with larger projects.</td>
                                    <td><strong>Highly Readable: </strong> Python is often considered the most readable
                                        among the three, with a focus on clear, concise syntax. It emphasizes simplicity
                                        and readability over complexity.</td>
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
                    <a href="ch_1_L_3.1-javascript-and-typeScript-by-deepak-smart-programming.php" class="btn btn-success">Next Topic <i
                            class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>

        </div>

        <div class="col-md-2 col-12 bg-secondary">this is for advertisement</div>

    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

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