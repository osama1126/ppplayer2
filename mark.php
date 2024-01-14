<?php

class Course
{
    public $name;
    public $test1;
    public $test2;
    public $finalGrade;

    public function __construct($name, $test1, $test2)
    {
        $this->name = $name;
        $this->test1 = $test1;
        $this->test2 = $test2;
        $this->calculateGrade();
    }

    public function calculateGrade()
    {
        $average = ($this->test1 + $this->test2) / 2;

        if ($average >= 90) {
            $this->finalGrade = 'A';
        } elseif ($average >= 80) {
            $this->finalGrade = 'B';
        } elseif ($average >= 70) {
            $this->finalGrade = 'C';
        } elseif ($average >= 60) {
            $this->finalGrade = 'D';
        } else {
            $this->finalGrade = 'F';
        }
    }
}

function getInput($prompt)
{
    echo $prompt . ": ";
    return trim(fgets(STDIN));
}

function printTableHeader()
{
    echo "Course\tMark\tGrade\n";
    echo "---------------------\n";
}

$numCourses = getInput("Enter the number of courses");

$courses = [];

for ($i = 0; $i < $numCourses; $i++) {
    $courseName = getInput("Enter the name of course " . ($i + 1));
    $test1 = getInput("Enter test1 mark for " . $courseName);
    $test2 = getInput("Enter test2 mark for " . $courseName);

    $course = new Course($courseName, $test1, $test2);
    $courses[] = $course;
}

printTableHeader();

foreach ($courses as $course) {
    echo $course->name . "\t" . (($course->test1 + $course->test2) / 2) . "\t" . $course->finalGrade . "\n";
}
?>