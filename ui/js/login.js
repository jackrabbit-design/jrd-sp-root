/* ========================================================================= */
/* BE SURE TO COMMENT CODE/IDENTIFY PER PLUGIN CALL */
/* ========================================================================= */

jQuery(function($){

    for(var i = 1; i <= 14; i++){
        $('#login').append('<div class="circle c'+i+'"></div>');
    }

    $imgs = [];

    $img1 = $('.footerwrap').data('img1');
    $img1 = '<div class="circle i1"><img src="'+$img1+'" />';

    $img2 = $('.footerwrap').data('img2');
    $img2 = '<div class="circle i2"><img src="'+$img2+'" />';

    $img3 = $('.footerwrap').data('img3');
    $img3 = '<div class="circle i3"><img src="'+$img3+'" />';

    $img4 = $('.footerwrap').data('img4');
    $img4 = '<div class="circle i4"><img src="'+$img4+'" />';

    $imgs.push($img1,$img2,$img3,$img4);

    $('#login').append($imgs);

    var layers    = [],
        docWidth  = $(window).width(),
        docHeight = $(window).height()

    $(window).resize(function() {
        docWidth  = $(window).width()
        docHeight = $(window).height()
    })

    // Public Methods

    // Add an object to the list of things to parallax
    $.fn.plaxify = function (params){
      var layer    = {"xRange":0,"yRange":0,"invert":false},
          position = this.position()

      for(var param in params){
        if(layer[param]==0){
          layer[param] = params[param]
        }
      }
      layer.obj    = this
      layer.startX = 0; //position.left
      layer.startY = 0; //position.top

      if(layer.invert == false){
        layer.startX -= Math.floor(layer.xRange/2)
        layer.startY -= Math.floor(layer.yRange/2)
      } else {
        layer.startX += Math.floor(layer.xRange/2)
        layer.startY += Math.floor(layer.yRange/2)
      }
      layers.push(layer)
    }


    $.plax = {
      listLayers: function(){
        console.log(layers)
      },
      enable: function(){
        $(document).mousemove(function(e){
          var x      = e.pageX,
              y      = e.pageY,
              hRatio = Math.round((x/docWidth)*100)/100,
              vRatio = Math.round((y/docHeight)*100)/100
          $.each(layers, function(index,layer) {
            if(layer.invert != true){
              //layer.obj.css('left',layer.startX + (layer.xRange*hRatio))
              //layer.obj.css('top', layer.startY + (layer.yRange*vRatio))
              var xPos = layer.startX + (layer.xRange*hRatio);
              var yPos = layer.startY + (layer.yRange*vRatio);
              layer.obj.css({
                'WebkitTransform':'translate3d(' + xPos + 'px, ' + yPos + 'px, 0)',
                'MozTransform':'translate3d(' + xPos + 'px, ' + yPos + 'px, 0)',
                'msTransform':'translate(' + xPos + 'px, ' + yPos + 'px)',
                'OTransform':'translate3d(' + xPos + 'px, ' + yPos + 'px, 0)',
                'transform':'translate3d(' + xPos + 'px, ' + yPos + 'px, 0)'
              });
            } else {
              //layer.obj.css('left',layer.startX - (layer.xRange*hRatio))
              //layer.obj.css('top', layer.startY - (layer.yRange*vRatio))

              var xPos = layer.startX - (layer.xRange*hRatio);
              var yPos = layer.startY - (layer.yRange*vRatio);
              layer.obj.css('transform','translate3d(' + xPos + 'px, ' + yPos + 'px, 0)')
            }
          })
        })
      },
      disable: function(){
        clearTimeout(timer)
      }
    }

    $.fn.range = function(){
        return $(this).width() / 6;
    }

    $('.circle').each(function(){
        $(this).plaxify({
            "xRange": $(this).range(),
            "yRange": $(this).range()
        });
    });

    $.plax.enable();
});
