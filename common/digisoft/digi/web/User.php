<?php

/**
 * User is the class for the "user" application component that manages the user authentication status.
 * @author Ahmed Sharaf <sharaf.developer@gmail.com>
 * @copyright Copyright (c) 2015 Digitree
 */

namespace digi\web;

class User extends \yii\web\User {

    /**
     * @inheritdoc
     */
    protected function afterLogin($identity, $cookieBased, $duration) {
        parent::afterLogin($identity, $cookieBased, $duration);
        /**
         * Update user last_login
         */
        $identity->updateAttributes(['last_login' => New \yii\db\Expression('NOW()')]);
    }

    /**
     * @inheritdoc
     * 
     * User with role Asterisk can access any action
     */
    public function can($permissionName, $params = [], $allowCaching = true) {
        return parent::can('Asterisk', $params, $allowCaching) || parent::can($permissionName, $params, $allowCaching);
    }

}
