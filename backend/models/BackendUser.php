<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "backend_user".
 *
 * @property int $id
 * @property string $Name
 * @property string $Username
 * @property string $Password
 */
class BackendUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'backend_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Username', 'Password'], 'required'],
            [['Name', 'Username', 'Password'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
            'Username' => 'Username',
            'Password' => 'Password',
        ];
    }
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        $result = static::findOne(['accessToken'=>$token]);
        return new static($result);
    }
    public static function findByUsername($Username)
    {
        $result = self::find()->where(['username'=>$Username])->one();
        return new static($result);
    }
    public function getId()
    {
        return $this->id;
    }
    public function getAuthKey()
    {
        
    }
    public function validateAuthKey($authKey)
    {
        return $this->authkey === $authKey;
    }
    public function validatePassword($Password){
        return $this->password === $Password;
    }
}
