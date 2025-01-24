

const facultySelect = document.getElementById('facultySelect');
const programSelect = document.getElementById('programSelect');
const programsByFaculty = {
    "Business": ["Principles of Management & Business",
        "Computer Applications and Programming Fundamentals",
        "English and Soft Skills Development",
        "Fundamentals of Mathematics and Quantitative Techniques",
        "Fundamentals of Economics",
        "Fundamentals of Accounting",
        "Business Theory & Environment",
        "Professional Development",
        "Project Management", "Marketing", "Management"],




    "Computing": ["Principles of Management & Business",
        "Computer Applications and Programming Fundamentals",
        "English and Soft Skills Development",
        "Fundamentals of Mathematics and Quantitative Techniques",
        "Computer Technology",
        "Web Design and Development",
        "Programming in Python",
        "ICT Project Management",
        "Network Fundamentals"],


    "Engineering": ["Fundamentals in Chemistry",
        "Fundamentals in Biology",
        "Fundamentals in Physics",
        "Fundamentals in Mathematics and Quantitative Techniques",
        "Genetics and Human Biology",
        "Fundamentals in Psychology",
        "Academic Writing",
        "English and Soft Skill Development"],

    "Science": ["jbgyujhjhbhju"]
};

facultySelect.addEventListener('change', () => {
    const selectedFaculty = facultySelect.value;
    const availablePrograms = programsByFaculty[selectedFaculty];

    programSelect.innerHTML = ''; // Clear existing options

    if (availablePrograms) {
        availablePrograms.forEach(program => {
            const option = document.createElement('option');
            option.value = program;
            option.text = program;
            programSelect.appendChild(option);
        });
    } else {
        // Handle case where no programs are available for the selected faculty
        const noProgramsOption = document.createElement('option');
        noProgramsOption.value = '';
        noProgramsOption.text = 'No Programs Available';
        programSelect.appendChild(noProgramsOption);
    }
});

