//Deni

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry);
        if(entry.isIntersecting) {
            entry.target.classList.add('rowShow');
        }
        else {
            entry.target.classList.remove('rowShow');
        }
    });
});

const hiddenElements = document.querySelectorAll('.row');
hiddenElements.forEach((el) => observer.observe(el));