/*!
 * jQuery Render
 *
 * Copyright (c) 2023 Imam Subekti
 * Released under the MIT license
 */

(function (factory) {
  if (typeof define === "function" && define.amd) {
    define(["jquery"], factory);
  } else if (typeof module === "object" && module.exports) {
    module.exports = factory(require("jquery"));
  } else {
    factory(jQuery);
  }
})(function ($) {
  $.extend($.fn, {
    render: function (url, params, isAppend) {
      var selector,
        dataList = [],
        self = this,
        off = url.indexOf(" "),
        replaceParent = isAppend !== undefined ? !isAppend : true;

      if (off > -1) {
        selector = stripAndCollapse(url.slice(off));
        url = url.slice(0, off);
      }

      if (Array.isArray(params)) {
        dataList = params;
      } else {
        dataList.push(params);
      }

      if (dataList.length > 1) {
        // If the dataList have more that one, do not ever replace parent
        replaceParent = false;
      }

      if (self.length > 0) {
        // If we have elements to modify, make the request
        jQuery
          .ajax({
            url: url,

            // If "type" variable is undefined, then "GET" method will be used.
            // Make value of this field explicit since
            // user can override it through ajaxSetup method
            type: "GET",
            dataType: "html",
          })
          .done(function (responseText) {
            for (let i = 0; i < dataList.length; i++) {
              var textHtml = responseText;

              if (dataList[i] && typeof dataList[i] === "object") {
                Object.keys(dataList[i]).forEach((key) => {
                  textHtml = textHtml.replaceAll(`::${key}`, dataList[i][key]);
                });
              }

              if (replaceParent) {
                self.replaceWith(textHtml);
              } else {
                self.append(textHtml);
              }
            }
          });
      }

      return this;
    },
  });
});
