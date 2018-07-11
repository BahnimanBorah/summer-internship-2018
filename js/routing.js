introduction();
 function introduction() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("blogcontent").innerHTML +=
        this.responseText;
      }
    };
    xhttp.open("GET", "pages/introduction.html", true);
    xhttp.send();
    document.getElementById('blogcontent');
  }
  
  function contact() {
    document.getElementById('contactSection').scrollIntoView();
  }

  function projects() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("blogcontent").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "pages/projects.html", true);
    xhttp.send();
    document.getElementById('blogcontent');
  }
