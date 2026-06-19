<?php

$output = "Hello CI/CD World";

if ($output === "Hello CI/CD World") {
    echo "Test Passed";
    exit(0);
}

echo "Test Failed";
exit(1);