window.onload = function() {
  document.getElementsByClassName('navigation__mobile-icon')[0].addEventListener('click', () => {
    document.getElementsByClassName('navigation__mobile')[0].style = "display: flex !important";
  })

  document.getElementsByClassName('navigation__mobile-close')[0].addEventListener('click', () => {
    document.getElementsByClassName('navigation__mobile')[0].style = "display: none !important";
  })

  let right_width = [];

  anime({ 
    targets: '#bg_4 rect',
    width: function(el) {
      right_width.push(el.width.animVal.value)
      return [el.width.animVal.value, 0]
    },
    duration: 1000,
    easing: 'easeInOutQuad',
    delay: anime.stagger(50)
  });

  let right_height = [];

  anime({
    targets: '#bg_3 rect',
    height: function(el) {
      right_height.push(el.height.animVal.value)
      return [el.height.animVal.value, 0]
    },
    duration: 1000,
    easing: 'easeInOutQuad',
    delay: anime.stagger(50)
  });

  anime({
    targets: '#bg_2 rect',
    width: function(el) {
      return [el.width.animVal.value, 0]
    },
    duration: 1000,
    easing: 'easeInOutQuad',
    delay: anime.stagger(50)
  });

  anime({
    targets: '#bg_1 rect',
    height: function(el) {
      return [el.height.animVal.value, 0]
    },
    duration: 1000,
    easing: 'easeInOutQuad',
    delay: anime.stagger(50)
  });



  // setTimeout(() => {
  //   animation.reverse()
  // }, 5000)

  let ima = document.querySelector(".ecoselect__ima"),
      itp = document.querySelector(".ecoselect__itp"),
      shanghai = document.querySelector(".ecoselect__shanghai");


  ima.addEventListener("mouseover", function( event ) {
    document.querySelector(".eco__itp").style = "display: none";
    document.querySelector(".eco__shanghai").style = "display: none";
    document.querySelector(".eco__ima").style = "display: block";

    ima.style = "color: black";
    itp.style = "color: #696969";
    shanghai.style = "color: #696969";
  }, false);

  itp.addEventListener("mouseover", function( event ) {
    document.querySelector(".eco__itp").style = "display: block";
    document.querySelector(".eco__shanghai").style = "display: none";
    document.querySelector(".eco__ima").style = "display: none";

    itp.style = "color: black";
    ima.style = "color: #696969";
    shanghai.style = "color: #696969";
  }, false);

  shanghai.addEventListener("mouseover", function( event ) {
    document.querySelector(".eco__itp").style = "display: none";
    document.querySelector(".eco__shanghai").style = "display: block";
    document.querySelector(".eco__ima").style = "display: none";

    shanghai.style = "color: black";
    itp.style = "color: #696969";
    ima.style = "color: #696969";
  }, false);


  // Carousel

  function getRandomInt(max) {
    return Math.floor(Math.random() * max);
  }

  fetch("./wp-content/themes/lowres/assets/carousel.json")
  .then(response => {
    return response.json();
  })
  .then(data => { 
    let n = getRandomInt(data.carousel.length);
    let carouselImage = document.getElementsByClassName('imageheader')[0];
    carouselImage.setAttribute('href', data.carousel[n].image)
    
    setInterval( () => { 
      carouselImage.setAttribute('href', data.carousel[n].image)
    }, data.carousel_settings.time_interval);
  });


  // Homepage

  fetch("./wp-content/themes/lowres/assets/homepage.json")
  .then(response => {
    return response.json();
  })
  .then(data => { 
    // three cities
    document.getElementById('image_berlin').setAttribute('href', data.three_cities.berlin.image_url);
    document.getElementById('image_nyc').setAttribute('href', data.three_cities.new_york.image_url);
    document.getElementById('image_shanghai').setAttribute('href', data.three_cities.shanghai.image_url);

    // onsite online
    document.getElementById('onsite').setAttribute('href', data.online_onsite.online.image_url);
    document.getElementById('online').setAttribute('href', data.online_onsite.onsite.image_url);

    // ecosystem
    document.getElementById('shanghaifloor').setAttribute('href', data.ecosystem.ima_shanghai.image_url);
    document.getElementById('shanghaifloor').setAttribute('href', data.ecosystem.ima_shanghai.image_url);
    document.getElementById('shanghaifloor').setAttribute('href', data.ecosystem.ima_shanghai.image_url);
  });
 
  // setTimeout(() => {

  //   console.log(right_height);
  //   let n = -1;

  //   anime({
  //     targets: '#bg_4 rect',
  //     height: function(el) {
  //       console.log('blabla')
  //       n++;
  //       return right_height[n];
  //     },
  //     duration: 1000,
  //     easing: 'linear',
  //     delay: anime.stagger(100)
  //   });

  //   let nW = -1;

  //   anime({ 
  //     targets: '#bg_3 rect',
  //     width: function(el) {
  //       nW++;
  //       return right_width[nW];
  //     },
  //     duration: 1000,
  //     easing: 'easeInOutQuad',
  //     delay: anime.stagger(20)
  //   });
    
  // }, 10000)
};