require('./bootstrap');

import Alpine from 'alpinejs';
require('./components/HelloReact');
require('./components/Counter');

window.Alpine = Alpine;

Alpine.start();
