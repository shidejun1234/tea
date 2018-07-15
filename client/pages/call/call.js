Page({
    data: {
    },
    makePhoneCall: function () {
        wx.makePhoneCall({
            phoneNumber: "13242657732",
            success: function () {
                wx.navigateTo({
                    url: '../../pages/index/index',
                });
            }
        })
    }
})
