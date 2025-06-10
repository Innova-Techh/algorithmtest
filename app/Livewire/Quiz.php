<?php

namespace App\Livewire;

use Livewire\Component;

class Quiz extends Component
{
    public $questions = [
        [
            'question' => 'What is 156 + 289?',
            'choices' => ['435', '445', '455', '465'],
            'answer' => 1,
            'explanation' => '156 + 289 = 445. Add the ones: 6 + 9 = 15 (write 5, carry 1). Add the tens: 5 + 8 + 1 = 14 (write 4, carry 1). Add the hundreds: 1 + 2 + 1 = 4.'
        ],
        [
            'question' => 'What is 23 x 3?',
            'choices' => ['66', '69', '70', '73'],
            'answer' => 0,
            'explanation' => '23 x 3 = 69.'
        ],
        [
            'question' => 'What is 144 ÷ 12?',
            'choices' => ['10', '11', '12', '13'],
            'answer' => 2,
            'explanation' => '144 ÷ 12 = 12.'
        ],
        [
            'question' => 'What is the value of π (pi) rounded to 2 decimal places?',
            'choices' => ['3.12', '3.14', '3.16', '3.18'],
            'answer' => 1,
            'explanation' => 'π ≈ 3.14.'
        ],
        [
            'question' => 'What is 7²?',
            'choices' => ['42', '47', '49', '56'],
            'answer' => 2,
            'explanation' => '7² = 49.'
        ],
        [
            'question' => 'What is the next prime number after 11?',
            'choices' => ['12', '13', '15', '17'],
            'answer' => 1,
            'explanation' => 'The next prime after 11 is 13.'
        ],
        [
            'question' => 'What is 1000 - 456?',
            'choices' => ['534', '544', '554', '564'],
            'answer' => 0,
            'explanation' => '1000 - 456 = 544.'
        ],
        [
            'question' => 'What is the perimeter of a square with side 8?',
            'choices' => ['16', '24', '32', '64'],
            'answer' => 2,
            'explanation' => 'Perimeter = 4 x 8 = 32.'
        ],
        [
            'question' => 'What is 15% of 200?',
            'choices' => ['20', '25', '30', '35'],
            'answer' => 2,
            'explanation' => '15% of 200 = 0.15 x 200 = 30.'
        ],
        [
            'question' => 'What is the median of 3, 7, 9, 15, 21?',
            'choices' => ['7', '9', '15', '21'],
            'answer' => 1,
            'explanation' => 'The median is 9.'
        ],
    ];
    public $current = 0;
    public $selected = null;
    public $showExplanation = false;
    public $score = 0;

    public function select($index)
    {
        $this->selected = $index;
        $this->showExplanation = true;
        if ($index === $this->questions[$this->current]['answer']) {
            $this->score++;
        }
    }

    public function next()
    {
        if ($this->current < count($this->questions) - 1) {
            $this->current++;
            $this->selected = null;
            $this->showExplanation = false;
        }
    }

    public function render()
    {
        return view('livewire.quiz');
    }
}
