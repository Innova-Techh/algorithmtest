<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AralSipnayan</title>
    @vite('resources/css/app.css')

</head>

<body
    class="min-h-screen bg-gradient-to-br from-black via-green-900 to-black flex flex-col items-center justify-center relative">
    <div class="absolute top-6 left-6">
        <div
            class="bg-gradient-to-br from-emerald-400 via-green-900 to-emerald-400 bg-opacity-30 rounded-md px-6 py-2 shadow-lg ">
            <span class="text-white font-medium text-xl">AralSipnayan</span>
        </div>
    </div>
    <div class="absolute top-6 right-6">
        <a href="/admin/login"
            class="bg-gradient-to-br from-emerald-400 via-green-900 to-emerald-400 hover:bg-opacity-80 text-white font-semibold px-6 py-2 rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-green-300 transition inline-block text-center">
            Admin
        </a>
    </div>
    <main class="flex flex-col items-center justify-center flex-1 w-full">
        <h1 class="text-6xl md:text-7xl font-extrabold text-green-400 mb-4 drop-shadow-green-500 drop-shadow-xl/50">
            AralSipnayan
        </h1>
        <p class="text-xl md:text-2xl text-gray-200 mb-8">Master Grade 6 Mathematics with Interactive Quizzes</p>
        <a href="{{ route('quiz') }}"
            class="bg-gradient-to-br from-emerald-400 via-green-900 to-emerald-400 hover:bg-opacity-80 text-white font-bold px-10 py-3 rounded-md text-lg shadow-lg mb-12 focus:outline-none focus:ring-2 focus:ring-green-300 transition flex items-center gap-2 text-center">
            Start Quiz Challenge
        </a>
        <div class="flex flex-col md:flex-row gap-6 w-full max-w-4xl justify-center">
            <!-- Card 1 -->
            <div
                class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-8 flex-1 flex flex-col items-center shadow-lg hover:translate-y-1.5 transition-transform">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l2.286 7.07a1 1 0 00.95.69h7.451c.969 0 1.371 1.24.588 1.81l-6.034 4.384a1 1 0 00-.364 1.118l2.286 7.07c.3.921-.755 1.688-1.54 1.118l-6.034-4.384a1 1 0 00-1.176 0l-6.034 4.384c-.784.57-1.838-.197-1.539-1.118l2.286-7.07a1 1 0 00-.364-1.118L2.025 12.497c-.783-.57-.38-1.81.588-1.81h7.451a1 1 0 00.95-.69l2.286-7.07z" />
                    </svg>
                </div>
                <h3 class="text-green-300 font-bold text-lg mb-2">Interactive Learning</h3>
                <p class="text-gray-300 text-center">Engaging math problems designed specifically for Grade 6 students
                </p>
            </div>
            <!-- Card 2 -->
            <div
                class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-8 flex-1 flex flex-col items-center shadow-lg hover:translate-y-1.5 transition-transform">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 21h4m0 0h4m-4 0V3m0 18a9 9 0 100-18 9 9 0 000 18z" />
                    </svg>
                </div>
                <h3 class="text-green-300 font-bold text-lg mb-2">Track Progress</h3>
                <p class="text-gray-300 text-center">Monitor your improvement and celebrate your achievements</p>
            </div>
            <!-- Card 3 -->
            <div
                class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-8 flex-1 flex flex-col items-center shadow-lg hover:translate-y-1.5 transition-transform">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-green-300 font-bold text-lg mb-2">Quick & Fun</h3>
                <p class="text-gray-300 text-center">Short, focused quizzes that make learning mathematics enjoyable</p>
            </div>
        </div>
    </main>
</body>

</html>