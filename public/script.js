document.addEventListener('click', (e) => {
    if (e.target.tagName === 'A') {
      e.preventDefault(); // Prevent full page reload
      const url = e.target.getAttribute('href');
      window.history.pushState({}, '', url); // Update the URL
      loadContent(); // Load the new content
    }
  });
  
  async function loadContent() {
    const urlParams = new URLSearchParams(window.location.search);
    const page = urlParams.get('a') || 'home'; // Default to 'home'
  
    // Fetch the content from the server
    const response = await fetch(`/?a=${page}`);
    const content = await response.text();
  
    // Update the content div
   // document.getElementById('content').innerHTML = content;
  //}
  
  // Load content when the page loads
  window.onload = loadContent;
  
  // Load content when the back/forward buttons are used
  window.onpopstate = loadContent;

  document.getElementById("signup-form").addEventListener("submit", function(e) {
    e.preventDefault();  // 🔒 Stop browser from submitting and reloading
    signUp();            // 🔁 Call your Firebase sign-up function
  });
}