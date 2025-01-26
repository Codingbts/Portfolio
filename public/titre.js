
        var typed = new Typed(".auto-type", {
            strings: [
                'suis étudiant en 2ème année de <span> BTS SIO SLAM </span>',
                'vous souhaite la bienvenue dans <span>mon site !</span>'
            ],
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 1500,
            startDelay: 1000,
            loop: true,
            loopCount: Infinity,
            showCursor: true,
            onStart: function(self) {

                self.options.backDelay = 1500;
            },
            onComplete: function(self) {

                setTimeout(function() {
                    self.reset();
                }, 4200);
            }
        });

    