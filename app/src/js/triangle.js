    var GraphMaker = (function (window) {

      /**
       * Abstract class for canvas helper
       * @param elementId
       */
      function BaseCanvas(elementId, maintainAspectRatio) {
        var self = this;
        self.element = window.document.getElementById(elementId);
        self.canvas = self.element.getContext('2d');

        if (maintainAspectRatio) {
          self.element.width = window.innerWidth;
          self.element.height = window.innerHeight;
        }

        function initSettings() {
          self.setSize();
        }

        self.setSize = function () {
          self.y = self.element.height;
          self.x = self.element.width;
        };

        initSettings();
      }

      /**
       * Helper class to create canvas actions
       * @param {canvas} [canvas object with 2d context]
       */
      function CanvasHelper(canvas) {
        var self = this;

        self.canvas = canvas;

        /**
         * Creates a line
         * @param  {object} [begin line position x,y]
         * @param  {object} [end line position x,y]
         * @param options
         */
        self.createLine = function (begin, end, options) {
          options = options || {};
          self.canvas.strokeStyle = "white";
          self.canvas.beginPath();
          self.canvas.moveTo(begin.x, begin.y);
          self.canvas.lineTo(end.x, end.y);

          if (options.colour) {
            self.canvas.strokeStyle = options.colour;
          }

          if (options.lineWidth) {
            self.canvas.lineWidth = options.lineWidth;
          }

          self.canvas.stroke();
          self.canvas.closePath();
        };

        /**
         * Creates a static rectangle or a filled rectangle
         * @param  {object} [begin line position x,y]
         * @param  {object} [end line position x,y]
         * @param options
         * @param isRect
         */
        self.createRectangle = function (begin, end, options, isRect) {
          options = options || {};
          isRect = isRect === undefined ? true : isRect;

          self.canvas.beginPath();

          if (options.fillColour) {
            self.canvas.fillStyle = options.fillColour;
          }

          if (options.colour) {
            self.canvas.strokeStyle = options.colour;
          }

          if (isRect) {
            //creates a static empty rectangle with borders
            self.canvas.rect(begin.x, begin.y, end.x, end.y);
          } else {
            //creates a filled coloured rectangle
            self.canvas.fillRect(begin.x, begin.y, end.x, end.y);
          }
          self.canvas.stroke();
          self.canvas.closePath();
        };

        /**
         * Creates a text at given position
         * @param txt
         * @param position
         * @param options
         */
        self.createText = function (txt, position, options) {

          options = options || {};

          self.canvas.beginPath();
          if (options.font) {
            self.canvas.font = options.font;
          }

          self.canvas.fillStyle = "black";
          if (options.colour) {
            self.canvas.fillStyle = options.colour;
          }

          self.canvas.fillText(txt, position.x, position.y);
          self.canvas.stroke();
          self.canvas.closePath();
        };

        /**
         * Creates a circle bubbles
         * @param circumference
         * @param options
         * @param position
         * @param radius
         */
        self.createCircle = function (position, radius, circumference, options) {
          options = options || {};

          //var radius = 10;
          self.canvas.beginPath();

          self.canvas.strokeStyle = "black";
          self.canvas.lineWidth = 1;

          if (options.width) {
            self.canvas.lineWidth = options.width;
          }

          self.canvas.fillStyle = "white";
          if (options.colour) {
            self.canvas.fillStyle = options.colour;
          }
          self.canvas.arc(position.x, position.y, radius, 0, 2 * Math.PI);

          self.canvas.fill();
          self.canvas.stroke();
          self.canvas.closePath();
        };

        self.createTriangle = function (pointA, pointB, pointC, options, toFill) {
          toFill = toFill === undefined ? false : toFill;

          self.canvas.beginPath();
          self.canvas.moveTo(pointA.x, pointA.y);
          self.canvas.lineTo(pointB.x, pointB.y);
          self.canvas.lineTo(pointC.x, pointC.y);
          self.canvas.lineTo(pointA.x, pointA.y);

          self.canvas.fillStyle = "white";
          if (options.fillColour) {
            self.canvas.fillStyle = options.fillColour;
          }

          if (options.colour) {
            self.canvas.strokeStyle = options.colour;
          }

          if (options.width) {
            self.canvas.strokeStyle = options.width;
          }

          if (toFill) {
            self.canvas.fill();
          }

          self.canvas.stroke();
          self.canvas.closePath();

        }
      }

      /**
       * Class : Handing the creation of basic matrix actions
       * @param elementId
       */
      function MatrixGraph(elementId, maintainAspectRatio) {
        //extends base canvas
        BaseCanvas.apply(this, [elementId, maintainAspectRatio]);

        //extends canvas helper
        CanvasHelper.apply(this, [this.canvas]);

        var self = this;

        //initializing constructor
        self.constructor.prototype.initSettings = function () {

          self.range = {};
          self.range.x = 300;
          self.range.y = 150;

          self.pixels = {};
          self.pixels.y = self.y / self.range.y;
          self.pixels.x = self.x / self.range.x;

          // self.draw.create();
        };

        //all draw objects
        self.draw = {};


        self.initSettings();
      }

      /**
       * @param elementId
       */
      function GraphMaker(elementId, maintainAspectRatio) {
        MatrixGraph.apply(this, [elementId, maintainAspectRatio]);

        var self = this;
        self.isTriangleAnimationComplete = false;
        self.isTriangleAnimationStarted = false;

        self.triangle = function (percentage, triangleFillColour, triangleStrokeColour, triangleStrokeWidth, rectangleFillColour, fontColour, fontFamily) {

          if (self.isTriangleAnimationComplete) {
            return;
          }

          if (self.isTriangleAnimationStarted) {
            return;
          }

          self.isTriangleAnimationStarted = true;

          self.createTriangle({
            x: self.x / 2 * self.pixels.x,
            y: 0
          }, {
            x: 0,
            y: self.y * self.pixels.y
          }, {
            x: self.x * self.pixels.x,
            y: self.y * self.pixels.y
          }, {
            fillColour: triangleFillColour,
            color: triangleStrokeColour,
            width: triangleStrokeWidth

          }, false);

          height = self.y;
          self.createText(percentage + '%', {
            x: 135 * self.pixels.x,
            y: 120 * self.pixels.y,
          }, {
            colour: fontColour,
            font: fontFamily
          });

          var id = window.setInterval(function () {

            self.createRectangle({
              x: 0,
              y: 0,
            }, {
              x: self.x * self.pixels.x,
              y: self.y * self.pixels.y
            }, {
              fillColour: rectangleFillColour
            }, false);

            self.createTriangle({
              x: self.x / 2 * self.pixels.x,
              y: 0
            }, {
              x: 0,
              y: self.y * self.pixels.y
            }, {
              x: self.x * self.pixels.x,
              y: self.y * self.pixels.y
            }, {
              fillColour: triangleFillColour,
              color: triangleStrokeColour,
              width: triangleStrokeWidth

            }, true);

            self.createText(percentage + '%', {
              x: 135 * self.pixels.x,
              y: 120 * self.pixels.y,
            }, {
              colour: fontColour,
              font: fontFamily
            });

            self.createRectangle({
              x: 0,
              y: 0
            }, {
              x: self.x * self.pixels.x,
              y: height
            }, {
              fillColour: rectangleFillColour
            }, false);

            self.createTriangle({
              x: self.x / 2 * self.pixels.x,
              y: 0
            }, {
              x: 0,
              y: self.y * self.pixels.y
            }, {
              x: self.x * self.pixels.x,
              y: self.y * self.pixels.y
            }, {
              fillColour: triangleFillColour,
              color: triangleStrokeColour,
              width: triangleStrokeWidth

            }, false);
            self.createText(percentage + '%', {
              x: 135 * self.pixels.x,
              y: 120 * self.pixels.y,
            }, {
              colour: fontColour,
              font: fontFamily
            });

            height = height * 0.98;

            if (height <= ((100 - percentage) / 100 * 150)) {
              window.clearInterval(id);
              self.isTriangleAnimationComplete = true;
            }

          }, 50);
        };

        var startingHeight = 10 * self.pixels.y;
        var triangleWidthCenter = 150 * self.pixels.x;
        var triangleHeightCenter = 75 * self.pixels.y;

        self.setupTriangleAnimation = function () {
          self.createRectangle({
            x: 0,
            y: 0
          }, {
            x: 300 * self.pixels.x,
            y: 150 * self.pixels.y
          }, {
            fillColour: 'rgba(255,255,255,1)'
          }, false);
          // canvas.canvas.clip();


          var endingYPosition = getEndingYPosition(triangleHeightCenter, startingHeight);
          var startingYPosition = getStartingYPosition(triangleHeightCenter, startingHeight);
          var endingXPosition = getEndingXPosition(endingYPosition);
          var startingXPosition = getStartingXPosition(triangleWidthCenter, endingXPosition);

          self.canvas.globalCompositeOperation = 'destination-out';
          self.createTriangle({
            x: 150 * self.pixels.x,
            y: startingYPosition
          }, {
            x: startingXPosition,
            y: endingYPosition
          }, {
            x: endingXPosition,
            y: endingYPosition
          }, {
            fillColour: 'rgba(255,255,255,1)',
          }, true);
        };

        self.triangleAnimation = function (toAdd) {


          self.canvas.globalCompositeOperation = "source-over";
          self.canvas.clearRect(0, 0, 300, 150);
          self.createRectangle({
            x: 0,
            y: 0
          }, {
            x: 300 * self.pixels.x,
            y: 150 * self.pixels.y
          }, {
            fillColour: 'rgba(255,255,255,1)'
          }, false);
          // canvas.canvas.clip();

          if (toAdd) {
            startingHeight = startingHeight * 1.5;
            if (startingHeight >= 600 * self.pixels.y) {
              startingHeight = 600 * self.pixels.y;
            }
          } else {
            startingHeight = startingHeight * 0.75;
            if (startingHeight <= 25 * self.pixels.y) {
              startingHeight = 25 * self.pixels.y;
            }

          }

          var endingYPosition = getEndingYPosition(triangleHeightCenter, startingHeight);
          var startingYPosition = getStartingYPosition(triangleHeightCenter, startingHeight);

          var endingXPosition = getEndingXPosition(endingYPosition);
          var startingXPosition = getStartingXPosition(triangleWidthCenter, endingXPosition);

          self.canvas.globalCompositeOperation = 'destination-out';
          self.createTriangle({
            x: 150 * self.pixels.x,
            y: startingYPosition
          }, {
            x: startingXPosition,
            y: endingYPosition
          }, {
            x: endingXPosition,
            y: endingYPosition
          }, {
            fillColour: 'rgba(255,255,255,1)',
          }, true);


        };

        function getEndingYPosition(center, height) {
          return center + height / 2;
        }

        function getStartingYPosition(center, height) {
          return center - height / 2;
        }

        function getEndingXPosition(endingY) {
          return endingY * 2;
        }

        function getStartingXPosition(center, endingX) {
          return 2 * center - endingX;
        }

        // self.draw.redraw = function () {
        //     self.draw.create();
        // }
      }

      return GraphMaker;
    })(window);

    var canvas = new GraphMaker('sample');
    var $window = $(window);
    window.addEventListener('scroll', function () {
      if ($window.scrollTop() >= 0.7 * $('#sample').offset().top) {
        canvas.triangle(50, 'white', 'black', 1, '#63a37a', '#5b8080', '30px vanitasblack');
      }
    });

    // percentage, triangleFillColour, triangleStrokeColour, triangleStrokeWidth, rectangleFillColour, fontColour, fontFamily
    var canvas2 = new GraphMaker('sample1');
    window.addEventListener('scroll', function () {
      if ($window.scrollTop() >= 0.7 * $('#sample1').offset().top) {
        canvas2.triangle(92, 'white', 'black', 1, '#63a37a', '#5b8080', '30px vanitasblack');
      }
    });

    var canvas3 = new GraphMaker('sample2');
    window.addEventListener('scroll', function () {
      if ($window.scrollTop() >= 0.7 * $('#sample2').offset().top) {
        canvas3.triangle(94, 'white', 'white', 1, '#63a37a', '#5b8080', '30px vanitasblack');
      }
    });

    if (document.querySelector('#animating-triangle')) {
      var triangle = new GraphMaker('animating-triangle', true);
      var $window = $(window);

      triangle.setupTriangleAnimation();
      var originalScrollValue = $window.scrollTop();
      window.addEventListener('scroll', function () {
        if (originalScrollValue >= $window.scrollTop()) { //decreasing
          if ($window.scrollTop() <= ($('#animating-triangle').offset().top + $('#animating-triangle').height())) {
            triangle.triangleAnimation(false);
          }

        } else if (originalScrollValue < $window.scrollTop()) { //increasing
          if ($window.scrollTop() >= $('#animating-triangle').offset().top * 0.8) {
            triangle.triangleAnimation(true);
          }
        }

        originalScrollValue = $window.scrollTop();
      });
    }