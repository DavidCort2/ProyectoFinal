    (function(){
        // Detectar soporte touch
        var isTouch = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
        if(!isTouch) return; // en escritorio no necesitamos este script (hover maneja el dropdown)

        document.addEventListener('DOMContentLoaded', function(){
            var toggles = document.querySelectorAll('.nav-item.dropdown > .nav-link');
            toggles.forEach(function(toggle){
                toggle.addEventListener('click', function(e){
                    e.preventDefault();
                    var parent = toggle.parentElement;
                    parent.classList.toggle('show');
                    var menu = parent.querySelector('.dropdown-menu');
                    if(parent.classList.contains('show')){
                        menu.classList.add('show');
                    } else {
                        menu.classList.remove('show');
                    }
                });
            });
        });
    })();