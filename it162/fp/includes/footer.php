<!--footer starts her, applyed by nahum-->
    <footer>
      <p><small>&copy; 2024-<span id="this-year"></span> by 
          Nahum Yanez, All Rights Reserved ~ 
          <a id="checker_index_html" href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fnahyan.dreamhosters.com%2Fit162%2Ffp%2Findex.html" target="_blank">checker_index.html</a> ~ 
          <a id="checker_main_css" href="https://validator.w3.org/nu/?showsource=yes&doc=https%3A%2F%2Fnahyan.dreamhosters.com%2Fit162%2Ffp%2Fcss%2Fnav.css" target="_blank">checker_main.css</a>
          <a id="checker_nav_css" href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fnahyan.dreamhosters.com%2Fit162%2Ffp%2Fcss%2Fnav.css" target="_blank">checker_nav.css</a>
        </small>
        </p>
    </footer>
</main>
     

  
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
    <script>
    //https://tinyurl.com/dynamic-html-css-checkers
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href); 
     
     //set current year in span with id of this-year
     let d = new Date(); let thisYear = d.getFullYear();
     document.getElementById("this-year").innerHTML = thisYear;
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>








<!--SCROLL TO TOP BUTTOM STARTS HERE-->
<button onclick="topFunction()" id="myBtn" title="Go to top">Regresar</button>
<script>
// Get the button
let mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<!-- SCROLL TOP BUTTOM ENDS HERE-->






 </body>
</html>
