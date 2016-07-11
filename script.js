<script>
       var AnalogClock = function(conf) {
        if(!conf.parentId) return;
        
        this.parent = document.getElementById(conf.parentId);
        if(!this.parent) return;    
        
        this.milliSecond = !!conf.milliSecond;
        
        this.refreshRate = 1000;
        if(this.milliSecond) this.refreshRate = 1;
        
        this.buildHTML();
        this.start();
       };
       
       AnalogClock.prototype.buildHTML = function() {
        this.container = build(this.parent, 'aclock_container');
        this.clockContainer = build(this.container, 'aclock_clock_container');
        
        for(var i = 0; i < 360; i += 6) {
         if(!(i%5)) {
          var markContainer = build(this.container, 'aclock_hand_container');
          build(markContainer, 'aclock_big_mark');
          this.rotate(markContainer, i);
         } else {
          var markContainer = build(this.container, 'aclock_hand_container');
          build(markContainer, 'aclock_small_mark');
          this.rotate(markContainer, i);
         }
        }
        
        this.hourContainer = build(this.container, 'aclock_hand_container');
        this.hourHand = build(this.hourContainer, 'aclock_hour_hand');
        this.minuteContainer = build(this.container, 'aclock_hand_container');
        this.minuteHand = build(this.minuteContainer, 'aclock_minute_hand');
        this.secondContainer = build(this.container, 'aclock_hand_container');
        this.secondHand = build(this.secondContainer, 'aclock_second_hand');
        
        if(this.milliSecond) {
         this.milliContainer = build(this.container, 'aclock_hand_container');
         this.milliHand = build(this.milliContainer, 'aclock_milli_hand');
        }
        
        this.screw = build(this.container, 'aclock_screw');
        
        this.dial = build(this.container, 'aclock_dial');
        
        function build(parent, css) {
         if(!parent) return;
         
         var div = document.createElement('div');
         if(css) div.className = css;
         
         parent.appendChild(div);
         return div;
        }
       };
       
       AnalogClock.prototype.start = function() {
        var that = this;
        var refreshRate = 1000;
        setInterval(function() {
         var now = new Date();
         var h = now.getHours()%12;
         var m = now.getMinutes();
         var s = now.getSeconds();
        
         if(that.milliSecond) { 
          var milli = now.getMilliseconds();
          that.rotate(that.milliContainer, (360/1000)*milli);
         }
         
         that.rotate(that.hourContainer,  h*30 + (m/2));
         that.rotate(that.minuteContainer, 6*m);
         that.rotate(that.secondContainer, 6*s);
        }, this.refreshRate);
       };
       
       AnalogClock.prototype.rotate = function(hand, angle) {
        hand.style['-webkit-transform'] =  'rotate('+angle+'deg)';
        hand.style['MozTransform'] =  'rotate('+angle+'deg)';
        hand.style['-moz-transform'] =  'rotate('+angle+'deg)';
        hand.style['-ms-transform'] =  'rotate('+angle+'deg)';
        hand.style.webkitTransform =  'rotate('+angle+'deg)';
       };
       
       function init() {
        var clock = new AnalogClock({parentId: 'clock', milliSecond: true});
       }
        
</script>