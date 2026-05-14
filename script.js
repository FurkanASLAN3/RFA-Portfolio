// 1. AJAX: Fetch Projects from Database
document.addEventListener('DOMContentLoaded', () => {
    fetch('fetch_projects.php')
    .then(response => response.json())
    .then(data => {
        const container = document.getElementById('project-container');
        data.forEach(project => {
            container.innerHTML += `
                <div class="card">
                    <h3>${project.title}</h3>
                    <p>${project.description}</p>
                </div>`;
        });
    });
});

// 2. Dark Mode Toggle
document.getElementById('theme-toggle').addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
});

// 3. Form Validation
document.getElementById('contactForm').addEventListener('submit', function(e) {
    const name = document.getElementById('name').value;
    if (name.length < 3) {
        alert("Name must be at least 3 characters long.");
        e.preventDefault();
    }
});