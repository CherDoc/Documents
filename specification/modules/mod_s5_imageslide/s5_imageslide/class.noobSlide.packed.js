/*
---

script: Element.GetUntil.js

description: Gets siblings or parents until a matching selector is found.

license: MIT-style license.

authors: Ryan Florence

docs: http://moodocs.net/rpflo/mootools-rpflo/Element.GetUntil

requires:
- core:1.2.4:Element

provides: [Element.getAllPreviousUntil, Element.getAllNextUntil, Element.getParentsUntil]

...
*/

(function() {

	var walkUntil = function(element, walk, match, nocash) {
		var el = element[walk];
		var elements = [];
		while (el) {
			if (el.nodeType == 1) {
				if (!match || Element.match(el, match)) {
					break;
				} else {
					elements.push(el);
				}
			}
			el = el[walk];
		}
		return new Elements(elements, { ddup: false, cash: !nocash });
	}

		Element.implement({

			getAllPreviousUntil: function(match, nocash) {
				return walkUntil(this, 'previousSibling', match, nocash);
			},

			getAllNextUntil: function(match, nocash) {
				return walkUntil(this, 'nextSibling', match, nocash);
			},

			getParentsUntil: function(match, nocash) {
				return walkUntil(this, 'parentNode', match, nocash);
			}

		});

})();
var noobSlide = new Class({
    initialize: function (a) {
        this.items = a.items;
        this.mode = a.mode || 'horizontal';
        this.modes = {
            horizontal: ['left', 'width'],
            vertical: ['top', 'height']
        };
        this.size = a.size || 965;
        this.box = a.box.setStyle(this.modes[this.mode][1], (this.size * this.items.length) + 'px');
        this.button_event = a.button_event || 'click';
        this.handle_event = a.handle_event || 'click';
        this.onWalk = a.onWalk || null;
        this.currentIndex = null;
        this.previousIndex = null;
        this.nextIndex = null;
        this.interval = a.interval || 5000;
        this.autoPlay = a.autoPlay || false;
        this._play = null;
        this.handles = a.handles || null;
        if (this.handles) {
            this.addHandleButtons(this.handles)
        }
        this.buttons = {
            previous: [],
            next: [],
            play: [],
            playback: [],
            stop: []
        };
        if (a.addButtons) {
            for (var b in a.addButtons) {
                this.addActionButtons(b, $type(a.addButtons[b]) == 'array' ? a.addButtons[b] : [a.addButtons[b]])
            }
        }
        this.fx = new Fx.Tween(this.box, $extend((a.fxOptions || {
            duration: 500,
            wait: false
        }), {
            property: this.modes[this.mode][0]
        }));
     //   if(this.onHoverStop){
			var s5IsWrap = this.box.getParentsUntil('.s5_is_wrap').getParent()[1];
			s5IsWrap.addEvents({'mouseenter':function(e){
					e.preventDefault();
					this.stop();
				}.bind(this),
				'mouseleave': function(e){
					e.preventDefault();
					if(document.getElementById("s5_ismod_play").style.display !="block")this.play(this.interval, 'next', true)
				}.bind(this)
			});
		//}
		
        //console.log(this);
        this.walk((a.startItem || 0), true, true);
    },
    addHandleButtons: function (a) {
        for (var i = 0; i < a.length; i++) {
            a[i].addEvent(this.handle_event, this.walk.pass([i, true], this))
        }
    },
    addActionButtons: function (a, b) {
        for (var i = 0; i < b.length; i++) {
            switch (a) {
                case 'previous':
                    b[i].addEvent(this.button_event, this.previous.pass([true], this));
                    break;
                case 'next':
                    b[i].addEvent(this.button_event, this.next.pass([true], this));
                    break;
                case 'play':
                    b[i].addEvent(this.button_event, this.play.pass([this.interval, 'next', false], this));
                    break;
                case 'playback':
                    b[i].addEvent(this.button_event, this.play.pass([this.interval, 'previous', false], this));
                    break;
                case 'stop':
                    b[i].addEvent(this.button_event, this.stop.create({
                        bind: this
                    }));
                    break
            }
            this.buttons[a].push(b[i])
        }
    },
    previous: function (a) {
        this.walk((this.currentIndex > 0 ? this.currentIndex - 1 : this.items.length - 1), a)
    },
    next: function (a) {
        this.walk((this.currentIndex < this.items.length - 1 ? this.currentIndex + 1 : 0), a)
    },
    play: function (a, b, c) { 
        this.stop();
        if (!c) {
            this[b](false)
        }
        this._play = this[b].periodical(a, this, [false]);
    },
    stop: function () { 
        $clear(this._play)
    },
    walk: function (a, b, c) {
        if (a != this.currentIndex) {
            this.currentIndex = a;
            this.previousIndex = this.currentIndex + (this.currentIndex > 0 ? -1 : this.items.length - 1);
            this.nextIndex = this.currentIndex + (this.currentIndex < this.items.length - 1 ? 1 : 1 - this.items.length);
            if (b) {
                this.stop()
            }
            if (c) {
                this.fx.cancel().set((this.size * -this.currentIndex) + 'px')
            } else {
                this.fx.start(this.size * -this.currentIndex)
            }
            if (b && this.autoPlay) {
                this.play(this.interval, 'next', true)
            }
            if (this.onWalk) {
                this.onWalk((this.items[this.currentIndex] || null), (this.handles && this.handles[this.currentIndex] ? this.handles[this.currentIndex] : null))
            }
        }
    }
});

var s5_ismod_switch = 1;

function s5_ismod_switchbuttons() {

    if (s5_ismod_switch == "1") {
        document.getElementById("s5_ismod_play").style.display = "block";
        document.getElementById("s5_ismod_stop").style.display = "none";
        s5_ismod_switch = 0;
    } else {
        document.getElementById("s5_ismod_play").style.display = "none";
        document.getElementById("s5_ismod_stop").style.display = "block";
        s5_ismod_switch = 1;
    }
}


function s5_ismod_onhover() {
    document.getElementById("s5_ismod_onhover").style.display = "block";
}

function s5_ismod_outhover() {
    document.getElementById("s5_ismod_onhover").style.display = "none";
}
