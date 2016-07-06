<? php

(function () {
    'use strict';
    // Variables
    var name, grade, average;
    // Input
    student.name = prompt("What's your name");
    do {
        name = prompt("What's the name of the subject?");
        grade = Number(prompt("What's your grade?"));
        student.addSubject(name, grade);
    } while (confirm('Do you want to add another grade?'));
    // Process
    average = student.calculateAverage().toFixed(2);
    // Output
    if (student.isAwesome()) {
        alert(student.name + " you're Awesome!!!! Your average was " + average);
    } else {
        alert(student.name + " you need more practice. Your average was " + average);
    }
})();