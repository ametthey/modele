<?php

// Redirect to home page after logout
add_filter('logout_redirect', 'get_home_url');
