<?php

return [
         'index' => 'ContactController/index',
         'login/store' => 'LoginController/store',
         'login' => 'LoginController/index',
         'logout' => 'LoginController/destroy',
         'registration/store' => 'RegisterController/store',
         'registration' => 'RegisterController/create',
         'contacts/edit' => 'ContactController/edit',
         'contacts/create' => 'ContactController/create',
         'contacts/store' => 'ContactController/store',
         'contacts/destroy' => 'ContactController/destroy',
         'contacts/update' => 'ContactController/update',
];