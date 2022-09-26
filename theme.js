const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");
const inputs = document.querySelectorAll(".input");
const chart = document.querySelector("#chart").getContext('2d');


new Chart(chart, {
  type:'line', 
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May',
    'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
datasets: [
  {
    label: 'Income',
data: [15000, 20000, 35000, 10000, 55000, 23000, 21000,
  29000, 44000, 14000, 25000, 45000],
borderColor: 'green',
borderWidth: 2

  },
{
  label: 'Expenses',
data: [1500, 2000, 5000, 1000, 5000, 2000, 1000,
  9000, 4000, 1000, 5000, 7500],
borderColor: 'red',
borderWidth: 2
}
]
},
options: {
  Responsive: true
}

})

menuBtn.addEventListener('click', ()=> {

    sideMenu.style.display = 'block';

})
    
    closeBtn.addEventListener('click', () => {

        sideMenu.style.display = 'none';

})

themeToggler.addEventListener('click' , () => {

document.body.classList.toggle('dark-theme-variables');


})

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

new Chart(chart, {
  type:'line', 
  date: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May',
    'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],
datasets: [
  {
    labels: 'Income',
data: [15000, 20000, 35000, 10000, 55000, 23000, 21000,
  29000, 44000, 14000, 25000],
borderColor: 'Green',
borderWidth: 2

  },
{
  label: 'Expenses',
data: [1500, 2000, 5000, 1000, 5000, 2000, 1000,
  9000, 4000, 1000, 5000],
borderColor: 'Red',
borderWidth: 2
}
]
},
options: {
  Responsive: true
}

})

function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

dycalendar.draw({
  targer: '#dycalendar',
  type: 'month',
})