import gsap from "gsap";

const fancyText = new SplitText('.fancy-text');
gsap.from(fancyText.chars, { y: '100%', stagger: 0.1 })