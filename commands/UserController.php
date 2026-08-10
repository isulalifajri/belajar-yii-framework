<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use app\models\User;

class UserController extends Controller
{
    public function actionCreate($username, $password)
    {
        if (User::findByUsername($username)) {

            $this->stderr(
                "Username sudah digunakan.\n"
            );

            return self::EXIT_CODE_ERROR;
        }

        $user = new User();

        $user->username = $username;

        $user->setPassword($password);

        $user->auth_key = Yii::$app->security
            ->generateRandomString(32);

        if ($user->save()) {

            $this->stdout(
                "User berhasil dibuat.\n"
            );

            return self::EXIT_CODE_NORMAL;
        }

        $this->stderr(
            "Gagal membuat user.\n"
        );

        print_r($user->errors);

        return self::EXIT_CODE_ERROR;
    }
}