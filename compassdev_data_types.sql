INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', null, null, 1, 0, '{"order_column":null,"order_display_column":null}', '2018-10-19 13:34:05', '2018-10-19 13:40:46');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', null, '', '', 1, 0, null, '2018-10-19 13:34:05', '2018-10-19 13:34:05');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', null, '', '', 1, 0, null, '2018-10-19 13:34:05', '2018-10-19 13:34:05');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', null, '', '', 1, 0, null, '2018-10-19 13:34:16', '2018-10-19 13:34:16');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, null, '2018-10-19 13:34:17', '2018-10-19 13:34:17');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', null, '', '', 1, 0, null, '2018-10-19 13:34:18', '2018-10-19 13:34:18');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (7, 'payment_types', 'payment-types', 'Payment Type', 'Payment Types', 'voyager-paperclip', 'App\\Models\\Finance\\Type', null, null, null, 1, 0, '{"order_column":null,"order_display_column":null}', '2018-10-19 13:43:08', '2018-10-19 13:43:08');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (8, 'activities', 'activities', 'Activity', 'Activities', 'voyager-ship', 'App\\Models\\Activity\\Activity', null, null, null, 1, 0, '{"order_column":"id","order_display_column":null}', '2018-10-19 13:53:17', '2018-10-19 13:53:17');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (9, 'activity_details', 'activity-details', 'Activity Detail', 'Activity Details', 'voyager-activity', 'App\\Models\\Activity\\Detail', null, null, null, 1, 0, '{"order_column":"activities_id","order_display_column":"created_at"}', '2018-10-19 14:02:55', '2018-10-19 14:17:45');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (10, 'activity_categories', 'activity-categories', 'Activity Category', 'Activity Categories', 'voyager-logbook', 'App\\Models\\Activity\\Category', null, null, null, 1, 0, '{"order_column":null,"order_display_column":null}', '2018-10-19 14:10:10', '2018-10-19 14:18:22');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (11, 'activity_itineraries', 'activity-itineraries', 'Activity Itinerary', 'Activity Itineraries', 'voyager-window-list', 'App\\Models\\Activity\\Itinerary', null, null, 'List Itinerary', 1, 0, '{"order_column":"activities_id","order_display_column":"activities_id"}', '2018-10-19 14:20:02', '2018-10-19 14:20:58');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (12, 'activity_prices', 'activity-prices', 'Activity Price', 'Activity Prices', 'voyager-buy', 'App\\Models\\Activity\\Price', null, null, 'Pricing for Activity', 1, 0, '{"order_column":"activities_id","order_display_column":"activities_id"}', '2018-10-19 14:23:50', '2018-10-19 14:25:52');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (13, 'blogs', 'blogs', 'Blog', 'Blogs', 'voyager-news', 'App\\Models\\Blog\\Blog', null, null, 'Blog, Travel News', 1, 1, '{"order_column":"id","order_display_column":"title"}', '2018-10-19 14:29:29', '2018-10-19 14:29:29');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (14, 'blog_categories', 'blog-categories', 'Blog Category', 'Blog Categories', 'voyager-logbook', 'App\\Models\\Blog\\Category', null, null, 'Blog Categories', 1, 0, '{"order_column":"id","order_display_column":"name"}', '2018-10-19 14:31:58', '2018-10-19 14:31:58');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (15, 'cities', 'cities', 'City', 'Cities', 'voyager-home', 'App\\Models\\Utility\\City', null, null, 'All Cities in Vietnam and the world', 1, 0, '{"order_column":null,"order_display_column":null}', '2018-10-19 14:50:40', '2018-10-19 14:50:40');
INSERT INTO compassdev.data_types (id, name, slug, display_name_singular, display_name_plural, icon, model_name, policy_name, controller, description, generate_permissions, server_side, details, created_at, updated_at) VALUES (16, 'merchants', 'merchants', 'Merchant', 'Merchants', 'voyager-paper-plane', 'App\\Models\\Finance\\Merchant', null, null, 'Vendor, Supplier', 1, 0, '{"order_column":"company","order_display_column":"id"}', '2018-10-19 14:53:29', '2018-10-19 14:53:29');