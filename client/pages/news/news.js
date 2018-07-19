var WxParse = require('../../wxParse/wxParse.js');
// pages/news/news.js
Page({

    /**
     * 页面的初始数据
     */
    data: {

    },

    /**
     * 生命周期函数--监听页面加载
     */
    onLoad: function(options) {
        var that=this;
        wx.request({
            url: 'http://120.77.251.239/tea/bbb.php', //仅为示例，并非真实的接口地址
            method: 'GET',
            data: {
                id: options.id
            },
            header: {
                'content-type': 'application/json' // 默认值
            },
            success: function (res) {
              console.log(res.data);
                that.setData({
                    newsContent:res.data.newsContent
                });
                var article = res.data;
                WxParse.wxParse('article', 'html', res.data.newsContent, that, 5);
            }
        })
    },

    /**
     * 生命周期函数--监听页面初次渲染完成
     */
    onReady: function() {

    },

    /**
     * 生命周期函数--监听页面显示
     */
    onShow: function() {

    },

    /**
     * 生命周期函数--监听页面隐藏
     */
    onHide: function() {

    },

    /**
     * 生命周期函数--监听页面卸载
     */
    onUnload: function() {

    },

    /**
     * 页面相关事件处理函数--监听用户下拉动作
     */
    onPullDownRefresh: function() {

    },

    /**
     * 页面上拉触底事件的处理函数
     */
    onReachBottom: function() {

    },

    /**
     * 用户点击右上角分享
     */
    onShareAppMessage: function() {

    }
})