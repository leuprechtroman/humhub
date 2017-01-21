<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

/* @var $this yii\web\View */
/* @var $viewable humhub\modules\user\notifications\Followed */
/* @var $url string */
/* @var $date string */
/* @var $isNew boolean */
/* @var $isNew boolean */
/* @var $originator \humhub\modules\user\models\User */
/* @var source yii\db\ActiveRecord */
/* @var contentContainer \humhub\modules\content\components\ContentContainerActiveRecord */
/* @var space humhub\modules\space\models\Space */
/* @var record \humhub\modules\notification\models\Notification */
/* @var html string */
/* @var text string */
?>

<?php $this->beginContent('@notification/views/layouts/mail.php', $_params_); ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0" align="left">
    <tr>
        <td style="font-size: 14px; line-height: 22px; font-family:Open Sans,Arial,Tahoma, Helvetica, sans-serif; color:#555555; font-weight:300; text-align:left;">
            <?= $viewable->html(); ?>
        </td>
    </tr>
    <tr>
        <td height="10"></td>
    </tr>
    <tr>
        <td style="border-top: 1px solid #eee;padding-top:10px;">
            <?= \humhub\modules\notification\widgets\MailContentContainerInfoBox::widget(['container' => $space])?>
        </td>
    </tr>
</table>
<?php $this->endContent();