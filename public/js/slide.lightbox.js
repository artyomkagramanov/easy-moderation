 $(document).ready(function(e) {
  $('.pictures[data-lightbox-gallery]').iLightbox({
         type: 'image', //'image', 'inline', 'ajax', 'iframe', 'swf' and 'html'
         loop: true,
         arrows: true,
         closeBtn: true,
         title: null,
         href: null,
         content: null,
         beforeShow: function(a, b){ },
         onShow: function(a, b){ },
         beforeClose: function(){ },
         afterClose: function(){ },
         onUpdate: function(a){ },
     });
});