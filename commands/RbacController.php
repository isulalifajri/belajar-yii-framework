<?php

namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // Bersihkan RBAC lama
        $auth->removeAll();

        // Role admin
        $admin = $auth->createRole('admin');
        $admin->description = 'Administrator';
        $auth->add($admin);

        // Role staff
        $staff = $auth->createRole('staff');
        $staff->description = 'Staff';
        $auth->add($staff);

        // Permission
        $manageBarber = $auth->createPermission('manageBarber');
        $manageBarber->description = 'Manage barber';
        $auth->add($manageBarber);

        $manageService = $auth->createPermission('manageService');
        $manageService->description = 'Manage service';
        $auth->add($manageService);

        $manageBooking = $auth->createPermission('manageBooking');
        $manageBooking->description = 'Manage booking';
        $auth->add($manageBooking);

        // Admin boleh semuanya
        $auth->addChild($admin, $manageBarber);
        $auth->addChild($admin, $manageService);
        $auth->addChild($admin, $manageBooking);

        // Staff hanya booking
        $auth->addChild($staff, $manageBooking);

        // Assign role ke user admin
        $auth->assign(
            $admin,
            '1' // id user di database
        );

        echo "RBAC berhasil dibuat.\n";
    }
    
    public function actionAssignStaff($userId)
    {
        $auth = Yii::$app->authManager;
    
        $staff = $auth->getRole('staff');
    
        if ($staff === null) {
            $this->stderr("Role staff belum dibuat.\n");
    
            return self::EXIT_CODE_ERROR;
        }
    
        $auth->revokeAll($userId);
    
        $auth->assign($staff, $userId);
    
        $this->stdout(
            "Role staff berhasil diberikan ke user ID {$userId}.\n"
        );
    
        return self::EXIT_CODE_NORMAL;
    }
}
