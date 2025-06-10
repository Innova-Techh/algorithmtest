<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quiz App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white flex items-center justify-center min-h-screen">
    <div id="quiz-app" class="bg-gray-900 rounded-lg w-full flex flex-col items-center justify-center m-0 mt-3">
    </div>
    <script>
        const questions = [
            {
                question: 'What is 156 + 289?',
                choices: ['435', '445', '455', '465'],
                answer: 1,
                explanation: '156 + 289 = 445. Add the ones: 6 + 9 = 15 (write 5, carry 1). Add the tens: 5 + 8 + 1 = 14 (write 4, carry 1). Add the hundreds: 1 + 2 + 1 = 4.'
            },
            {
                question: 'What is 23 x 3?',
                choices: ['66', '69', '70', '73'],
                answer: 0,
                explanation: '23 x 3 = 69.'
            },
            {
                question: 'What is 144 ÷ 12?',
                choices: ['10', '11', '12', '13'],
                answer: 2,
                explanation: '144 ÷ 12 = 12.'
            },
            {
                question: 'What is the value of π (pi) rounded to 2 decimal places?',
                choices: ['3.12', '3.14', '3.16', '3.18'],
                answer: 1,
                explanation: 'π ≈ 3.14.'
            },
            {
                question: 'What is 7²?',
                choices: ['42', '47', '49', '56'],
                answer: 2,
                explanation: '7² = 49.'
            },
            {
                question: 'What is the next prime number after 11?',
                choices: ['12', '13', '15', '17'],
                answer: 1,
                explanation: 'The next prime after 11 is 13.'
            },
            {
                question: 'What is 1000 - 456?',
                choices: ['534', '544', '554', '564'],
                answer: 0,
                explanation: '1000 - 456 = 544.'
            },
            {
                question: 'What is the perimeter of a square with side 8?',
                choices: ['16', '24', '32', '64'],
                answer: 2,
                explanation: 'Perimeter = 4 x 8 = 32.'
            },
            {
                question: 'What is 15% of 200?',
                choices: ['20', '25', '30', '35'],
                answer: 2,
                explanation: '15% of 200 = 0.15 x 200 = 30.'
            },
            {
                question: 'What is the median of 3, 7, 9, 15, 21?',
                choices: ['7', '9', '15', '21'],
                answer: 1,
                explanation: 'The median is 9.'
            },
        ];
        let current = 0;
        let selected = null;
        let showExplanation = false;
        let score = 0;
        function renderQuiz() {
            const q = questions[current];
            let html = '';
            html += `<div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-2 p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-11V6a1 1 0 012 0v1a1 1 0 01-2 0zm2 2H9v5h2V9z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-sm text-green-400">Question ${current + 1} of ${questions.length}</span>
                </div>
            </div>`;
            html += `<div class="bg-gray-800 h-1 rounded-full overflow-hidden mb-4"><div class="bg-green-400" style="width: ${(current + 1) / questions.length * 100}%; height: 100%"></div></div>`;
            html += `<h2 class="text-lg font-semibold mb-4 text-center">${q.question}</h2>`;
            html += `<div class="flex flex-col space-y-2 mb-4">`;
            q.choices.forEach((choice, i) => {
                let btnClass = '';
                let icon = '';
                if (showExplanation) {
                    if (i === q.answer) {
                        btnClass = 'bg-green-700 border-2 border-green-400 flex items-center justify-between pr-4';
                        icon = `<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 7.293a1 1 0 00-1.414 0L9 13.586l-2.293-2.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l7-7a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg>`;
                    } else if (selected === i) {
                        btnClass = 'bg-red-700 border-2 border-red-400 flex items-center justify-between pr-4';
                        icon = `<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 8.586l3.293-3.293a1 1 0 111.414 1.414L11.414 10l3.293 3.293a1 1 0 01-1.414 1.414L10 11.414l-3.293 3.293a1 1 0 01-1.414-1.414L8.586 10 5.293 6.707a1 1 0 011.414-1.414L10 8.586z" clip-rule="evenodd" />
                        </svg>`;
                    } else {
                        btnClass = 'bg-gray-800 text-gray-400';
                    }
                } else {
                    btnClass = 'bg-green-500 hover:bg-green-600';
                }
                html += `<button class="rounded-md py-2 transition text-left pl-6 pr-6 ${btnClass}" style="display:flex;align-items:center;justify-content:space-between;" ${showExplanation ? 'disabled' : ''} onclick="selectAnswer(${i})"><span>${String.fromCharCode(65 + i)}. ${choice}</span>${icon}</button>`;
            });
            html += `</div>`;
            if (showExplanation) {
                html += `<div class="bg-gray-800 rounded-lg p-4 mb-4"><span class="font-bold text-green-400 block mb-2">Explanation:</span><span class="text-sm text-gray-200">${q.explanation}</span></div>`;
                html += `<div class="flex justify-center">`;
                if (current < questions.length - 1) {
                    html += `<button onclick="nextQuestion()" class="bg-green-500 hover:bg-green-600 text-white font-semibold rounded-md px-6 py-2 mb-4 transition">Next Question</button>`;
                } else {
                    html += `<button onclick="finishQuiz()" class="bg-green-500 hover:bg-green-600 text-white font-semibold rounded-md px-6 py-2 transition">Finish Quiz</button>`;
                }
                html += `</div>`;
            }
            document.getElementById('quiz-app').innerHTML = html;
        }
        function selectAnswer(i) {
            if (showExplanation) return;
            selected = i;
            showExplanation = true;
            if (i === questions[current].answer) score++;
            renderQuiz();
        }
        function nextQuestion() {
            current++;
            selected = null;
            showExplanation = false;
            renderQuiz();
        }
        function finishQuiz() {
            let html = `<div class="text-center"><h2 class="text-2xl font-bold mb-4">Quiz Complete!</h2><p class="text-lg mb-2">Your Score: <span class="text-green-400 font-bold">${score}</span> / ${questions.length}</p><button onclick="restartQuiz()" class="mt-4 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-md px-6 py-2 transition">Restart Quiz</button></div>`;
            document.getElementById('quiz-app').innerHTML = html;
        }
        function restartQuiz() {
            current = 0;
            selected = null;
            showExplanation = false;
            score = 0;
            renderQuiz();
        }
        renderQuiz();
    </script>
</body>

</html>