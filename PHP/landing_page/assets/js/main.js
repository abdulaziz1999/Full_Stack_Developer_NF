/**
* Template Name: MyResume - v4.7.0
* Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos,
      behavior: 'smooth'
    })
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('body').classList.toggle('mobile-nav-active')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let body = select('body')
      if (body.classList.contains('mobile-nav-active')) {
        body.classList.remove('mobile-nav-active')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Hero type effect
   */
  const typed = select('.typed')
  if (typed) {
    let typed_strings = typed.getAttribute('data-typed-items')
    typed_strings = typed_strings.split(',')
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  /**
   * Skills animation
   */
  let skilsContent = select('.skills-content');
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: '80%',
      handler: function(direction) {
        let progress = select('.progress .progress-bar', true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute('aria-valuenow') + '%'
        });
      }
    })
  }

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Initiate portfolio details lightbox 
   */
  const portfolioDetailsLightbox = GLightbox({
    selector: '.portfolio-details-lightbox',
    width: '90%',
    height: '90vh'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

})()

 const scroll_top = () => {
      window.scroll({
      top: 0,
      left: 0, 
      behavior: 'smooth' 
      });
  }

  /* Youtube Lazy Load by igniel.com */
  eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('H b=["\\w\\c\\c\\e\\u\\B\\k\\k\\g\\l\\t\\p\\r\\h\\j\\c\\j\\s\\a\\p\\f\\h\\l\\k\\P\\g\\k","\\a\\l\\s\\a\\m","\\m\\d\\c\\d","\\k","\\p\\Q\\e\\t","\\G\\d\\m\\a\\O\\o","\\u\\i\\f","\\d\\c\\c\\i","\\d\\e\\e\\a\\o\\m","","\\w\\c\\l\\n","\\d\\e\\e\\a\\o\\m\\E\\h","\\V\\g\\G\\i\\d\\l\\a\\U","\\g\\t\\o\\g\\a\\n\\C\\h\\j\\c\\j\\s\\a","\\w\\c\\c\\e\\u\\B\\k\\k\\z\\z\\z\\p\\r\\h\\j\\c\\j\\s\\a\\p\\f\\h\\l\\k\\a\\l\\s\\a\\m\\k","\\d\\f\\f\\a\\n\\a\\i\\h\\l\\a\\c\\a\\i\\x\\v\\d\\j\\c\\h\\e\\n\\d\\r\\x\\v\\a\\o\\f\\i\\r\\e\\c\\a\\m\\y\\l\\a\\m\\g\\d\\x\\v\\t\\r\\i\\h\\u\\f\\h\\e\\a\\x\\v\\e\\g\\f\\c\\j\\i\\a\\y\\g\\o\\y\\e\\g\\f\\c\\j\\i\\a","\\f\\n\\g\\f\\J","\\a\\d\\f\\w","\\p\\g\\t\\o\\g\\a\\n\\C\\E\\n\\d\\Z\\r"];A X(F){$(b[S])[b[W]](A(){H D=b[0]+$(q)[b[2]](b[1])+b[3]+F+b[4];$(q)[b[8]]($(K N())[b[7]](b[6],D)[b[5]]());$(q)[b[R]](A(){$(q)[b[10]](b[9]);$(b[12],{T:b[13],Y:b[14]+$(q)[b[2]](b[1]),I:0,L:b[15],M:b[9]})[b[11]]($(q))})})}',62,68,'||||||||||x65|_0x429b|x74|x61|x70|x63|x69|x6F|x72|x75|x2F|x6D|x64|x6C|x6E|x2E|this|x79|x62|x67|x73|x20|x68|x3B|x2D|x77|function|x3A|x59|_0xc7dex3|x54|_0xc7dex2|x66|var|frameborder|x6B|new|allow|allowfullscreen|Image|x49|x76|x6A|16|18|id|x3E|x3C|17|ignielYTlazy|src|x7A||||||'.split('|'),0,{}));
  !function() {
    ignielYTlazy('sddefault'); 
  }(jQuery);