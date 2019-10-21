var Scratch = (function() {
    function mergeOptions(obj1, obj2) {
        var obj3 = {};
        for (var key in obj1) {
            obj3[key] = obj1[key];
        }
        for (var key in obj2) {
            obj3[key] = obj2[key];
        }
        return obj3;
    }

    function randomPoint(min, max) {
        var random = Math.abs(Math.random() * (max - min) + min);
        return random = parseInt(random.toFixed(0), 10);
    }
    var Scratch = function(options) {
        this.cursor = {
            png: '',
            cur: '',
            x: 0,
            y: 0,
            default: 'auto'
        };
        this.pointSize = {
            x: 5,
            y: 5
        };
        this.defaults = {
            canvasId: '',
            imageBackground: '',
            pictureOver: '',
            cursor: this.cursor,
            sceneWidth: 500,
            sceneHeight: 250,
            radius: 40,
            nPoints: 10,
            pointSize: this.pointSize,
            percent: null,
            callback: null
        };
        this.options = mergeOptions(this.defaults, options);
        this.options.cursor = mergeOptions(this.cursor, options.cursor);
        this.options.pointSize = mergeOptions(this.pointSize, options.pointSize);
        this.init();
    };
    Scratch.prototype.init = function() {
        var _this = this;
        this.canvas = document.getElementById(this.options.canvasId);
        this.ctx = this.canvas.getContext('2d');
        this.canvas.width = this.options.sceneWidth;
        this.canvas.height = this.options.sceneHeight;
        this.image = new Image();
        this.image.src = this.options.pictureOver;
        this.percent = 0;
        this.zone = null;
        this.pixelRatio = window.devicePixelRatio;
        this.setBackground();
        this.setCursor();
        var scratchMove = function(e) {
            e.preventDefault();
            _this.scratch(e);
        };
        window.addEventListener('resize', function() {
            _this.update();
        });
        window.addEventListener('scroll', function() {
            _this.update();
        });
        this.canvas.addEventListener('mousedown', function(e) {
            _this.canvas.addEventListener('mousemove', scratchMove);
        });
        this.canvas.addEventListener('mouseup', function _func(e) {
            _this.canvas.removeEventListener('mousemove', scratchMove);
            var clear = _this.clear();
            if (clear) {
                _this.callback(_this.options.callback);
                _this.canvas.removeEventListener('mouseup', _func);
            }
        });
        this.canvas.addEventListener('touchstart', function(e) {
            _this.canvas.addEventListener('touchmove', scratchMove);
        });
        this.canvas.addEventListener('touchend', function(e) {
            _this.canvas.removeEventListener('touchmove', scratchMove);
            var clear = _this.clear();
            if (clear) {
                _this.callback(_this.options.callback);
            }
        });
    };
    Scratch.prototype.setCursor = function() {
        var string = '';
        if (document.documentElement.classList.contains('is-ie') || navigator.userAgent.indexOf('Trident') != -1 || navigator.userAgent.indexOf('Edge') != -1) {
            string += 'url(' + this.options.cursor.cur + '), auto';
        } else {
            string += 'url(' + this.options.cursor.png + ') ' + this.options.cursor.x + ' ' + this.options.cursor.y + ', pointer';
        }
        this.canvas.setAttribute('style', 'cursor:' + string + ';');
    };
    Scratch.prototype.update = function() {
        this.zone = this.canvas.getBoundingClientRect();
    };
    Scratch.prototype.fluidify = function() {
        var imgData = this.ctx.getImageData(0, 0, this.canvas.width, this.canvas.height);
        this.canvas.width = window.innerWidth;
        this.canvas.height = window.innerHeight;
        this.ctx.putImageData(imgData, 0, 0);
    };
    Scratch.prototype.setBackground = function() {
        var _this = this;
        this.image.onload = function() {
            _this.zone = _this.canvas.getBoundingClientRect();
            _this.ctx.drawImage(this, 0, 0);
            var IMG = document.createElement('img');
            IMG.classList.add('scratch_picture-under');
            IMG.src = _this.options.imageBackground;
            _this.canvas.parentElement.insertBefore(IMG, _this.canvas);
        };
    };
    Scratch.prototype.clearPoint = function(x1, y1) {
        var radius = this.options.radius;
        var x = Math.random() * 2 * radius - radius;
        var ylim = Math.sqrt(radius * radius - x * x);
        var y = Math.random() * 2 * ylim - ylim;
        x += radius;
        y += radius;
        x = parseInt(x, 10);
        y = parseInt(y, 10);
        return {
            x: x + x1,
            y: y + y1
        }
    };
    Scratch.prototype.getPosition = function(e) {
        var posX, posY;
        switch (e.type) {
            case 'touchmove':
                posX = e.touches[0].clientX - this.options.radius - window.pageXOffset;
                posY = e.touches[0].clientY - this.options.radius - window.pageYOffset;
                break;
            case 'mousemove':
                posX = e.clientX - this.options.radius - window.pageXOffset;
                posY = e.clientY - this.options.radius - window.pageYOffset;
                break;
        }
        return {
            x: posX,
            y: posY
        }
    };
    Scratch.prototype.scratch = function(e) {
        var position = this.getPosition(e);
        var x = position.x - this.zone.left;
        var y = position.y - this.zone.top + window.pageYOffset;
        var i = 0;
        var len = this.options.nPoints;
        var w_h = window.innerWidth;
        for (i; i < len; i++) {
            var points = this.clearPoint(x, y);

            if(w_h < 450){
                this.ctx.clearRect(points.x+(points.x*0.3968253968253969), points.y+(points.y*0.3968253968253969), this.options.pointSize.x+(this.options.pointSize.x*0.3968253968253969), this.options.pointSize.y+(this.options.pointSize.y*0.3968253968253969));
            }else if(w_h >= 450 && w_h < 630){
                this.ctx.clearRect(points.x, points.y, 2,2);
            }else{
                this.ctx.clearRect(points.x, points.y, this.options.pointSize.x, this.options.pointSize.y);                
            }
            
        }
        this.percent = this.getPercent();

    };
    Scratch.prototype.getPercent = function() {
        var percent;
        var counter = 0;
        var imageData = this.ctx.getImageData(0, 0, this.canvas.width, this.canvas.height);
        var imageDataLength = imageData.data.length;
        for (var i = 0; i < imageDataLength; i += 4) {
            if (imageData.data[i] === 0 && imageData.data[i + 1] === 0 && imageData.data[i + 2] === 0 && imageData.data[i + 3] === 0) {
                counter++;
            }
        }
        if (counter >= 1) {
            percent = (counter / (this.canvas.width * this.canvas.height)) * 100;
        } else {
            percent = 0;
        }
        return percent;
    };
    Scratch.prototype.clear = function() {
        if (this.percent >= this.options.percent) {
            this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
            return true;
        }
    };
    Scratch.prototype.callback = function(callback) {
        if (callback != null && this.percent >= this.options.percent) {
            callback();
        }
    };
    return Scratch;
})();