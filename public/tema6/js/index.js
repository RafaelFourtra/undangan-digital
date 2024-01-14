$(document).ready(function () {
    if (performance.navigation.type === 1) {
        $('html, body').scrollTop(0);
    }

    //Countdown Setup
    var tanggalAcara = $('#tglacara').val()
    var countDownDate = new Date(tanggalAcara).getTime();

    var x = setInterval(function () {

        var now = new Date().getTime();

        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("days").textContent = '00';
            document.getElementById("hours").textContent = '00';
            document.getElementById("minutes").textContent = '00';
            document.getElementById("seconds").textContent = '00';        }
    }, 1000);


    //Dropdown setup
    const customSelect = document.querySelector(".custom-select");
    const selectBtn = document.querySelector(".select-button");

    const selectedValue = document.querySelector(".selected-value");
    const optionsList = document.querySelectorAll(".select-dropdown li");

    selectBtn.addEventListener("click", () => {
        customSelect.classList.toggle("active");
        selectBtn.setAttribute(
            "aria-expanded",
            selectBtn.getAttribute("aria-expanded") === "true" ? "false" : "true"
        );
    });

    optionsList.forEach((option) => {
        function handler(e) {
            if (e.type === "click" && e.clientX !== 0 && e.clientY !== 0) {
                selectedValue.textContent = this.children[1].textContent;
                customSelect.classList.remove("active");
            }
            if (e.key === "Enter") {
                selectedValue.textContent = this.textContent;
                customSelect.classList.remove("active");
            }
        }

        option.addEventListener("keyup", handler);
        option.addEventListener("click", handler);
    });

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
});