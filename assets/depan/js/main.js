(function ($) {
    "use strict";

    // Spinner
    const spinner = () => {
        setTimeout(() => {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();

    // Initiate WOW.js
    new WOW().init();

    // navbar Carousel

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 10) {
            $('.nav-bar').addClass('sticky-top no-margin');
        } else {
            $('.nav-bar').removeClass('sticky-top no-margin');
        }
    });

    // Header Carousel
    $(document).ready(function () {
        var owl = $(".unified-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 800,
            items: 1,
            loop: true,
            dots: false,
            nav: false,

        });
    
        $("#nextUnified").click(function () {
            owl.trigger("next.owl.carousel");
        });
    
        $("#prevUnified").click(function () {
            owl.trigger("prev.owl.carousel");
        });
    });
    
    
    
    
      
      
    // Testimonials Carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 24,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0: { items: 1 },
            992: { items: 2 }
        }
    });

    // Chart setup helper
    const initChart = (selector, config) => {
        const ctx = $(selector).get(0)?.getContext("2d");
        if (ctx) {
            new Chart(ctx, config);
        }
    };

    // Chart Penduduk
    initChart("#chart-penduduk-rt", {
        type: "bar",
        data: {
            labels: ["RT 1", "RT 2", "RT 3", "RT 4", "RT 5", "RT 6"],
            datasets: [
                {
                    label: "TOTAL JIWA",
                    data: [399, 217, 384, 336, 205, 306],
                    backgroundColor: "rgb(135, 185, 0)"
                },
                {
                    label: "KEPALA KELUARGA",
                    data: [201, 109, 216, 176, 148, 203],
                    backgroundColor: "rgb(0, 82, 31)"
                },
                {
                    label: "LAKI-LAKI",
                    data: [221, 125, 215, 201, 123, 191],
                    backgroundColor: "rgb(50, 0, 185)"
                },
                {
                    label: "PEREMPUAN",
                    data: [178, 92, 169, 135, 83, 115],
                    backgroundColor: "rgb(0, 185, 142)"
                }
            ]
        },
        options: { responsive: true }
    });

    // Chart Usia
    initChart("#chart-usia", {
        type: "pie",
        data: {
            labels: ["Usia Produktif", "Usia Non Produktif"],
            datasets: [{
                backgroundColor: ["rgb(135, 185, 0)", "rgb(185, 28, 0)"],
                data: [1304, 500]
            }]
        },
        options: { responsive: true }
    });

    // chart-ekonomi
    initChart("#chart-ekonomi", {
        type: "doughnut",
        data: {
            labels: ["Kaya", "Menengah", "Kurang Mampu"],
            datasets: [{
                backgroundColor: ["rgb(135, 185, 0)", "rgb(241, 238, 19)", "rgb(185, 28, 0)"],
                data: [30, 396, 28]
            }]
        },
        options: { responsive: true }
    });

    // Pekerjaan Chart
    initChart("#chart-pekerjaan", {
        type: "bar",
        data: {
            labels: ["PETANI", "PEDAGANG", "PETERNAK", "NELAYAN", "PNS", "PETUGAS KESEHATAN", "KARYAWAN"],
            datasets: [{
                backgroundColor: "rgba(135, 185, 0, .7)",
                data: [55, 49, 44, 24, 15, 10, 8]
            }]
        },
        options: { responsive: true }
    });

    // Pendidikan Chart
    initChart("#chart-pendidikan", {
        type: "bar",
        data: {
            labels: ["BUTA HURUF", "TIDAK TAMAT SD/MI", "TAMAT SD/MI", "TAMAT SMP/MTS", "TAMAT SMA/MA", "TAMAT D II/D III", "TAMAT S-1"],
            datasets: [{
                backgroundColor: "rgb(0, 185, 142)",
                data: [55, 49, 44, 24, 15, 8, 5]
            }]
        },
        options: { responsive: true }
    });

    // Counter Animation
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll(".counter");

        const animateCounter = (counter) => {
            const updateCount = () => {
                const target = +counter.getAttribute("data-target");
                const count = +counter.innerText;
                const speed = 200;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => observer.observe(counter));
    });

})(jQuery);
