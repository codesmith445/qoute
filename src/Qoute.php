<?php

 namespace Codesmith445\Qoute;

 class Qoute
 {
    protected $qoutes = [
        "Code is like humor. When you have to explain it, it’s bad.",
        "First, solve the problem. Then, write the code.",
        "Experience is the name everyone gives to their mistakes.",
        "In order to be irreplaceable, one must always be different.",
        "Java is to JavaScript what car is to Carpet."
    ];

    public function random()
    {
        return $this->qoutes[array_rand($this->qoutes)];
    }
 }