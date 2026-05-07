<!DOCTYPE HTML>
<html>
    <head>
        <title>Sign Up - m2015we</title>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/components/info.php' ?>
        <style>
            /* ---- particles.js container ---- */
            #particles-js {
                position: absolute;
                width: 100%;
                height: 100%;
                background-color: #ffffff;
                background-image: url("");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
            }
        </style>
        <style>
            #particles-js canvas {
                display: block;
                vertical-align: bottom;
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                opacity: 1;
                -webkit-transition: opacity .8s ease, -webkit-transform 1.4s ease;
                transition: opacity .8s ease, transform 1.4s ease
            }

            #particles-js {
                width: 100%;
                height: 100%;
                position: fixed;
                z-index: -10;
                top: 0;
                left: 0
            }
        </style>
        <script src="/files/js/particles.min.js"></script>
        <!-- took way too long to set up jesus christ, don't use particle.js -->
    </head>
    <body>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/components/navigation.php' ?>
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary mt-5">
                    <div class="panel-heading text-center fs-3">
                        Sign Up
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <div class="text-center">
                                <input type="email" placeholder="Email" class="form-control" maxlenght="20">
                            </div>
                            <div class="text-center">
                                <input type="password" placeholder="Password" class="form-control" maxlenght="16">
                            </div>
                            <div class="text-center">
                                <input type="password" placeholder="Confirm Password" class="form-control" maxlenght="16">
                            </div>
                            <div class="text-center">
                                <a onclick="document.location = '/let_me_explain.html'" class="btn btn-success mt-1 w-100">Sign Up</a>
                                <p class="mt-1 mb-0">Already have an account? <a href="/auth/sign-in">Sign In!</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/components/footer.php' ?>
        <div id="particles-js"></div>
        <script>
            particlesJS("particles-js", {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#000000",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": false,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": false,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
            var count_particles, stats, update;
            stats = new Stats;
            stats.setMode(0);
            stats.domElement.style.position = 'absolute';
            stats.domElement.style.left = '0px';
            stats.domElement.style.top = '0px';
            document.body.appendChild(stats.domElement);
            count_particles = document.querySelector('.js-count-particles');
            update = function() {
                stats.begin();
                stats.end();
                if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
                }
                requestAnimationFrame(update);
            };
            requestAnimationFrame(update);;
        </script>
    </body>
</html>