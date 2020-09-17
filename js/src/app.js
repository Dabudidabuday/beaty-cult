'use strict';

import "../../css/src/app.scss";

import gsap from "gsap";
// import { Timeline } from "gsap/gsap-core";

// import './vendors/blotter.min.js';


import "./scripts/transitions/home-transition.js";
import './scripts/transitions/course-transition.js';
import "./scripts/transitions/page-transition.js";
import "./scripts/scroll-triggers/home-header.js";
import "./scripts/scroll-triggers/fish-girl.js";
import './scripts/accordion.js';
import './scripts/sliders.js';


// Set feedback radio to "Model"
let btnModel = document.querySelector("#btnModel");
let radioModel = document.querySelector('input[value="Стати моделлю"]');

if (btnModel) {
  btnModel.addEventListener("click", function () {
    radioModel.click();
  });
}

//A suggested structure for app.js  ///    2
// var scripts = {
//   init: function () {
//     if ($("body").hasClass("home-page")) {
//       this.homepage();
//     } else if ($("body").hasClass("course-page")) {
//       this.single_post();
//     }
//   },
//   homepage: function () {
//     import './app.js';
//      import "./scripts/get-set-course-info.js";
//      import "./scripts/promo-flashlight.js";
//   },
//   single_post: function () {
//     import "./app.js";
//   },
// };


// Now, we will create a function that gets all the script files inside new_imports array //// 5
// $.getMultiScripts = function (arr) {
//   var _arr = $.map(arr, function (src) {
//     return $.getScript(src);
//   });
//   _arr.push(
//     $.Deferred(function (deferred) {
//       $(deferred.resolve);
//     })
//   );
//   return $.when.apply($, _arr);
// };




// Recall scripts.init()  ///    3
// Barba.Dispatcher.on('newPageReady', function(currentStatus, oldStatus, container, newPageRawHTML) {
//     var response = newPageRawHTML.replace(/(<\/?)body( .+?)?>/gi, '$1notbody$2>', newPageRawHTML);
//     var bodyClasses = $(response).filter('notbody').attr('class');
//     $('body').attr('class', bodyClasses);
//     console.log('bodyclasses', bodyClasses);
//     // After updating body classes, we recall the init function
//     scripts.init();
// });


//Looking for new scripts  //// 4
// var new_imports = [];
// var new_evaluations = "";
// var script_tags = $(response).find("script");
// $(script_tags).each(function (i, s) {
//   var src = $(s).attr("src");
//   if (src) {
//     // if not already initialized add it
//     if (initialized_scripts.indexOf(src) == -1) {
//       new_imports.push(src);
//     }
//   } else {
//     // it is an inline script, will evaluate it
//     new_evaluations += script_tags[i].innerHTML;
//   }
// });



//////    / ///  7
// $.getMultiScripts(new_imports).done(function() {
//     eval(new_evaluations);
// }).fail(function(error) {
//     console.log('error loading scripts', error);
// }).always(function() {
//     // always called, both on success and error
// });


// Place it at the end of your app.js  //// 3
// var initialized_scripts = [];
// var script_tags = document.getElementsByTagName("script");
// $(script_tags).each(function (i, s) {
//   var src = $(s).attr("src");
//   if (src) {
//     initialized_scripts.push(src);
//   }
// });