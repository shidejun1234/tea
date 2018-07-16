<?php require_once 'base.php';?>
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
                        <label>请输入文章url地址:（<text style="color: #ff0000;">请加上协议http://或https://</text>）</label>
                        <br/>
                        <input type="text" name="newsurl" id="newsurl" size="40" value="https://" />
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
</body>
</html>

