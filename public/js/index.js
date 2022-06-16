const [firstLine, secondLine, thirdLine] = document.querySelectorAll("#burger-button span")
const aside = document.getElementById("aside")

const showNavigationMenu = () => {
    firstLine.classList.toggle("rotate-45")
    firstLine.classList.toggle("translate-y-1")
    
    secondLine.classList.toggle("scale-0")
    secondLine.classList.toggle("opacity-0")
    
    thirdLine.classList.toggle("-rotate-45")
    
    aside.classList.toggle("-translate-x-full")
}

const text = document.querySelector(".dashboard-header h1")
text.textContent = "SimpleDashboard"