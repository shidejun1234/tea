<?php require_once 'base.php';?>
<script type="text/javascript" charset="utf-8" src="ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="ueditor/ueditor.all.js"></script>
<style>
    .fileinput-button {
        position: relative;
        display: inline-block;
        overflow: hidden;
    }

    .fileinput-button input{
        position:absolute;
        right: 0px;
        top: 0px;
        opacity: 0;
        -ms-filter: 'alpha(opacity=0)';
        font-size: 200px;
    }


</style>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2  align="center">添加新闻</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default" style="text-align: center;">
                    <form action="upload_file.php" method="post" enctype="multipart/form-data">
                        <br/>
                        <label>请输入标题:</label>
                        <br/>
                        <input type="text" name="newstitle" id="newstitle" size="20" />
                        <br/><br/>
                        <label>请选择内容简介:</label>
                        <br/>
                        <textarea name="newsjianjie" id="newsjianjie" rows="5" cols="20"></textarea>
                        <br/><br/>
                        <label>请输入文章内容</label>
                        <br/>
                        <div class="fileinput-button">
                            <textarea  type="text"  name="newscontent" id="EditorId" placeholder="请输入内容"></textarea>
                        </div>

                        <br/><br/>
                        <div class="btn btn-success fileinput-button">
                            <label for="file">上传图片</label>
                            <input type="file" name="file" id="file" />
                        </div>
                        <br/><br/>
                        <input class="btn btn-success fileinput-button" type="submit" name="submit" value="确认提交" />
                        <br/><br/>
                    </form>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>

    </div>

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
</script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
<script type="text/javascript" charset="utf-8">//初始化编辑器
    window.UEDITOR_HOME_URL = "ueditor/";//配置路径设定为UEditor所放的位置
    window.onload=function(){
       window.UEDITOR_CONFIG.initialFrameHeight=600;//编辑器的高度
       window.UEDITOR_CONFIG.initialFrameWidth=1200;//编辑器的宽度
       var editor = new UE.ui.Editor({
         imageUrl : '',
         fileUrl : '',
         imagePath : '',
         filePath : '',
           imageManagerUrl:'', //图片在线管理的处理地址
           imageManagerPath:''
       });
       editor.render("EditorId");//此处的EditorId与<textarea name="content" id="EditorId">的id值对应 </textarea>
   }
</script>
</body>
</html>

