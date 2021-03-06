jQuery(document).ready(function($) {
    
    /* Superfish Menu Call */
    $('#afford_menu').superfish({});
    
    /* Responsive Menu */
    $('.primarymenu-resp').toggle(function(){
        $('.primarymenu-section').addClass('menuClicked');
        $('.menuClicked').fadeIn();
        $('.menuClicked ul.sub-menu').show().css('visibility', 'visible');
        $('.menuClicked ul.children').show().css('visibility', 'visible');
        $('.menuClicked ul.sf-menu').removeClass('sf-js-enabled');
    }, function(){
        $('.menuClicked').hide();
        $('.menuClicked ul.sf-menu').addClass('sf-js-enabled');
        $('.menuClicked ul.sub-menu').hide().css('visibility', 'hidden');
        $('.menuClicked ul.children').hide().css('visibility', 'hidden');
        $('.primarymenu-section').removeClass('menuClicked');
    });
    
    $(window).resize(function(){
       if( $('.primarymenu-resp').css('display') == 'none'){
           
           $('.primarymenu-section').removeClass('menuClicked');
           $('.primarymenu-section ul.sf-menu').addClass('sf-js-enabled');
           $('.primarymenu-section ul.sub-menu').hide().css('visibility', 'hidden');
           $('.primarymenu-section ul.children').hide().css('visibility', 'hidden');
       } else {
           $('.primarymenu-section').addClass('menuClicked');
           $('.primarymenu-section ul.sf-menu').removeClass('sf-js-enabled');
           $('.primarymenu-section ul.sub-menu').show().css('visibility', 'visible');
           $('.primarymenu-section ul.children').show().css('visibility', 'visible');
       }
    });

    $('.post-list').masonry({
      // options...
      itemSelector: '.post-item',
      //columnWidth: 100,
      isAnimated: true
    });

    $.fn.postLike = function() {
      if ($(this).hasClass('done')) {
        alert('您已赞过该文章');
        return false;
      } else {
        $(this).addClass('done');
        var id = $(this).data("id"),
        action = $(this).data('action'),
        rateHolder = $(this).children('.count');
        var ajax_data = {
          action: "specs_zan",
          um_id: id,
          um_action: action
        };
        $.post("/wp-admin/admin-ajax.php", ajax_data,
        function(data) {
          $(rateHolder).html(data);
        });
        return false;
      }
    };
    $(document).on("click", ".specsZan",
      function() {
        $(this).postLike();
    });
});