var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene({
    triggerElement: '.animation',
    triggerHook: 0.5,
    duration: 1000
})
.setClassToggle('.halteres', 'show')
.addIndicators()
.addTo(controller);