let cajaInput = document.querySelectorAll('input')
cajaInput.map(item => {
    item.addEventListener(click, ()=> {
        item.classList.add('active')
    })
})

