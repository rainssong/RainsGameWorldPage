
	/*$("#game").css('display','none'); 

	$("#carousel").click(function(event)
	{
		$("#carousel").css('display','none'); 
		$("#game").css('display','block'); 
	})*/

	if(!device.desktop())
	{
		$("#playButton").hide();
	}
	else
	{
		$('.qrbtn').popover(
		{
			trigger: 'manual',
			html: 'true',
			// 本来这里是打算用funciton提供已生成二维码的DIV，结果获取不到生成的二维码
			content: '<div id="qrcode" style="width: 160px; height: 160px;"></div>',
			animation: false,
			placement: 'right'
        }).on("mouseenter", function () 
            {
                var self = this;
                $(this).popover("show");
                // 只有show之后，popover的content才出现在dom中，此时才能生成二维码
                $(".popover #qrcode").qrcode({
                width: 160,
                height: 160,
                render: 'canvas',
                // 这里实际是个动态url，把代码简化了
                text: this.href
                });
                $(this).siblings(".popover").on("mouseleave", function () {
                $(self).popover('hide');
                });
            }).on("mouseleave", function () {
                var self = this;
                setTimeout(function () {
                if (!$(".popover:hover").length) {
                    $(self).popover("hide")
                }
                }, 100);
            })
	}
