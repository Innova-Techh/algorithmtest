<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white min-h-screen">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>

        <a href="/admin/create-quiz" class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded inline-block mb-4">Create
            New Quiz</a>

        <!-- Dummy placeholder for quiz list -->
        <div class="bg-gray-800 p-4 rounded">
            <h2 class="text-lg font-semibold mb-2">Quizzes</h2>
            <p class="text-gray-400">No quizzes available yet. Create one!</p>
        </div>
    </div>
</body>

</html>