function setCountdown(tanggalAcara) {
    const targetDate = new Date(tanggalAcara);
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
    // Music Setup
    var musicBox = $('.music-box');
    var musicPlayer = $('#musicPlayer')[0];
    var tanggalAcara = $('#tglacara').val()
    function toggleMusics() {
        musicBox.animate({
            opacity: "1"
        });
        if(musicPlayer.paused){
            musicPlayer.play();
            musicBox.addClass('music-box-rotating');
        }else if(!musicPlayer.paused){
            musicPlayer.pause();
            musicBox.removeClass('music-box-rotating');
        }
    }

    $('.music-box').click(function(){
        toggleMusics();
    });

    // Countdown Initialization
    setCountdown(tanggalAcara);

    // Basic page setup
    if (performance.navigation.type === 1) {
        $('html, body').scrollTop(0);
    }

    var windowWidth = $(window).width();
    var fontSize;

    if(windowWidth <= 768){
        fontSize = '13vh'
    }else {
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
                                complete: function() {
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
                    $('#bible-verses-sec2').animate({
                        opacity: "1"
                    }, {
                        duration: 850,
                        complete: function () {
                            $('#bible-verse-sec2').animate({
                                opacity: "1"
                            }
                                , {
                                    duration: 450,
                                    complete: function () {
                                        $('#groomProfileImage, #brideProfileImage').animate({
                                            width: "85%",
                                            opacity: "1"
                                        }, {
                                            duration: 800,
                                            complete: function () {
                                                $('.overlayImage').animate({
                                                    opacity: "1"
                                                }, {
                                                    duration: 450,
                                                    complete: function () {
                                                        $('#groom, #bride').animate({
                                                            opacity: "1"
                                                        }, {
                                                            duration: 450,
                                                            complete: function () {
                                                                $('.horizontalLineSec2').animate({
                                                                    width: "100%"
                                                                }, {
                                                                    duration: 450,
                                                                    complete: function () {
                                                                        $('#groom-name, #bride-name').animate({
                                                                            opacity: "1"
                                                                        }, {
                                                                            duration: 500,
                                                                            complete: function () {
                                                                                $('#groom-parent-name, #bride-parent-name').animate({
                                                                                    opacity: "1"
                                                                                }, {
                                                                                    duration: 600,
                                                                                    complete: function () {
                                                                                        $('#save-date-text').animate({
                                                                                            fontSize: "9.5vh",
                                                                                            opacity: "1"
                                                                                        }, {
                                                                                            duration: 1200,
                                                                                            complete: function () {
                                                                                                $('#event-date').animate({
                                                                                                    fontSize: "3.5vh",
                                                                                                    opacity: "1"
                                                                                                }, {
                                                                                                    duration: 550,
                                                                                                    complete: function () {
                                                                                                        $('.days, .second').animate({
                                                                                                            opacity: "1"
                                                                                                        }, {
                                                                                                            duration: 450,
                                                                                                            complete: function () {
                                                                                                                $('.hours, .minutes').animate({
                                                                                                                    opacity: "1"
                                                                                                                }, {
                                                                                                                    duration: 450,
                                                                                                                    complete: function () {
                                                                                                                        $('#liveStreamingText').animate({
                                                                                                                            opacity: "1"
                                                                                                                        }, {
                                                                                                                            duration: 550,
                                                                                                                            complete: function () {
                                                                                                                                $('#liveStreamingSubText, .liveStreamingVid').animate({
                                                                                                                                    opacity: "1"
                                                                                                                                }
                                                                                                                                );
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
                        }
                    });
                }
            });
            toggleMusics();
        });
    });

    // Section 3 Animation
    $(window).on('scroll', function () {
        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();
        var elementOffset = $('.event-detail-box').offset().top;

        if (scrollTop + windowHeight > elementOffset) {
            $('#wedding-day-text-sec4').animate({
                opacity: 1
            }, {
                duration: 600,
                complete: function () {
                    $('#wedding-days-text-sec4, #wedding-date-text-sec4').animate({
                        opacity: "1"
                    }, {
                        duration: 600,
                        complete: function () {
                            $('#akad-nikah-event-text, #resepsi-event-text').animate({
                                opacity: "1",
                            }, {
                                duration: 600,
                                complete: function () {
                                    $('#event-time-text, #event-time-text').animate({
                                        opacity: "1"
                                    }, {
                                        duration: 600,
                                        complete: function () {
                                            $('#event-location-text, #event-location-text, #event-location-text, #event-location-text').animate({
                                                opacity: "1"
                                            }, {
                                                duration: 600,
                                                complete: function () {
                                                    $('.viewMapButton').animate({
                                                        opacity: "1"
                                                    }, {
                                                        duration: 600,
                                                        complete: function () {
                                                            $('#health-protocol-text-sec4').animate({
                                                                opacity: "1",
                                                            }, {
                                                                duration: 550,
                                                                complete: function () {
                                                                    $('#jagaJarakProtocolCard').animate({
                                                                        opacity: "1"
                                                                    }, {
                                                                        duration: 300,
                                                                        complete: function () {
                                                                            $('#cuciTanganProtocolCard').animate({
                                                                                opacity: "1"
                                                                            }, {
                                                                                duration: 300,
                                                                                complete: function () {
                                                                                    $('#memakaiMaskerProtocolCard').animate({
                                                                                        opacity: "1"
                                                                                    }, {
                                                                                        duration: 300,
                                                                                        complete: function () {
                                                                                            $('#mengecekSuhuProtocolCard').animate({
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


    // Animation Section 4
    $(window).on('scroll', function () {
        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();
        var elementOffset = $('.couple-gallery').offset().top;

        if (scrollTop + windowHeight > elementOffset) {
            $('#coupleGalleryText').animate({
                opacity: "1"
            }, {
                duration: 650,
                complete: function () {
                    $('#coupleImage1').animate({
                        opacity: "1"
                    }, {
                        duration: 450,
                        complete: function () {
                            $('#coupleImage2').animate({
                                opacity: "1"
                            }, {
                                duration: 450,
                                complete: function () {
                                    $('#coupleImage3').animate({
                                        opacity: "1"
                                    }, {
                                        duration: 450,
                                        complete: function () {
                                            $('#coupleImage4').animate({
                                                opacity: "1"
                                            }, {
                                                duration: 450,
                                                complete: function () {
                                                    $('#coupleImage5').animate({
                                                        opacity: "1"
                                                    }, {
                                                        duration: 450,
                                                        complete: function () {
                                                            $('#coupleImage6').animate({
                                                                opacity: "1"
                                                            }, {
                                                                duration: 450,
                                                                complete: function () {
                                                                    $('#coupleImage7').animate({
                                                                        opacity: "1"
                                                                    }, {
                                                                        duration: 450,
                                                                        complete: function () {
                                                                            $('#coupleImage8').animate({
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


    $(window).on('scroll', function () {
        var windowHeight = $(window).height();
        var scrollTop = $(window).scrollTop();
        var elementOffset = $('.digiEnve').offset().top;

        if (scrollTop + windowHeight > elementOffset) {
            $('#wedding-gift-text-sec7').animate({
                opacity: "1"
            }, {
                duration: 600,
                complete: function () {
                    $('#wedding-gift-subtext-sec7').animate({
                        opacity: "1"
                    }, {
                        duration: 650,
                        complete: function () {
                            $('#paymentSelection').animate({
                                opacity: "1"
                            }, {
                                duration: 650,
                                complete: function () {
                                    $('#paymentForm').animate({
                                        opacity: "1"
                                    }, {
                                        duration: 650,
                                        complete: function () {
                                            $('.weddingWishLog, #weddingWishTextSec7').animate({
                                                opacity: "1"
                                            }, {
                                                duration: 650,
                                                complete: function () {
                                                    $('.weddingWish').animate({
                                                        opacity: "1"
                                                    }, {
                                                        duration: 650,
                                                        complete: function () {
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
});