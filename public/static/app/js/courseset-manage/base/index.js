webpackJsonp(["app/js/courseset-manage/base/index"],{"8b59a0f947ee65ae4fd5":function(e,t,n){"use strict";var i=n("c6883cd284506260d98b");new(function(e){return e&&e.__esModule?e:{default:e}}(i).default)},c6883cd284506260d98b:function(e,t,n){"use strict";function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(t,"__esModule",{value:!0});var r=function(){function e(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),t}}(),a=function(){function e(){i(this,e),this.init()}return r(e,[{key:"init",value:function(){this.initValidator(),this.initTags()}},{key:"initValidator",value:function(){var e=$("#courseset-form"),t=e.validate({rules:{title:{maxlength:100,required:{depends:function(){return $(this).val($.trim($(this).val())),!0}},course_title:!0},subtitle:{required:{depends:function(){return $(this).val($.trim($(this).val())),!1}},course_title:!0}}});$("#courseset-base-submit").click(function(n){t.form()&&($(n.currentTarget).button("loading"),e.submit())})}},{key:"initTags",value:function(){var e=$("#tags");e.select2({ajax:{url:e.data("url"),dataType:"json",quietMillis:500,data:function(e,t){return{q:e,page_limit:10}},results:function(e){return{results:e.map(function(e){return{id:e.name,name:e.name}})}}},initSelection:function(e,t){var n=[];$(e.val().split(",")).each(function(){n.push({id:this,name:this})}),t(n)},formatSelection:function(e){return e.name},formatResult:function(e){return e.name},formatSearching:function(){return Translator.trans("site.searching_hint")},multiple:!0,maximumSelectionSize:20,placeholder:Translator.trans("course_set.manage.tag_required_hint"),width:"off",createSearchChoice:function(){return null}})}}]),e}();t.default=a}},["8b59a0f947ee65ae4fd5"]);