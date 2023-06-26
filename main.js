window.addEventListener('scroll', onScroll)

onScroll()

/* CRIANDO FUNÇÕES */
function onScroll() { 
    showNavOnScroll()
    showBackToTopButtonOnScroll()
    }
    
    


function showNavOnScroll() {  /*  DECLARO A FUNÇÃO QUE VOU CRIAR E O QUE ELA VAI FAZER  */
    if(scrollY > 550) {
        navigation.classList.add('scroll')  // aqui eu chamo a função para o ID setado no HTML 
        } else {
            navigation.classList.remove('scroll')
        }
}


function showBackToTopButtonOnScroll() {  /*  DECLARO A FUNÇÃO QUE VOU CRIAR E O QUE ELA VAI FAZER  */
    if(scrollY > 550) {
        backToTopButton.classList.add('show')  // aqui eu chamo a função para o ID setado no HTML 
        } else {
            backToTopButton.classList.remove('show')
        }
}

function openMenu(){  /*  DECLARO A FUNÇÃO QUE VOU CRIAR E O QUE ELA VAI FAZER  */
    document.body.classList.add('menu-expanded')
}

function closeMenu(){   /*  DECLARO A FUNÇÃO QUE VOU CRIAR E O QUE ELA VAI FAZER  */
    document.body.classList.remove('menu-expanded')
}




/* EXECUTANDO FUNÇÕES */
onScroll();


ScrollReveal({
    origin: 'top',
    distance: '300px',
    duration: 1000,
}).reveal(`
#home, 
#home img, 
#home .stats,
#services,
#services header,
#services .card,
#about,
#about header,
#about .content
`);