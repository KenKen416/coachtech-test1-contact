# お問い合わせ管理アプリケーション
このアプリケーションは、ユーザーからのお問い合わせ情報を収集・管理できる Laravel 製のシステムです。確認画面・管理画面付きで、バリデーションや認証機能も備えています。

## 環境構築

### Dockerビルド
git clone　リンク
　https://github.com/KenKen416/coachtech-test1-contact.git
docker-compose up -d --build

### Laravel環境構築
docker-compose exec php bash
composer install
cp .env.example .env
※.envのDB設定はdocker-composeに合わせて環境変数を変更
php artisan key:generate
php artisan migrate

## 使用技術
php 7.4.9
laravel 8.83.29
MySQL 8.0.29
phpMyadmin
Docker
## ER図

## URL
開発環境：http://localhost/
phpMyAdmin:http://localhost:8080