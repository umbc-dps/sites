$(function() {
  $('*:first-child').addClass('first-child');
  $('*:last-child').addClass('last-child');
  
  var siteMenu = $('#site-menu');
  var menuExpander = $('#mobile-site-menu-expander');

  // Expand menus script for  

        
  $(siteMenu).on("touchstart", "a", function(e) {
    // Only do this when not in the mobile layout
    if (!menuExpander.is(':visible')) {
    
      var submenus = $(this).siblings('ul');
      var siblings = $(this).parent().siblings('li');
      
      
      if (submenus.length > 0) {
        if (!$(this).parent().hasClass('hover')) {
          e.preventDefault();
          $(this).parent().addClass('hover');
          siblings.removeClass('hover');
        }
      }
    }
  });

  $("#container").on("touchstart", ":not(#site-menu, #site-menu *)", function(e) {
    //console.log('clicking');
    $("ul, li, a", siteMenu).removeClass('hover');
  });
  
  
  
  $("li, a", siteMenu).hover(
    function () {
      $(this).addClass("hover");
    },
    function () {
      $(this).removeClass("hover");
    }
  );
  
  $("li, a", siteMenu).on('focus blur', function(evt) {
    var elem = $(this);
    setTimeout(function() {
      if (elem.is(':focus')) {
        elem.addClass('hover');
        elem.parentsUntil(siteMenu, 'li').addClass('hover');
      } else {
        elem.removeClass('hover');
        elem.parentsUntil(siteMenu, 'li').removeClass('hover');
      }
    }, 0);
  });
  
  $('ul.menu > li > a', siteMenu).each(function(index, item) {
    if ($(item).siblings('ul').length > 0) {
      $(item).append('<span class="menu-arrow">▼</span>');
    }
  });
  
  $('ul.menu > li > ul a', siteMenu).each(function(index, item) {
    if ($(item).siblings('ul').length > 0) {
      $(item).append('<span class="menu-arrow">►</span>');
    }
  });  
  $('.sidebar-nav > ul > li.current-menu-item').each(function(index, item) {
    if ($(item).children('ul').length < 1) {
      $(item).css('display', 'none');
    }
  });
  
  if ($('.sidebar-nav ul li:visible').length < 1) {
    $('.sidebar-nav').css('display', 'none');
  }
  
  $('.sidebar-widgets .widget').before('<div class="widgetcorner"><div class="fill"></div><div class="corner"></div></div>');
  $('.sidebar-nav li a').append('<span class="menu-arrow">►</span>');
  
  menuExpander.click(function(e) {
    e.preventDefault();
    siteMenu.slideToggle('slow', function() {
      menuExpander.toggleClass('expanded');
      
      if (!menuExpander.hasClass('expanded')) {
        siteMenu.css('display', '');
      }
    });
  });
  
  //var colHeight = 0;
  
  // Equal Height Columns
  $(window).on('resize orientationchange load', equalizeColumns);
  
  equalizeColumns();
        
  function equalizeColumns() {
    var sideCol = $('.layout-default .page-sidebar, .layout-home .page-sidebar');
    var mainCol = $('.layout-default .page-content, .layout-home .page-content');
    
    sideCol.height('auto');
    mainCol.height('auto');
  
    if (!menuExpander.is(':visible')) {
      $('body').removeClass('mobile');
      if (sideCol.outerHeight() > mainCol.height()) {
        var colHeight = sideCol.outerHeight();
        mainCol.height(colHeight);  
      } else if (mainCol.outerHeight() > sideCol.height()) {
        var colHeight = mainCol.outerHeight(); 
        sideCol.height(colHeight);
      } /*else {
        alert('blah');
        var colHeight = Math.max(sideCol.outerHeight(), mainCol.outerHeight());
        mainCol.height(colHeight);
        sideCol.height(colHeight);
      }*/
    } else {
      $('body').addClass('mobile');
    }
  }

  $('.ui-tabs > li > a').on('click keypress', function() {
    var tab = $(this);
    $('li > a', tab.parents('ul').first()).each(function(item) {
      var this2 = $(this);
      this2.removeClass('active');
      $(this2.data('tab')).css('display', 'none');
    });
    tab.addClass('active');
    $($(this).data('tab')).css('display', 'block');    
    equalizeColumns();  
    return false;
  });

});

