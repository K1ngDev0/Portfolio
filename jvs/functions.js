const el = document.querySelector(".stick");
if (el) {
  const observer = new IntersectionObserver( 
    ([e]) => e.target.classList.toggle("is-pinned", e.intersectionRatio < 1),
    { threshold: [1] }
  );

  observer.observe(el);
} else {
  console.error('Element with class "stick" not found.');
}