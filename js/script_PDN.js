// Animacion Nav Bar

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click', () => {

        //Togle Nav
        nav.classList.toggle('nav-active');

        //Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation){
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 1.5s ease-out forwards ${index / 7 + 0}s` 
            }
        });

        // Burger Animate
        burger.classList.toggle('toggle');
    });

}
navSlide();



// Animación Carousel
const fila = document.querySelector('.contenedor-carousel');
const lastPodcast = document.querySelector('.last-podcast');

const flechaIzquierda = document.getElementById ('flecha-izquierda');
const flechaDerecha = document.getElementById ('flecha-derecha');

// EventListener para flecha derecha
flechaDerecha.addEventListener('click', () =>{
    fila.scrollLeft += fila.offsetWidth;
});

// EventListener para flecha Izquierda
flechaIzquierda.addEventListener('click', () =>{
    fila.scrollLeft -= fila.offsetWidth;
});

// Paginación   
const numeroPaginas = Math.ceil(lastPodcast.length / 5);
for (let i = 0; i < numeroPaginas; i++){
    const indicador = document.createElement('button');

    if(i === 0){
        indicador.classList.add('activo');
    }

    document.querySelector('.indicadores').appendChild(indicador);
    indicador.addEventListener('click', (e) => {
        fila.scrollLeft = i * fila.offsetWidth;

        document.querySelector('.indicadores .activo').classList.remove('activo');
        e.target.classList.add('activo');
    });
}   
