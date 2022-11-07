<?php

namespace common\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string $password
 * @property string|null $verification_token
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email'], 'required'],
            [['status'], 'integer'],
            [['username',  'email'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'status' => 'Status',
            'password' => 'Password',
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
