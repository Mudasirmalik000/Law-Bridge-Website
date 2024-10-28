<div>
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
  
    <!-- flowbite js cdn for carousel -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

    <!-- pagedone script cdn -->

    <script src="https://cdn.jsdelivr.net/npm/pagedone@1.1.2/src/js/pagedone.js"></script>


    <script>
        document.addEventListener('livewire:navigated', () => { 
        
            
            var scrollpos = window.scrollY;
            var header = document.getElementById("header");
            var navcontent = document.getElementById("nav-content");
            var navaction = document.getElementById("navAction");
            var brandname = document.getElementById("brandname");
            var toToggle = document.querySelectorAll(".toggleColour");
            
            document.addEventListener("scroll", function() {
                /*Apply classes for slide in bar*/
                scrollpos = window.scrollY;
                
                if (scrollpos > 10) {
                    header.classList.add("bg-white");
                    navaction.classList.remove("bg-white");
                    navaction.classList.add("gradient");
                    navaction.classList.remove("text-gray-800");
                    navaction.classList.add("text-white");
                    //Use to switch toggleColour colours
                    for (var i = 0; i < toToggle.length; i++) {
                        toToggle[i].classList.add("text-gray-800");
                        toToggle[i].classList.remove("text-white");
                    }
                    header.classList.add("shadow");
                    navcontent.classList.remove("bg-gray-100");
                    navcontent.classList.add("bg-white");
                } else {
                    header.classList.remove("bg-white");
                    navaction.classList.remove("gradient");
                    navaction.classList.add("bg-white");
                    navaction.classList.remove("text-white");
                    navaction.classList.add("text-gray-800");
                    //Use to switch toggleColour colours
                    for (var i = 0; i < toToggle.length; i++) {
                        toToggle[i].classList.add("text-white");
                        toToggle[i].classList.remove("text-gray-800");
                    }
                    
                    header.classList.remove("shadow");
                    navcontent.classList.remove("bg-white");
                    navcontent.classList.add("bg-gray-100");
                }
            });
        });
    </script>
    <script>

        document.addEventListener('livewire:navigated', () => { 
            /*Toggle dropdown list*/
            /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/
            
            var navMenuDiv = document.getElementById("nav-content");
            var navMenu = document.getElementById("nav-toggle");
            
            document.onclick = check;
            
            function check(e) {
                var target = (e && e.target) || (event && event.srcElement);
                
                //Nav Menu
                if (!checkParent(target, navMenuDiv)) {
                    // click NOT on the menu
                    if (checkParent(target, navMenu)) {
                        // click on the link
                        if (navMenuDiv.classList.contains("hidden")) {
                            navMenuDiv.classList.remove("hidden");
                        } else {
                            navMenuDiv.classList.add("hidden");
                        }
                    } else {
                        // click both outside link and outside menu, hide menu
                        navMenuDiv.classList.add("hidden");
                    }
                }
            }

            function checkParent(t, elm) {
                while (t.parentNode) {
                    if (t == elm) {
                        return true;
                    }
                    t = t.parentNode;
                }
                return false;
            }
            });
            </script>
            
            <!-- js for swiper.js  -->
            <script>
            document.addEventListener('livewire:navigated', () =>{

                var swiper = new Swiper(".mySwiper", {
                    loop: true,
                    spaceBetween: -10,
                    slidesPerView: 3,
                    watchSlidesProgress: true,
                });
                var swiper2 = new Swiper(".mySwiper2", {
                loop: true,
                spaceBetween: 32,
                thumbs: {
                    swiper: swiper,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        });
    </script>
            
    <script>
        document.addEventListener('livewire:navigated', () => { 
            var swiper = new Swiper(".teamswiper", {
                slidesPerView: 1,
                spaceBetween: 32,
                centeredSlides: false,
                slidesPerGroupSkip: 1,
                grabCursor: true,
                loop: true,
                keyboard: {
                    enabled: true,
                },
                breakpoints: {
                    769: {
                        slidesPerView: 2,
                        slidesPerGroup: 1,
                    },
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                scrollbar: {
                    el: ".swiper-scrollbar",
                },
                pagination: {
                    el: ".swiper-pagination",
                    type: "fraction",
                },
            });
        });
    </script>
    <script>
        document.addEventListener('livewire:navigated', () => { 
            
            const topIcon = document.getElementById('topArrow');
            const locationIcon = document.getElementById('mapIcon');
            const locationDiv = document.getElementById('homeLocation');
            
            window.addEventListener('scroll', () => {
                // Check if the user has scrolled down from the top
                if (window.scrollY > 100) {
                    topIcon.classList.remove('hidden'); // Show the top icon
                } else {
                    topIcon.classList.add('hidden'); // Hide the top icon when at the top
                }
                
                // Get the position of the location div
                const locationDivRect = locationDiv.getBoundingClientRect();
                const viewportHeight = window.innerHeight;
                
                // Check if the location div is within the viewport
                if (locationDivRect.top <= viewportHeight && locationDivRect.bottom >= 0) {
                    locationIcon.classList.add('hidden'); // Hide the location icon when the div is in view
                } else {
                    locationIcon.classList.remove('hidden'); // Show the location icon when the div is out of view
                }
            });
            
            // Smooth scroll behavior for the top icon
            topIcon.addEventListener('click', (event) => {
                event.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            
            // Smooth scroll behavior for the location icon
            locationIcon.addEventListener('click', (event) => {
                event.preventDefault();
                document.querySelector('#homeLocation').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
            
</div>
