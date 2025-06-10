<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-green-400 min-h-screen">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4 text-green-500">Create a New Quiz</h1>

        <form action="/admin/create-quiz" method="POST"
            class="space-y-4 bg-gray-900 p-6 rounded shadow border border-gray-500 ">
            @csrf
            <div>
                <label class="block font-semibold mb-1 text-green-400">Quiz Title:</label>
                <input type="text" name="title" required
                    class="w-full p-2 bg-black border border-zinc-500 rounded text-green-300 placeholder-green-600 focus:outline-none focus:ring focus:ring-green-500">
            </div>

            <div id="questions-container" class="space-y-6">
                <!-- Initial Question -->
                <div class="question-item p-4 border border-zinc-500 rounded bg-black">
                    <label class="block mb-1 font-semibold text-green-400">Question</label>
                    <textarea name="questions[0][question]" required
                        class="w-full p-2 bg-black border border-zinc-500 rounded text-green-300 placeholder-green-600 focus:outline-none focus:ring focus:ring-green-500 mb-2"
                        placeholder="Enter your question here..."></textarea>

                    <div class="space-y-2">
                        <p class="text-sm text-green-400">Answer Options</p>
                        @for($i = 0; $i < 4; $i++)
                            <div class="flex items-center space-x-2">
                                <input type="radio" name="questions[0][correct]" value="{{$i}}" class="accent-green-500">
                                <input type="text" name="questions[0][options][{{$i}}]" required
                                    class="flex-1 p-2 bg-black border border-zinc-500 rounded text-green-300 placeholder-green-600 focus:outline-none focus:ring focus:ring-green-500"
                                    placeholder="Option {{$i + 1}}">
                            </div>
                        @endfor
                        <p class="text-xs text-green-600 mt-1">Select the radio button next to the correct answer</p>
                    </div>

                    <div class="mt-2">
                        <label class="block text-sm text-green-400 mb-1">Explanation (Optional)</label>
                        <textarea name="questions[0][explanation]"
                            class="w-full p-2 bg-black border border-zinc-500 rounded text-green-300 placeholder-green-600 focus:outline-none focus:ring focus:ring-green-500"
                            placeholder="Explain the correct answer..."></textarea>
                    </div>

                    <button type="button"
                        class="remove-question mt-2 bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded">Remove
                        Question</button>
                </div>
            </div>

            <div class="flex space-x-2">
                <button type="button" id="add-question"
                    class="bg-green-500 hover:bg-green-600 text-black px-4 py-2 rounded">Add Question</button>
                <button type="submit" class="bg-green-700 hover:bg-green-800 text-black px-4 py-2 rounded">Save
                    Quiz</button>
            </div>
        </form>
    </div>

    <script>
        let questionIndex = 1;

        document.getElementById('add-question').addEventListener('click', function () {
            const container = document.getElementById('questions-container');

            const newQuestion = document.createElement('div');
            newQuestion.classList.add('question-item', 'p-4', 'border', 'border-zinc-500', 'rounded', 'bg-black', 'mt-2');

            newQuestion.innerHTML = `
            <label class="block mb-1 font-semibold text-green-400">Question</label>
            <textarea name="questions[${questionIndex}][question]" required class="w-full p-2 bg-black border border-green-500 rounded text-green-300 placeholder-green-600 focus:outline-none focus:ring focus:ring-green-500 mb-2" placeholder="Enter your question here..."></textarea>

            <div class="space-y-2">
                <p class="text-sm text-green-400">Answer Options</p>
                ${[0, 1, 2, 3].map(i => `
                    <div class="flex items-center space-x-2">
                        <input type="radio" name="questions[${questionIndex}][correct]" value="${i}" class="accent-green-500">
                        <input type="text" name="questions[${questionIndex}][options][${i}]" required class="flex-1 p-2 bg-black border border-green-500 rounded text-green-300 placeholder-green-600 focus:outline-none focus:ring focus:ring-green-500" placeholder="Option ${i + 1}">
                    </div>
                `).join('')}
                <p class="text-xs text-green-600 mt-1">Select the radio button next to the correct answer</p>
            </div>

            <div class="mt-2">
                <label class="block text-sm text-green-400 mb-1">Explanation (Optional)</label>
                <textarea name="questions[${questionIndex}][explanation]" class="w-full p-2 bg-black border border-green-500 rounded text-green-300 placeholder-green-600 focus:outline-none focus:ring focus:ring-green-500" placeholder="Explain the correct answer..."></textarea>
            </div>

            <button type="button" class="remove-question mt-2 bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded">Remove Question</button>
        `;
            container.appendChild(newQuestion);

            questionIndex++;
        });

        document.getElementById('questions-container').addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-question')) {
                e.target.parentElement.remove();
            }
        });
    </script>
</body>

</html>