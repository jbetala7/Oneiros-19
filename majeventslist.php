<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="trans.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <title>Document</title>
    </head>
    <body>
        <svg id="morph" height="100%" width="100%" viewBox="0 0 1920 1080" preserveAspectRatio="none">
            <path class="morph" d="M263.5 1.41561C23.1353 1.41561 8.42733 1.1272 1.99308 1.01698C1.44375 1.00757 1 1.45059 1 2H1442V1.00091C1397.33 1.0999 1387.5 1.46756 1116 1.41561C923.5 1.37878 1016 0.978404 627.5 1.00091C318.173 1.01884 580 1.41561 263.5 1.41561Z" fill="#4E6F95"></path>
        </svg>
        <section id="sect1">
            <h1>Give me a click</h1>
            <p>Go on</p>

            <button id="btn-click">Tap</button>
        </section>
        <section id="sect2">
                <button id="btn2-click">Go Back</button>
        </section>
        </div>

        <script>
            var btn = document.getElementById("btn-click");
            var btn2 = document.getElementById("btn2-click");
            var sect1 = document.getElementById("sect1");
            var sect2 = document.getElementById("sect2");
            var overlay = document.getElementById("morph");

            var morphing = anime({
                targets: '.morph',
                d: [
                    {value: 'M1 578V1H1442V578C1397.33 520.833 1387.5 308.5 1116 338.5C923.5 359.771 1016 591 627.5 578C318.173 567.649 580 338.5 263.5 338.5C10.3 338.5 7.5 523.333 1 578Z" fill="#4E6F95'},
                    {value: 'M0 1024.78V0H1441V1029.78H1241H621.5H224.5H5.11378C2.35236 1029.78 0 1027.54 0 1024.78Z" fill="#4E6F95'}
                    ],
                    easing: 'easeInOutQuint',
                    duration: 1300,
                    loop: false,
                    autoplay: false
            });

            btn.addEventListener('click', function(){
                morphing.restart();
                overlay.classList.add("pointer");
                sect2.classList.add('animated','display','flipInY', 'delay-1s');
            })

            btn2.addEventListener('click', function(){
                morphing.reverse();
                morphing.play();

                overlay.classList.remove('pointer');
                sect2.classList.remove('animated','display','flipInY', 'delay-1s');
            })
        </script>

    </body>
</html>