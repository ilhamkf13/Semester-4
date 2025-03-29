document.addEventListener('DOMContentLoaded', function() {
    gsap.from(".container", { opacity: 0, y: -50, duration: 1 });

    document.querySelectorAll("input").forEach((input) => {
        input.addEventListener("focus", function () {
            gsap.to(input, { scale: 1.05, duration: 0.3 });
        });
        input.addEventListener("blur", function () {
            gsap.to(input, { scale: 1, duration: 0.3 });
        });
    });

    document.querySelectorAll("button").forEach((button) => {
        button.addEventListener("mouseenter", function () {
            gsap.to(this, { scale: 1.1, duration: 0.3 });
        });
        button.addEventListener("mouseleave", function () {
            gsap.to(this, { scale: 1, duration: 0.3 });
        });
    });

    VANTA.WAVES({
        el: "body",
        color: 0x3498db,
        shininess: 50,
        waveHeight: 20,
        waveSpeed: 0.8,
        zoom: 1
    });

    const form = document.querySelector("form");

    form.addEventListener("submit", function (e) {
        const nama = document.getElementById("nama").value.trim();
        const email = document.getElementById("email").value.trim();
        const umur = document.getElementById("umur").value.trim();

        if (nama === "" || email === "" || umur === "") {
            e.preventDefault();
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Semua kolom harus diisi!",
            });
            return;
        }

        Swal.fire({
            title: "Sukses!",
            text: "Data berhasil dikirim!",
            icon: "success",
            confirmButtonColor: "#3498db"
        }).then(() => {
            form.submit();
        });

        e.preventDefault();
    });
});
