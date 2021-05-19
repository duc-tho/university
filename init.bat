@echo off
color 02
echo Generate About Model and Repository
echo -----------------------------------
pause
color 07
php artisan krlove:generate:model About --output-path=/Project/WebSaiGonACT/app/Models --table-name=about --namespace=App\Models
php artisan make:repository About
php artisan krlove:generate:model Category --output-path=/Project/WebSaiGonACT/app/Models --table-name=category --namespace=App\Models
php artisan make:repository Category
php artisan krlove:generate:model CollabLogo --output-path=/Project/WebSaiGonACT/app/Models --table-name=collab_logo --namespace=App\Models
php artisan make:repository CollabLogo
php artisan krlove:generate:model Contact --output-path=/Project/WebSaiGonACT/app/Models --table-name=contact --namespace=App\Models
php artisan make:repository Contact
php artisan krlove:generate:model Faculty --output-path=/Project/WebSaiGonACT/app/Models --table-name=faculty --namespace=App\Models
php artisan make:repository Faculty
php artisan krlove:generate:model FooterLink --output-path=/Project/WebSaiGonACT/app/Models --table-name=footer_link --namespace=App\Models
php artisan make:repository FooterLink
php artisan krlove:generate:model FooterLinkCategory --output-path=/Project/WebSaiGonACT/app/Models --table-name=footer_link_category --namespace=App\Models
php artisan make:repository FooterLinkCategory
php artisan krlove:generate:model Image --output-path=/Project/WebSaiGonACT/app/Models --table-name=image --namespace=App\Models
php artisan make:repository Image
php artisan krlove:generate:model ImageCategory --output-path=/Project/WebSaiGonACT/app/Models --table-name=image_category --namespace=App\Models
php artisan make:repository ImageCategory
php artisan krlove:generate:model Menu --output-path=/Project/WebSaiGonACT/app/Models --table-name=menu --namespace=App\Models
php artisan make:repository Menu
php artisan krlove:generate:model News --output-path=/Project/WebSaiGonACT/app/Models --table-name=news --namespace=App\Models
php artisan make:repository News
php artisan krlove:generate:model Permission --output-path=/Project/WebSaiGonACT/app/Models --table-name=permission --namespace=App\Models
php artisan make:repository Permission
php artisan krlove:generate:model PermissionRole --output-path=/Project/WebSaiGonACT/app/Models --table-name=permission_role --namespace=App\Models
php artisan make:repository PermissionRole
php artisan krlove:generate:model Roles --output-path=/Project/WebSaiGonACT/app/Models --table-name=roles --namespace=App\Models
php artisan make:repository Roles
php artisan krlove:generate:model RoleUser --output-path=/Project/WebSaiGonACT/app/Models --table-name=role_user --namespace=App\Models
php artisan make:repository RoleUser
php artisan krlove:generate:model Settings --output-path=/Project/WebSaiGonACT/app/Models --table-name=settings --namespace=App\Models
php artisan make:repository Settings
php artisan krlove:generate:model Slide --output-path=/Project/WebSaiGonACT/app/Models --table-name=slide --namespace=App\Models
php artisan make:repository Slide
php artisan krlove:generate:model Socials --output-path=/Project/WebSaiGonACT/app/Models --table-name=socials --namespace=App\Models
php artisan make:repository Socials
php artisan krlove:generate:model Specialized --output-path=/Project/WebSaiGonACT/app/Models --table-name=specialized --namespace=App\Models
php artisan make:repository Specialized
php artisan krlove:generate:model Statistics --output-path=/Project/WebSaiGonACT/app/Models --table-name=statistics --namespace=App\Models
php artisan make:repository Statistics
php artisan krlove:generate:model Student --output-path=/Project/WebSaiGonACT/app/Models --table-name=student --namespace=App\Models
php artisan make:repository Student
php artisan krlove:generate:model Teacher --output-path=/Project/WebSaiGonACT/app/Models --table-name=teacher --namespace=App\Models
php artisan make:repository Teacher
php artisan krlove:generate:model Users --output-path=/Project/WebSaiGonACT/app/Models --table-name=users --namespace=App\Models
php artisan make:repository Users
echo ---------------------------------------
color 0C
echo Complete!
pause