document.addEventListener("DOMContentLoaded", function () {
    var dropArea = document.querySelector(".drag-and-drop");
    var input1 = document.querySelector(".image-input-1");
    var input2 = document.querySelector(".image-input-2");
    var input3 = document.querySelector(".image-input-3");
    var preview1 = document.getElementById("image-preview-1");
    var preview2 = document.getElementById("image-preview-2");
    var preview3 = document.getElementById("image-preview-3");


    dropArea.addEventListener("dragover", function (e) {
        e.preventDefault();
        dropArea.classList.add("dragging");
    });

    dropArea.addEventListener("dragleave", function (e) {
        e.preventDefault();
        dropArea.classList.remove("dragging");
    });

    dropArea.addEventListener("drop", function (e) {
        e.preventDefault();
        dropArea.classList.remove("dragging");
        var files = e.dataTransfer.files;
        input.files = files;
        displayImage(files[0]);
    });


    input1.addEventListener("change", function(e) {
        var files = e.target.files;
        displayImage1(files[0]);
    });

    input2.addEventListener("change", function(e) {
        var files = e.target.files;
        displayImage2(files[0]);
    });

    input3.addEventListener("change", function(e) {
        var files = e.target.files;
        displayImage3(files[0]);
    });

    function displayImage1(file) {
        if (file && file.type.startsWith("image/")) {
            if (file.size > 2024 * 1024) {
                alert("Ukuran maksimal 2MB.");
                input1.value = ""; // Mengosongkan input tipe file
                preview1.innerHTML = "";

                return;
            }

            var reader = new FileReader();

            reader.onload = function(e) {
                var img = document.createElement("img");
                img.src = e.target.result;
                img.classList.add("preview-image");
                img.classList.add("img-fluid");
                img.classList.add("rounded");
                img.classList.add("d-flex");
                img.classList.add("justify-content-start");
                preview1.innerHTML = "";
                preview1.appendChild(img);
            }

            reader.readAsDataURL(file);
        }
    }
    function displayImage2(file) {
        if (file && file.type.startsWith("image/")) {
            if (file.size > 2024 * 1024) {
                alert("Ukuran maksimal 2MB.");
                input2.value = ""; // Mengosongkan input tipe file
                preview2.innerHTML = "";

                return;
            }

            var reader = new FileReader();

            reader.onload = function(e) {
                var img = document.createElement("img");
                img.src = e.target.result;
                img.classList.add("preview-image-2");
                img.classList.add("img-fluid");
                img.classList.add("rounded");
                img.classList.add("d-flex");
                img.classList.add("justify-content-start");
                preview2.innerHTML = "";
                preview2.appendChild(img);
            }

            reader.readAsDataURL(file);
        }
    }

    function displayImage3(file) {
        if (file && file.type.startsWith("image/")) {
            if (file.size > 2024 * 1024) {
                alert("Ukuran maksimal 2MB.");
                input3.value = ""; // Mengosongkan input tipe file
                preview3.innerHTML = "";

                return;
            }

            var reader = new FileReader();

            reader.onload = function(e) {
                var img = document.createElement("img");
                img.src = e.target.result;
                img.classList.add("preview-image-2");
                img.classList.add("img-fluid");
                img.classList.add("rounded");
                img.classList.add("d-flex");
                img.classList.add("justify-content-start");
                preview3.innerHTML = "";
                preview3.appendChild(img);
            }

            reader.readAsDataURL(file);
        }
    }
}); 