<?php
$servername = "localhost";
$username = "root";  // replace with your database username
$password = "";  // replace with your database password
$dbname = "blog_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all posts
$sql = "SELECT id, title, content, created_at FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);

// Initialize the $posts array
$posts = [];

if ($result->num_rows > 0) {
    // Fetch all posts into an array
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
} else {
    echo "No posts found!";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

    <header class="text-center p-10 bg-blue-500 text-white">
        <h1 class="text-4xl font-bold">My Blog</h1>
    </header>

    <section class="max-w-5xl mx-auto p-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <?php if (!empty($posts)): ?>
                <?php foreach ($posts as $post): ?>
                    <div class="bg-white text-gray-900 p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-bold mb-3"><?php echo htmlspecialchars($post['title']); ?></h2>
                        <p class="mb-4"><?php echo substr(htmlspecialchars($post['content']), 0, 150); ?>...</p>
                        <a href="view_post.php?id=<?php echo $post['id']; ?>" class="text-indigo-500 hover:text-indigo-600">Read more</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No posts available.</p>
            <?php endif; ?>
        </div>
    </section>

</body>
</html>
