# belajar YII 2

**install YII2**

install : `composer create-project yiisoft/yii2-app-basic barbershop`

jalankan : `php yii serve --port=8282`

**buat tabel di yii2**

jalankan: 
````
php yii migrate/create create_barber_table
php yii migrate/create create_user_table
````

lalu: `php yii migrate`

membuat user dengan terminal
````
php yii user/create admin admin123
````