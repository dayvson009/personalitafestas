$('.owl-carousel').owlCarousel({
      stagePadding: 100,
      loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:3,
              nav:false
          },
          1000:{
              items:4,
              nav:true,
              loop:false
          }
      }
  })

function currentTime() {
   let date = new Date();
   let hh = date.getHours();
   let mm = date.getMinutes();

   hh = (hh < 10) ? "0" + hh : hh;
   mm = (mm < 10) ? "0" + mm : mm;

    let time = hh + ":" + mm;
    
    document.getElementById("clock").innerText = time;
    let t = setTimeout(function(){ currentTime() }, 1000);

  }

  currentTime();