<?php
$errors = [];

function sanitizeText($value) {
    return trim(htmlspecialchars($value));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitizeText($_POST['name'] ?? '');
    $postal = sanitizeText($_POST['postal'] ?? '');
    $dob = sanitizeText($_POST['dob'] ?? '');
    $email = sanitizeText($_POST['email'] ?? '');
    $password = sanitizeText($_POST['password'] ?? '');
    $country = sanitizeText($_POST['country'] ?? '');

    if ($name === '') {
        $errors[] = 'Full Name is required.';
    }

    if ($postal === '') {
        $errors[] = 'Postal Code is required.';
    } elseif (!preg_match('/^[A-Za-z0-9\s-]{3,10}$/', $postal)) {
        $errors[] = 'Postal Code must be 3 to 10 letters, numbers, spaces, or hyphens.';
    }

    if ($dob === '') {
        $errors[] = 'Date of Birth is required.';
    } elseif (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $dob)) {
        $errors[] = 'Date of Birth must be in YYYY-MM-DD format.';
    }

    if ($email === '') {
        $errors[] = 'Email Address is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }

    if ($password === '') {
        $errors[] = 'Password is required.';
    } elseif (strlen($password) < 6) {
        $errors[] = 'Password must be at least 6 characters long.';
    }

    if ($country === '') {
        $errors[] = 'Please select a country.';
    }

    if (empty($errors)) {
        echo '<h2>Registration Successful</h2>';
        echo '<p>Thank you, ' . $name . '.</p>';
        echo '<p>Your details have been submitted successfully.</p>';
    } else {
        echo '<h2>Validation Errors</h2>';
        echo '<ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
        echo '<p><a href="form2.html">Go back to the form</a></p>';
    }
}
?>
