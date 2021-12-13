<?php

Route::get('lazy-logo.svg', 'CP\LogoController')->withoutMiddleware(['statamic.cp.authenticated']);
