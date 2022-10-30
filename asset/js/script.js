'use strict';

// Fonction pour que les éléments de la navbar apparaîssent dans le contenu offcanva quand on clique sur l'icon du menu burger
(function () { document.querySelector('#navbarSideCollapse').addEventListener('click', function () {
            document.querySelector('.offcanvas-collapse').classList.toggle('open')
        })
    }
)();


// Filtre les item du porftolio
const filterButtons = document.getElementById("filter-btns").children;
const items = document.getElementById("portfolio-gallery").children;
  
for (let i = 0; i < filterButtons.length; i++) {
    filterButtons[i].addEventListener("click", function () {
        for (let j = 0; j < filterButtons.length; j++) {
            filterButtons[j].classList.remove("active");
        }
        this.classList.add("active");
        const target = this.getAttribute("data-target");
  
        for (let k = 0; k < items.length; k++) {
            items[k].style.display = "none";
            if (target == items[k].getAttribute("data-id")) {
                items[k].style.display = "block";
            }
            if (target == "all") {
                items[k].style.display = "block";
            }
        }
  
    })
};

   
// Cherche toutes les formulaires a qui s'appliquent le "need-validation"
const forms = document.getElementsByClassName('needs-validation')

Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
    if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
    }
    event.preventDefault();
    form.classList.add('was-validated');
    }, false)
});

