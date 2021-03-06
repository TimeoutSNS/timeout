<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\installer\forms;

use Yii;

/**
 * DatabaseForm holds all required database settings.
 *
 * @since 0.5
 */
class DatabaseForm extends \yii\base\Model
{

    /**
     * @var string hostname
     */
    public $hostname;

    /**
     * @var string username
     */
    public $username;

    /**
     * @var string password
     */
    public $password;

    /**
     * @var string database name
     */
    public $database;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hostname', 'username', 'database'], 'required'],
            ['password', 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hostname' => Yii::t('InstallerModule.base', 'Hostname'),
            'username' => Yii::t('InstallerModule.base', 'Username'),
            'password' => Yii::t('InstallerModule.base', 'Password'),
            'database' => Yii::t('InstallerModule.base', 'Name of Database'),
        ];
    }

}
