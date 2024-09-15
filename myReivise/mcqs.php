<?php
include 'db.php'; // Include database connection

$sql = "SELECT * FROM mcq_db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='container containerofMCQs'>";
        echo "<div class='question-section' id='mcq" . $row["id"] . "'>";
        echo "<h2 class='question'>" . $row["question"] . "</h2>";
        echo "<div class='mcq-options'>";
        echo "<div class='option'>";
        echo "<label for='option" . $row["id"] . "A' class='text-lg cursor-pointer flex items-center w-full'>";
        echo "<input type='radio' name='option" . $row["id"] . "' value='A' id='option" . $row["id"] . "A'>";
        echo "a) " . $row["option_a"];
        echo "<span class='tick-icon hidden'>&#10003;</span>";
        echo "<span class='cross-icon hidden'>&#10007;</span>";
        echo "<span class='ripple'></span>";
        echo "</label>";
        echo "</div>";
        echo "<div class='option'>";
        echo "<label for='option" . $row["id"] . "B' class='text-lg cursor-pointer flex items-center w-full'>";
        echo "<input type='radio' name='option" . $row["id"] . "' value='B' id='option" . $row["id"] . "B'>";
        echo "b) " . $row["option_b"];
        echo "<span class='tick-icon hidden'>&#10003;</span>";
        echo "<span class='cross-icon hidden'>&#10007;</span>";
        echo "<span class='ripple'></span>";
        echo "</label>";
        echo "</div>";
        echo "<div class='option'>";
        echo "<label for='option" . $row["id"] . "C' class='text-lg cursor-pointer flex items-center w-full'>";
        echo "<input type='radio' name='option" . $row["id"] . "' value='C' id='option" . $row["id"] . "C'>";
        echo "c) " . $row["option_c"];
        echo "<span class='tick-icon hidden'>&#10003;</span>";
        echo "<span class='cross-icon hidden'>&#10007;</span>";
        echo "<span class='ripple'></span>";
        echo "</label>";
        echo "</div>";
        echo "<div class='option'>";
        echo "<label for='option" . $row["id"] . "D' class='text-lg cursor-pointer flex items-center w-full'>";
        echo "<input type='radio' name='option" . $row["id"] . "' value='D' id='option" . $row["id"] . "D'>";
        echo "d) " . $row["option_d"];
        echo "<span class='tick-icon hidden'>&#10003;</span>";
        echo "<span class='cross-icon hidden'>&#10007;</span>";
        echo "<span class='ripple'></span>";
        echo "</label>";
        echo "</div>";
        echo "</div>";
        echo "<div class='answer-section'>";
        echo "<p class='text-lg font-normal'><span>Answer: </span>The writer watched the play in '" . $row["option_" . $row["correct_option"]] . "'.</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No questions found.";
}

$conn->close();
?>
