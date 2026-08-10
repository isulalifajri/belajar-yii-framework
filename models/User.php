<?php

declare(strict_types=1);

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName(): string
    {
        return 'user';
    }

    /**
     * Cari user berdasarkan ID
     */
    public static function findIdentity($id): static|null
    {
        return static::findOne($id);
    }

    /**
     * Cari user berdasarkan access token
     */
    public static function findIdentityByAccessToken(
        $token,
        $type = null
    ): static|null {
        return static::findOne([
            'access_token' => $token,
        ]);
    }

    /**
     * Cari user berdasarkan username
     */
    public static function findByUsername(
        string $username
    ): static|null {
        return static::findOne([
            'username' => $username,
        ]);
    }

    /**
     * ID user
     */
    public function getId(): int|string
    {
        return $this->id;
    }

    /**
     * Auth key
     */
    public function getAuthKey(): string|null
    {
        return $this->auth_key;
    }

    /**
     * Validasi auth key
     */
    public function validateAuthKey($authKey): bool
    {
        return $this->auth_key === $authKey;
    }

    /**
     * Password hash
     */
    public function getPasswordHash(): string
    {
        return $this->password_hash;
    }

    public function getRole(): string
    {
        return $this->role;
    }
}