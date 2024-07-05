const form = document.getElementById("formulario");
const campos = document.querySelectorAll(".required");
const aRequired = document.querySelectorAll(".error");

form.addEventListener('submit', (event) => {
    event.preventDefault();
    nameValidate();
    sobrenomeValidate();
})

function setError(index){
   campos[index].style.border = '1px solid red';
   aRequired[index].style.display = 'block';
}

function removeError(index) {
    campos[index].style.border = '';
    aRequired[index].style.display = 'none';
}

function nameValidate() {
    if(campos[0].value.length < 3)
    {
        setError(0);
        
    } else {
        removeError(0);
    }
}

function sobrenomeValidate() {
    if(campos[1].value.length < 3)
    {
        setError(1)
    } else {
        removeError(1)
    }
}