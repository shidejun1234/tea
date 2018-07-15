Page({
    data: {
    },
    makePhoneCall: function () {
        wx.makePhoneCall({
            phoneNumber: "13242657732",
            success: function () {
                console.log("拨打成功");
            }
        })
    }
})
