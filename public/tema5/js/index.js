function setCountdown(targetDateString) {
    const targetDate = new Date(targetDateString);
    const timer = setInterval(function () {
        const currentDate = new Date();
        const timeLeft = targetDate - currentDate;

        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        document.getElementById("days").textContent = days;
        document.getElementById("hours").textContent = hours;
        document.getElementById("minutes").textContent = minutes;
        document.getElementById("seconds").textContent = seconds;

        if (timeLeft < 0) {
            clearInterval(timer);
            document.getElementById("days").textContent = '00';
            document.getElementById("hours").textContent = '00';
            document.getElementById("minutes").textContent = '00';
            document.getElementById("seconds").textContent = '00';
        }
    }, 1000);
}
$(document).ready(function () {
    //Page Setup
    if (performance.navigation.type === 1) {
        $('html, body').scrollTop(0);
    }

    // Music Setup
    var musicBox = $('.music-box');
    var musicPlayer = $('#musicPlayer')[0];
    function toggleMusics() {
        musicBox.animate({
            opacity: "1"
        });
        if (musicPlayer.paused) {
            musicPlayer.play();
            musicBox.addClass('music-box-rotating');
        } else if (!musicPlayer.paused) {
            musicPlayer.pause();
            musicBox.removeClass('music-box-rotating');
        }
    }

    $('.music-box').click(function () {
        toggleMusics();
    });

    //Countdown Setup
  

    var tanggalAcara = $('#tglacara').val()
    // console.log(tanggalAcara);
    setCountdown(tanggalAcara);

    //Open Invite Button
    $('#openInviteButton').click(function (e) {
        e.preventDefault();
        $('.openingSlide').addClass('behind');
        $('.openingSlide').toggleClass('opened');
        $('.webContent').removeClass('d-none');
        toggleMusics();
        toggleAnimationSectionOne();
    });

    //Opening Section Animation
    function toggleAnimationSectionOne() {
        const elementOne = $('.sectionOneHeaderOrnament');
        elementOne.addClass('startAnimationSectionOneHeaderOrnament');

        const elementTwo = $('.sectionOneMainImage');
        elementTwo.addClass('startAnimationMainAnimationSectionOne');
    }

    function toggleGeneralAnimation(targetElement, targetClass) {
        return new Promise((resolve) => {
            let inTargetViewport = targetElement.offset().top - $(window).scrollTop() < $(window).height();
            targetElement.toggleClass(targetClass, inTargetViewport);

            resolve();
        });
    }

    //Section animation
    let isSectionTwoAnimationPlayed = false;
    let isSectionThreeAnimationPlayed = false;
    let isSectionFourAnimationPlayed = false;
    let isSectionFiveAnimationPlayed = false;
    let isSectionSixAnimationPlayed = false;
    let isSectionSevenAnimationPlayed = false;
    let isSectionEightAnimationPlayed = false;
    let isSectionNineAnimationPlayed = false;
    let isSectionTenAnimationPlayed = false;
    let isSectionElevenAnimationPlayed = false;
    let isSectionTwelveAnimationPlayed = false;
    let isSectionThirdTeenAnimationPlayed = false;

    $(window).on('scroll', function () {
        let dividerSection = $('.dividers');
        let inDividerViewport = dividerSection.offset().top - $(window).scrollTop() < $(window).height();
        dividerSection.toggleClass('startDividerAnimation', inDividerViewport);


        //Section 2 animation
        let sectionTwoTarget = $('#coupleProfile');
        let inSectionTwo = sectionTwoTarget.offset().top - $(window).scrollTop() < $(window).height();
        sectionTwoTarget.toggleClass('startGreetingTextSectionTwoAnimation', inSectionTwo);

        if (inSectionTwo && !isSectionTwoAnimationPlayed) {
            gsap.fromTo("#coupleNameSecOne", {
                opacity: 0,
                y: 70,
                scrollTrigger: {
                    trigger: "#weddingInformation",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            },{
                opacity: 6,
                y: 0,
                duration: 1.3,
                delay: 0.5,
            });

            gsap.fromTo("#weddingDateSecOne", {
                opacity: 0,
                y: 70,
                scrollTrigger: {
                    trigger: "#weddingInformation",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 6,
                y: 0,
                duration: 1.3,
                delay: 0.8
            });

            gsap.to("#subGreetingText", {
                opacity: 1,
                y: -10,
                duration: 1,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#coupleProfile",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            });


            gsap.to("#greetingTextTwo", {
                opacity: 1,
                y: -10,
                duration: 1,
                delay: 0.4,
                scrollTrigger: {
                    trigger: "#coupleProfile",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            });

            gsap.from("#dividerTextSecTwo", {
                opacity: 1,
                duration: 1,
                delay: 0.4,
                scrollTrigger: {
                    trigger: "#coupleProfile",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            });

            gsap.fromTo("#couplePictureSectionTwo", {
                width: '5vh',
                height: '5vh'
            }, {
                width: '33vh',
                height: '33vh',
                duration: 1,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: "#coupleProfile",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                },
            }).then(() => {
                gsap.fromTo("#coupleNameSec2", {
                    opacity: 0,
                    y: 100
                }, {
                    opacity: 1,
                    y: 10,
                    duration: 0.5,
                    delay: 0,
                    scrollTrigger: {
                        trigger: "#coupleProfile",
                        start: "top center",
                        end: "bottom center",
                        scrub: 1,
                    },
                }).then(() => {
                    gsap.fromTo("#coupleParentSec2", {
                        opacity: 0,
                        y: 100
                    }, {
                        opacity: 1,
                        y: 10,
                        duration: 0.5,
                        delay: 0.05,
                        scrollTrigger: {
                            trigger: "#coupleProfile",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    });
                });
            });

            isSectionTwoAnimationPlayed = true;
        }

        // Section 3 Animation
        let sectionThreeTarget = $('#preweddingInformation');
        let inSectionThree = sectionThreeTarget.offset().top - $(window).scrollTop() < $(window).height();

        if (inSectionThree && !isSectionThreeAnimationPlayed) {
            gsap.from('#headingTextPreweddingInformation', {
                fontSize: '10vh',
                opacity: 1,
                y: 50,
                duration: 2,
                scrollTrigger: {
                    trigger: "#preweddingInformation",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                },
            });

            gsap.from(".liveStreamingVid", {
                width: 400,
                height: 270,
                opacity: 1,
                duration: 2.5,
                delay: 0.1,
                scrollTrigger: {
                    trigger: "#preweddingInformation",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            gsap.from("#coupleNameSec4", {
                y: 60,
                opacity: 1,
                duration: 2.5,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#preweddingInformation",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            gsap.from("#dDayInformationSec4", {
                y: 70,
                opacity: 1,
                duration: 1.5,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#preweddingInformation",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            gsap.from("#preweddingDateSec4", {
                y: 60,
                opacity: 1,
                duration: 1.8,
                delay: 0,
                scrollTrigger: {
                    trigger: "#preweddingInformation",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            gsap.from("#dividerOrnamentSectionThreeForCountdown", {
                scale: 0.25, // skala awal sesuai dengan width: '25%'
                opacity: 1,
                y: 60,
                duration: 1.5,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#preweddingInformation",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });


            gsap.from(".countdown-box", {
                y: 60,
                opacity: 1,
                duration: 1.5,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#preweddingInformation",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            isSectionThreeAnimationPlayed = true;
        }


        // Section 4 Animation
        let sectionFourTarget = $('#loveStory');
        let inSectionFour = sectionFourTarget.offset().top - $(window).scrollTop() < $(window).height();

        if (inSectionFour && !isSectionFourAnimationPlayed) {
            gsap.fromTo("#loveStoryHeadingText", {
                y: 40,
            }, {
                opacity: 1,
                y: 0,
                duration: 0.5,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#loveStory",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            gsap.from("#loveStoryImageOne", {
                opacity: 1,
                duration: 2,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#loveStory",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            gsap.from("#loveStoryHeadingOne", {
                opacity: 1,
                yPercent: 50,
                duration: 1.5,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#loveStory",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            gsap.from("#loveStorySubTextOne", {
                opacity: 1,
                yPercent: 65,
                duration: 1.5,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#loveStory",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            gsap.from("#dividerLoveStoryOne", {
                width: '0vh',
                opacity: 1,
                duration: 1.5,
                delay: 1,
                scrollTrigger: {
                    trigger: "#loveStory",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });


            gsap.from("#loveStoryImageTwo", {
                opacity: 1,
                duration: 2,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#loveStory",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            gsap.from("#loveStoryHeadingTwo", {
                opacity: 1,
                yPercent: 50,
                duration: 1.5,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#loveStory",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            gsap.from("#loveStorySubTextTwo", {
                opacity: 1,
                yPercent: 65,
                duration: 1.5,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#loveStory",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            gsap.from("#dividerLoveStoryTwo", {
                width: '0vh',
                opacity: 1,
                duration: 1.5,
                delay: 1,
                scrollTrigger: {
                    trigger: "#loveStory",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });



            gsap.from("#loveStoryImageThree", {
                opacity: 1,
                duration: 2,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#loveStory",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            gsap.from("#loveStoryHeadingThree", {
                opacity: 1,
                yPercent: 50,
                duration: 1.5,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#loveStory",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            gsap.from("#loveStorySubTextThree", {
                opacity: 1,
                yPercent: 65,
                duration: 1.5,
                delay: 0.5,
                scrollTrigger: {
                    trigger: "#loveStory",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });

            gsap.from("#dividerLoveStoryThree", {
                width: '0vh',
                opacity: 1,
                duration: 1.5,
                delay: 1,
                scrollTrigger: {
                    trigger: "#loveStory",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            });




            isSectionFourAnimationPlayed = true;
        }



        //Section 5 Animation - Photo Gallery
        let sectionFiveTarget = $('#photoGallery');
        let inSectionFive = sectionFiveTarget.offset().top - $(window).scrollTop() < $(window).height();

        if (inSectionFive && !isSectionFiveAnimationPlayed) {
            gsap.fromTo("#photoGalleryOne", {
                opacity: 0,
                scrollTrigger: {
                    trigger: "#photoGallery",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 5,
                duration: 1.5,
                delay: 0.5,
            });

            gsap.fromTo("#photoGalleryTwo", {
                opacity: 0,
                scrollTrigger: {
                    trigger: "#photoGallery",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 5,
                duration: 1.5,
                delay: 0.8,
            });

            gsap.fromTo("#photoGalleryThree", {
                opacity: 0,
                scrollTrigger: {
                    trigger: "#photoGallery",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 5,
                duration: 1.5,
                delay: 1,
            });

            gsap.fromTo("#photoGalleryFour", {
                opacity: 0,
                scrollTrigger: {
                    trigger: "#photoGallery",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 5,
                duration: 1.5,
                delay: 1.2,
            });

            gsap.fromTo("#photoGalleryFive", {
                opacity: 0,
                scrollTrigger: {
                    trigger: "#photoGallery",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 5,
                duration: 1.5,
                delay: 1.4,
            });

            gsap.fromTo("#photoGallerySix", {
                opacity: 0,
                scrollTrigger: {
                    trigger: "#photoGallery",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 5,
                duration: 1.5,
                delay: 1.6,
            });

            isSectionFiveAnimationPlayed = true;
        }


        //Section 6 Animation - Series Of Event
        let sectionSixTarget = $('.seriesOfEvent');
        let inSectionSix = sectionSixTarget.offset().top - $(window).scrollTop() < $(window).height();

        if (inSectionSix && !isSectionSixAnimationPlayed) {
            gsap.fromTo("#seriesOfEventOrnamentImage", {
                opacity: 0,
                y: 70,
                scrollTrigger: {
                    trigger: "#seriesOfEvent",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 1,
                opacity: 1,
                delay: 0.5,
                duration: 0.8,
            });

            gsap.fromTo("#seriesOfEventHeading", {
                opacity: 0,
                y: 80,
                scrollTrigger: {
                    trigger: "#seriesOfEvent",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 6,
                y: 1,
                delay: 0.5,
                duration: 0.8,
            });

            gsap.fromTo("#seriesOfEventBodyText", {
                opacity: 0,
                y: 50,
                delay: 0.5,
                duration: 1,
                scrollTrigger: {
                    trigger: "#seriesOfEvent",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 5,
                y: 0,
                delay: 0.5,
                duration: 1,
            });

            isSectionSixAnimationPlayed = true;
        }


        //Section 7 Animation - Health Protocol
        let sectionSevenTarget = $('.healthProtocol');
        let inSectionSeven = sectionSevenTarget.offset().top - $(window).scrollTop() < $(window).height();

        if (inSectionSeven && !isSectionSevenAnimationPlayed) {
            gsap.fromTo("#healthProtocolHeading", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".healthProtocol",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 1,
                y: 50,
                delay: 0.5,
                duration: 1,
            });

            gsap.fromTo("#jagaJarakProtocolCard", {
                y: 55,
                opacity: 0,
                scrollTrigger: {
                    trigger: "#seriesOfEvent",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 1,
                duration: 0.5,
            });

            gsap.fromTo("#cuciTanganProtocolCard", {
                y: 55,
                opacity: 0,
                scrollTrigger: {
                    trigger: "#seriesOfEvent",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 1,
                duration: 0.5,
            });

            gsap.fromTo("#memakaiMaskerProtocolCard", {
                y: 55,
                opacity: 0,
                scrollTrigger: {
                    trigger: "#seriesOfEvent",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 1,
                duration: 0.5,
            });

            gsap.fromTo("#mengecekSuhuProtocolCard", {
                y: 55,
                opacity: 0,
                scrollTrigger: {
                    trigger: "#seriesOfEvent",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 1,
                duration: 0.5,
            });


            isSectionSevenAnimationPlayed = true;
        }

        //Section 8 Animation - Live Streaming
        let sectionEightTarget = $('#liveStreaming');
        let inSectionEight = sectionEightTarget.offset().top - $(window).scrollTop() < $(window).height();

        if (inSectionEight && !isSectionEightAnimationPlayed) {
            gsap.fromTo(".liveStreamingHeadingText", {
                opacity: 0,
                y: 50,
                scrollTrigger: {
                    trigger: "#liveStreaming",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 5,
                y: 0,
                delay: 0.8,
                duration: 1,
            });

            gsap.fromTo(".liveStreamingSubText", {
                opacity: 0,
                y: 50,
                scrollTrigger: {
                    trigger: "#liveStreaming",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 5,
                y: 0,
                delay: 1,
                duration: 1,
            });

            gsap.fromTo(".liveStreamingVid", {
                opacity: 0,
                y: 50,
                scrollTrigger: {
                    trigger: "#liveStreaming",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 5,
                y: 0,
                delay: 1.2,
                duration: 1,
            });


            isSectionEightAnimationPlayed = true;
        }

        //Section 9 Animation - Instagram Wedding Filter
        let sectionNineTarget = $('#instagramWeddingFilter');
        let inSectionNine = sectionNineTarget.offset().top - $(window).scrollTop() < $(window).height();

        if (inSectionNine && !isSectionNineAnimationPlayed) {
            gsap.fromTo("#instagramWeddingFilterHeadingText", {
                opacity: 0,
                y: 80,
                scrollTrigger: {
                    trigger: "#instagramWeddingFilter",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 5,
                y: 0,
                delay: 0.8,
                duration: 1.2,
            });

            gsap.fromTo("#instagramWeddingFilterImage", {
                opacity: 0,
                scrollTrigger: {
                    trigger: "#instagramWeddingFilterImage",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 5,
                delay: 0.8,
                duration: 1.5,
            });

            gsap.fromTo("#instagramWeddingFilterHeading", {
                opacity: 0,
                y: 60,
                scrollTrigger: {
                    trigger: "#instagramWeddingFilterHeading",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 1,
                duration: 1.5,
            });

            gsap.fromTo("#instagramWeddingFilterChoosePic", {
                opacity: 0,
                y: 60,
                scrollTrigger: {
                    trigger: "#instagramWeddingFilterChoosePic",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 1.2,
                duration: 1.5,
            });

            gsap.fromTo("#instagramWeddingFilterButtonSend", {
                opacity: 0,
                y: 60,
                scrollTrigger: {
                    trigger: "#instagramWeddingFilterButtonSend",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 1.3,
                duration: 1.5,
            });


            isSectionNineAnimationPlayed = true;
        }


        //Section 10 Animation - Digital Envelope
        let sectionTenTarget = $('#digiEnve');
        let inSectionTen = sectionTenTarget.offset().top - $(window).scrollTop() < $(window).height();

        if (inSectionTen && !isSectionTenAnimationPlayed) {
            gsap.fromTo(".digiEnveHeadingText", {
                opacity: 0,
                y: 60,
                scrollTrigger: {
                    trigger: ".digiEnveHeadingText",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 0.5,
                duration: 1.3,
            });

            gsap.fromTo("#digiEnveSubHeadingText", {
                opacity: 0,
                y: 60,
                scrollTrigger: {
                    trigger: ".digiEnveSubHeadingText",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 0.7,
                duration: 1.3,
            });

            gsap.fromTo("#paymentSelection", {
                opacity: 0,
                y: -80,
                scrollTrigger: {
                    trigger: "#paymentSelection",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 0.7,
                duration: 1.3,
            });

            gsap.fromTo(".digiEnveInputWrapper", {
                opacity: 0,
                y: 80,
                scrollTrigger: {
                    trigger: ".digiEnveInputWrapper",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 0.8,
                duration: 1.3,
            });

            gsap.fromTo("#digiEnveSendButton", {
                opacity: 0,
                y: 80,
                scrollTrigger: {
                    trigger: "#digiEnveSendButton",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 0.85,
                duration: 1.3,
            });

            isSectionTenAnimationPlayed = true;
        }


        //Section 11 Animation - Wedding Wish
        let sectionElevenTarget = $('#weddingWish');
        let inSectionEleven = sectionElevenTarget.offset().top - $(window).scrollTop() < $(window).height();

        if (inSectionEleven && !isSectionElevenAnimationPlayed) {
            gsap.fromTo(".weddingWishHeadingText", {
                opacity: 0,
                y: 80,
                scrollTrigger: {
                    trigger: ".weddingWishHeadingText",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 0.5,
                duration: 1.3,
            });

            gsap.fromTo(".weddingWishIinputWrapper", {
                opacity: 0,
                y: 80,
                scrollTrigger: {
                    trigger: ".weddingWishIinputWrapper",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 0.8,
                duration: 1.3,
            });

            gsap.fromTo("#weddingWishButtonSend", {
                opacity: 0,
                y: 80,
                scrollTrigger: {
                    trigger: "#weddingWishButtonSend",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 0.95,
                duration: 1.3,
            });

            isSectionElevenAnimationPlayed = true;
        }
        
        //Section 12 Animation - Wedding Wish Log
        let sectionTwelveTarget = $('#weddingWish');
        let inSectionTwelve = sectionTwelveTarget.offset().top - $(window).scrollTop() < $(window).height();

        if (inSectionTwelve && !isSectionTwelveAnimationPlayed) {
            gsap.fromTo("#senderName", {
                opacity: 0,
                y: -80,
                scrollTrigger: {
                    trigger: "#senderName",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 0.9,
                duration: 1.3,
            });

            gsap.fromTo("#weddingWishMessage", {
                opacity: 0,
                y: 80,
                scrollTrigger: {
                    trigger: "#weddingWishMessage",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 1,
                duration: 1.3,
            });

            gsap.fromTo("#weddingWishTimeStamp", {
                opacity: 0,
                y: 80,
                scrollTrigger: {
                    trigger: "#weddingWishTimeStamp",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                y: 0,
                opacity: 5,
                delay: 1.2,
                duration: 1.3,
            });

            isSectionTwelveAnimationPlayed = true;
        }

        // Section 13 Animation - Event Map
        let sectionThirdTeenTarget = $('.eventMap');
        let inSectionThirdTeen = sectionThirdTeenTarget.offset().top - $(window).scrollTop() < $(window).height();

        if (inSectionThirdTeen && !isSectionThirdTeenAnimationPlayed) {
            gsap.fromTo("#weddingDayTextSec4", {
                opacity: 0,
                y: -70,
                scrollTrigger: {
                    trigger: ".eventMap",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 6,
                y: 0,
                delay: 0.5,
                duration: 1.5,
            });

            gsap.fromTo("#weddingDaysTextSec4", {
                opacity: 0,
                y: 70,
                scrollTrigger: {
                    trigger: ".eventMap",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 6,
                y: 0,
                delay: 0.8,
                duration: 1.5,
            });

            gsap.fromTo("#weddingDateTextSec4", {
                opacity: 0,
                y: 70,
                scrollTrigger: {
                    trigger: ".eventMap",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 6,
                y: 0,
                delay: 0.8,
                duration: 1.5,
            });


            gsap.fromTo("#akad-nikah-event-text", {
                opacity: 0,
                y: 70,
                scrollTrigger: {
                    trigger: ".eventMap",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 6,
                y: 0,
                delay: 1,
                duration: 1.5,
            });

            gsap.fromTo("#resepsi-event-text", {
                opacity: 0,
                y: 70,
                scrollTrigger: {
                    trigger: ".eventMap",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 6,
                y: 0,
                delay: 1,
                duration: 1.5,
            });

            gsap.fromTo(".eventTimeText", {
                opacity: 0,
                y: 70,
                scrollTrigger: {
                    trigger: ".eventMap",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 6,
                y: 0,
                delay: 1.3,
                duration: 1.5,
            });

            gsap.fromTo(".eventLocationText", {
                opacity: 0,
                y: 70,
                scrollTrigger: {
                    trigger: ".eventMap",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 6,
                y: 0,
                delay: 1.5,
                duration: 1.5,
            });

            gsap.fromTo(".viewMapButton", {
                opacity: 0,
                y: 70,
                scrollTrigger: {
                    trigger: ".eventMap",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                    once: true
                }
            }, {
                opacity: 6,
                y: 0,
                delay: 1.7,
                duration: 1.5,
            });

            isSectionThirdTeenAnimationPlayed = true;
        }
    });
});