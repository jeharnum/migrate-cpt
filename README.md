# Move Custom Post Type Content to Another Post Type

You can use a custom PHP script to update the post_type field in the database for all posts of your custom post type. Here’s how:

## Steps:

1 - _Backup Your Site_: Always back up your site and database before making changes.

2 - _Add the Code_: Add the snippet in ```function.php``` to your theme's functions.php file or as part of a custom plugin.

3 - _Run the Function_: Uncomment the move_custom_post_type_to_posts(); line, reload your site, and then comment it out again to prevent rerunning the script.

4 - Verify your content has moved and remove the snippet from your functions.php file.
