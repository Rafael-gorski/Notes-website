<?php require("partials/head.php"); ?>
<?php require('partials/nav.php') ?>
<?php require("partials/banner.php"); ?>

<main>
    <div class="container mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Welcome <?= $_SESSION['user']['name'] ?? 'Guest' ?>, to Note-App</h2>
            <p class="text-lg mb-4">
                This project is a small notes website created as part of the Laracast classes. The objective of these classes is to teach object-oriented programming (OOP), SQL integration, PHP classes, and various integrations with HTML and CSS.
            </p>
            <h3 class="text-xl font-semibold mb-2">Features:</h3>
            <ul class="list-disc list-inside mb-6">
                <li>Object-Oriented Programming (OOP): Utilizes PHP to demonstrate principles such as encapsulation, inheritance, and polymorphism.</li>
                <li>SQL Integration: Demonstrates how PHP interacts with a SQL database to store and retrieve notes.</li>
                <li>PHP Classes: Illustrates the use of classes and objects in PHP to organize and encapsulate functionality.</li>
                <li>HTML and CSS Integration: Integrates with HTML for content structure and CSS for styling to create a user-friendly interface.</li>
                <li>Easy-to-use features for managing your notes</li>
            </ul>
            <a href="https://github.com/Rafael-gorski/Notes-website" class="bg-blue-950 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                More information!
            </a>
    </div>



</main>

<?php require('partials/footer.php') ?>
