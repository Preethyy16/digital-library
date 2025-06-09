<?php
// Predefined employee details
$employees = [
    ['name' => 'John Doe', 'designation' => 'Manager', 'department' => 'HR', 'salary' => 75000],
    ['name' => 'Jane Smith', 'designation' => 'Developer', 'department' => 'IT', 'salary' => 60000],
    ['name' => 'Michael Brown', 'designation' => 'Analyst', 'department' => 'Finance', 'salary' => 65000],
    ['name' => 'Emily Davis', 'designation' => 'Tester', 'department' => 'IT', 'salary' => 55000]
];

// Get the search term
$searchTerm = (isset($_GET['term']) ? $_GET['term'] : ' ');


// Filter employees based on the search term
$filteredEmployees = [];
if (!empty($searchTerm)) {
    foreach ($employees as $employee) {
        if (stripos($employee['name'], $searchTerm) !== false || stripos($employee['designation'], $searchTerm) !== false) {
            $filteredEmployees[] = $employee;
        }
    }
}

// Return the filtered employees as JSON
echo json_encode($filteredEmployees);
?>
