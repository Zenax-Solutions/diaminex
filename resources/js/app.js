import "./bootstrap";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

// Hero section animations
const animateHeroElements = () => {
    const header = document.getElementById("header");
    const heroTitle = document.getElementById("hero-title");
    const heroSubtitle = document.getElementById("hero-subtitle");
    const exploreBtn = document.getElementById("explore-btn");
    const gem_colocetion = document.getElementById("gem-colection");

    if (header) {
        gsap.to(header, {
            opacity: 1,
            y: 10, // Moving the header from below (y: 50px) to its original position
            duration: 1.5,
            delay: 0.5,
            ease: "power2.out",
        });
    }

    if (heroTitle) {
        gsap.to(heroTitle, {
            opacity: 1,
            y: -30, // Moving hero title from below
            duration: 1.5,
            delay: 1,
            ease: "power2.out",
        });
    }

    if (gem_colocetion) {
        gsap.to(gem_colocetion, {
            opacity: 1,
            y: -30, // Moving hero title from below
            duration: 1.5,
            delay: 1,
            ease: "power2.out",
        });
    }

    if (heroSubtitle) {
        gsap.to(heroSubtitle, {
            opacity: 1,
            y: -25, // Moving hero subtitle from below
            duration: 1.5,
            delay: 1.5,
            ease: "power2.out",
        });
    }

    if (exploreBtn) {
        gsap.to(exploreBtn, {
            opacity: 1,
            y: -20, // Moving explore button from below
            duration: 1.5,
            delay: 2,
            ease: "power2.out",
        });

        exploreBtn.addEventListener("click", () => {
            gsap.to(window, {
                duration: 0.5,
                scrollTo: {
                    y: "#gems",
                    offsetY: 90,
                },
                ease: "power2.inOut",
            });
        });
    }
};

const animateGemSectionsBackGround = () => {
    const gemSections = document.querySelectorAll(".gem-section");
    const gemColors = [
        "linear-gradient(135deg, rgba(21, 32, 239, 0.8), rgba(0, 0, 0, 0.9))", // Blue Sapphire
        "linear-gradient(135deg, rgba(255, 37, 200, 0.8), rgba(0, 0, 0, 0.9))", // Ruby
        "linear-gradient(135deg, rgba(255, 0, 0, 0.8), rgba(85, 0, 0, 0.9))", // Ruby
    ];

    gemSections.forEach((section, index) => {
        gsap.fromTo(
            section,
            {
                background: "transparent", // Default background before the section appears
            },
            {
                scrollTrigger: {
                    trigger: section,
                    start: "top center", // When section starts to appear (center of the viewport)
                    end: "bottom center", // When the section exits the viewport
                    scrub: 2, // Smooth transition during scroll
                    toggleActions: "play none none reverse", // Triggering behavior
                },
                background: gemColors[index % gemColors.length], // Unique background for each section
                duration: 1, // Duration for color transition (controlled by scrub)
                ease: "power2.inOut", // Smooth easing of background change
            }
        );
    });
};

// Gem sections animations
const animateGemSections = () => {
    const gemContents = document.querySelectorAll(".gem-content");
    const modelViewers = document.querySelectorAll("#model-viewer-front");

    gemContents.forEach((content) => {
        gsap.from(content, {
            scrollTrigger: {
                trigger: content,
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play none none reverse",
            },
            x: -50,
            opacity: 0,
            duration: 2.2,
        });
    });

    modelViewers.forEach((viewer) => {
        gsap.from(viewer.parentElement, {
            scrollTrigger: {
                trigger: viewer.parentElement,
                start: "top 80%",
                end: "bottom 20%",
                scrub: 0.2,
                toggleActions: "play none none reverse",
            },
            y: 150,
            opacity: 0,
            duration: 2,
            ease: "power2.inOut", // Smooth easing of background change
        });
    });
};

// Initialize all animations
const init = () => {
    animateGemSectionsBackGround();
    animateHeroElements();
    animateGemSections();
};

// Run when DOM is loaded
document.addEventListener("DOMContentLoaded", init);
