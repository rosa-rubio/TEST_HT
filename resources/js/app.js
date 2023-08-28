require('./bootstrap');

import Alpine from 'alpinejs';
require('./components/HelloReact');
require('./components/Counter');
require('./components/Main')

window.Alpine = Alpine;

Alpine.start();
