// Get the current date and time
function getCurrentDateTime() {
    const now = new Date();
    const dateOptions = { year: 'numeric', month: 'long', day: 'numeric' };
    const timeOptions = { hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true };
    
    const dateString = now.toLocaleDateString('en-US', dateOptions);
    const timeString = now.toLocaleTimeString('en-US', timeOptions);
    
    return { date: dateString, time: timeString };
}

// Update the current date and time on the homepage
function updateDateTime() {
    const dateTimeElement = document.getElementById('currentDateTime');
    if (dateTimeElement) {
        const { date, time } = getCurrentDateTime();
        dateTimeElement.querySelector('.date').textContent = date;
        dateTimeElement.querySelector('.time').textContent = time;
    }
}

// Update the date and time initially and set an interval to update it every second
updateDateTime();
setInterval(updateDateTime, 1000);
// Add this script to the end of your body tag or in a script tag in your head


  // Update the current date and time on the homepage
  function updateDateTime() {
    const dateTimeElement = document.getElementById('currentDateTime');
    if (dateTimeElement) {
      const { date, time } = getCurrentDateTime();
      dateTimeElement.querySelector('.date').textContent = date;
      dateTimeElement.querySelector('.time').textContent = time;
    }
  }

  // Update the date and time initially and set an interval to update it every second
  updateDateTime();
  setInterval(updateDateTime, 1000);

  // Slideshow functionality
  const slides = document.querySelectorAll('.slide');
  let currentSlide = 0;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.style.opacity = i === index ? 1 : 0;
    });
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  // Set an interval to switch to the next slide every few seconds (adjust as needed)
  setInterval(nextSlide, 1000);

