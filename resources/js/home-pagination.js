import Swiper from "swiper";
import { Mousewheel, Navigation } from "swiper/modules";
import "swiper/css";

function initHomePagination() {
    const interactionZone = document.getElementById("home-pagination-zone");
    const prevBtn = document.getElementById("prev-page-btn");
    const nextBtn = document.getElementById("next-page-btn");
    const progressText = document.getElementById("home-progress-text");
    const progressFill = document.getElementById("home-progress-fill");

    if (
        !interactionZone ||
        !prevBtn ||
        !nextBtn ||
        !progressText ||
        !progressFill
    ) {
        return;
    }
    const setBtnState = (btn, disabled) => {
        if (!btn) return;
        const svg = btn.querySelector("svg");
        const ellipse = svg?.querySelector("ellipse");

        if (!svg || !ellipse) return;

        btn.disabled = disabled;
        svg.classList.toggle("cursor-not-allowed", disabled);
        svg.classList.toggle("opacity-60", disabled);
        svg.classList.toggle("cursor-pointer", !disabled);
        svg.classList.toggle("hover:scale-110", !disabled);
        ellipse.setAttribute("fill", disabled ? "#9CA3AF" : "#334EAC");
    };

    const swiper = new Swiper(interactionZone, {
        modules: [Navigation, Mousewheel],
        direction: "horizontal",
        slidesPerView: 1,
        speed: 450,

        mousewheel: {
            forceToAxis: true,
        },

        grabCursor: true,

        navigation: {
            nextEl: "#next-page-btn",
            prevEl: "#prev-page-btn",
        },

        on: {
            init: function () {
                updateCustomUI(this);
            },
            slideChange: function () {
                updateCustomUI(this);
            },
        },
    });

    function updateCustomUI(swiperInstance) {
        const page = swiperInstance.activeIndex + 1;
        const totalPages = swiperInstance.slides.length;

        if (progressText) {
            progressText.textContent = `${page} of ${totalPages}`;
        }

        if (progressFill) {
            progressFill.style.width = `${(page / totalPages) * 100}%`;
        }

        setBtnState(prevBtn, swiperInstance.isBeginning);
        setBtnState(nextBtn, swiperInstance.isEnd);
    }
}

document.addEventListener("DOMContentLoaded", initHomePagination);
