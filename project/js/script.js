document.addEventListener("DOMContentLoaded", function() {
  // Fetch course data from courses.php and populate the course list
  fetch("courses.php")
    .then(response => response.json())
    .then(data => {
        const courseList = document.getElementById("course-list");
        data.forEach(course => {
            const courseItem = document.createElement("div");
            courseItem.classList.add("course-item");
            courseItem.innerHTML = `
                <h3>${course.title}</h3>
                <p>${course.description}</p>
                <button class="view-details" data-course-id="${course.id}">View Details</button>
            `;
            courseList.appendChild(courseItem);
        });

        // Add event listener to the "View Details" buttons
        const viewDetailsButtons = document.getElementsByClassName("view-details");
        Array.from(viewDetailsButtons).forEach(button => {
            button.addEventListener("click", function() {
                const courseId = this.getAttribute("data-course-id");
                window.location.href = `course_details.php?id=${courseId}`;
            });
        });
    });
});