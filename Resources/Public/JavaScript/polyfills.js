/* Polyfill for object-fit on images mainly in IE */
var testImg = typeof Image === 'undefined' ? {style: {'object-position': 1}} : new Image();
var supportsObjectFit = 'object-fit' in testImg.style;
if (!supportsObjectFit) objectFitImages();
