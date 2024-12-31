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

                    <h3 class="text-center"> JavaScript JSON Object</h3>
                    <hr />

                    <section>

                        <h4 class="notes-heading">JavaScript JSON Objects</h4>

                        <p>In JavaScript, <strong>JSON (JavaScript Object Notation)</strong> is a widely used data format for exchanging data between a server and a web application or between applications. JSON is based on a subset of JavaScript's object syntax but has a few differences. Understanding JSON in JavaScript is essential for web development, especially when working with APIs and handling data in a web environment.</p>

                        <h5 class="notes-subheading">1. What is JSON?</h5>

                        <p>JSON is a text-based format that is used to represent structured data. It is simple, easy to read, and easy to write. JSON is language-independent but uses conventions that are familiar to programmers of JavaScript, Python, Java, and many other languages.</p>

                        <p>The structure of JSON is similar to JavaScript objects, but JSON data must be a string when sent over the network.</p>

                        <h5 class="notes-subheading">2. JSON Syntax</h5>

                        <p>A valid JSON string must follow the following rules:</p>
                        <ul>
                            <li><strong>Data is represented as key-value pairs:</strong> The key is always a string, and the value can be a string, number, boolean, object, array, <code>null</code>, or another JSON structure.</li>
                            <li><strong>Data is enclosed in curly braces <code>{}</code> for objects.</strong></li>
                            <li><strong>Arrays are enclosed in square brackets <code>[]</code>.</strong></li>
                            <li><strong>Keys and string values must be enclosed in double quotes <code>" "</code>.</strong></li>
                            <li>JSON does not allow functions, methods, or undefined values.</li>
                        </ul>

                        <h5 class="notes-subheading">Example of JSON:</h5>
                        <pre class="language-javascript"><code class="language-javascript">
{
  "name": "John",
  "age": 30,
  "isStudent": false,
  "courses": ["Math", "Science", "History"],
  "address": {
    "street": "123 Main St",
    "city": "New York",
    "zip": "10001"
  }
}
  </code></pre>

                        <h5 class="notes-subheading">3. JSON vs JavaScript Objects</h5>

                        <p>Although JSON syntax is very similar to JavaScript object literals, there are some key differences:</p>
                        <ul>
                            <li><strong>JSON requires double quotes <code>"</code> for both keys and string values.</strong> In JavaScript objects, single quotes <code>'</code> or double quotes <code>"</code> can be used for keys, and keys do not have to be quoted if they are valid identifiers.</li>
                            <li><strong>Functions are not allowed in JSON,</strong> whereas JavaScript objects can contain functions.</li>
                            <li><strong>JSON does not support <code>undefined</code>, <code>NaN</code>, or <code>Infinity</code> values.</strong></li>
                        </ul>

                        <h5 class="notes-subheading">4. Converting Between JavaScript Objects and JSON</h5>

                        <p>JavaScript provides two built-in methods for working with JSON data: <code>JSON.stringify()</code> and <code>JSON.parse()</code>.</p>

                        <h5 class="notes-subheading">5. <code>JSON.stringify()</code> – Converting JavaScript Objects to JSON</h5>

                        <p><code>JSON.stringify()</code> is used to convert a <strong>JavaScript object</strong> into a <strong>JSON string</strong>.</p>

                        <h6 class="notes-sub-subheading">Syntax:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
JSON.stringify(value, replacer, space);
  </code></pre>

                        <ul>
                            <li><strong><code>value</code>:</strong> The JavaScript object you want to convert to JSON.</li>
                            <li><strong><code>replacer</code> (optional):</strong> A function or array that can modify the resulting JSON string.</li>
                            <li><strong><code>space</code> (optional):</strong> A number or string used for indentation in the output JSON string.</li>
                        </ul>

                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "John",
  age: 30,
  isStudent: false,
  courses: ["Math", "Science"],
  address: {
    street: "123 Main St",
    city: "New York"
  }
};

// Convert JavaScript object to JSON string
const jsonString = JSON.stringify(person);
console.log(jsonString);

// Output:
// {"name":"John","age":30,"isStudent":false,"courses":["Math","Science"],"address":{"street":"123 Main St","city":"New York"}}
  </code></pre>

                        <h6 class="notes-sub-subheading">Using <code>space</code> for formatting:</h6>

                        <pre class="language-javascript"><code class="language-javascript">
const jsonStringPretty = JSON.stringify(person, null, 2);
console.log(jsonStringPretty);
  </code></pre>

                        <p><strong>Output:</strong></p>
                        <pre class="language-javascript"><code class="language-javascript">
{
  "name": "John",
  "age": 30,
  "isStudent": false,
  "courses": [
    "Math",
    "Science"
  ],
  "address": {
    "street": "123 Main St",
    "city": "New York"
  }
}
  </code></pre>

                        <h5 class="notes-subheading">6. <code>JSON.parse()</code> – Converting JSON to JavaScript Objects</h5>

                        <p><code>JSON.parse()</code> is used to convert a <strong>JSON string</strong> into a <strong>JavaScript object</strong>.</p>

                        <h6 class="notes-sub-subheading">Syntax:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
JSON.parse(text, reviver);
  </code></pre>

                        <ul>
                            <li><strong><code>text</code>:</strong> The JSON string you want to convert to a JavaScript object.</li>
                            <li><strong><code>reviver</code> (optional):</strong> A function that can be used to transform the result.</li>
                        </ul>

                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
const jsonString = '{"name":"John","age":30,"isStudent":false,"courses":["Math","Science"],"address":{"street":"123 Main St","city":"New York"}}';

// Convert JSON string to JavaScript object
const personObject = JSON.parse(jsonString);
console.log(personObject);

// Output:
// { name: 'John', age: 30, isStudent: false, courses: [ 'Math', 'Science' ], address: { street: '123 Main St', city: 'New York' } }
  </code></pre>

                        <h5 class="notes-subheading">7. Handling JSON with Nested Objects</h5>

                        <p>JSON can represent nested objects, where values can themselves be objects or arrays. When using <code>JSON.stringify()</code> and <code>JSON.parse()</code>, nested structures are preserved.</p>

                        <h6 class="notes-sub-subheading">Example:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
const nestedObject = {
  name: "Alice",
  address: {
    street: "456 Oak St",
    city: "Los Angeles",
    postalCode: {
      code: "90001",
      country: "USA"
    }
  }
};

const jsonString = JSON.stringify(nestedObject);
console.log(jsonString);
// Output: 
// {"name":"Alice","address":{"street":"456 Oak St","city":"Los Angeles","postalCode":{"code":"90001","country":"USA"}}}

const parsedObject = JSON.parse(jsonString);
console.log(parsedObject);
// Output:
// { name: 'Alice',
//   address: { street: '456 Oak St', city: 'Los Angeles', postalCode: { code: '90001', country: 'USA' } } }
  </code></pre>

                        <h5 class="notes-subheading">8. <code>replacer</code> Parameter in <code>JSON.stringify()</code></h5>

                        <p>The <code>replacer</code> parameter is used to control which properties are included in the JSON string. It can be:</p>
                        <ul>
                            <li>A function that takes a key-value pair and returns the transformed value.</li>
                            <li>An array of property names that should be included in the output.</li>
                        </ul>

                        <h6 class="notes-sub-subheading">Example: Using <code>replacer</code> as an array:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "John",
  age: 30,
  isStudent: false
};

// Only include specific properties in the JSON string
const jsonString = JSON.stringify(person, ["name", "age"]);
console.log(jsonString);
// Output: {"name":"John","age":30}
  </code></pre>

                        <h6 class="notes-sub-subheading">Example: Using <code>replacer</code> as a function:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "John",
  age: 30,
  isStudent: false
};

// Custom function to modify properties
const jsonString = JSON.stringify(person, (key, value) => {
  if (key === "age") return value * 2; // Double the age
  return value;
});

console.log(jsonString);
// Output: {"name":"John","age":60,"isStudent":false}
  </code></pre>

                        <h5 class="notes-subheading">9. JSON and <code>undefined</code>, <code>NaN</code>, and <code>Infinity</code></h5>

                        <p>JSON does not support <code>undefined</code>, <code>NaN</code>, or <code>Infinity</code>. When these values are encountered in an object, they are omitted from the final JSON string.</p>

                        <h6 class="notes-sub-subheading">Example with <code>undefined</code>:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "John",
  age: undefined
};

const jsonString = JSON.stringify(person);
console.log(jsonString);
// Output: {"name":"John"}
  </code></pre>

                        <h6 class="notes-sub-subheading">Example with <code>NaN</code> and <code>Infinity</code>:</h6>
                        <pre class="language-javascript"><code class="language-javascript">
const person = {
  age: NaN,
  height: Infinity
};

const jsonString = JSON.stringify(person);
console.log(jsonString);
// Output: {"age":null,"height":null}
  </code></pre>

                        <h5 class="notes-subheading">10. Error Handling with JSON</h5>

                        <p>Sometimes, you may encounter errors when parsing invalid JSON strings. You should always handle errors properly when working with JSON data.</p>

                        <h6 class="notes-sub-subheading">Example: Invalid JSON</h6>
                        <pre class="language-javascript"><code class="language-javascript">
const invalidJson = '{"name": "John", "age": 30'; // Missing closing bracket

try {
  const parsedObject = JSON.parse(invalidJson);
  console.log(parsedObject);
} catch (error) {
  console.log("Error parsing JSON:", error.message); // Output: Error parsing JSON: Unexpected end of JSON input
}
  </code></pre>

                        <h5 class="notes-subheading">11. Using JSON with APIs</h5>

                        <p>When interacting with APIs (e.g., via <code>fetch()</code> in the browser), data is often exchanged in JSON format. For example, when making an HTTP request to a server, the request body and the response body are typically JSON strings that need to be parsed and stringified.</p>

                        <h6 class="notes-sub-subheading">Example: Fetching JSON Data</h6>
                        <pre class="language-javascript"><code class="language-javascript">
fetch('https://api.example.com/data')
  .then(response => response.json()) // Parse JSON from the response
  .then(data => {
    console.log(data); // Work with the parsed object
  })
  .catch(error => console.log("Error:", error));
  </code></pre>

                        <h5 class="notes-subheading">Summary</h5>
                        <ul>
                            <li><strong><code>JSON.stringify()</code></strong>: Converts JavaScript objects to JSON strings.</li>
                            <li><strong><code>JSON.parse()</code></strong>: Converts JSON strings back into JavaScript objects.</li>
                            <li>JSON data must use double quotes for keys and string values.</li>
                            <li>JSON is used extensively for data exchange in APIs and between the client and server in web applications.</li>
                            <li>JSON does not support functions or special JavaScript values like <code>undefined</code>, <code>NaN</code>, and <code>Infinity</code>.</li>
                        </ul>



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