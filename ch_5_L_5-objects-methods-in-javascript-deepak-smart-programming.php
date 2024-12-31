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

          <h3 class="text-center"> JavaScript Object Methods</h3>
          <hr />

          <section>

            <h4 class="notes-heading">JavaScript Object Methods: A Complete Guide</h4>

            <p>JavaScript provides a variety of built-in methods for working with objects. These methods help you perform common tasks such as property manipulation, object iteration, and comparison. In this detailed guide, we will go over all the commonly used JavaScript object methods, along with examples for each.</p>

            <h5 class="notes-subheading">1. <code>Object.keys()</code></h5>

            <p>The <code>Object.keys()</code> method returns an array of a given object's own property names (keys), in the same order as that provided by a <code>for...in</code> loop.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.keys(obj);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object whose keys are to be retrieved.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice",
  age: 25,
  occupation: "Engineer"
};

const keys = Object.keys(person);
console.log(keys); // Output: ["name", "age", "occupation"]
  </code></pre>

            <h5 class="notes-subheading">2. <code>Object.values()</code></h5>

            <p>The <code>Object.values()</code> method returns an array of a given object's own property values, in the same order as that provided by a <code>for...in</code> loop.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.values(obj);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object whose values are to be retrieved.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice",
  age: 25,
  occupation: "Engineer"
};

const values = Object.values(person);
console.log(values); // Output: ["Alice", 25, "Engineer"]
  </code></pre>

            <h5 class="notes-subheading">3. <code>Object.entries()</code></h5>

            <p>The <code>Object.entries()</code> method returns an array of a given object's own enumerable string-keyed property <code>[key, value]</code> pairs.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.entries(obj);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object whose entries (key-value pairs) are to be retrieved.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice",
  age: 25,
  occupation: "Engineer"
};

const entries = Object.entries(person);
console.log(entries); // Output: [["name", "Alice"], ["age", 25], ["occupation", "Engineer"]]
  </code></pre>

            <h5 class="notes-subheading">4. <code>Object.assign()</code></h5>

            <p>The <code>Object.assign()</code> method copies all enumerable properties from one or more source objects to a target object. It returns the target object.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.assign(target, ...sources);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>target</code>: The object to which properties will be copied.</li>
              <li><code>sources</code>: The objects whose properties will be copied to the target.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice",
  age: 25
};

const job = {
  occupation: "Engineer",
  company: "Tech Co."
};

const combined = Object.assign({}, person, job);
console.log(combined);
// Output: { name: 'Alice', age: 25, occupation: 'Engineer', company: 'Tech Co.' }
  </code></pre>

            <h5 class="notes-subheading">5. <code>Object.freeze()</code></h5>

            <p>The <code>Object.freeze()</code> method freezes an object, meaning that new properties cannot be added, and existing properties cannot be removed or modified.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.freeze(obj);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object to freeze.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice",
  age: 25
};

Object.freeze(person);
person.age = 26; // This will not work because the object is frozen
console.log(person.age); // Output: 25
  </code></pre>

            <h5 class="notes-subheading">6. <code>Object.seal()</code></h5>

            <p>The <code>Object.seal()</code> method seals an object, preventing new properties from being added and marking all existing properties as non-configurable. However, the values of existing properties can still be modified.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.seal(obj);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object to seal.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice",
  age: 25
};

Object.seal(person);
person.age = 26; // This works
delete person.name; // This will not work
console.log(person.age); // Output: 26
console.log(person.name); // Output: Alice
  </code></pre>

            <h5 class="notes-subheading">7. <code>Object.hasOwnProperty()</code></h5>

            <p>The <code>Object.hasOwnProperty()</code> method returns a boolean indicating whether the object has the specified property as its own (not inherited) property.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
obj.hasOwnProperty(prop);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object to check.</li>
              <li><code>prop</code>: The property name to check.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice",
  age: 25
};

console.log(person.hasOwnProperty("name")); // Output: true
console.log(person.hasOwnProperty("occupation")); // Output: false
  </code></pre>

            <h5 class="notes-subheading">8. <code>Object.create()</code></h5>

            <p>The <code>Object.create()</code> method creates a new object with the specified prototype object and optional properties.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.create(proto, propertiesObject);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>proto</code>: The prototype object to which the new object should be linked.</li>
              <li><code>propertiesObject</code> (optional): An object that contains property descriptors to be added to the new object.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const personProto = {
  greet() {
    console.log("Hello, " + this.name);
  }
};

const person = Object.create(personProto);
person.name = "Alice";
person.greet(); // Output: Hello, Alice
  </code></pre>

            <h5 class="notes-subheading">9. <code>Object.getPrototypeOf()</code></h5>

            <p>The <code>Object.getPrototypeOf()</code> method returns the prototype (i.e., internal <code>[[Prototype]]</code> property) of the specified object.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.getPrototypeOf(obj);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object whose prototype is to be retrieved.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice"
};

const prototype = Object.getPrototypeOf(person);
console.log(prototype); // Output: { constructor: ƒ }
  </code></pre>

            <h5 class="notes-subheading">10. <code>Object.setPrototypeOf()</code></h5>

            <p>The <code>Object.setPrototypeOf()</code> method sets the prototype (i.e., internal <code>[[Prototype]]</code> property) of a specified object.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.setPrototypeOf(obj, proto);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object whose prototype is to be set.</li>
              <li><code>proto</code>: The new prototype object.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice"
};

const proto = {
  greet() {
    console.log("Hello, " + this.name);
  }
};

Object.setPrototypeOf(person, proto);
person.greet(); // Output: Hello, Alice
  </code></pre>















            <h4 class="notes-heading">JavaScript Object Methods: A Complete Guide (Continued)</h4>

            <h5 class="notes-subheading">11. <code>Object.is()</code></h5>

            <p>The <code>Object.is()</code> method compares two values to determine if they are the same value. Unlike the <code>===</code> operator, it can handle special cases like <code>NaN</code> and <code>-0</code>.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.is(value1, value2);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>value1</code>: The first value to compare.</li>
              <li><code>value2</code>: The second value to compare.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
console.log(Object.is(42, 42)); // Output: true
console.log(Object.is("foo", "foo")); // Output: true
console.log(Object.is(NaN, NaN)); // Output: true
console.log(Object.is(0, -0)); // Output: false
  </code></pre>

            <h5 class="notes-subheading">12. <code>Object.defineProperty()</code></h5>

            <p>The <code>Object.defineProperty()</code> method defines a new property directly on an object, or modifies an existing property, and returns the object.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.defineProperty(obj, prop, descriptor);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object on which to define or modify the property.</li>
              <li><code>prop</code>: The property name.</li>
              <li><code>descriptor</code>: The descriptor for the property (configurable, enumerable, writable).</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {};

Object.defineProperty(person, "name", {
  value: "Alice",
  writable: false,
  enumerable: true,
  configurable: false
});

console.log(person.name); // Output: Alice
person.name = "Bob"; // This will not work because writable is false
console.log(person.name); // Output: Alice
  </code></pre>

            <h5 class="notes-subheading">13. <code>Object.defineProperties()</code></h5>

            <p>The <code>Object.defineProperties()</code> method defines multiple properties on an object.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.defineProperties(obj, descriptors);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object on which to define the properties.</li>
              <li><code>descriptors</code>: An object containing property descriptors for each property.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {};

Object.defineProperties(person, {
  name: {
    value: "Alice",
    writable: true
  },
  age: {
    value: 25,
    writable: false
  }
});

console.log(person.name); // Output: Alice
console.log(person.age);  // Output: 25
person.age = 26; // This will not work because age is not writable
console.log(person.age);  // Output: 25
  </code></pre>

            <h5 class="notes-subheading">14. <code>Object.getOwnPropertyDescriptor()</code></h5>

            <p>The <code>Object.getOwnPropertyDescriptor()</code> method returns the descriptor of a specific property of an object.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.getOwnPropertyDescriptor(obj, prop);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object from which the property descriptor is retrieved.</li>
              <li><code>prop</code>: The property name.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice"
};

const descriptor = Object.getOwnPropertyDescriptor(person, "name");
console.log(descriptor); 
// Output: { value: "Alice", writable: true, enumerable: true, configurable: true }
  </code></pre>

            <h5 class="notes-subheading">15. <code>Object.getOwnPropertyNames()</code></h5>

            <p>The <code>Object.getOwnPropertyNames()</code> method returns an array of all the properties (both enumerable and non-enumerable) found directly in the object.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.getOwnPropertyNames(obj);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object whose property names are to be retrieved.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice",
  age: 25
};

const properties = Object.getOwnPropertyNames(person);
console.log(properties); // Output: ["name", "age"]
  </code></pre>

            <h5 class="notes-subheading">16. <code>Object.getOwnPropertyDescriptors()</code></h5>

            <p>The <code>Object.getOwnPropertyDescriptors()</code> method returns all property descriptors (i.e., metadata such as <code>writable</code>, <code>enumerable</code>, <code>configurable</code>) of an object, including non-enumerable ones.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.getOwnPropertyDescriptors(obj);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object for which the property descriptors are to be retrieved.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice",
  age: 25
};

const descriptors = Object.getOwnPropertyDescriptors(person);
console.log(descriptors);
/* Output: 
{
  name: { value: 'Alice', writable: true, enumerable: true, configurable: true },
  age: { value: 25, writable: true, enumerable: true, configurable: true }
}
*/
  </code></pre>

            <h5 class="notes-subheading">17. <code>Object.isExtensible()</code></h5>

            <p>The <code>Object.isExtensible()</code> method determines whether an object can have new properties added to it. If an object is frozen or sealed, it will return <code>false</code>.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.isExtensible(obj);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object to check.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = { name: "Alice" };

console.log(Object.isExtensible(person)); // Output: true

Object.preventExtensions(person);
console.log(Object.isExtensible(person)); // Output: false
  </code></pre>

            <h5 class="notes-subheading">18. <code>Object.preventExtensions()</code></h5>

            <p>The <code>Object.preventExtensions()</code> method prevents any new properties from being added to an object. Existing properties can still be modified or deleted.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.preventExtensions(obj);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object to prevent new properties from being added to.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = { name: "Alice" };

Object.preventExtensions(person);
person.age = 25; // This will not work because extensions are prevented

console.log(person.age); // Output: undefined
  </code></pre>

            <h5 class="notes-subheading">19. <code>Object.isFrozen()</code></h5>

            <p>The <code>Object.isFrozen()</code> method checks if an object is frozen. A frozen object cannot have new properties added, existing properties modified, or deleted.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.isFrozen(obj);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object to check if it is frozen.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = { name: "Alice" };

console.log(Object.isFrozen(person)); // Output: false

Object.freeze(person);
console.log(Object.isFrozen(person)); // Output: true
  </code></pre>

            <h5 class="notes-subheading">20. <code>Object.freeze()</code> (Revisited)</h5>

            <p>The <code>Object.freeze()</code> method prevents any changes to an object. This includes not only the modification of properties but also the addition or deletion of properties.</p>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = { name: "Alice", age: 25 };

Object.freeze(person);
person.age = 30; // This won't work
delete person.name; // This won't work either

console.log(person.age); // Output: 25
console.log(person.name); // Output: Alice
  </code></pre>













            <h4 class="notes-heading">JavaScript Object Methods: A Complete Guide (Continued)</h4>

            <h5 class="notes-subheading">21. <code>Object.values()</code> (Revisited)</h5>

            <p>The <code>Object.values()</code> method returns an array of a given object's own property values. It is often used with methods like <code>Object.keys()</code> and <code>Object.entries()</code> to quickly retrieve an object's data.</p>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = { name: "Alice", age: 25, occupation: "Engineer" };

console.log(Object.values(person)); // Output: ["Alice", 25, "Engineer"]
  </code></pre>

            <h5 class="notes-subheading">22. <code>Object.keys()</code> (Revisited)</h5>

            <p>The <code>Object.keys()</code> method returns an array of a given object's own enumerable property names. It's often used with other methods like <code>forEach()</code> or <code>map()</code> for iteration.</p>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = { name: "Alice", age: 25 };

Object.keys(person).forEach(key => {
  console.log(key); // Output: name, age
});
  </code></pre>

            <h5 class="notes-subheading">23. <code>Object.entries()</code> (Revisited)</h5>

            <p>The <code>Object.entries()</code> method returns an array of a given object's own enumerable string-keyed property [key, value] pairs. It's great for use with <code>for...of</code> loops, <code>map()</code>, or <code>reduce()</code>.</p>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = { name: "Alice", age: 25 };

Object.entries(person).forEach(([key, value]) => {
  console.log(key, value); // Output: name Alice, age 25
});
  </code></pre>

            <h5 class="notes-subheading">24. <code>Object.setPrototypeOf()</code></h5>

            <p>The <code>Object.setPrototypeOf()</code> method changes the prototype of an object to a specified object.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.setPrototypeOf(obj, proto);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object whose prototype will be changed.</li>
              <li><code>proto</code>: The new prototype object.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const personProto = {
  greet() {
    console.log(`Hello, my name is ${this.name}`);
  }
};

const person = Object.create(personProto);
person.name = "Alice";
person.greet(); // Output: Hello, my name is Alice

// Change the prototype
const anotherProto = {
  greet() {
    console.log(`Hi, I'm ${this.name}`);
  }
};

Object.setPrototypeOf(person, anotherProto);
person.greet(); // Output: Hi, I'm Alice
  </code></pre>

            <h5 class="notes-subheading">25. <code>Object.hasOwn()</code></h5>

            <p>The <code>Object.hasOwn()</code> method was introduced in ES2022 as a more modern way to check if an object has a property, similar to <code>hasOwnProperty()</code> but called directly on the <code>Object</code> constructor.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.hasOwn(obj, prop);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object to check.</li>
              <li><code>prop</code>: The property to check for existence.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = { name: "Alice" };

console.log(Object.hasOwn(person, "name")); // Output: true
console.log(Object.hasOwn(person, "age"));  // Output: false
  </code></pre>

            <h5 class="notes-subheading">26. <code>Object.prototype.toString()</code></h5>

            <p>The <code>Object.prototype.toString()</code> method returns a string representation of the object. It is often used to determine the specific type of an object, especially in debugging scenarios.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
obj.toString();
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object to retrieve a string representation of.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = { name: "Alice", age: 25 };

console.log(person.toString()); // Output: [object Object]
console.log(Object.prototype.toString.call(person)); // Output: [object Object]
  </code></pre>

            <p>This method can also be used to detect specific object types:</p>
            <pre class="language-javascript"><code class="language-javascript">
console.log(Object.prototype.toString.call([]));  // Output: [object Array]
console.log(Object.prototype.toString.call(new Date()));  // Output: [object Date]
  </code></pre>

            <h5 class="notes-subheading">27. <code>Object.entries()</code> with <code>for...of</code></h5>

            <p>The <code>Object.entries()</code> method is often used with a <code>for...of</code> loop to easily extract both keys and values from an object.</p>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = { name: "Alice", age: 25 };

for (const [key, value] of Object.entries(person)) {
  console.log(`${key}: ${value}`);
}
// Output:
// name: Alice
// age: 25
  </code></pre>

            <h5 class="notes-subheading">28. <code>Object.fromEntries()</code></h5>

            <p>Introduced in ES2019, the <code>Object.fromEntries()</code> method transforms an iterable (such as a <code>Map</code> or an array of arrays) into an object.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.fromEntries(iterable);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>iterable</code>: An iterable object such as a <code>Map</code> or array of key-value pairs.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const entries = [["name", "Alice"], ["age", 25]];

const person = Object.fromEntries(entries);
console.log(person); // Output: { name: "Alice", age: 25 }
  </code></pre>

            <h5 class="notes-subheading">29. <code>Object.isSealed()</code></h5>

            <p>The <code>Object.isSealed()</code> method checks if an object is sealed. A sealed object cannot have properties added or removed, but existing properties can still be modified if they are writable.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.isSealed(obj);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object to check.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = { name: "Alice" };

console.log(Object.isSealed(person)); // Output: false

Object.seal(person);
console.log(Object.isSealed(person)); // Output: true
  </code></pre>









            <h4 class="notes-heading">JavaScript Object Methods: A Complete Guide (Continued)</h4>

            <h5 class="notes-subheading">32. <code>Object.prototype.valueOf()</code></h5>

            <p>The <code>valueOf()</code> method returns the primitive value of an object. It is often used when objects need to be converted to primitive values (such as numbers or strings).</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
obj.valueOf();
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object to get the primitive value for.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice",
  age: 25,
  valueOf() {
    return this.age;
  }
};

console.log(person.valueOf());  // Output: 25
  </code></pre>

            <p>The <code>valueOf()</code> method is especially useful when converting an object to a number. It is implicitly invoked when objects are used in mathematical operations.</p>

            <h5 class="notes-subheading">33. <code>Object.prototype.constructor</code></h5>

            <p>The <code>constructor</code> property points to the function that created the instance's prototype. It is particularly useful for checking the type of an object.</p>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = { name: "Alice", age: 25 };
console.log(person.constructor);  // Output: [Function: Object]
  </code></pre>

            <p>It can also be used to create custom constructor functions:</p>

            <pre class="language-javascript"><code class="language-javascript">
function Person(name, age) {
  this.name = name;
  this.age = age;
}

const person = new Person("Alice", 25);
console.log(person.constructor);  // Output: [Function: Person]
  </code></pre>

            <h5 class="notes-subheading">34. <code>Object.prototype.isPrototypeOf()</code></h5>

            <p>The <code>isPrototypeOf()</code> method checks if an object exists in the prototype chain of another object. This is useful for inheritance testing.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
proto.isPrototypeOf(obj);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>proto</code>: The prototype object to check.</li>
              <li><code>obj</code>: The object in which you want to check if <code>proto</code> is part of the prototype chain.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
function Person(name, age) {
  this.name = name;
  this.age = age;
}

const person = new Person("Alice", 25);

console.log(Person.prototype.isPrototypeOf(person));  // Output: true
console.log(Object.prototype.isPrototypeOf(person)); // Output: true
  </code></pre>

            <h5 class="notes-subheading">35. <code>Object.prototype.propertyIsEnumerable()</code></h5>

            <p>The <code>propertyIsEnumerable()</code> method checks if a property is enumerable. Enumerable properties can be iterated over with a <code>for...in</code> loop or methods like <code>Object.keys()</code>.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
obj.propertyIsEnumerable(prop);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object to check.</li>
              <li><code>prop</code>: The property name to check for enumerability.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = { name: "Alice", age: 25 };

console.log(person.propertyIsEnumerable("name"));  // Output: true
console.log(person.propertyIsEnumerable("age"));   // Output: true

Object.defineProperty(person, "gender", {
  value: "Female",
  enumerable: false
});

console.log(person.propertyIsEnumerable("gender")); // Output: false
  </code></pre>

            <h5 class="notes-subheading">36. <code>Object.getOwnPropertySymbols()</code></h5>

            <p>The <code>Object.getOwnPropertySymbols()</code> method returns an array of all <strong>symbol</strong> properties of an object. Symbols are unique and often used to add "hidden" properties to objects.</p>

            <h6 class="notes-sub-subheading">Syntax:</h6>
            <pre class="language-javascript"><code class="language-javascript">
Object.getOwnPropertySymbols(obj);
  </code></pre>
            <p><strong>Parameters:</strong></p>
            <ul>
              <li><code>obj</code>: The object whose symbol properties are to be retrieved.</li>
            </ul>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const symbol1 = Symbol("name");
const symbol2 = Symbol("age");

const person = {
  [symbol1]: "Alice",
  [symbol2]: 25
};

console.log(Object.getOwnPropertySymbols(person));  // Output: [Symbol(name), Symbol(age)]
  </code></pre>

            <h5 class="notes-subheading">38. <code>Object.entries()</code> with <code>reduce()</code></h5>

            <p>You can combine <code>Object.entries()</code> with <code>Array.prototype.reduce()</code> to transform an object into a different structure.</p>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice",
  age: 25,
  occupation: "Engineer"
};

const transformed = Object.entries(person).reduce((acc, [key, value]) => {
  acc[key.toUpperCase()] = value;
  return acc;
}, {});

console.log(transformed);
// Output: { NAME: 'Alice', AGE: 25, OCCUPATION: 'Engineer' }
  </code></pre>

            <h5 class="notes-subheading">39. <code>Object.fromEntries()</code> with <code>Map</code></h5>

            <p><code>Object.fromEntries()</code> can be used in combination with <code>Map</code> objects to convert a <code>Map</code> into a plain object.</p>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const map = new Map([
  ["name", "Alice"],
  ["age", 25]
]);

const obj = Object.fromEntries(map);
console.log(obj);  // Output: { name: "Alice", age: 25 }
  </code></pre>

            <h5 class="notes-subheading">40. <code>Object.prototype.toLocaleString()</code></h5>

            <p>The <code>toLocaleString()</code> method returns a localized string representation of an object. It can be overridden in custom objects to provide specific string formatting based on locale.</p>

            <h6 class="notes-sub-subheading">Example:</h6>
            <pre class="language-javascript"><code class="language-javascript">
const person = {
  name: "Alice",
  age: 25,
  toLocaleString: function() {
    return `${this.name} is ${this.age} years old`;
  }
};

console.log(person.toLocaleString());  // Output: Alice is 25 years old
  </code></pre>





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