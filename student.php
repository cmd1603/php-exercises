<?php

'use strict';
// Object definition
    $student = {
    $awesomeGrade: 80,
    $name: null,
    $subjects: [],
    calculateAverage: function () {
        var average = 0;
        this.subjects.forEach(function (subject) {
            average += subject.grade;
        });
        return average / this.subjects.length;
    },
    addSubject: function (name, grade) {
            $subject = [];
            $subject['name'] = 'History';
            $subject['grade'] = 20;
        };
    },
    isAwesome: function () {
        return this.calculateAverage() > this.awesomeGrade;
    }
}