$(document).ready(function () {

    // Opening Slide
    gsap.fromTo(".coupleNameOpeningSlide", {
        opacity: 0,
        y: -70,
        scrollTrigger: {
            trigger: ".openingSlide",
            start: "top center",
            end: "bottom center",
            scrub: 1,
        },
    }, {
        opacity: 1,
        y: 0,
        duration: 1.3,
        delay: 0.5,
    })

    gsap.fromTo(".weddingDateOpeningSlide", {
        opacity: 0,
        y: -80,
        scrollTrigger: {
            trigger: ".openingSlide",
            start: "top center",
            end: "bottom center",
            scrub: 1,
        },
    }, {
        opacity: 1,
        y: 0,
        duration: 1.4,
        delay: 0.5,
    })

    gsap.fromTo(".toWhoOpeningSlide", {
        opacity: 0,
        y: 50,
        scrollTrigger: {
            trigger: ".openingSlide",
            start: "top center",
            end: "bottom center",
            scrub: 1,
        },
    }, {
        opacity: 1,
        y: 0,
        duration: 1.4,
        delay: 0.5,
    })

    gsap.fromTo(".openInvitationButtonOpeningSlide", {
        opacity: 0,
        scrollTrigger: {
            trigger: ".openingSlide",
            start: "top center",
            end: "bottom center",
            scrub: 1,
        },
    }, {
        opacity: 1,
        duration: 1.4,
        delay: 0.5,
    })

    function sectionOneAnimation() {
        gsap.fromTo(".sectionOneTitleText", {
            opacity: 0,
            y: -80,
            scrollTrigger: {
                trigger: ".sectionOne",
                start: "top center",
                end: "bottom center",
                scrub: 1,
            },
        }, {
            opacity: 1,
            y: 0,
            duration: 1.4,
            delay: 0.5
        })

        gsap.fromTo(".sectionOneCoupleHashtag", {
            opacity: 0,
            y: 80,
            scrollTrigger: {
                trigger: ".sectionOne",
                start: "top center",
                end: "bottom center",
                scrub: 1,
            },
        }, {
            opacity: 1,
            y: 0,
            duration: 1.5,
            delay: 0.5
        })

        gsap.fromTo(".sectionOneCoupleName", {
            opacity: 0,
            y: 80,
            scrollTrigger: {
                trigger: ".sectionOne",
                start: "top center",
                end: "bottom center",
                scrub: 1,
            },
        }, {
            opacity: 1,
            y: 0,
            duration: 1.6,
            delay: 0.5
        })

        gsap.fromTo(".sectionOneCoupleWeddingDate", {
            opacity: 0,
            y: 80,
            scrollTrigger: {
                trigger: ".sectionOne",
                start: "top center",
                end: "bottom center",
                scrub: 1,
            },
        }, {
            opacity: 1,
            y: 0,
            duration: 1.7,
            delay: 0.5
        })
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

    $('#openInviteButton').click(function (e) {
        e.preventDefault();
        $('.openingSlide').addClass('behind');
        $('.openingSlide').toggleClass('opened');
        $('.webContent').removeClass('d-none');
        sectionOneAnimation();
        toggleMusics();
    });


    let isSectionTwoAnimationPlayed = false;
    let isSectionThreeAnimationPlayed = false;
    let isSectionFourAnimationPlayed = false;
    let isSectionFiveAnimationPlayed = false;
    let isSectionSixAnimationPlayed = false;
    let isSectionSevenAnimationPlayed = false;
    let isSectionEightAnimationPlayed = false;
    let isSectionNineAnimationPlayed = false;
    let isSectionWeddingFilterAnimationPlayed = false;
    let isSectionTenDividerAnimationPlayed = false;
    let isSectionTenAnimationPlayed = false;
    let isSectionRSVPAnimationPlayed = false;
    let isSectionElevenAnimationPlayed = false;
    let isSectionTwelveAnimationPlayed = false;


    // Open Invitation Button
    $(window).on('scroll', function () {
        // Section Two
        let sectionTwoTarget = $('.sectionTwo');
        let inSectionTwo = sectionTwoTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionTwo && !isSectionTwoAnimationPlayed) {
            gsap.fromTo(".sectionTwoTopOrnament", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionTwo",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.7,
                delay: 0.5
            })

            gsap.fromTo(".groomImageContainer", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionTwo",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.7,
                delay: 0.5
            })
            gsap.fromTo(".brideImageContainer", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionTwo",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.7,
                delay: 0.5
            })

            gsap.fromTo(".sectionTwoGroomName, .sectionTwoBrideName", {
                opacity: 0,
                y: 70,
                scrollTrigger: {
                    trigger: ".sectionTwo",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: .7,
                delay: 0.5
            })

            gsap.fromTo(".sectionTwoGroomParent, .sectionTwoBrideParent", {
                opacity: 0,
                y: 70,
                scrollTrigger: {
                    trigger: ".sectionTwo",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: .8,
                delay: 0.65
            })

            gsap.fromTo(".coupleInstagramId", {
                opacity: 0,
                y: 20,
                scrollTrigger: {
                    trigger: ".sectionTwo",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: .8,
                delay: 0.75
            })


            isSectionTwoAnimationPlayed = true;
        }

        let sectionThreeTarget = $('.sectionThree');
        let inSectionThree = sectionThreeTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionThree && !isSectionThreeAnimationPlayed) {
            gsap.fromTo(".sectionThreeHeadingText", {
                y: -50,
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionThree",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1,
                delay: 0.5
            })

            gsap.fromTo(".sectionThreeLoveStoryImage", {
                opacity: 0,
                scale: 0,
                scrollTrigger: {
                    trigger: ".sectionThree",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                scale: 1,
                opacity: 1,
                duration: 1.5,
                delay: 0.5
            })

            gsap.fromTo(".sectionThreeLoveStoryTitle", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionThree",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.2,
                delay: 0.8
            })

            gsap.fromTo(".sectionThreeLoveStoryText", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionThree",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.2,
                delay: 1
            })

            isSectionThreeAnimationPlayed = true;
        }

        let sectionFourTarget = $('.sectionFour');
        let inSectionFour = sectionFourTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionFour && !isSectionFourAnimationPlayed) {
            
            gsap.fromTo(".coupleImage1", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionFour",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.5,
                delay: 0.5
            })

            gsap.fromTo(".coupleImage2", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionFour",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.5,
                delay: 0.6
            })

            gsap.fromTo(".coupleImage3", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionFour",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.5,
                delay: 0.7
            })

            gsap.fromTo(".coupleImage4", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionFour",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.5,
                delay: 0.8
            })

            gsap.fromTo(".coupleImage5", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionFour",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.5,
                delay: 0.9
            })

            gsap.fromTo(".coupleImage6", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionFour",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.5,
                delay: 1
            })

            gsap.fromTo(".coupleImage7", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionFour",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.5,
                delay: 1.1
            })

            gsap.fromTo(".coupleImage8", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionFour",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.5,
                delay: 1.2
            })



            isSectionFourAnimationPlayed = true;
        }

        let sectionFiveTarget = $('.sectionFive');
        let inSectionFive = sectionFiveTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionFive && !isSectionFiveAnimationPlayed) {
            gsap.fromTo(".sectionFiveHighlightTitle", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionFive",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.3,
                delay: 0.5
            })

            gsap.fromTo(".sectionFiveLiveStreamingVid", {
                scale: 0,
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionFive",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                scale: 1,
                duration: 1.4,
                delay: 0.6
            })

            isSectionFiveAnimationPlayed = true;
        }

        let sectionSixTarget = $('.sectionSix');
        let inSectionSix = sectionSixTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionSix && !isSectionSixAnimationPlayed) {
            gsap.fromTo(".sectionSixCountdownText", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionSix",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.4,
                delay: 0.5
            })

            gsap.fromTo(".sectionSixCountdownDateText", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionSix",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.4,
                delay: 0.65
            })

            gsap.fromTo(".countdownItems1", {
                opacity: 0,
                y: 50,
                scrollTrigger: {
                    trigger: ".sectionSix",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.4,
                delay: 0.6
            })

            gsap.fromTo(".countdownItems2", {
                opacity: 0,
                y: 50,
                scrollTrigger: {
                    trigger: ".sectionSix",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.4,
                delay: 0.8
            })

            gsap.fromTo(".countdownItems3", {
                opacity: 0,
                y: 50,
                scrollTrigger: {
                    trigger: ".sectionSix",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.4,
                delay: 1
            })

            gsap.fromTo(".countdownItems4", {
                opacity: 0,
                y: 50,
                scrollTrigger: {
                    trigger: ".sectionSix",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.4,
                delay: 1.2
            })

            isSectionSixAnimationPlayed = true;
        }

        let sectionSevenTarget = $('.sectionSeven');
        let inSectionSeven = sectionSevenTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionSeven && !isSectionSevenAnimationPlayed) {
            gsap.fromTo(".sectionSeventTopOrnament", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionSeven",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.4,
                delay: 0.5
            })

            gsap.fromTo(".sectionSevenHeadingText", {
                opacity: 0,
                scale: 0,
                y: 50,
                scrollTrigger: {
                    trigger: ".sectionSeven",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                scale: 1,
                y: 0,
                duration: 1.5,
                delay: 0.6
            })

            gsap.fromTo(".sectionSeventDividerOrnament", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionSeven",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.4,
                delay: 0.6
            })

            gsap.fromTo(".sectionSevenResepsiOrnament", {
                opacity: 0,
                y: 50,
                scale: 0,
                scrollTrigger: {
                    trigger: ".sectionSeven",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.75,
                delay: 0.5
            })

            gsap.fromTo(".sectionSevenResepsiTextDate", {
                opacity: 0,
                y: 50,
                scale: 0,
                scrollTrigger: {
                    trigger: ".sectionSeven",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.75,
                delay: 0.7
            })

            gsap.fromTo(".sectionSevenResepsiDate", {
                opacity: 0,
                y: 50,
                scale: 0,
                scrollTrigger: {
                    trigger: ".sectionSeven",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.75,
                delay: 0.9
            })

            gsap.fromTo(".sectionSevenResepsiTimeText", {
                opacity: 0, 
                y: 50,
                scale: 0,
                scrollTrigger: {
                    trigger: ".sectionSeven",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.75,
                delay: 1.1
            })

            gsap.fromTo(".sectionSevenResepsiNamePlace", {
                opacity: 0,
                y: 50,
                scale: 0,
                scrollTrigger: {
                    trigger: ".sectionSeven",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.75,
                delay: 1.3
            })

            gsap.fromTo(".sectionSevenResepsiAddressPlace", {
                opacity: 0,
                y: 50,
                scale: 0,
                scrollTrigger: {
                    trigger: ".sectionSeven",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.75,
                delay: 1.5
            })

            isSectionSevenAnimationPlayed = true;
        }

        let sectionEightTarget = $('.sectionEight');
        let inSectionEight = sectionEightTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionEight && !isSectionEightAnimationPlayed) {
            gsap.fromTo(".sectionEightLivestreamText", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionEight",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.3,
                delay: 0.5
            })

            gsap.fromTo(".sectionEightLivestreamHashtag", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionEight",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.3,
                delay: 0.7
            })

            gsap.fromTo(".sectionEightLiveStreaming", {
                opacity: 0,
                scale: 0,
                scrollTrigger: {
                    trigger: ".sectionEight",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                scale: 1,
                duration: 1,
                delay: 0.8
            })

            isSectionEightAnimationPlayed = true;
        }

        let sectionNineTarget = $('.sectionNine');
        let inSectionNine = sectionNineTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionNine && !isSectionNineAnimationPlayed) {
            gsap.fromTo(".sectionNineWeddingGiftText", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionNine",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1,
                delay: 0.5
            })

            gsap.fromTo(".sectionNineWeddingGiftParagraph", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionNine",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1,
                delay: 0.65
            })

            gsap.fromTo(".weddingGiftWrapperBox", {
                opacity: 0,
                scale: 0,
                scrollTrigger: {
                    trigger: ".sectionNine",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                scale: 1,
                duration: 1,
                delay: 0.8
            })

            isSectionNineAnimationPlayed = true;
        }

        let sectionWeddingFilterTarget = $('.weddingFilter');
        let inSectionWeddingFilter = sectionWeddingFilterTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionWeddingFilter && !isSectionWeddingFilterAnimationPlayed) {
            gsap.fromTo(".weddingFilterHeadingText", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".weddingFilter",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.2,
                delay: 0.6
            })

            gsap.fromTo(".weddingFilterPhotos", {
                opacity: 0,
                scale: 0,
                scrollTrigger: {
                    trigger: ".weddingFilter",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                scale: 1,
                duration: 1,
                delay: 0.6
            })

            gsap.fromTo(".weddingFilterButton", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".weddingFilter",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.1,
                delay: 0.75
            })

            isSectionWeddingFilterAnimationPlayed = true;
        }

        let sectionSectionTenDividerTarget = $('.sectionTenDivider');
        let inSectionSectionTenDivider = sectionSectionTenDividerTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionSectionTenDivider && !isSectionTenDividerAnimationPlayed) {
            gsap.fromTo(".dividerTenHeadingText", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionTenDivider",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.3,
                delay: 0.6
            })

            gsap.fromTo(".dividerTenHeadingSubText", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionTenDivider",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.3,
                delay: 0.75
            })

            isSectionTenDividerAnimationPlayed = true;
        }

        let sectionTenTarget = $('.sectionTen');
        let inSectionTen = sectionTenTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionTen && !isSectionTenAnimationPlayed) {
            gsap.fromTo(".healthProtocolImage1", {
                opacity: 0,
                scale: 0,
                scrollTrigger: {
                    trigger: ".sectionTen",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                delay: 0.5
            })

            gsap.fromTo(".healthProtocolImage2", {
                opacity: 0,
                scale: 0,
                scrollTrigger: {
                    trigger: ".sectionTen",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                delay: 0.7
            })
            gsap.fromTo(".healthProtocolImage3", {
                opacity: 0,
                scale: 0,
                scrollTrigger: {
                    trigger: ".sectionTen",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                delay: 0.9
            })
            gsap.fromTo(".healthProtocolImage4", {
                opacity: 0,
                scale: 0,
                scrollTrigger: {
                    trigger: ".sectionTen",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                delay: 1.1
            })

            isSectionTenAnimationPlayed = true;
        }

        let sectionRSVPTarget = $('.rsvp');
        let inSectionRSVP = sectionRSVPTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionRSVP && !isSectionRSVPAnimationPlayed) {
            gsap.fromTo(".rsvp", {
                opacity: 0,
                scale: 0,
                scrollTrigger: {
                    trigger: ".rsvp",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                scale: 1,
                duration: 1,
                delay: 0.5
            })

            gsap.fromTo(".rsvpHeadingText", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".rsvp",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.2,
                delay: 0.8
            })

            gsap.fromTo(".rsvpSubHeadingText", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".rsvp",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.2,
                delay: 0.9
            })

            gsap.fromTo(".duplicate-select", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".rsvp",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.2,
                delay: 0.95
            })

            gsap.fromTo(".peopleYouBringRSVPBox", {
                opacity: 0,
                y: 50,
                scrollTrigger: {
                    trigger: ".rsvp",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.1,
                delay: 1
            })

            gsap.fromTo(".rsvpConfirmButton", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".rsvp",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.2,
                delay: 1
            })

            isSectionRSVPAnimationPlayed = true;
        }

        let sectionElevenTarget = $('.sectionEleven');
        let inSectionEleven = sectionElevenTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionEleven && !isSectionElevenAnimationPlayed) {
            gsap.fromTo(".sectionElevenWeddingWishHeadingText", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionEleven",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.3,
                delay: 0.6
            })

            gsap.fromTo(".sectionElevenFormControl1", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionEleven",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.2,
                delay: 0.8
            })

            gsap.fromTo(".sectionElevenFormControl2", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionEleven",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.2,
                delay: 0.95
            })

            gsap.fromTo(".sectionElevenFormControlButton", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionEleven",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.2,
                delay: 0.7
            })

            gsap.fromTo(".sectionElevenWeddingWishMessageBox", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionEleven",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1.2,
                delay: 0.85
            })

            isSectionElevenAnimationPlayed = true;
        }

        let sectionTwelveTarget = $('.sectionTwelve');
        let inSectionTwelve = sectionTwelveTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionTwelve && !isSectionTwelveAnimationPlayed) {
            gsap.fromTo(".sectionTwelveCoupleName", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionTwelve",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.2,
                delay: 0.7
            })

            gsap.fromTo(".sectionTwelveCoupleDate", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionTwelve",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1.2,
                delay: 0.9
            })

            gsap.fromTo(".sectionTwelveBottomOrnament", {
                opacity: 0,
                y: -50,
                scrollTrigger: {
                    trigger: ".sectionTwelve",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                y: 0,
                duration: 1,
                delay: 1.2
            })

            gsap.fromTo(".sectionTwelvePoweredByBox", {
                opacity: 0,
                scrollTrigger: {
                    trigger: ".sectionTwelve",
                    start: "top center",
                    end: "bottom center",
                    scrub: 1,
                },
            }, {
                opacity: 1,
                duration: 1,
                delay: 0.8
            })

            isSectionTwelveAnimationPlayed = true;
        }
    })
});