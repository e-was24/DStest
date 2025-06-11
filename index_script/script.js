gsap.from(".Bar_coment", {
    ScrollTrigger: {
        trigger: ".Bar_coment",
        start: "top 100%",
        end: "bottom -20%",
        toggleActions: "play none none none",
        markers: true
    },
    opacity: 0,
    duration: 1,
    ease: "power2.out",
    stagger: 0.2,
    delay: 1
})