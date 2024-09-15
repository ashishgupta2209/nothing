


// JS FOR THE toggle switch's opacity controll!

window.addEventListener('DOMContentLoaded', function () {
    // Wait for 4 seconds after page load
    setTimeout(function () {
        document.querySelector('.theme-toggle-container').classList.add('low-opacity');
    }, 4000);

    // Add event listener to reset the opacity when toggling the switch
    document.querySelector('#theme-switch').addEventListener('change', function () {
        document.querySelector('.theme-toggle-container').classList.remove('low-opacity');
        setTimeout(function () {
            document.querySelector('.theme-toggle-container').classList.add('low-opacity');
        }, 4000);
    });
}); // End 




// Ripple effect function
document.querySelectorAll('.button, .button-secondary, .button-tertiary').forEach(button => {
    button.addEventListener('click', function (e) {
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const ripple = document.createElement('span');
        ripple.style.left = `${x}px`;
        ripple.style.top = `${y}px`;
        this.appendChild(ripple);
        setTimeout(() => ripple.remove(), 600);
    });
}); // End

// script.js for the hamburgar menu

// script.js

document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');
    const navIcons = document.querySelector('.navicons');

    // Toggle the menu visibility when the menu toggle is clicked
    menuToggle.addEventListener('click', function () {
        navLinks.classList.toggle('active');
    });

    // Close the menu when a navigation link is clicked
    navLinks.addEventListener('click', function (event) {
        if (event.target.tagName === 'A') {
            navLinks.classList.remove('active');
        }
    });

    // Close the menu if clicking outside of the menu or menu toggle
    document.addEventListener('click', function (event) {
        if (!menuToggle.contains(event.target) && !navIcons.contains(event.target)) {
            navLinks.classList.remove('active');
        }
    });
});
// javascript for the ripple effect of the nrbuttons
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.nrbutton');

    buttons.forEach(button => {
        button.addEventListener('click', function (e) {
            // Create the ripple element
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');

            // Get button dimensions and click position
            const rect = button.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            // Set ripple styles
            ripple.style.width = ripple.style.height = `${size}px`;
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;

            // Append ripple to button
            button.appendChild(ripple);

            // Remove ripple after animation
            ripple.addEventListener('animationend', () => {
                ripple.remove();
            });
        });
    });
});
// Javascript for the ripple effect of the options
document.addEventListener('DOMContentLoaded', () => {
    const options = document.querySelectorAll('.option');

    options.forEach(option => {
        option.addEventListener('click', (e) => {
            // Create a ripple effect
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            option.appendChild(ripple);

            // Set the size and position of the ripple
            const rect = option.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            ripple.style.width = ripple.style.height = `${size}px`;
            ripple.style.left = `${e.clientX - rect.left - size / 2}px`;
            ripple.style.top = `${e.clientY - rect.top - size / 2}px`;

            // Remove the ripple element after animation completes
            ripple.addEventListener('animationend', () => {
                ripple.remove();
            });
        });
    });
});



// JS for the short-cut box in index.html

document.addEventListener('DOMContentLoaded', function () {
    const doneButton = document.getElementById('done-button');
    const boardSelect = document.getElementById('board-select');
    const classSelect = document.getElementById('class-select');
    const subjectSelect = document.getElementById('subject-select');

    doneButton.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent the default anchor click behavior

        const board = boardSelect.value;
        const className = classSelect.value;
        const subject = subjectSelect.value;

        let url = '';

        // Conditions for class8 of bihar-board
        if (board === 'bihar-board' && className === 'class8' && subject === 'text_book_solution') {
            url = 'SOLUTIONS/BSEB_SOLUS/Class8thSoluB/Br8thsoluredi.html';
        } else if (board === 'bihar-board' && className === 'class8' && subject === 'mcqs') {
            url = 'MCQs\BSEB_MCQs\Class8thMCQ\Br8thmcqredi.html';
        } else if (board === 'bihar-board' && className === 'class8' && subject === 'online_test') {
            url = '#';
        } else if (board === 'bihar-board' && className === 'class8' && subject === 'get_notes') {
            url = '#';
        }
        // Conditions for class9 of bihar-board
        else if (board === 'bihar-board' && className === 'class9' && subject === 'text_book_solution') {
            url = 'SOLUTIONS/BSEB_SOLUS/Class9thSoluB/Br9thsoluredi.html';
        } else if (board === 'bihar-board' && className === 'class9' && subject === 'mcqs') {
            url = 'MCQs/BSEB_MCQs/Class9thMCQ/Br9thmcqredi.html';
        } else if (board === 'bihar-board' && className === 'class9' && subject === 'online_test') {
            url = 'TESTS/BSEB_TESTS/Class9thTests/Br9thtests.html';
        } else if (board === 'bihar-board' && className === 'class9' && subject === 'get_notes') {
            url = 'NOTES/BSEB_NOTES/Class9thNotes/Br9thnotes.html';
        }

        // Conditions for class10 of bihar-board
        else if (board === 'bihar-board' && className === 'class10' && subject === 'text_book_solution') {
            url = 'SOLUTIONS/BSEB_SOLUS/Class10thSoluB/Br10thsoluredi.html';
        } else if (board === 'bihar-board' && className === 'class10' && subject === 'mcqs') {
            url = 'MCQs/BSEB_MCQs/Class10thMCQ/Br10thmcqredi.html';
        } else if (board === 'bihar-board' && className === 'class10' && subject === 'online_test') {
            url = 'TESTS/BSEB_TESTS/Class10thTests/Br10thtests.html';
        } else if (board === 'bihar-board' && className === 'class10' && subject === 'get_notes') {
            url = 'NOTES/BSEB_NOTES/Class10thNotes/Br10thnotes.html';
        }

        // Conditions for CBSE Board
        else if (board === 'cbse' && className === 'class8' && subject === 'text_book_solution') {
            url = 'SOLUTIONS/CBSE_SOLUS/Class8thSoluB/Br8thsoluredi.html';
        } else if (board === 'cbse' && className === 'class8' && subject === 'mcqs') {
            url = 'MCQs/CBSE_MCQs/Class8thMCQ/Br8thmcqredi.html';
        } else if (board === 'cbse' && className === 'class8' && subject === 'online_test') {
            url = 'TESTS/CBSE_TESTS/Class8thTests/Br8thtests.html';
        } else if (board === 'cbse' && className === 'class8' && subject === 'get_notes') {
            url = 'NOTES/CBSE_NOTES/Class8thNotes/Br8thnotes.html';
        } else if (board === 'cbse' && className === 'class9' && subject === 'text_book_solution') {
            url = 'SOLUTIONS/CBSE_SOLUS/Class9thSoluB/Br9thsoluredi.html';
        } else if (board === 'cbse' && className === 'class9' && subject === 'mcqs') {
            url = 'MCQs/CBSE_MCQs/Class9thMCQ/Br9thmcqredi.html';
        } else if (board === 'cbse' && className === 'class9' && subject === 'online_test') {
            url = 'TESTS/CBSE_TESTS/Class9thTests/Br9thtests.html';
        } else if (board === 'cbse' && className === 'class9' && subject === 'get_notes') {
            url = 'NOTES/CBSE_NOTES/Class9thNotes/Br9thnotes.html';
        } else if (board === 'cbse' && className === 'class10' && subject === 'text_book_solution') {
            url = 'SOLUTIONS/CBSE_SOLUS/Class10thSoluB/Br10thsoluredi.html';
        } else if (board === 'cbse' && className === 'class10' && subject === 'mcqs') {
            url = 'MCQs/CBSE_MCQs/Class10thMCQ/Br10thmcqredi.html';
        } else if (board === 'cbse' && className === 'class10' && subject === 'online_test') {
            url = 'TESTS/CBSE_TESTS/Class10thTests/Br10thtests.html';
        } else if (board === 'cbse' && className === 'class10' && subject === 'get_notes') {
            url = 'NOTES/CBSE_NOTES/Class10thNotes/Br10thnotes.html';
        }
        else if (board == '' || className == '' || subject == '') {
            alert("Please Select Each Option!");
            return;
        }

        // Add more conditions as needed


        window.location.href = url; // Redirect to the constructed URL
    });
});


// JS for the automatic change in current year in the footer's copyright statement
function addCurrentDate() {
    const yearSpan = document.querySelector(".current-year");
    const currentYear = new Date().getFullYear();
    yearSpan.textContent = currentYear;
}
addCurrentDate();


