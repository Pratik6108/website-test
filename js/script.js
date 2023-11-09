// var tl1 = gsap.timeline();
// tl1
//     .from(".logo-text .logo .m,.d,.r,.s", {
//         opacity: 0,
//         onStart: function () {
//             $(".logo-text .logo .m,.d,.r,.s").textillate({
//                 in: { effect: 'rollIn' },

//             });
//         }
//     })
//     .from(".logo-text .text", {
//         opacity: 0,
//         onStart: function () {
//             $(".logo-text .text").textillate({
//                 in: { effect: 'swing' },

//             });
//         }
//     })
//     .from(".hero .text>*", {
//         opacity: 0,
//         onStart: function () {
//             $(".hero .text>*").textillate({
//                 in: { effect: 'swing' },

//             });
//         }
//     })
//     .from(".hero .text", {
//         opacity: 0,
//         y: -20,
//         delay: -0.1,

//     })
// gsap.from(".work h1,.work h4", {
//     scrollTrigger: {
//         trigger: ".work h1,.work h4",
//         scroller: "body",
//         // markers:true,
//         start: "top 135%",
//     },
//     opacity: 0,
//     onStart: function () {
//         $(".work h1,.work h4").textillate({
//             in: { effect: 'flip' },

//         });
//     }
// })
// gsap.from(".projects-done>div", {
//     scrollTrigger: {
//         trigger: ".projects-done>div",
//         scroller: "body",
//         // markers:true,
//         start: "top 110%",
//     },
//     opacity: 0,
//     duration: 1,
//     scale: 1.5,
//     y: -60,

// })
// gsap.from(".work-style h1,.work-style h4", {
//     scrollTrigger: {
//         trigger: ".work-style h1,.work-style h4",
//         scroller: "body",
//         start: "top 135%",

//     },
//     opacity: 0,
//     onStart: function () {
//         $(".work-style h1,.work-style h4").textillate({
//             in: { effect: 'flip' },

//         });
//     }

// })
// gsap.from(".work-style .work-points>div:first-child", {
//     scrollTrigger: {
//         trigger: ".work-style .work-points>div:first-child",
//         scroller: "body",
//         // markers:true,
//         start: "top 80%",
//     },
//     opacity: 0,
//     x: -60,
//     scale: 1.5,
//     duration:1
// })
// gsap.from(".work-style .work-points .points div", {
//     scrollTrigger: {
//         trigger: ".work-style .work-points .points div",
//         scroller: "body",
//         // markers:true,
//         start: "top 100%",
//     },
//     opacity:0,
//     x: 60,
//     scale: 1.5,
//     duration:1,
//     // onStart: function () {
//     //     $(".work-style .work-points .points div h3,.work-style .work-points .points div p ").textillate({
//     //         in: { effect: 'fadeInUp' },

//     //     });
//     // }
// })
// gsap.from(".our-team>h1,.our-team>p", {
//     scrollTrigger: {
//         trigger: ".our-team>h1,.our-team>p",
//         scroller: "body",
//         start: "top 135%",

//     },
//     opacity: 0,
//     onStart: function () {
//         $(".our-team>h1,.our-team>p").textillate({
//             in: { effect: 'flip' },

//         });
//     }

// })
// gsap.from(".our-team .wrapper>div", {
//     scrollTrigger: {
//         trigger: ".our-team .wrapper>div",
//         scroller: "body",
//         // markers:true,
//         start: "top 110%",
//     },
//     opacity: 0,
//     duration: 1,
//     scale: 1.5,
//     y: -60,

// })
// gsap.from(".testimonials>h1,.testimonials>h3", {
//     scrollTrigger: {
//         trigger: ".testimonials>h1,.testimonials>h3",
//         scroller: "body",
//         start: "top 135%",

//     },
//     opacity: 0,
//     onStart: function () {
//         $(".testimonials>h1,.testimonials>h3").textillate({
//             in: { effect: 'flip' },

//         });
//     }

// })
// gsap.from(".testimonials .single-star svg", {
//     scrollTrigger: {
//         trigger: ".testimonials .single-star svg",
//         scroller: "body",
//         start: "top 135%",

//     },
//     opacity: 0,
//     duration: 1,
//     scale: 1.5,
//     x: 60,

// })
// gsap.from(".testimonials .card-align .cards", {
//     scrollTrigger: {
//         trigger: ".testimonials .card-align .cards",
//         scroller: "body",
//         start: "top 135%",

//     },
//     opacity: 0,
//     duration: 1,
//     scale: 1.5,

// })
// gsap.from(".values>h1,.values>h3", {
//     scrollTrigger: {
//         trigger: ".values>h1,.values>h3",
//         scroller: "body",
//         start: "top 135%",

//     },
//     opacity: 0,
//     onStart: function () {
//         $(".values>h1,.values>h3").textillate({
//             in: { effect: 'flip' },

//         });
//     }

// })
gsap.from(".onload-up", {
    duration: 1,
    y:100
})
const titles = gsap.utils.toArray('.title-up')

titles.forEach((text, i) => {

gsap.from(text, {
    scrollTrigger: {
        trigger: text,
        scroller: "body",
        start: "top 85%",
        // markers:"true"

    },
    duration: 1,
    y: 100,
})
});
const section = gsap.utils.toArray('.section-up')

section.forEach((section, i) => {

gsap.from(section, {
    scrollTrigger: {
        trigger: section,
        scroller: "body",
        start: "top 85%",
        // markers:"true"

    },
    duration: 1,
     opacity:0,
    y: 100,
})
});
 
 






