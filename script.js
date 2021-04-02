$(document).ready(function () {
    $("#formularz-link").click(() => {
        $("#name").focus();
    });
    let e = document.getElementById("burger"),
        t = document.getElementById("main-nav"),
        o = document.querySelector(".nav-wrapper");
    e.addEventListener("click", function () {
        "100" === o.style.zIndex
            ? setTimeout(() => {
                o.style.zIndex = "-2";
            }, 275)
            : (o.style.zIndex = "100"),
            this.classList.toggle("is-open"),
            t.classList.toggle("is-open");
    });
    let i = $(window).width();
    $("nav ul li a").click(function (l) {
        i < 769 &&
        (e.classList.toggle("is-open"),
            t.classList.toggle("is-open"),
            setTimeout(() => {
                o.style.zIndex = "-2";
            }, 275));
        let s = $(this).attr("href");
        i < 769 ? $("html, body").animate({ scrollTop: $(s).offset().top }, 500) : $("html, body").animate({ scrollTop: $(s).offset().top - 70 }, 500), l.preventDefault();
    }),
        $(".scroll-down").click(function (e) {
            let t = $(this).find("a").attr("href");
            i < 769 ? $("html, body").animate({ scrollTop: $(t).offset().top }, 500) : $("html, body").animate({ scrollTop: $(t).offset().top - 70 }, 500), e.preventDefault();
        });
    setTimeout(() => {
        (window.fbAsyncInit = function () {
            FB.init({ xfbml: !0, version: "v9.0" });
        }),
            (function (e, t, o) {
                var i,
                    l = e.getElementsByTagName(t)[0];
                e.getElementById(o) || (((i = e.createElement(t)).id = o), (i.src = "https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js"), l.parentNode.insertBefore(i, l));
            })(document, "script", "facebook-jssdk");
    }, 5e3);
    // function getCookie(name) {
    //     let dc = document.cookie;
    //     let prefix = name + "=";
    //     let begin = dc.indexOf("; " + prefix);
    //     if (begin === -1) {
    //         begin = dc.indexOf(prefix);
    //         if (begin !== 0) return null;
    //     }
    //     else
    //     {
    //         begin += 2;
    //         let end = document.cookie.indexOf(";", begin);
    //         if (end === -1) {
    //             end = dc.length;
    //         }
    //     }
    //     return decodeURI(dc.substring(begin + prefix.length));
    // }
    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return null;
    }
    function showCookies() {
        let myCookie = getCookie("policy");
        if (myCookie == null) {
            $('.cookies-bar').css("display", "flex");
        }
        else {}
    }
    showCookies();
});
const progressBar = document.querySelector(".scrollbar");
let totalHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
window.addEventListener("scroll", () => {
    let e = (document.documentElement.scrollTop / totalHeight) * 100;
    progressBar.style.height = `${e}vh`;
});
const progressBarClick = document.querySelector(".clickScrollbar");
progressBarClick.addEventListener("click", (e) => {
    let t = (e.clientY / progressBarClick.offsetHeight) * totalHeight;
    window.scrollTo({ top: t, behavior: "smooth" });
});
let sliderWrapper = $(".sponsorzy-wrapper");
function slideShow() {
    sliderWrapper.hasClass("slick-initialized") ||
    sliderWrapper.slick({
        speed: 5e3,
        slidesToShow: 2,
        autoplay: !0,
        infinite: !0,
        autoplaySpeed: 0,
        cssEase: "linear",
        arrows: !1,
        draggable: !0,
        pauseOnHover: !0,
        swipe: !0,
        mobileFirst: !0,
        variableWidth: !0,
        responsive: [{ breakpoint: 769, settings: "unslick" }],
    });
}
function isScrolledIntoView(e) {
    let t = $(window).scrollTop(),
        o = t + $(window).height(),
        i = $(e).offset().top;
    return i <= o && i >= t;
}
slideShow(),
    $(window).resize(() => {
        $(window).width() < 769 && slideShow();
    });
let firstScroll = !1;
function doSomeComplicatedStuff() {
    firstScroll = !0;
    const e = (e) => new Promise((t) => setTimeout(t, e));
    !(async function t() {
        for (const t of $("#osiagniecia article ul li").toArray()) t.classList.add("item"), await e(1500), t.classList.remove("item");
        await t();
    })();
}
$(window).on("scroll", function () {
    isScrolledIntoView("#osiagniecia") && !firstScroll && doSomeComplicatedStuff();
});
