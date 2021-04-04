// 通常文字フォント（小塚）
(function(d) {
  var config = {
    kitId: 'knn8bfk',
    scriptTimeout: 3000,
    async: true
  },
  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);

// 下層h2見出し英語(源ノ角ゴシック JP)
(function(d) {
  var config = {
    kitId: 'knn8bfk',
    scriptTimeout: 3000,
    async: true
  },
  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);

// TBCineRGothic Std
(function(d) {
  var config = {
    kitId: 'knn8bfk',
    scriptTimeout: 3000,
    async: true
  },
  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);

// 見出しタイトル
(function(d) {
  var config = {
    kitId: 'knn8bfk',
    scriptTimeout: 3000,
    async: true
  },
  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);

// ドロワーメニュー
const jsHamburger = document.getElementById('js-hamburger');
const body = document.body;
const spHeaderMenu = document.getElementById('js-global-menu')

  jsHamburger.addEventListener('click', function() {
    body.classList.toggle('is-drawerActive')
    if (this.getAttribute('aria-expanded') == 'false') {
      this.setAttribute('aria-expanded', 'true');
      spHeaderMenu.style.visibility = "visible";
      spHeaderMenu.setAttribute('area-hidden','false')
    } else {
      this.setAttribute('aria-expanded', 'false')
      spHeaderMenu.style.visibility = "hidden";
      spHeaderMenu.setAttribute('area-hidden','true')
    };
  });

// ヘッダートグルメニュー
jQuery(function () {
  jQuery(".js-toggle-button").on("click", function () {
    jQuery(this).next().fadeToggle();
  });
});

// スライダー(1つめ)
var mySwiper = new Swiper('.swiper-container.slide01', {
  // Optional parameters
  direction: 'horizontal',
  slidesPerView: 1.3,
  initialSlide: 1.2,
  spaceBetween:20,
  centeredSlides:true,
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
})
// スライダー(1つめ)
var mySwiper = new Swiper('.swiper-container.slide02', {
  // Optional parameters
  direction: 'horizontal',
  slidesPerView: 1.3,
  initialSlide: 1.2,
  spaceBetween:20,
  centeredSlides:true,
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
})
// スライダー(3つめ)
var mySwiper = new Swiper('.swiper-container.slide03', {
  // Optional parameters
  direction: 'horizontal',
  slidesPerView: 1.5,
  initialSlide: 1.2,
  spaceBetween:20,
  centeredSlides:true,
  loop: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
})


// totop
const topButton = document.getElementById('js-scroll-fadein')

function getScrolled() {
  return ( window.pageYOffset !== undefined ) ? window.pageYOffset: document.documentElement.scrollTop;
}
window.onscroll = function() {
  ( getScrolled() > 500 ) ? topButton.classList.add( 'is-fadein' ): topButton.classList.remove( 'is-fadein' );
};
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
};
topButton.onclick = function() {
  scrollToTop();
};

new WOW().init();