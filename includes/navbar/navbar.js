const navbar = document.getElementById('navbar');
const hamburguer = document.getElementById('hamburger');
const navMenu = document.querySelector('.nav-menu');
const arrayBtnsLink = document.querySelectorAll('.btnLink');
const bar = document.querySelectorAll('.bar')

let scrollAntigo = window.scrollY;
let ativoMobile = false;

// Efeito de Scroll (Fixar com estilo)
window.addEventListener('scroll', () => {

    if(window.scrollY < 150){
        navbar.style.backgroundColor = "rgba(0, 0, 0, 0)"
        return
    }

    if(ativoMobile){
        return;
    }

    //SE O ANTIGO FOR MENOR, ESTA DESCENDO A TELA
    if (window.scrollY > scrollAntigo) {
        navbar.classList.add('active');
        
    }else{//SUBINDO A TELA
        navbar.classList.remove('active');
        navbar.style.backgroundColor = "rgba(0, 0, 0, 0.8)"
    }

    scrollAntigo = window.scrollY;

});

// Abrir/Fechar Menu Mobile
hamburguer.addEventListener('click', () => {
    ativoMobile = !ativoMobile;
    
    if(ativoMobile){
        bar.forEach(item => {
            item.style.backgroundColor = "black"
        });
    }else{
        bar.forEach(item => {
            item.style.backgroundColor = "white"
        });
    }

    hamburguer.classList.toggle('is-active');
    navMenu.classList.toggle('show');
});

arrayBtnsLink.forEach(item => {
    item.addEventListener('click', () => {
        ativoMobile = false;
        hamburguer.classList.toggle('is-active');
        navMenu.classList.toggle('show');

        if(ativoMobile){
            bar.forEach(item => {
                item.style.backgroundColor = "black"
            });
        }else{
            bar.forEach(item => {
                item.style.backgroundColor = "white"
            });
        }
    })
})