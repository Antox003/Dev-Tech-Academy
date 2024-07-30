const title = document.querySelector('.title')
const subtitle = document.querySelector('.subtitle')
const graphic = document.querySelector('.graphic')
const pcman = document.querySelector('.pcman')


document.addEventListener('scroll', function(){
    let value= window.scrollY;
    //console.log(value);

    title.style.marginTop= value * 1.1 + 'px';
    subtitle.style.marginTop= value * 1.1 + 'px';

    graphic.style.marginLeft = -value + 'px';

    pcman.style.marginLeft = value + 'px';

})


