<?php exit; ?>
1483559589
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (zhpbb_moderator_cache m) LEFT JOIN zhpbb_users u ON (m.user_id = u.user_id) LEFT JOIN zhpbb_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}