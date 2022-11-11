

php artisan make:migration create_calchiuhqui_databases_table
php artisan make:migration create_calchiuhqui_tables_table
php artisan make:migration create_calchiuhqui_columns_table
php artisan make:migration create_calchiuhqui_foreign_keys_table
php artisan make:migration create_calchiuhqui_primary_keys_table
php artisan make:migration create_calchiuhqui_column_types_table
php artisan make:migration create_calchiuhqui_schemas_table
php artisan make:migration create_calchiuhqui_foreign_key_colum_table
php artisan make:migration create_calchiuhqui_colum_primary_key_table


php artisan migrate

DROP DATABASE IF EXISTS calchiuhqui_api;
CREATE DATABASE calchiuhqui_api;


php artisan make:model DatabaseModel
php artisan make:model TableModel
php artisan make:model ColumnModel
php artisan make:model ForeignKeyModel
php artisan make:model PrimaryKeyModel
php artisan make:model SchemaModel
php artisan make:model ColumnTypeModel

php artisan make:resource DatabaseResource
php artisan make:resource TableResource
php artisan make:resource ColumnResource
php artisan make:resource ForeignKeyResource
php artisan make:resource PrimaryKeyResource
php artisan make:resource SchemaResource
php artisan make:resource ColumnTypeResource

php artisan make:controller DatabaseController --resource
php artisan make:controller TableController --resource
php artisan make:controller ColumnController --resource
php artisan make:controller ForeignKeyController --resource
php artisan make:controller PrimaryKeyController --resource
php artisan make:controller SchemaController --resource
php artisan make:controller ColumnTypeController --resource
