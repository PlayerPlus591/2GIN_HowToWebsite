//Deni

function openNav() {
    document.getElementById("mySidenav").style.left = "0px";
    document.getElementById("hamburger").style.height = "30vw";

    // Get all span elements inside the hamburger
    const spans = document.querySelectorAll("#hamburger span");
    
    // Set the line-height for each span
    spans.forEach(span => {
      span.style.lineHeight = "1.5"; // Adjust this value as necessary
    });
}

function closeNav() {
    document.getElementById("mySidenav").style.left = "-800px";
    document.getElementById("hamburger").style.height = "20vw";

    // Get all span elements inside the hamburger
    const spans = document.querySelectorAll("#hamburger span");
    
    // Set the line-height for each span
    spans.forEach(span => {
      span.style.lineHeight = "1"; // Adjust this value as necessary
    });
}

function toggleNav() {
    var sidenav = document.getElementById("mySidenav");
    if (sidenav.style.left === "0px") {
        closeNav();
    } else {
        openNav();
    }
}