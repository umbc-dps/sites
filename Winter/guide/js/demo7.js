(function() {
  var container = document.querySelector('div.container'),
    triggerBttn = document.getElementById('trigger-overlay'),
    overlay = document.querySelector('div.overlay'),
    closeBttn = overlay.querySelector('button.overlay-close');
  transEndEventNames = {
      'WebkitTransition': 'webkitTransitionEnd',
      'MozTransition': 'transitionend',
      'OTransition': 'oTransitionEnd',
      'msTransition': 'MSTransitionEnd',
      'transition': 'transitionend'
    },
    transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
    support = {
      transitions: Modernizr.csstransitions
    };

  function toggleOverlay() {
    if (classie.has(overlay, 'open')) {
      classie.remove(overlay, 'open');
      classie.remove(container, 'overlay-open');
      classie.add(overlay, 'close');
      var onEndTransitionFn = function(ev) {
        if (support.transitions) {
          if (ev.propertyName !== 'visibility') return;
          this.removeEventListener(transEndEventName, onEndTransitionFn);
        }
        classie.remove(overlay, 'close');
      };
      if (support.transitions) {
        overlay.addEventListener(transEndEventName, onEndTransitionFn);
      } else {
        onEndTransitionFn();
      }
    } else if (!classie.has(overlay, 'close')) {
      classie.add(overlay, 'open');
      classie.add(container, 'overlay-open');
    }
  }
  triggerBttn.addEventListener('click', toggleOverlay);
  closeBttn.addEventListener('click', toggleOverlay);
})();

(function() {
  var triggerBttn = document.getElementById('trigger-overlay2'),
    overlay = document.querySelector('div.overlay2'),
    closeBttn = overlay.querySelector('button.overlay-close');
  transEndEventNames = {
      'WebkitTransition': 'webkitTransitionEnd',
      'MozTransition': 'transitionend',
      'OTransition': 'oTransitionEnd',
      'msTransition': 'MSTransitionEnd',
      'transition': 'transitionend'
    },
    transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
    support = {
      transitions: Modernizr.csstransitions
    };

  function toggleOverlay2() {
    if (classie.has(overlay, 'open')) {
      classie.remove(overlay, 'open');
      classie.add(overlay, 'close');
      var onEndTransitionFn = function(ev) {
        if (support.transitions) {
          if (ev.propertyName !== 'visibility') return;
          this.removeEventListener(transEndEventName, onEndTransitionFn);
        }
        classie.remove(overlay, 'close');
      };
      if (support.transitions) {
        overlay.addEventListener(transEndEventName, onEndTransitionFn);
      } else {
        onEndTransitionFn();
      }
    } else if (!classie.has(overlay, 'close')) {
      classie.add(overlay, 'open');
    }
  }
  triggerBttn.addEventListener('click', toggleOverlay2);
  closeBttn.addEventListener('click', toggleOverlay2);
})();

(function() {
  var triggerBttn = document.getElementById('trigger-overlay3'),
    overlay = document.querySelector('div.overlay3'),
    closeBttn = overlay.querySelector('button.overlay-close');
  transEndEventNames = {
      'WebkitTransition': 'webkitTransitionEnd',
      'MozTransition': 'transitionend',
      'OTransition': 'oTransitionEnd',
      'msTransition': 'MSTransitionEnd',
      'transition': 'transitionend'
    },
    transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
    support = {
      transitions: Modernizr.csstransitions
    };

  function toggleOverlay3() {
    if (classie.has(overlay, 'open')) {
      classie.remove(overlay, 'open');
      classie.add(overlay, 'close');
      var onEndTransitionFn = function(ev) {
        if (support.transitions) {
          if (ev.propertyName !== 'visibility') return;
          this.removeEventListener(transEndEventName, onEndTransitionFn);
        }
        classie.remove(overlay, 'close');
      };
      if (support.transitions) {
        overlay.addEventListener(transEndEventName, onEndTransitionFn);
      } else {
        onEndTransitionFn();
      }
    } else if (!classie.has(overlay, 'close')) {
      classie.add(overlay, 'open');
    }
  }
  triggerBttn.addEventListener('click', toggleOverlay3);
  closeBttn.addEventListener('click', toggleOverlay3);
})();

(function() {
  var triggerBttn = document.getElementById('trigger-overlay4'),
    overlay = document.querySelector('div.overlay4'),
    closeBttn = overlay.querySelector('button.overlay-close');
  transEndEventNames = {
      'WebkitTransition': 'webkitTransitionEnd',
      'MozTransition': 'transitionend',
      'OTransition': 'oTransitionEnd',
      'msTransition': 'MSTransitionEnd',
      'transition': 'transitionend'
    },
    transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
    support = {
      transitions: Modernizr.csstransitions
    };

  function toggleOverlay4() {
    if (classie.has(overlay, 'open')) {
      classie.remove(overlay, 'open');
      classie.add(overlay, 'close');
      var onEndTransitionFn = function(ev) {
        if (support.transitions) {
          if (ev.propertyName !== 'visibility') return;
          this.removeEventListener(transEndEventName, onEndTransitionFn);
        }
        classie.remove(overlay, 'close');
      };
      if (support.transitions) {
        overlay.addEventListener(transEndEventName, onEndTransitionFn);
      } else {
        onEndTransitionFn();
      }
    } else if (!classie.has(overlay, 'close')) {
      classie.add(overlay, 'open');
    }
  }
  triggerBttn.addEventListener('click', toggleOverlay4);
  closeBttn.addEventListener('click', toggleOverlay4);
})();

(function() {
  var triggerBttn = document.getElementById('trigger-overlay5'),
    overlay = document.querySelector('div.overlay5'),
    closeBttn = overlay.querySelector('button.overlay-close');
  transEndEventNames = {
      'WebkitTransition': 'webkitTransitionEnd',
      'MozTransition': 'transitionend',
      'OTransition': 'oTransitionEnd',
      'msTransition': 'MSTransitionEnd',
      'transition': 'transitionend'
    },
    transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
    support = {
      transitions: Modernizr.csstransitions
    };

  function toggleOverlay5() {
    if (classie.has(overlay, 'open')) {
      classie.remove(overlay, 'open');
      classie.add(overlay, 'close');
      var onEndTransitionFn = function(ev) {
        if (support.transitions) {
          if (ev.propertyName !== 'visibility') return;
          this.removeEventListener(transEndEventName, onEndTransitionFn);
        }
        classie.remove(overlay, 'close');
      };
      if (support.transitions) {
        overlay.addEventListener(transEndEventName, onEndTransitionFn);
      } else {
        onEndTransitionFn();
      }
    } else if (!classie.has(overlay, 'close')) {
      classie.add(overlay, 'open');
    }
  }
  triggerBttn.addEventListener('click', toggleOverlay5);
  closeBttn.addEventListener('click', toggleOverlay5);
})();

(function() {
  var triggerBttn = document.getElementById('trigger-overlay6'),
    overlay = document.querySelector('div.overlay6'),
    closeBttn = overlay.querySelector('button.overlay-close');
  transEndEventNames = {
      'WebkitTransition': 'webkitTransitionEnd',
      'MozTransition': 'transitionend',
      'OTransition': 'oTransitionEnd',
      'msTransition': 'MSTransitionEnd',
      'transition': 'transitionend'
    },
    transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
    support = {
      transitions: Modernizr.csstransitions
    };

  function toggleOverlay6() {
    if (classie.has(overlay, 'open')) {
      classie.remove(overlay, 'open');
      classie.add(overlay, 'close');
      var onEndTransitionFn = function(ev) {
        if (support.transitions) {
          if (ev.propertyName !== 'visibility') return;
          this.removeEventListener(transEndEventName, onEndTransitionFn);
        }
        classie.remove(overlay, 'close');
      };
      if (support.transitions) {
        overlay.addEventListener(transEndEventName, onEndTransitionFn);
      } else {
        onEndTransitionFn();
      }
    } else if (!classie.has(overlay, 'close')) {
      classie.add(overlay, 'open');
    }
  }
  triggerBttn.addEventListener('click', toggleOverlay6);
  closeBttn.addEventListener('click', toggleOverlay6);
})();

(function() {
  var triggerBttn = document.getElementById('trigger-overlay7'),
    overlay = document.querySelector('div.overlay7'),
    closeBttn = overlay.querySelector('button.overlay-close');
  transEndEventNames = {
      'WebkitTransition': 'webkitTransitionEnd',
      'MozTransition': 'transitionend',
      'OTransition': 'oTransitionEnd',
      'msTransition': 'MSTransitionEnd',
      'transition': 'transitionend'
    },
    transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
    support = {
      transitions: Modernizr.csstransitions
    };

  function toggleOverlay7() {
    if (classie.has(overlay, 'open')) {
      classie.remove(overlay, 'open');
      classie.add(overlay, 'close');
      var onEndTransitionFn = function(ev) {
        if (support.transitions) {
          if (ev.propertyName !== 'visibility') return;
          this.removeEventListener(transEndEventName, onEndTransitionFn);
        }
        classie.remove(overlay, 'close');
      };
      if (support.transitions) {
        overlay.addEventListener(transEndEventName, onEndTransitionFn);
      } else {
        onEndTransitionFn();
      }
    } else if (!classie.has(overlay, 'close')) {
      classie.add(overlay, 'open');
    }
  }
  triggerBttn.addEventListener('click', toggleOverlay7);
  closeBttn.addEventListener('click', toggleOverlay7);
})();

(function() {
  var triggerBttn = document.getElementById('trigger-overlay8'),
    overlay = document.querySelector('div.overlay8'),
    closeBttn = overlay.querySelector('button.overlay-close');
  transEndEventNames = {
      'WebkitTransition': 'webkitTransitionEnd',
      'MozTransition': 'transitionend',
      'OTransition': 'oTransitionEnd',
      'msTransition': 'MSTransitionEnd',
      'transition': 'transitionend'
    },
    transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
    support = {
      transitions: Modernizr.csstransitions
    };

  function toggleOverlay8() {
    if (classie.has(overlay, 'open')) {
      classie.remove(overlay, 'open');
      classie.add(overlay, 'close');
      var onEndTransitionFn = function(ev) {
        if (support.transitions) {
          if (ev.propertyName !== 'visibility') return;
          this.removeEventListener(transEndEventName, onEndTransitionFn);
        }
        classie.remove(overlay, 'close');
      };
      if (support.transitions) {
        overlay.addEventListener(transEndEventName, onEndTransitionFn);
      } else {
        onEndTransitionFn();
      }
    } else if (!classie.has(overlay, 'close')) {
      classie.add(overlay, 'open');
    }
  }
  triggerBttn.addEventListener('click', toggleOverlay8);
  closeBttn.addEventListener('click', toggleOverlay8);
})();

(function() {
  var triggerBttn = document.getElementById('trigger-overlay9'),
    overlay = document.querySelector('div.overlay9'),
    closeBttn = overlay.querySelector('button.overlay-close');
  transEndEventNames = {
      'WebkitTransition': 'webkitTransitionEnd',
      'MozTransition': 'transitionend',
      'OTransition': 'oTransitionEnd',
      'msTransition': 'MSTransitionEnd',
      'transition': 'transitionend'
    },
    transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
    support = {
      transitions: Modernizr.csstransitions
    };

  function toggleOverlay9() {
    if (classie.has(overlay, 'open')) {
      classie.remove(overlay, 'open');
      classie.add(overlay, 'close');
      var onEndTransitionFn = function(ev) {
        if (support.transitions) {
          if (ev.propertyName !== 'visibility') return;
          this.removeEventListener(transEndEventName, onEndTransitionFn);
        }
        classie.remove(overlay, 'close');
      };
      if (support.transitions) {
        overlay.addEventListener(transEndEventName, onEndTransitionFn);
      } else {
        onEndTransitionFn();
      }
    } else if (!classie.has(overlay, 'close')) {
      classie.add(overlay, 'open');
    }
  }
  triggerBttn.addEventListener('click', toggleOverlay9);
  closeBttn.addEventListener('click', toggleOverlay9);
})();

(function() {
  var triggerBttn = document.getElementById('trigger-overlay10'),
    overlay = document.querySelector('div.overlay10'),
    closeBttn = overlay.querySelector('button.overlay-close');
  transEndEventNames = {
      'WebkitTransition': 'webkitTransitionEnd',
      'MozTransition': 'transitionend',
      'OTransition': 'oTransitionEnd',
      'msTransition': 'MSTransitionEnd',
      'transition': 'transitionend'
    },
    transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
    support = {
      transitions: Modernizr.csstransitions
    };

  function toggleOverlay10() {
    if (classie.has(overlay, 'open')) {
      classie.remove(overlay, 'open');
      classie.add(overlay, 'close');
      var onEndTransitionFn = function(ev) {
        if (support.transitions) {
          if (ev.propertyName !== 'visibility') return;
          this.removeEventListener(transEndEventName, onEndTransitionFn);
        }
        classie.remove(overlay, 'close');
      };
      if (support.transitions) {
        overlay.addEventListener(transEndEventName, onEndTransitionFn);
      } else {
        onEndTransitionFn();
      }
    } else if (!classie.has(overlay, 'close')) {
      classie.add(overlay, 'open');
    }
  }
  triggerBttn.addEventListener('click', toggleOverlay10);
  closeBttn.addEventListener('click', toggleOverlay10);
})();