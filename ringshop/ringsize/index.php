<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Ring Size</title>

    <link rel="stylesheet" href="js/css.css">
    <link rel="stylesheet" href="js/bootstrap.css">
    <link rel="stylesheet" href="js/jsfeat.css">

    <style type="text/css">
    .dg ul {
        list-style: none;
        margin: 0;
        padding: 0;
        width: 100%;
        clear: both
    }
    .dg.ac {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 0;
        z-index: 0
    }
    .dg:not(.ac) .main {
        overflow: hidden
    }
    .dg.main {
        -webkit-transition: opacity 0.1s linear;
        -o-transition: opacity 0.1s linear;
        -moz-transition: opacity 0.1s linear;
        transition: opacity 0.1s linear
    }
    .dg.main.taller-than-window {
        overflow-y: auto
    }
    .dg.main.taller-than-window .close-button {
        opacity: 1;
        margin-top: -1px;
        border-top: 1px solid #2c2c2c
    }
    .dg.main ul.closed .close-button {
        opacity: 1 !important
    }
    .dg.main:hover .close-button,
    .dg.main .close-button.drag {
        opacity: 1
    }
    .dg.main .close-button {
        -webkit-transition: opacity 0.1s linear;
        -o-transition: opacity 0.1s linear;
        -moz-transition: opacity 0.1s linear;
        transition: opacity 0.1s linear;
        border: 0;
        position: absolute;
        line-height: 19px;
        height: 20px;
        cursor: pointer;
        text-align: center;
        background-color: #000
    }
    .dg.main .close-button:hover {
        background-color: #111
    }
    .dg.a {
        float: right;
        margin-right: 15px;
        overflow-x: hidden
    }
    .dg.a.has-save ul {
        margin-top: 27px
    }
    .dg.a.has-save ul.closed {
        margin-top: 0
    }
    .dg.a .save-row {
        position: fixed;
        top: 0;
        z-index: 1002
    }
    .dg li {
        -webkit-transition: height 0.1s ease-out;
        -o-transition: height 0.1s ease-out;
        -moz-transition: height 0.1s ease-out;
        transition: height 0.1s ease-out
    }
    .dg li:not(.folder) {
        cursor: auto;
        height: 27px;
        line-height: 27px;
        overflow: hidden;
        padding: 0 4px 0 5px
    }
    .dg li.folder {
        padding: 0;
        border-left: 4px solid rgba(0, 0, 0, 0)
    }
    .dg li.title {
        cursor: pointer;
        margin-left: -4px
    }
    .dg .closed li:not(.title),
    .dg .closed ul li,
    .dg .closed ul li > * {
        height: 0;
        overflow: hidden;
        border: 0
    }
    .dg .cr {
        clear: both;
        padding-left: 3px;
        height: 27px
    }
    .dg .property-name {
        cursor: default;
        float: left;
        clear: left;
        width: 40%;
        overflow: hidden;
        text-overflow: ellipsis
    }
    .dg .c {
        float: left;
        width: 60%
    }
    .dg .c input[type=text] {
        border: 0;
        margin-top: 4px;
        padding: 3px;
        width: 100%;
        float: right
    }
    .dg .has-slider input[type=text] {
        width: 30%;
        margin-left: 0
    }
    .dg .slider {
        float: left;
        width: 66%;
        margin-left: -5px;
        margin-right: 0;
        height: 19px;
        margin-top: 4px
    }
    .dg .slider-fg {
        height: 100%
    }
    .dg .c input[type=checkbox] {
        margin-top: 9px
    }
    .dg .c select {
        margin-top: 5px
    }
    .dg .cr.function,
    .dg .cr.function .property-name,
    .dg .cr.function *,
    .dg .cr.boolean,
    .dg .cr.boolean * {
        cursor: pointer
    }
    .dg .selector {
        display: none;
        position: absolute;
        margin-left: -9px;
        margin-top: 23px;
        z-index: 10
    }
    .dg .c:hover .selector,
    .dg .selector.drag {
        display: block
    }
    .dg li.save-row {
        padding: 0
    }
    .dg li.save-row .button {
        display: inline-block;
        padding: 0px 6px
    }
    .dg.dialogue {
        background-color: #222;
        width: 460px;
        padding: 15px;
        font-size: 13px;
        line-height: 15px
    }
    #dg-new-constructor {
        padding: 10px;
        color: #222;
        font-family: Monaco, monospace;
        font-size: 10px;
        border: 0;
        resize: none;
        box-shadow: inset 1px 1px 1px #888;
        word-wrap: break-word;
        margin: 12px 0;
        display: block;
        width: 440px;
        overflow-y: scroll;
        height: 100px;
        position: relative
    }
    #dg-local-explain {
        display: none;
        font-size: 11px;
        line-height: 17px;
        border-radius: 3px;
        background-color: #333;
        padding: 8px;
        margin-top: 10px
    }
    #dg-local-explain code {
        font-size: 10px
    }
    #dat-gui-save-locally {
        display: none
    }
    .dg {
        color: #eee;
        font: 11px'Lucida Grande', sans-serif;
        text-shadow: 0 -1px 0 #111
    }
    .dg.main::-webkit-scrollbar {
        width: 5px;
        background: #1a1a1a
    }
    .dg.main::-webkit-scrollbar-corner {
        height: 0;
        display: none
    }
    .dg.main::-webkit-scrollbar-thumb {
        border-radius: 5px;
        background: #676767
    }
    .dg li:not(.folder) {
        background: #1a1a1a;
        border-bottom: 1px solid #2c2c2c
    }
    .dg li.save-row {
        line-height: 25px;
        background: #dad5cb;
        border: 0
    }
    .dg li.save-row select {
        margin-left: 5px;
        width: 108px
    }
    .dg li.save-row .button {
        margin-left: 5px;
        margin-top: 1px;
        border-radius: 2px;
        font-size: 9px;
        line-height: 7px;
        padding: 4px 4px 5px 4px;
        background: #c5bdad;
        color: #fff;
        text-shadow: 0 1px 0 #b0a58f;
        box-shadow: 0 -1px 0 #b0a58f;
        cursor: pointer
    }
    .dg li.save-row .button.gears {
        background: #c5bdad url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAANCAYAAAB/9ZQ7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQJJREFUeNpiYKAU/P//PwGIC/ApCABiBSAW+I8AClAcgKxQ4T9hoMAEUrxx2QSGN6+egDX+/vWT4e7N82AMYoPAx/evwWoYoSYbACX2s7KxCxzcsezDh3evFoDEBYTEEqycggWAzA9AuUSQQgeYPa9fPv6/YWm/Acx5IPb7ty/fw+QZblw67vDs8R0YHyQhgObx+yAJkBqmG5dPPDh1aPOGR/eugW0G4vlIoTIfyFcA+QekhhHJhPdQxbiAIguMBTQZrPD7108M6roWYDFQiIAAv6Aow/1bFwXgis+f2LUAynwoIaNcz8XNx3Dl7MEJUDGQpx9gtQ8YCueB+D26OECAAQDadt7e46D42QAAAABJRU5ErkJggg==) 2px 1px no-repeat;
        height: 7px;
        width: 8px
    }
    .dg li.save-row .button:hover {
        background-color: #bab19e;
        box-shadow: 0 -1px 0 #b0a58f
    }
    .dg li.folder {
        border-bottom: 0
    }
    .dg li.title {
        padding-left: 16px;
        background: #000 url(data:image/gif;base64,R0lGODlhBQAFAJEAAP////Pz8////////yH5BAEAAAIALAAAAAAFAAUAAAIIlI+hKgFxoCgAOw==) 6px 10px no-repeat;
        cursor: pointer;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2)
    }
    .dg .closed li.title {
        background-image: url(data:image/gif;base64,R0lGODlhBQAFAJEAAP////Pz8////////yH5BAEAAAIALAAAAAAFAAUAAAIIlGIWqMCbWAEAOw==)
    }
    .dg .cr.boolean {
        border-left: 3px solid #806787
    }
    .dg .cr.function {
        border-left: 3px solid #e61d5f
    }
    .dg .cr.number {
        border-left: 3px solid #2fa1d6
    }
    .dg .cr.number input[type=text] {
        color: #2fa1d6
    }
    .dg .cr.string {
        border-left: 3px solid #1ed36f
    }
    .dg .cr.string input[type=text] {
        color: #1ed36f
    }
    .dg .cr.function:hover,
    .dg .cr.boolean:hover {
        background: #111
    }
    .dg .c input[type=text] {
        background: #303030;
        outline: none
    }
    .dg .c input[type=text]:hover {
        background: #3c3c3c
    }
    .dg .c input[type=text]:focus {
        background: #494949;
        color: #fff
    }
    .dg .c .slider {
        background: #303030;
        cursor: ew-resize
    }
    .dg .c .slider-fg {
        background: #2fa1d6
    }
    .dg .c .slider:hover {
        background: #3c3c3c
    }
    .dg .c .slider:hover .slider-fg {
        background: #44abda
    }
    </style>
</head>

<body>
    <video src="mediastream:01e03157-ecee-f146-b31d-cf3e9370e22a" id="webcam" style="display:none;" height="480" width="640"></video>
    <div style=" width:640px;height:480px;margin: 10px auto;">
        <canvas id="canvas" width="640" height="480"></canvas>
        <div id="no_rtc" class="alert alert-error" style="display:none;"></div>
        <div id="log" class="alert alert-info">
            <strong>FPS: 33.39</strong>
            <br>grayscale: 1ms
            <br>gauss blur: 5ms
            <br>canny edge: 11ms
        </div>
        <center>
            <button id='ringok'>Done</button><br/>
            <a href="help.html">Help</a>
        </center>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jsfeat-min.js"></script>
    <script type="text/javascript" src="js/compatibility.js"></script>
    <script type="text/javascript" src="js/profiler.js"></script>
    <script type="text/javascript" src="js/dat.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        "use strict";
        var finger_diameter = 0.0;
        var ring_size = 0;

        var ring_dia_arr = [
            9.91, 10.72, 11.53, 11.95, 12.18, 12.37, 12.60, 12.78, 13.00, 13.21, 13.41, 13.61, 13.83, 14.05, 14.15, 14.25, 14.36, 14.45, 14.56, 14.65, 14.86, 15.04, 15.27, 15.40, 15.53, 15.70, 15.80, 15.90, 16.0, 16.10, 16.30, 16.41, 16.51, 16.71, 16.92, 17.13, 17.35, 17.45, 17.75, 17.97, 18.19, 18.35, 18.53, 18.61, 18.69, 18.80, 18.89, 19.10, 19.22, 19.31, 19.41, 19.51, 19.62, 19.84, 20.02, 20.20, 20.32, 20.44, 20.68, 20.76, 20.85, 20.94, 21.08, 21.18, 21.24, 21.30, 21.49, 21.89, 22.10, 22.33
        ];
        var ring_usa_size = ["0000", "00", "0", "1/2", "3/4", "1", "1 1/4", "1 1/2", "1 3/4", "2", "2 1/4", "2 1/2", "2 3/4", "3", "3 1/8", "3 1/4", "3 3/8", "3 1/2", "3 5/8", "3 3/4", "4", "4 1/4", "4 1/2", "4 5/8", "4 3/4", "5", "5 1/8", "5 1/4", "5 3/8", "5 1/2", "5 3/4", "5 7/8", "6", "6 1/4", "6 1/2", "6 3/4", "7", "7 1/4", "7 1/2", "7 3/4", "8", "8 1/4", "8 1/2", "8 5/8", "8 3/4", "8 7/8", "9", "9 1/8", "9 1/4", "9 3/8", "9 1/2", "9 5/8", "9 3/4", "10", "10 1/4", "10 1/2", "10 5/8", "10 3/4", "11", "11 1/8", "11 1/4", "11 3/8", "11 1/2", "11 5/8", "11 3/4", "11 7/8", "12", "12 1/2", "12 3/4", "13"];


        var video = document.getElementById('webcam');
        var canvas = document.getElementById('canvas');
        try {
            var attempts = 0;
            var readyListener = function(event) {
                findVideoSize();
            };
            var findVideoSize = function() {
                if (video.videoWidth > 0 && video.videoHeight > 0) {
                    video.removeEventListener('loadeddata', readyListener);
                    onDimensionsReady(video.videoWidth, video.videoHeight);
                } else {
                    if (attempts < 10) {
                        attempts++;
                        setTimeout(findVideoSize, 200);
                    } else {
                        onDimensionsReady(640, 480);
                    }
                }
            };
            var onDimensionsReady = function(width, height) {
                demo_app(width, height);
                compatibility.requestAnimationFrame(tick);
            };

            video.addEventListener('loadeddata', readyListener);

            compatibility.getUserMedia({
                video: true
            }, function(stream) {
                try {
                    video.src = compatibility.URL.createObjectURL(stream);
                } catch (error) {
                    video.src = stream;
                }
                setTimeout(function() {
                    video.play();
                }, 500);
            }, function(error) {
                $('#canvas').hide();
                $('#log').hide();
                $('#no_rtc').html('<h4>WebRTC not available.</h4>');
                $('#no_rtc').show();
            });
        } catch (error) {
            $('#canvas').hide();
            $('#log').hide();
            $('#no_rtc').html('<h4>Something goes wrong...</h4>');
            $('#no_rtc').show();
        }

        var stat = new profiler();

        var gui, options, ctx, canvasWidth, canvasHeight;
        var img_u8;

        var demo_opt = function() {
            this.blur_radius = 2;
            this.low_threshold = 20;
            this.high_threshold = 127;
        }

        function demo_app(videoWidth, videoHeight) {
            canvasWidth = canvas.width;
            canvasHeight = canvas.height;
            ctx = canvas.getContext('2d');

            ctx.fillStyle = "rgb(0,255,0)";
            ctx.strokeStyle = "rgb(0,255,0)";
            ctx.translate(canvas.width, 0);
            ctx.scale(-1, 1);

            img_u8 = new jsfeat.matrix_t(640, 480, jsfeat.U8C1_t);

            options = new demo_opt();
            gui = new dat.GUI();

            gui.add(options, 'blur_radius', 0, 4).step(1);
            gui.add(options, 'low_threshold', 1, 127).step(1);
            gui.add(options, 'high_threshold', 1, 127).step(1);

            stat.add("grayscale");
            stat.add("gauss blur");
            stat.add("canny edge");
        }
        var start_pos_x = 0,
            start_pos_y = 0,
            end_pos_x = 0,
            end_pos_y = 0;

        function tick() {

            compatibility.requestAnimationFrame(tick);
            stat.new_frame();
            if (video.readyState === video.HAVE_ENOUGH_DATA) {
                ctx.drawImage(video, 0, 0, 640, 480);
                var imageData = ctx.getImageData(0, 0, 640, 480);

                stat.start("grayscale");
                jsfeat.imgproc.grayscale(imageData.data, 640, 480, img_u8);
                stat.stop("grayscale");

                var r = options.blur_radius | 0;
                var kernel_size = (r + 1) << 1;

                stat.start("gauss blur");
                jsfeat.imgproc.gaussian_blur(img_u8, img_u8, kernel_size, 0);
                stat.stop("gauss blur");

                stat.start("canny edge");
                jsfeat.imgproc.canny(img_u8, img_u8, options.low_threshold | 0, options.high_threshold | 0);
                stat.stop("canny edge");

                // render result back to canvas
                var data_u32 = new Uint32Array(imageData.data.buffer);
                var alpha = (0xff << 24);
                var i = img_u8.cols * img_u8.rows,
                    pix = 0;
                while (--i >= 0) {
                    pix = img_u8.data[i];
                    data_u32[i] = alpha | (pix << 16) | (pix << 8) | pix;
                }

                ctx.putImageData(imageData, 0, 0);

                ctx.lineWidth = "2";
                ctx.strokeStyle = "yellow";
                ctx.rect((640 - 171) / 2 - 10, (480 - 108) / 2 + 100, 171, 108);
                ctx.stroke();
                ctx.beginPath();
                ctx.strokeStyle = "red";
                ctx.moveTo(640 - (640 - 171) / 2, 300 + 108 / 2 + 5);
                ctx.lineTo(640 - (640 - 171) / 2 + 100, 300 + 108 / 2 + 5);
                ctx.stroke();

                ctx.beginPath();
                ctx.strokeStyle = "white";
                ctx.moveTo(640 - start_pos_x, 300 + 108 / 2 + 5);
                ctx.lineTo(640 - end_pos_x, 300 + 108 / 2 + 5);
                ctx.stroke();

                calc_size();

                $('#log').html("<br>finger_diameter(mm): " + finger_diameter + "<br>Ring Size(USA): " + ring_size);
            }
        }

        function calc_size() {
            var imgData = ctx.getImageData(0, 0, 640, 480).data;
            var endPoint = 353 * 640 * 4 + (640 - 405) * 4;
            var startPoint = 353 * 640 * 4 + (640 - 505) * 4;
            var skin_started = false;
            var skin_start_pos = 0;
            var skin_end_pos = 0;
            for (var i = startPoint; i < endPoint; i += 4) {
                if (!skin_started && imgData[i] == 255) {
                    skin_started = true;
                    skin_start_pos = (i / 4) % 640;
                    skin_end_pos = skin_start_pos;
                    start_pos_x = (i / 4) % 640;
                }
                if (skin_started && imgData[i] == 255 && (i / 4) % 640 - skin_start_pos < 60) {
                    skin_end_pos = (i / 4) % 640;
                    end_pos_x = (i / 4) % 640;
                }
            }
            console.log(skin_end_pos - skin_start_pos);
            finger_diameter = (skin_end_pos - skin_start_pos) / 2;

            for (var i = 0; i < ring_dia_arr.length; ++i) {
                if (finger_diameter <= ring_dia_arr[i]) {
                    ring_size = ring_usa_size[i];
                    break;
                }
            }
        }

 document.getElementById("ringok").addEventListener("click", function() {
    window.location.href='../addUser.php?size=' + ring_size + '&email=<?php echo $_GET['email']?>';
});
        $(window).unload(function() {
            video.pause();
            video.src = null;
        });
    });
    </script>

    <div class="dg ac">
        <div style="-moz-user-select: none; width: 245px;" class="dg main a">
            <div style="width: 6px; margin-left: -3px; height: 84px; cursor: ew-resize; position: absolute;"></div>
            <ul style="height: auto;">
                <li class="cr number has-slider">
                    <div>
                        <span class="property-name">blur_radius</span>
                        <div class="c">
                            <div>
                                <input value="2" type="text">
                            </div>
                            <div class="slider">
                                <div style="width: 50%;" class="slider-fg"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="cr number has-slider">
                    <div>
                        <span class="property-name">low_threshold</span>
                        <div class="c">
                            <div>
                                <input value="20" type="text">
                            </div>
                            <div class="slider">
                                <div style="width: 15.0794%;" class="slider-fg"></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="cr number has-slider">
                    <div>
                        <span class="property-name">high_threshold</span>
                        <div class="c">
                            <div>
                                <input value="127" type="text">
                            </div>
                            <div class="slider">
                                <div style="width: 38.8889%;" class="slider-fg"></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div style="width: 245px;" class="close-button">Close Controls</div>
        </div>
    </div>
</body>

</html>
