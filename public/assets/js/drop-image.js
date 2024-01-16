
document.addEventListener("DOMContentLoaded", function () {
    var dropArea = document.querySelector(".drag-and-drop");
    var input = document.querySelector(".image-input");
    var input2 = document.querySelector(".image-input-2");
    var preview = document.getElementById("image-preview");
    var preview2 = document.getElementById("image-preview-2");

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

    input.addEventListener("change", function (e) {
        var files = e.target.files;
        displayImage(files[0]);
    });

    input2.addEventListener("change", function (e) {
        var files = e.target.files;
        displayImage2(files[0]);
    });


    function displayImage(file) {
        if (file && file.type.startsWith("image/")) {
            if (file.size > 5024 * 1024) {
                alert("Ukuran maksimal 5MB.");
                input.value = ""; // Mengosongkan input tipe file
                preview.innerHTML = "";

                return;
            }

            var reader = new FileReader();

            reader.onload = function (e) {
                var img = document.createElement("img");
                img.src = e.target.result;
                img.classList.add("preview-image");
                img.classList.add("img-thumbnail");
                preview.innerHTML = "";
                preview.appendChild(img);
            }

            reader.readAsDataURL(file);
        }
    }
    
    function displayImage2(file) {
        if (file && file.type.startsWith("image/")) {
            if (file.size > 2024 * 1024) {
                alert("Ukuran maksimal 1MB.");
                input.value = ""; // Mengosongkan input tipe file
                preview.innerHTML = "";

                return;
            }

            var reader = new FileReader();

            reader.onload = function (e) {
                var img = document.getElementById("preview-image");
                img.src = e.target.result;
                img.classList.add("preview-image");
                preview2.innerHTML = "";
                preview2.appendChild(img);
            }

            reader.readAsDataURL(file);
        }
    }

  
});