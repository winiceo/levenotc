webpackJsonp(["app/js/course-manage/students/add/index"],{"7b72218c6f176d2b0ae1":function(e,t,n){"use strict";function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var a=function(){function e(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}return function(t,n,r){return n&&e(t.prototype,n),r&&e(t,r),t}}();new(function(){function e(){r(this,e),this.init()}return a(e,[{key:"init",value:function(){var e=$("#student-add-form"),t=e.validate({onkeyup:!1,currentDom:"#student-add-submit",rules:{queryfield:{required:!0,remote:{url:$("#student-nickname").data("url"),type:"get",data:{value:function(){return $("#student-nickname").val()}}}},price:{positive_price:!0,max:$("#buy-price").data("price")}},messages:{queryfield:{remote:Translator.trans("course_manage.student_create.field_required_error_hint")},price:{max:Translator.trans("course_manage.student_create.price_max_error_hint")}}});$("#student-add-submit").click(function(n){t.form()&&e.submit()})}}]),e}())}},["7b72218c6f176d2b0ae1"]);