require("./bootstrap");

function splitScroll() {
    const controller = new ScrollMagic.Controller();

    new ScrollMagic.Scene({
        duration: "50%",
        triggerElement: ".test",
        triggerHook: 0.5,
    })
        .setPin(".test")
        .addIndicators()
        .addTo(controller);

    new ScrollMagic.Scene({
        duration: "200%",
        triggerElement: ".about-title",
        triggerHook: 0,
    })
        .setPin(".about-title")
        .addIndicators()
        .addTo(controller);
}
splitScroll();

const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

tl.to(".text", { y: "0%", duration: 0.8, stagger: 0.25 });
tl.to(".slider", { y: "-100%", duration: 1.5 });
tl.to(".intro", { y: "-100%", duration: 1 }, "-=0.85");
