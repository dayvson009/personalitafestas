$('.owl-carousel-modal').owlCarousel({
    loop:true,
    responsiveClass:true,
    responsive:{
        0:{
            stagePadding: 0,
            items:1,
            nav:true
        },
        750:{
            stagePadding: 20,
            items:1,
            nav:true
        },
        850:{
            stagePadding: 40,
            items:1,
            nav:true
        },
        970:{
            stagePadding: 60,
            items:1,
            nav:true
        },
        1150:{
            stagePadding: 5,
            items:2,
            nav:true,
            loop:true
        },
        1250:{
            stagePadding: 20,
            items:2,
            nav:true,
            loop:true
        }
    }
})

// $('.owl-carousel-modal').owlCarousel({
//     stagePadding: 100,
//     loop:true,
//     margin:10,
//     responsiveClass:true,
//     responsive:{
//         0:{
//             items:1,
//             nav:true
//         },
//         600:{
//             items:3,
//             nav:false
//         },
//         1000:{
//             items:4,
//             nav:true,
//             loop:false
//         }
//     }
// })


const inputName = document.getElementById("nome");
const inputAge = document.getElementById("idade");
const inputNameAll = document.querySelectorAll(".nome")
const inputAgeAll = document.querySelectorAll(".idade")
// const centralized = document.getElementById("centralized-quadro");

// bandeirola = null;
// teste=null;
// const gerate = (event) => {
//   bandeirola = document.getElementById("bandeirola");
//   console.log(bandeirola.lastElementChild)
//   if(bandeirola.lastElementChild != null){
//     bandeirola.lastElementChild.remove("div");
//   }
//   if(inputName.value.length <= 5){
//     var rotate = inputName.value.length * 6.5;
//     centralized.style.width = (inputName.value.length * 32) +"px";
//   }else if(inputName.value.length > 5 && inputName.value.length <= 11){
//     var rotate = inputName.value.length * 5.7;
//     centralized.style.width = (inputName.value.length * 32) +"px";
//   }else if(inputName.value.length > 11){
//     var rotate = inputName.value.length * 5.5;
//     centralized.style.width = "355px";
//   }
  
//   bandeirola.style.transform = "rotate("+rotate+"deg)";
//   centralized.style.top = -(inputName.value.length * 5) +"px";
//   for(i=0; i<inputName.value.length; i++){
//     console.log(event)
//     console.log(inputName.value)
//     console.log(inputName.value[inputName.value.length-1])
//     createItem(inputName.value[inputName.value.length-1])
//   }
// }

// const createItem = (letter) => {
//   if(bandeirola.lastElementChild != null){
//     bandeirola = bandeirola.lastElementChild;
//   } 
//   bandeirola.insertAdjacentHTML('beforeend', `<div><span>${letter}</span></div>`);
// }

// gerate();

inputName.addEventListener('keyup', (it) =>{
  inputNameAll.forEach(item => item.value = it.target.value)
  setValues()
  // gerate(it)
})

inputAge.addEventListener('keyup', (it) =>{
  inputAgeAll.forEach(item => item.value = it.target.value)
  setValues()
})


const previewGroup = document.querySelector("#preview");
const imagesThumb = document.querySelectorAll(".thumb");
const namePreview = document.querySelector(".name-preview");
const agePreview = document.querySelector(".age-preview");
const caixas = ["bandeirola", "quadro", "topodebolo", "milk", "meiabala", "piramide", "forminha"]

const setPropriety = (obj) => {
  previewGroup.setAttribute('data-item', obj.item)
  previewGroup.setAttribute('data-name', obj.name)
  previewGroup.setAttribute('data-age', obj.age)
  setValues()
}

const setValues = () => {
  const obj = previewGroup.dataset

  const nome = document.querySelectorAll(`.${obj.item}.nome`)[1]
  const idade = document.querySelectorAll(`.${obj.item}.idade`)[1]

  namePreview.style = obj.name
  agePreview.style = obj.age

  namePreview.innerHTML = nome.value
  agePreview.innerHTML = idade.value
}

imagesThumb.forEach(item => {
  item.addEventListener("click", (el)=>{setPropriety(el.target.dataset) })
})

imagesThumb[0].click()

caixas.forEach(item => {
  document.querySelectorAll(`.${item}.nome`)
  .forEach(field => {field.addEventListener('input',(e)=> setValues()) })
  
  document.querySelectorAll(`.${item}.idade`)[1].addEventListener('input',(e)=>{
    setValues();
  })
})