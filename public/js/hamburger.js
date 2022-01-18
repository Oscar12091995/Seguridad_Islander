	// Burger menus
	document.addEventListener('DOMContentLoaded', function() {
        // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');
    
            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
    
        // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');
    
            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
    
            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                    }
                    });
                }
            }
        });
        /* burger menus */

        /* alert */
        var alert = document.querySelectorAll('.alert-del');
	        alert.forEach((x)=>{
		    x.addEventListener('click', ()=>x.parentElement.classList.add('hidden'))
	    });
        /* alert */

        /* tabs */
        let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("a");
        console.log(tabTogglers);
        
        tabTogglers.forEach(function(toggler) {
        toggler.addEventListener("click", function(e) {
        e.preventDefault();
        
        let tabName = this.getAttribute("href");
        
        let tabContents = document.querySelector("#tab-contents");
        
        for (let i = 0; i < tabContents.children.length; i++) {
        
        tabTogglers[i].parentElement.classList.remove("border-blue-400", "border-l",  "-mb-px", "opacity-100");  tabContents.children[i].classList.remove("hidden");
        if ("#" + tabContents.children[i].id === tabName) {
        continue;
        }
        tabContents.children[i].classList.add("hidden");
        
        }
        e.target.parentElement.classList.add("border-blue-400", "border-l-4", "-mb-px", "opacity-100");
        });
        });
        
        document.getElementById("default-tab").click();
        /* tabs */
        