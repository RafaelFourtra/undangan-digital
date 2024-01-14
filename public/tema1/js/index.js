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

    // Duplicate custom select
const duplicateCustomSelect = document.querySelector(".duplicate-select");
const duplicateSelectBtn = document.querySelector(".duplicate-select .select-button");
const duplicateSelectedValue = document.querySelector(".duplicate-select .selected-value");
const duplicateOptionsList = document.querySelectorAll(".duplicate-select .select-dropdown li");

duplicateSelectBtn.addEventListener("click", () => {
    duplicateCustomSelect.classList.toggle("active");
    duplicateSelectBtn.setAttribute(
        "aria-expanded",
        duplicateSelectBtn.getAttribute("aria-expanded") === "true" ? "false" : "true"
    );
});

duplicateOptionsList.forEach((option) => {
    function handler(e) {
        if (e.type === "click" && e.clientX !== 0 && e.clientY !== 0) {
            duplicateSelectedValue.textContent = this.children[1].textContent;
            duplicateCustomSelect.classList.remove("active");
        }
        if (e.key === "Enter") {
            duplicateSelectedValue.textContent = this.textContent;
            duplicateCustomSelect.classList.remove("active");
        }
    }

    option.addEventListener("keyup", handler);
    option.addEventListener("click", handler);
});

jQuery(function () {
    var j = jQuery;
    var addInput = '#qty';
    var n = $('#qty').val();

    j(addInput).val(n);

    j('.plus').on('click', function () {
        j(addInput).val(++n);
    })

    j('.min').on('click', function () {
        if (n >= 1) {
            j(addInput).val(--n);
        }
    });
});

let isSectionRSVPAnimationPlayed = false;



$(document).ready(function () {
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

    // Countdown Initialization
    var tanggalAcara = $('#tglacara').val()
    // console.log(tanggalAcara);
    setCountdown(tanggalAcara);

    // Basic page setup
    if (performance.navigation.type === 1) {
        $('html, body').scrollTop(0);
    }

    var windowWidth = $(window).width();
    var fontSize;

    if (windowWidth <= 768) {
        fontSize = '13vh'
    } else {
        fontSize = '15vh'
    }

    $("#welcoming-sentences-sec1").animate({
        fontSize: "3.5vh",
        zIndex: "99999",
        opacity: "1"
    }, {
        duration: 800,
        complete: function () {
            $('#user-name').animate({
                fontSize: fontSize,
                zIndex: "99999",
                opacity: "1"
            }, {
                duration: 750,
                complete: function () {
                    $('#wedding-date-sec1').animate({
                        fontSize: "3vh",
                        opacity: "1"
                    }, {
                        duration: 750,
                        complete: function () {
                            $('#coupleWeddingSubtext').animate({
                                opacity: "1"
                            }, {
                                duration: 750,
                                complete: function () {
                                    $('#save-date-button').animate({
                                        opacity: "1"
                                    });
                                }
                            });
                        }
                    });
                }
            });
        }
    });

    // Button Scrolling & Section 2 Animation
    $('#save-date-button').click(function () {
        $('#other-section-target').slideDown(100, function () {
            $('html, body').animate({
                scrollTop: $('#other-section-target').offset().top
            }, {
                duration: 200,
                complete: function () {
                    gsap.fromTo("#bible-verses-sec2", {
                        opacity: 0,
                        y: 70,
                        scrollTrigger: {
                            trigger: "#couple-information",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        y: 0,
                        opacity: 6,
                        duration: 1.3,
                        delay: 0.5,
                    }).then(() => {
                        gsap.fromTo("#bible-verse-sec2", {
                            opacity: 0,
                            y: 70,
                            scrollTrigger: {
                                trigger: "#couple-information",
                                start: "top center",
                                end: "bottom center",
                                scrub: 1,
                            },
                        }, {
                            y: 0,
                            opacity: 6,
                            duration: 1,
                            delay: 0,
                        });
                    });


                    gsap.fromTo("#groomProfileImage", {
                        opacity: 0,
                        scrollTrigger: {
                            trigger: "#couple-information",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        duration: 2.5,
                        delay: 1,
                    });

                    gsap.fromTo("#brideProfileImage", {
                        opacity: 0,
                        scrollTrigger: {
                            trigger: "#couple-information",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        duration: 2.5,
                        delay: 1,
                    });

                    gsap.fromTo(".overlayImage", {
                        opacity: 0,
                        scrollTrigger: {
                            trigger: "#couple-information",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        duration: 2.7,
                        delay: 1,
                    });

                    gsap.fromTo("#groom", {
                        opacity: 0,
                        y: 70,
                        scrollTrigger: {
                            trigger: "#groom",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        y: 0,
                        duration: 2,
                        delay: 1
                    });

                    gsap.fromTo("#bride", {
                        opacity: 0,
                        y: 70,
                        scrollTrigger: {
                            trigger: "#bride",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        y: 0,
                        duration: 2,
                        delay: 1
                    });

                    gsap.fromTo(".horizontalLineSec2", {
                        width: 0,
                        scrollTrigger: {
                            trigger: ".horizontalLineSec2",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        width: "100%",
                        duration: 2,
                        delay: 1
                    });

                    gsap.fromTo("#groom-name", {
                        opacity: 0,
                        y: 70,
                        scrollTrigger: {
                            trigger: "#groom-name",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        y: 0,
                        duration: 2,
                        delay: 1
                    });

                    gsap.fromTo("#bride-name", {
                        opacity: 0,
                        y: 70,
                        scrollTrigger: {
                            trigger: "#bride-name",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        y: 0,
                        duration: 2.5,
                        delay: 1.3
                    });

                    gsap.fromTo("#groom-parent-name", {
                        opacity: 0,
                        y: 70,
                        scrollTrigger: {
                            trigger: "#groom-parent-name",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        y: 0,
                        duration: 2,
                        delay: 1.5
                    });

                    gsap.fromTo("#bride-parent-name", {
                        opacity: 0,
                        y: 70,
                        scrollTrigger: {
                            trigger: "#bride-parent-name",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        y: 0,
                        duration: 2,
                        delay: 1.5
                    });

                    gsap.fromTo("#save-date-text", {
                        opacity: 0,
                        fontSize: 0,
                        scrollTrigger: {
                            trigger: "#save-date-text",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        fontSize: "9.5vh",
                        duration: 2,
                        delay: 1.6
                    });

                    gsap.fromTo("#event-date", {
                        opacity: 0,
                        fontSize: 0,
                        scrollTrigger: {
                            trigger: "#event-date",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        fontSize: "3.5vh",
                        duration: 2.5,
                        delay: 1.5
                    });

                    gsap.fromTo(".days", {
                        opacity: 0,
                        y: 70,
                        scrollTrigger: {
                            trigger: ".days",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        y: 0,
                        duration: 1.3,
                        delay: 1.5
                    });

                    gsap.fromTo(".second", {
                        opacity: 0,
                        y: 70,
                        scrollTrigger: {
                            trigger: ".second",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        y: 0,
                        duration: 1.3,
                        delay: 1.5
                    }).then(() => {
                        gsap.fromTo(".hours", {
                            opacity: 0,
                            y: 70,
                            scrollTrigger: {
                                trigger: ".hours",
                                start: "top center",
                                end: "bottom center",
                                scrub: 1,
                            },
                        }, {
                            opacity: 6,
                            y: 0,
                            duration: 2.5,
                            delay: 0
                        });

                        gsap.fromTo(".minutes", {
                            opacity: 0,
                            y: 70,
                            scrollTrigger: {
                                trigger: ".minutes",
                                start: "top center",
                                end: "bottom center",
                                scrub: 1,
                            },
                        }, {
                            opacity: 6,
                            y: 0,
                            duration: 2.5,
                            delay: 0
                        });
                    });

                    gsap.fromTo("#liveStreamingText", {
                        opacity: 0,
                        y: 90,
                        scrollTrigger: {
                            trigger: "#liveStreamingText",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        y: 0,
                        duration: 2.7,
                        delay: 1.5
                    }).then(() => {
                        gsap.fromTo("#liveStreamingSubText", {
                            opacity: 0,
                            y: 90,
                            scrollTrigger: {
                                trigger: "#liveStreamingSubText",
                                start: "top center",
                                end: "bottom center",
                                scrub: 1,
                            },
                        }, {
                            opacity: 6,
                            y: 0,
                            duration: 1,
                            delay: 0
                        }).then(() => {
                            gsap.fromTo(".liveStreamingVid", {
                                opacity: 0,
                                y: 80,
                                scrollTrigger: {
                                    trigger: ".liveStreamingVid",
                                    start: "top center",
                                    end: "bottom center",
                                    scrub: 1,
                                },
                            }, {
                                opacity: 6,
                                y: 0,
                                duration: 2.5,
                                delay: 0
                            });
                        });
                    });
                }
            });
            toggleMusics();
        });
    });

    // Section 3 Animation
    let isSectionThreeAnimationPlayed = false;
    $(window).on('scroll', function () {
        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();
        var elementOffset = $('.event-detail-box').offset().top;

        if (scrollTop + windowHeight > elementOffset) {
            let sectionThreeTarget = $('.event-detail-box');
            let inSectionThree = sectionThreeTarget.offset().top - $(window).scrollTop() < $(window).height();

            if (inSectionThree && !isSectionThreeAnimationPlayed) {
                gsap.fromTo("#wedding-day-text-sec4", {
                    opacity: 0,
                    y: 80,
                    scrollTrigger: {
                        trigger: "#wedding-day-text-sec4",
                        start: "top center",
                        end: "bottom center",
                        scrub: 1,
                    },
                }, {
                    opacity: 6,
                    y: 0,
                    duration: 2,
                    delay: 0.5
                });

                gsap.fromTo("#wedding-days-text-sec4", {
                    opacity: 0,
                    y: 70,
                    scrollTrigger: {
                        trigger: "#wedding-days-text-sec4",
                        start: "top center",
                        end: "bottom center",
                        scrub: 1,
                    },
                }, {
                    opacity: 6,
                    y: 0,
                    duration: 2,
                    delay: 0.5
                });

                gsap.fromTo("#wedding-date-text-sec4", {
                    opacity: 0,
                    y: 70,
                    scrollTrigger: {
                        trigger: "#wedding-date-text-sec4",
                        start: "top center",
                        end: "bottom center",
                        scrub: 1,
                    },
                }, {
                    opacity: 6,
                    y: 0,
                    duration: 2,
                    delay: 0.5
                });

                gsap.fromTo("#akad-nikah-event-text", {
                    opacity: 0,
                    y: 70,
                    scrollTrigger: {
                        trigger: "#akad-nikah-event-text",
                        start: "top center",
                        end: "bottom center",
                        scrub: 1,
                    },
                }, {
                    opacity: 6,
                    y: 0,
                    duration: 1.5,
                    delay: 1
                });

                gsap.fromTo("#resepsi-event-text", {
                    opacity: 0,
                    y: 70,
                    scrollTrigger: {
                        trigger: "#resepsi-event-text",
                        start: "top center",
                        end: "bottom center",
                        scrub: 1,
                    },
                }, {
                    opacity: 6,
                    y: 0,
                    duration: 1.5,
                    delay: 1
                });

                gsap.fromTo(".event-time-text", {
                    opacity: 0,
                    y: 75,
                    scrollTrigger: {
                        trigger: ".event-time-text",
                        start: "top center",
                        end: "bottom center",
                        scrub: 1,
                    },
                }, {
                    opacity: 6,
                    y: 0,
                    duration: 1.5,
                    delay: 1.3
                });

                gsap.fromTo("#event-location-text", {
                    opacity: 0,
                    y: 60,
                    scrollTrigger: {
                        trigger: "#event-location-text",
                        start: "top center",
                        end: "bottom center",
                        scrub: 1,
                    },
                }, {
                    opacity: 6,
                    y: 0,
                    duration: 1.5,
                    delay: 1.5
                });

                gsap.fromTo(".viewMapButton", {
                    opacity: 0,
                    y: 75,
                    scrollTrigger: {
                        trigger: ".viewMapButton",
                        start: "top center",
                        end: "bottom center",
                        scrub: 1,
                    },
                }, {
                    opacity: 6,
                    y: 0,
                    duration: 1.5,
                    delay: 1.7
                });

                gsap.fromTo("#health-protocol-text-sec4", {
                    opacity: 0,
                    y: 75,
                    scrollTrigger: {
                        trigger: "#health-protocol-text-sec4",
                        start: "top center",
                        end: "bottom center",
                        scrub: 1,
                    },
                }, {
                    opacity: 6,
                    y: 0,
                    duration: 0.5,
                    delay: 1.8
                }).then(() => {
                    gsap.fromTo("#jagaJarakProtocolCard", {
                        opacity: 0,
                        y: 20,
                        scrollTrigger: {
                            trigger: "#jagaJarakProtocolCard",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        y: 0,
                        duration: 1.5,
                        delay: 0.5
                    });

                    gsap.fromTo("#cuciTanganProtocolCard", {
                        opacity: 0,
                        y: 20,
                        scrollTrigger: {
                            trigger: "#cuciTanganProtocolCard",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        y: 0,
                        duration: 1.5,
                        delay: 0.6
                    });

                    gsap.fromTo("#memakaiMaskerProtocolCard", {
                        opacity: 0,
                        y: 20,
                        scrollTrigger: {
                            trigger: "#memakaiMaskerProtocolCard",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        y: 0,
                        duration: 1.5,
                        delay: 0.7
                    });

                    gsap.fromTo("#mengecekSuhuProtocolCard", {
                        opacity: 0,
                        y: 20,
                        scrollTrigger: {
                            trigger: "#mengecekSuhuProtocolCard",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                        },
                    }, {
                        opacity: 6,
                        y: 0,
                        duration: 1.5,
                        delay: 0.8
                    });
                });

                isSectionThreeAnimationPlayed = true;
            }

        }
    });


    // Animation Section 4
    let isSectionFourAnimationPlayed = false;
    $(window).on('scroll', function () {
        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();
        var elementOffset = $('.couple-gallery').offset().top;

        if (scrollTop + windowHeight > elementOffset) {
            let sectionFourTarget = $('.couple-gallery');
            let inSectionFour = sectionFourTarget.offset().top - $(window).scrollTop() < $(window).height();

            if (inSectionFour && !isSectionFourAnimationPlayed) {
                gsap.fromTo("#coupleGalleryText", {
                    opacity: 0,
                    y: 75,
                    scrollTrigger: {
                        trigger: "#coupleGalleryText",
                        start: "top center",
                        end: "bottom center",
                        scrub: 1,
                        once: true
                    },
                }, {
                    opacity: 7,
                    y: 0,
                    duration: 1.5,
                    delay: 0.5
                });

                gsap.fromTo(".coupleImage1", {
                    opacity: 0,
                    scale: .5,
                    scrollTrigger: {
                        trigger: ".coupleImage1",
                        start: "top center",
                        end: "bottom center",
                        scrub: 1,
                        once: true
                    },
                }, {
                    scale: 1,
                    opacity: 6,
                    duration: 0.3,
                    delay: 0.1
                }).then(() => {
                    gsap.fromTo(".coupleImage2", {
                        opacity: 0,
                        scale: .5,
                        scrollTrigger: {
                            trigger: ".coupleImage2",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                            once: true
                        },
                    }, {
                        scale: 1,
                        opacity: 6,
                        duration: 0.3,
                        delay: 0.1
                    }).then(() => {
                        gsap.fromTo(".coupleImage3", {
                            opacity: 0,
                            scale: .5,
                            scrollTrigger: {
                                trigger: ".coupleImage3",
                                start: "top center",
                                end: "bottom center",
                                scrub: 1,
                                once: true
                            },
                        }, {
                            scale: 1,
                            opacity: 6,
                            duration: 0.3,
                            delay: 0.1
                        }).then(() => {
                            gsap.fromTo(".coupleImage4", {
                                opacity: 0,
                                scale: .5,
                                scrollTrigger: {
                                    trigger: ".coupleImage4",
                                    start: "top center",
                                    end: "bottom center",
                                    scrub: 1,
                                    once: true
                                },
                            }, {
                                scale: 1,
                                opacity: 6,
                                duration: 0.3,
                                delay: 0.1
                            }).then(() => {
                                gsap.fromTo(".coupleImage5", {
                                    opacity: 0,
                                    scale: .5,
                                    scrollTrigger: {
                                        trigger: ".coupleImage5",
                                        start: "top center",
                                        end: "bottom center",
                                        scrub: 1,
                                        once: true
                                    },
                                }, {
                                    scale: 1,
                                    opacity: 6,
                                    duration: 0.3,
                                    delay: 0.1
                                }).then(() => {
                                    gsap.fromTo(".coupleImage6", {
                                        opacity: 0,
                                        scale: .5,
                                        scrollTrigger: {
                                            trigger: ".coupleImage6",
                                            start: "top center",
                                            end: "bottom center",
                                            scrub: 1,
                                            once: true
                                        },
                                    }, {
                                        scale: 1,
                                        opacity: 6,
                                        duration: 0.3,
                                        delay: 0.1
                                    }).then(() => {
                                        gsap.fromTo(".coupleImage7", {
                                            opacity: 0,
                                            scale: .5,
                                            scrollTrigger: {
                                                trigger: ".coupleImage7",
                                                start: "top center",
                                                end: "bottom center",
                                                scrub: 1,
                                                once: true
                                            },
                                        }, {
                                            scale: 1,
                                            opacity: 6,
                                            duration: 0.3,
                                            delay: 0.1
                                        }).then(() => {
                                            gsap.fromTo(".coupleImage8", {
                                                opacity: 0,
                                                scale: .5,
                                                scrollTrigger: {
                                                    trigger: ".coupleImage8",
                                                    start: "top center",
                                                    end: "bottom center",
                                                    scrub: 1,
                                                    once: true
                                                },
                                            }, {
                                                scale: 1,
                                                opacity: 6,
                                                duration: 0.3,
                                                delay: 0.1
                                            }).then(() => {
                                                gsap.fromTo(".coupleImage9", {
                                                    opacity: 0,
                                                    scale: .5,
                                                    scrollTrigger: {
                                                        trigger: ".coupleImage9",
                                                        start: "top center",
                                                        end: "bottom center",
                                                        scrub: 1,
                                                        once: true
                                                    },
                                                }, {
                                                    scale: 1,
                                                    opacity: 6,
                                                    duration: 0.3,
                                                    delay: 0.1
                                                })
                                            });
                                        });
                                    });
                                });
                            });
                        });
                    });
                });

                isSectionFourAnimationPlayed = true;
            }
        }
    });


    // Animation Section 5
    $(window).on('scroll', function () {
        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();
        var elementOffset = $('.couple-stories').offset().top;

        if (scrollTop + windowHeight > elementOffset) {
            $('#coupleStoryImage1').animate({
                width: "100%",
                opacity: "1"
            }, {
                duration: 850,
                complete: function () {
                    $('.coupleStoryHeading1').animate({
                        opacity: "1"
                    }, {
                        duration: 750,
                        complete: function () {
                            $('.coupleStoryLine1').animate({
                                width: "50%",
                                opacity: "1"
                            }, {
                                duration: 650,
                                complete: function () {
                                    $('.loveStory1').animate({
                                        opacity: "1"
                                    }, {
                                        duration: 650,
                                        complete: function () {
                                            $('#coupleStoryImage2').animate({
                                                width: "100%",
                                                opacity: "1"
                                            }, {
                                                duration: 850,
                                                complete: function () {
                                                    $('.coupleStoryHeading2').animate({
                                                        opacity: "1"
                                                    }, {
                                                        duration: 750,
                                                        complete: function () {
                                                            $('.coupleStoryLine2').animate({
                                                                width: "50%",
                                                                opacity: "1"
                                                            }, {
                                                                duration: 650,
                                                                complete: function () {
                                                                    $('.loveStory2').animate({
                                                                        opacity: "1"
                                                                    }, {
                                                                        duration: 650,
                                                                        complete: function () {
                                                                            $('#coupleStoryImage3').animate({
                                                                                width: "100%",
                                                                                opacity: "1"
                                                                            }, {
                                                                                duration: 850,
                                                                                complete: function () {
                                                                                    $('.coupleStoryHeading3').animate({
                                                                                        opacity: "1"
                                                                                    }, {
                                                                                        duration: 750,
                                                                                        complete: function () {
                                                                                            $('.coupleStoryLine3').animate({
                                                                                                width: "50%",
                                                                                                opacity: "1"
                                                                                            }, {
                                                                                                duration: 650,
                                                                                                complete: function () {
                                                                                                    $('.loveStory3').animate({
                                                                                                        opacity: "1"
                                                                                                    });
                                                                                                }
                                                                                            });
                                                                                        }
                                                                                    });
                                                                                }
                                                                            });
                                                                        }
                                                                    });
                                                                }
                                                            });
                                                        }
                                                    });
                                                }
                                            });
                                        }
                                    });
                                }
                            });
                        }
                    });
                }
            });
        }
    });

    $(window).on('scroll', function () {
        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();
        var elementOffset = $('.coupleFootage').offset().top;

        if (scrollTop + windowHeight > elementOffset) {
            $('#footageText').animate({
                opacity: "1"
            }, {
                duration: 650,
                complete: function () {
                    $('#footageVideo').animate({
                        opacity: "1"
                    });
                }
            });
        }
    });

    let isSectionNineAnimationPlayed = false;
    let isSectionTenAnimationPlayed = false;
    $(window).on('scroll', function () {
        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();
        var elementOffset = $('.digiEnve').offset().top;

        if (scrollTop + windowHeight > elementOffset) {
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

            
            if (scrollTop + windowHeight > elementOffset) {
                let sectionTenTarget = $('.weddingGiftWrappersz');
                let inSectionTen = sectionTenTarget.offset().top - $(window).scrollTop() < $(window).height();

                if (inSectionTen && !isSectionTenAnimationPlayed) {
                    // Wedding Gift Animation
                    gsap.fromTo("#wedding-gift-subtext-sec7", {
                        y: 70,
                        opacity: 0,
                        scrollTrigger: {
                            trigger: "#wedding-gift-subtext-sec7",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                            once: true
                        }
                    }, {
                        y: 0,
                        opacity: 6,
                        delay: 1.5,
                        duration: 1.7
                    });

                    gsap.fromTo("#paymentSelection", {
                        y: 60,
                        opacity: 0,
                        scrollTrigger: {
                            trigger: "#paymentSelection",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                            once: true
                        }
                    }, {
                        y: 0,
                        opacity: 6,
                        delay: 1.6,
                        duration: 1.5
                    });

                    gsap.fromTo("#paymentForm", {
                        y: 55,
                        opacity: 0,
                        scrollTrigger: {
                            trigger: "#paymentForm",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                            once: true
                        }
                    }, {
                        y: 0,
                        opacity: 6,
                        delay: 1.6,
                        duration: 1.5
                    });

                    gsap.fromTo(".weddingWishLog", {
                        y: 15,
                        opacity: 0,
                        scrollTrigger: {
                            trigger: ".weddingWishLog",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                            once: true
                        }
                    }, {
                        y: 0,
                        opacity: 6,
                        delay: 1.5,
                        duration: 1.5
                    });

                    gsap.fromTo("#weddingWishTextSec7", {
                        y: 70,
                        opacity: 0,
                        scrollTrigger: {
                            trigger: "#weddingWishTextSec7",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                            once: true
                        }
                    }, {
                        y: 0,
                        opacity: 6,
                        delay: 1.6,
                        duration: 1.5
                    });

                    gsap.fromTo(".weddingWish", {
                        y: 70,
                        opacity: 0,
                        scrollTrigger: {
                            trigger: ".weddingWish",
                            start: "top center",
                            end: "bottom center",
                            scrub: 1,
                            once: true
                        }
                    }, {
                        y: 0,
                        opacity: 6,
                        delay: 1.6,
                        duration: 1.5
                    });

                    isSectionTenAnimationPlayed = true;
                }
            }

            $('#couple-quote-sec7').animate({
                opacity: "1",
            }, {
                duration: 650,
                complete: function () {
                    $('#coupleWeddingDate').animate({
                        opacity: "1"
                    }, {
                        duration: 650,
                        complete: function () {
                            $('#coupleName').animate({
                                opacity: "1",
                                fontSize: "7.5vh"
                            }, 900);
                        }
                    });
                }
            });
        }

        let sectionRSVPTarget = $('.rsvp');
        let inSectionRSVP = sectionRSVPTarget.offset().top - $(window).scrollTop() < $(window).height();
        if (inSectionRSVP && !isSectionRSVPAnimationPlayed) {
            gsap.fromTo(".rsvpWrapper", {
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
    });
});

