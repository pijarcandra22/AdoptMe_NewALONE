(function($) {
    dataProduk = JSON.parse(localStorage.getItem("dataTanaman"))
    checkData = dataProduk.filter(dataProduk => dataProduk.kategori.search($("#contentTag").val()) > -1);
    console.log(checkData);
    // 本函数每次调用只负责一个轮播图的功能
    // 也就是说只会产生一个轮播图，这个函数的作用域只能分配给一个轮播图
    // 要求在调用本函数的时候务必把当前轮播图的根标签传递过来
    // 这里的形参 ele 就是某个轮播的根标签
    var slide = function(ele,options) {
        var $ele = $(ele);
        // 默认设置选项
        var setting = {
        		// 控制轮播的动画时间
            speed: 1000,
            // 控制 interval 的时间 (轮播速度)
            interval: 2000,
            speed2: 1,
            
        };
        // 对象合并
        $.extend(true, setting, options);
        // 规定好每张图片处于的位置和状态
        var states = [
            { $zIndex: 1, width: 247, height: 368, top: 39, left: 577, $opacity: 0.2 },
            { $zIndex: 2, width: 247, height: 368, top: 39, left: 315, $opacity: 0.4 },
            { $zIndex: 3, width: 247, height: 368, top: 39, left: 0, $opacity: 0.7 },
            { $zIndex: 4, width: 300, height: 446, top: 0, left: 0, $opacity: 1 },
            { $zIndex: 3, width: 247, height: 368, top: 39, left: 315, $opacity: 0.7 },
            { $zIndex: 2, width: 247, height: 368, top: 39, left: 577, $opacity: 0.4 },
        ];

        var $lis = $ele.find('.car-content');
        var timer = null;

        // 事件
        $ele.find('.hi-next').on('click', function() {
            next();
        });
        $ele.on('mouseenter', function() {
            clearInterval(timer);
            timer = null;
        }).on('mouseleave', function() {
            autoPlay();
        });

        playfirst();
        autoPlay();

        // 让每个 li 对应上面 states 的每个状态
        // 让 li 从正中间展开
        function move() {
            $lis.each(function(index, element) {
                var state = states[index];
                $(element).css('zIndex', state.$zIndex).finish().animate(state, setting.speed).find('.car-content').css('opacity', state.$opacity);
                $(element).load("template/adobt_content.php",{width:state.width,lok:checkData[index]['nama_alamat'],nama:checkData[index]['nama_tanaman'],gambar:checkData[index]['gambar'],harga:checkData[index]['harga'],des:checkData[index]['deskripsi'],pengelola:checkData[index]['nama_pengelola']})
                $(element).find('.car-content').attr({"onclick":"callModal('"+checkData[index]['nama_tanaman']+"','"+checkData[index]['id_pengelola']+"')"});
            });
        }

        function playfirst() {
            $lis.each(function(index, element) {
                var state = states[index];
                $(element).css('zIndex', state.$zIndex).finish().animate(state, setting.speed2).find('.car-content').css('opacity', state.$opacity);
                $(element).load("template/adobt_content.php",{width:state.width,lok:checkData[index]['nama_alamat'],nama:checkData[index]['nama_tanaman'],gambar:checkData[index]['gambar'],harga:checkData[index]['harga'],des:checkData[index]['deskripsi'],pengelola:checkData[index]['nama_pengelola']})
                $(element).attr({"onclick":"callModal('"+checkData[index]['nama_tanaman']+"','"+checkData[index]['id_pengelola']+"')"});
            });
        }
        
        // 切换到下一张
        function next() {
            // 原理：把数组最后一个元素移到第一个
            states.unshift(states.pop());
            move();
        }

        function autoPlay() {
            timer = setInterval(next, setting.interval);
        }
    }
    // 找到要轮播的轮播图的根标签，调用 slide()
    $.fn.hiSlide = function(options) {
        $(this).each(function(index, ele) {
            slide(ele,options);
        });
        // 返回值，以便支持链式调用
        return this;
    }
})(jQuery);
