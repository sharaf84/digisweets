<?php

namespace common\helpers;

use Yii;


/**
 * Mail Helper 
 * @author Ahmed Sharaf <sharaf.developer@gmail.com>
 */
class MailHelper {
    
    /**
     * Sends an email with a link, for resetting password.
     * @param obj $oUser model of user
     * @return boolean whether the email was send
     */
    public function sendPasswordResetToken($oUser) {
        
        return Yii::$app->mailer->compose(['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'], ['oUser' => $oUser])
                        ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name])
                        ->setTo($oUser->email)
                        ->setSubject(Yii::t('app', 'Password reset for ') . Yii::$app->name)
                        ->send();
    }
    
    /**
     * Sends an email with a link, for verification.
     * @param obj $oUser model of user
     * @return boolean whether the email was send
     */
    public static function sendVerificationToken($oUser) {

        return Yii::$app->mailer->compose(['html' => 'verificationToken-html'], ['oUser' => $oUser])
                        ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name])
                        ->setTo($oUser->email)
                        ->setSubject(Yii::t('app', 'Verification for ') . Yii::$app->name)
                        ->send();
    }
    
    /**
     * Send Successful Payment Response
     * @param obj $oOrder model of order
     * @return boolean whether the email was send
     */
    public static function sendSuccessfulPaymentResponse($oOrder) {

        return Yii::$app->mailer->compose(['html' => 'successfulPaymentResponse-html'], ['oOrder' => $oOrder])
                        ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name])
                        ->setTo(Yii::$app->user->identity->email)
                        ->setSubject(Yii::t('app', 'Successful payment response from ') . Yii::$app->name)
                        ->send();
    }


}
