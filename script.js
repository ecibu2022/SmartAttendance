       
        document.addEventListener("DOMContentLoaded", function () {
          const links = document.querySelectorAll(".sidebar a");
          const contentDivs = document.querySelectorAll(".page-content");
      
          links.forEach(function (link) {
              link.addEventListener("click", function (e) {
                  e.preventDefault();
      
                  // Remove the "active" class from all links and content divs
                  links.forEach(function (l) {
                      l.classList.remove("active");
                  });
      
                  contentDivs.forEach(function (content) {
                      content.classList.remove("active");
                  });
      
                  // Add the "active" class to the clicked link and corresponding content div
                  const targetId = link.getAttribute("id") + "-content";
                  document.getElementById(targetId).classList.add("active");
                  link.classList.add("active");
              });
          });
      
          // Initial content to display (e.g., "Home" by default)
          document.getElementById("home").click();
      });
      