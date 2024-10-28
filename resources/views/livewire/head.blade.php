<div>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="{{ asset('logos/favicon.png') }}" type="image/x-icon">

    <title>
        Law Bridge
    </title>

    <!--Boxicon CDN-->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->

    <!-- pagedone cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.1.2/src/css/pagedone.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- swiper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.js"
        integrity="sha512-hRhHH3+D9xVKPpodEiYzHWIG8CWbCjp7LCdZ00K3/6xsdC3iT0OlPJLIwxSMEl07gya1Ae8iAqXjMMLpzqqh0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css"
        integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- flowbite css for carousel -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />


    <!-- flowbite css for carousel -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/css/swiper.css']);
    <style>
        .gradient {
            background-image: linear-gradient(to top, #333535 0%, #1d1b1f 100%);
        }

        .gradient-practice {
            background-image: linear-gradient(90deg, #1d1b1f90 0%, #0a0a0b 100%);
        }

        .gradient-faq {
            color: white;
            background-image: linear-gradient(90deg, #1d1b1f90 0%, #0a0a0b84 100%);
        }

        .gradient-team {
            background-image: linear-gradient(110deg, #fafafa 0%, #fdfdfde4 100%)
        }

        .gradient-whychoose-2 {
            background-image: linear-gradient(60deg, #30cfd0 0%, #330867b7 100%);
        }

        .gradient-whychoose-1 {
            background-image: linear-gradient(60deg, #1d1b1fcc 0%, #0a0a0bc3 100%);
        }


        /* advocates text-color section */
        .advocateName {
            color: white;
        }

        .advocateSubName {
            color: white;
        }

        .advocateDescription {
            color: white;
        }
    </style>
    
    <!-- for Typing effect  -->
    <script>
        document.addEventListener('livewire:navigated', () => { 
            var TxtType = function(el, toRotate, period) {
                this.toRotate = toRotate;
                this.el = el;
                this.loopNum = 0;
                this.period = parseInt(period, 10) || 2000;
                this.txt = '';
                this.tick();
                this.isDeleting = false;
            };

            TxtType.prototype.tick = function() {
                var i = this.loopNum % this.toRotate.length;
                var fullTxt = this.toRotate[i];

                if (this.isDeleting) {
                    this.txt = fullTxt.substring(0, this.txt.length - 1);
                } else {
                    this.txt = fullTxt.substring(0, this.txt.length + 1);
                }

                this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

                var that = this;
                var delta = 200 - Math.random() * 100;

                if (this.isDeleting) {
                    delta /= 2;
                }

                if (!this.isDeleting && this.txt === fullTxt) {
                    delta = this.period;
                    this.isDeleting = true;
                } else if (this.isDeleting && this.txt === '') {
                    this.isDeleting = false;
                    this.loopNum++;
                    delta = 500;
                }

                setTimeout(function() {
                    that.tick();
                }, delta);
            };

            window.onload = function() {
                var elements = document.getElementsByClassName('typewrite');
                for (var i = 0; i < elements.length; i++) {
                    var toRotate = elements[i].getAttribute('data-type');
                    var period = elements[i].getAttribute('data-period');
                    if (toRotate) {
                        new TxtType(elements[i], JSON.parse(toRotate), period);
                    }
                }
                // INJECT CSS
                var css = document.createElement("style");
                css.type = "text/css";
                css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
                document.body.appendChild(css);
            };
        });
    </script>
</div>
