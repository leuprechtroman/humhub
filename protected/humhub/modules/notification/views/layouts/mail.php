<!-- START NOTIFICATION -->
<tr>
    <td align="center" valign="top" class="fix-box">

        <!-- start  container width 600px -->
        <table width="600" align="center" border="0" cellspacing="0" cellpadding="0" class="container" bgcolor="#ffffff"
               style="background-color: #ffffff; border-bottom-left-radius: 4px; border-bottom-left-radius: 4px;">
            <tr>
                <td valign="top">

                    <!-- start container width 560px -->
                    <table width="560" align="center" border="0" cellspacing="0" cellpadding="0" class="full-width"
                           bgcolor="#ffffff" style="background-color:#ffffff;">

                        <!-- start image and content -->
                        <tr>
                            <td valign="top" width="100%">

                                <!-- start content left -->
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" align="left">

                              


                                    <!-- start content top-->
                                    <tr>
                                        <td valign="top" align="left">
                                            <?=  $content ?>
                                        </td>
                                    </tr>
                                    <!--start space height -->
                                    <tr>
                                        <td height="15"></td>
                                    </tr>
                                    <!--end space height -->
                                    <tr>
                                        <td valign="top" width="auto" align="center">
                                            <table border="0" align="center" cellpadding="0" cellspacing="0">
                                                <td width="auto"  align="center" valign="middle" height="32" style=" background-color:#7191a8;  border-radius:5px; background-clip: padding-box;font-size:14px; font-family:Open Sans, Arial,Tahoma, Helvetica, sans-serif; text-align:center;  color:#ffffff; font-weight: 600; padding-left:30px; padding-right:30px; padding-top: 5px; padding-bottom: 5px;">
                                                    <span style="color: #ffffff; font-weight: 300;">
                                                        <a href="<?php echo $url; ?>" style="text-decoration: none; color: #ffffff; font-weight: 300;">
                                                            <?php echo Yii::t('NotificationModule.views_notificationLayoutMail', 'see online'); ?>
                                                        </a>
                                                    </span>
                                                </td>
                                            </table>
                                        </td>
                                    </tr>
                                    <!-- end  content top-->


                                    <!--start space height -->
                                    <tr>
                                        <td height="15" class="col-underline"></td>
                                    </tr>
                                    <!--end space height -->


                                </table>
                                <!-- end content left -->


                            </td>
                        </tr>
                        <!-- end image and content -->

                    </table>
                    <!-- end  container width 560px -->
                </td>
            </tr>
        </table>
        <!-- end  container width 600px -->
    </td>
</tr>
<!-- END NOTIFICATION/ACTIVITY -->