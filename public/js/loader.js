const script = document.createElement('script');
const locale = document.currentScript.getAttribute('data-locale');

if (locale === 'fa') {
  script.src = "/js/script-rtl.js";
} else {
  script.src = "/js/scripts.js";
}

document.body.appendChild(script);
