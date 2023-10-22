const images = document.querySelectorAll('img');
const pop = document.querySelector('.image');
const download = document.querySelector('.icon');

for(let image of images){
    image.addEventListener('click', function(){
        console.log("I'm clicked!!")
        pop.style.display = "inline";
        let URL = image.getAttribute('src');
        let imageURL = `URL(${URL})`
        pop.style.backgroundImage = imageURL;
        pop.style.backgroundSize = "cover";
        download.setAttribute('href', URL);
    })
}

function closePop(){
    pop.style.display = "none";
    console.log("I'm closed");
}